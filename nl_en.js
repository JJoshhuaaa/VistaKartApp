const translations = {
    en: {
        heading: "Karting Prices",
        firstPlace: "1st Place",
        secondPlace: "2nd Place",
        thirdPlace: "3rd Place",
        firstPrize: "Grand prize: 1000 euros in cash and the championship cup",
        firstPrizeText: "The winner of the tournament will receive the main prize of 1000 euros and the champion's cup, which symbolizes your victory and skills on the track. This cup will be a lasting memory and can be proudly displayed. In addition, the winner will have the opportunity to participate in VIP karting events in the future. The first place prize is not only a financial reward, but also a recognition of your skills and speed.",
        secondPrize: "Prize: 500 euros in cash and a silver medal",
        secondPrizeText: "The second place will receive 500 euros and a silver medal. This award is a testament to your excellent skills and your desire to compete at a high level. The silver medal is a sign that you have fought to the limit and achieved remarkable results by being among the best riders of the tournament. This award is a great confirmation of your ability and excellent form during the competition.",
        thirdPrize: "Prize: 250 euros in cash and a bronze medal",
        thirdPrizeText: "The prize for third place consists of 250 euros and a bronze medal. This is a reward for those who have shown impressive results during the tournament, overcoming difficult races and strong opponents. The bronze medal is a symbol of perseverance and achieving high results, which you can proudly show to your friends and family. This prize is a testament to your extraordinary efforts and your drive for victory.",
        footer: "© 2024 Vista Karting Area",
        viewPrize: "View Prize",
    },
    nl: {
        heading: "Karting Prijzen",
        firstPlace: "1e plaats",
        secondPlace: "2e plaats",
        thirdPlace: "3e plaats",
        firstPrize: "Hoofdprijs: 1000 euro in contanten en de kampioensbeker",
        firstPrizeText: "De winnaar van het toernooi ontvangt de hoofdprijs van 1000 euro en de kampioensbeker, die uw overwinning en vaardigheden op de baan symboliseert. Deze beker wordt een blijvende herinnering en kan met trots worden getoond. Daarnaast krijgt de winnaar de mogelijkheid om deel te nemen aan VIP-karting evenementen in de toekomst. De prijs voor de eerste plaats is niet alleen een financiële beloning, maar ook een erkenning van uw vaardigheden en snelheid.",
        secondPrize: "Prijs: 500 euro in contanten en een zilveren medaille",
        secondPrizeText: "De tweede plaats ontvangt 500 euro en een zilveren medaille. Deze prijs getuigt van uw uitstekende vaardigheden en uw verlangen om op hoog niveau te concurreren. De zilveren medaille is een teken dat u tot het uiterste heeft gestreden en opmerkelijke resultaten heeft behaald door tot de beste rijders van het toernooi te behoren. Deze prijs is een geweldige bevestiging van uw bekwaamheid en uitstekende vorm tijdens de competitie.",
        thirdPrize: "Prijs: 250 euro in contanten en een bronzen medaille",
        thirdPrizeText: "De prijs voor de derde plaats bestaat uit 250 euro en een bronzen medaille. Dit is een beloning voor degenen die indrukwekkende resultaten hebben laten zien tijdens het toernooi, waarbij ze moeilijke races en sterke tegenstanders hebben overwonnen. De bronzen medaille is een symbool van doorzettingsvermogen en het behalen van hoge resultaten, die u met trots aan uw vrienden en familie kunt laten zien. Deze prijs is een bewijs van uw buitengewone inspanningen en uw streven naar overwinning.",
        footer: "© 2024 Vista Karting Area",
        viewPrize: "Kijk naar de prijs",
    }
};
function setLanguage(lang) {
    document.querySelector('h1').textContent = translations[lang].heading;
    document.querySelectorAll('.card h2')[0].textContent = translations[lang].secondPlace;
    document.querySelectorAll('.card h2')[1].textContent = translations[lang].firstPlace;
    document.querySelectorAll('.card h2')[2].textContent = translations[lang].thirdPlace;

    document.querySelectorAll('.modal-content h2')[0].textContent = translations[lang].firstPrize;
    document.querySelectorAll('.modal-content p')[0].textContent = translations[lang].firstPrizeText;
    document.querySelectorAll('.modal-content h2')[1].textContent = translations[lang].secondPrize;
    document.querySelectorAll('.modal-content p')[1].textContent = translations[lang].secondPrizeText;
    document.querySelectorAll('.modal-content h2')[2].textContent = translations[lang].thirdPrize;
    document.querySelectorAll('.modal-content p')[2].textContent = translations[lang].thirdPrizeText;

    document.querySelectorAll('.card button').forEach(button => {
        button.textContent = translations[lang].viewPrize;
    });

    document.querySelector('footer p').textContent = translations[lang].footer;
}

document.querySelector('.en').addEventListener('click', function (event) {
    event.preventDefault();
    setLanguage('en');
});

document.querySelector('.nl').addEventListener('click', function (event) {
    event.preventDefault(); 
    setLanguage('nl');
});

document.addEventListener('DOMContentLoaded', function () {
    const userLang = navigator.language || navigator.userLanguage;
    if (userLang.startsWith('nl')) {
        setLanguage('nl');
    } else {
        setLanguage('en');
    }
});
