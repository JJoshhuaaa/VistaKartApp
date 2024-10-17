(() => {
    let draggingElement = null;
    let inschrijving = [];
    let poules = [];
    const openEntryTemplate = document.getElementById('open-entry-template');
    const consumedEntryTemplate = document.getElementById('consumed-entry-template');
    const pouleEntriesElement = document.getElementById('poule-entries');
    const pouleTemplate = document.getElementById('poule-template');
    const entriesInschrijvingen = document.getElementById('inschrijvingen-entries');
    const inschrijvingTemplate = document.getElementById('inschriving-template');

    (async () => {

        addEventListener('mouseup', dragRelease);
        addEventListener('mousemove', mouseMove);

        inschrijvingen = await (await fetch('/adminpanel/rest.php?path=inschrijvingen')).json();
        poules = await (await fetch('/adminpanel/rest.php?path=poules')).json();

        createPoules();
    })();

    function createPoules() {
        pouleEntriesElement.innerHTML = '';

        for (let poule of poules) {
            createPoule(poule);
        }
        entriesInschrijvingen.innerHTML = '';
        for (let inschrijving of inschrijvingen) {
            if (poules.find(x => JSON.parse(x.members).includes(parseInt(inschrijving.id))))
                continue;

            const content = inschrijvingTemplate.content.cloneNode(true);
            content.querySelector('[for="naam"]').textContent = `${inschrijving.naam} ${inschrijving.achternaam}`;
            const dragger = content.querySelector('[class="dragger"]');
            dragger.addEventListener('mousedown', dragBegin);
            const elem = entriesInschrijvingen.appendChild(content);

            dragger.parentNode.setAttribute('user', inschrijving.id);
        }
    }

    function createPoule(poule) {
        const members = JSON.parse(poule.members);


        let entryElem = document.createElement('div');
        const content = pouleTemplate.content.cloneNode(true);
        entryElem.style = pouleTemplate.getAttribute('style');
        entryElem.className = pouleTemplate.getAttribute('class');
        const pouleNameElem = content.querySelector('[for="naam"]');
        pouleNameElem.textContent = `${poule.naam}`;

        pouleNameElem.addEventListener('keydown', async event => {
            if(event.keyCode !== 13)
                return;
            event.preventDefault();
            document.activeElement.blur();

            const req = await fetch('/adminpanel/rest.php?path=poule_rename', {
                method: 'POST',
                body: JSON.stringify({ name: pouleNameElem.textContent, id: parseInt(poule.id) })
            });
            const body = await req.json();
            if (body.error)
                return alert(body.error);
            poules = body;

            createPoules();
        });

        content.querySelector('[for="count"]').textContent = `(${members.length}/4)`;

        const entryList = content.querySelector('[for="entry-list"');

        for (let i = 0; i < 4; i++) {
            if (members[i]) {
                const elem = consumedEntryTemplate.content.cloneNode(true);
                const inschrijving = inschrijvingen.find(x => parseInt(x.id) === members[i]);
                elem.querySelector('[for="naam"]').textContent = `${inschrijving.naam} ${inschrijving.achternaam}`;
                elem.querySelector('[for="btn-remove"]').addEventListener('click', async click => {
                    const newMembers = JSON.stringify(JSON.parse(poule.members).filter(x => parseInt(x) !== parseInt(inschrijving.id)));

                    const req = await fetch('/adminpanel/rest.php?path=poule_update', {
                        method: 'POST',
                        body: JSON.stringify({ members: newMembers, id: parseInt(poule.id) })
                    });
                    const body = await req.json();
                    if (body.error)
                        return alert(body.error);
                    poules = body;

                    createPoules();
                });
                const instance = entryList.appendChild(elem);
            } else entryList.appendChild(openEntryTemplate.content.cloneNode(true));
        }

        entryElem.append(content);
        entryElem.setAttribute('poule', poules.indexOf(poule));
        entryElem.querySelector('[for="delete-poule"]').addEventListener('click', async _ => {
            const poulSize = JSON.parse(poule.members).length;
            if(!confirm(`verwijder poule "${poule.naam}"? ${poulSize} deelnemer${(poulSize !== 1 ? 's' : '')} moet${(poulSize !== 1 ? 'en' : '')} dan opnieuw worden ingedeelt.`))
                return;
            const req = await fetch('/adminpanel/rest.php?path=poule_delete', {
                method: 'POST',
                body: JSON.stringify({ id: parseInt(poule.id) })
            });
            const body = await req.json();
            if (body.error)
                return alert(body.error);
            poules = body;

            createPoules();
        });

        pouleEntriesElement.append(entryElem);
    }

    window.newPoule = async() => {
        let name = prompt('poule naam');
        if (!name) return;
        const r = await fetch('/adminpanel/rest.php?path=poule_create', {
            method: 'POST',
            body: JSON.stringify({ naam: name })
        });
        const body = await r.json();
        if (body.error)
            return alert(body.error);
        poules = body;
        createPoules();
    }

    function dragBegin(event) {
        document.body.style.userSelect = 'none';

        draggingElement = event.target.parentNode;
        draggingElement.style.width = draggingElement.offsetWidth + 'px';
        draggingElement.style.height = draggingElement.offsetHeight + 'px';
        draggingElement.style.left = draggingElement.offsetLeft + 'px';
        draggingElement.style.top = draggingElement.offsetTop + 'px';
        draggingElement.style.zIndex = '10000';

        draggingElement.style.position = 'absolute';
    }

    async function dragRelease(event) {
        if (!draggingElement)
            return;


        for (let elem of pouleEntriesElement.childNodes) {
            if (!(event.clientX >= elem.offsetLeft &&
                event.clientX <= elem.offsetLeft + elem.offsetWidth &&
                event.clientY >= elem.offsetTop &&
                event.clientY <= elem.offsetTop + elem.offsetHeight))
                continue;

            const poule = poules[parseInt(elem.getAttribute('poule'))];

            const newMembers = JSON.stringify([...JSON.parse(poule.members), parseInt(event.target.parentNode.getAttribute('user'))]);

            const req = await fetch('/adminpanel/rest.php?path=poule_update', {
                method: 'POST',
                body: JSON.stringify({ members: newMembers, id: parseInt(poule.id) })
            });
            const body = await req.json();
            if (body.error) {
                alert(body.error);
                break;
            }
            poules = body;

            createPoules();

            break;
        }


        document.body.style.userSelect = null;

        draggingElement.style.position = 'relative';

        draggingElement.style.width = null;
        draggingElement.style.height = null;

        draggingElement.style.top = null;
        draggingElement.style.left = null;
        draggingElement.style.zIndex = null;

        draggingElement = null;
    }

    function mouseMove(event) {
        if (!draggingElement)
            return;
        let delta = [event.movementX, event.movementY];

        let currX = parseInt(draggingElement.style.left);
        if (currX !== currX)
            currX = 0;
        let currY = parseInt(draggingElement.style.top);
        if (currY !== currY)
            currY = 0;

        draggingElement.style.left = (currX + delta[0]) + 'px';
        draggingElement.style.top = (currY + delta[1]) + 'px';
    }
})();