<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meldingen</title>
    <script>
        async function fetchMeldingen() {
            try {
                const response = await fetch('/VistaKartApp/adminpanel/rest/get.php?path=meldingen'); // Adjust the path
                if (!response.ok) {
                    throw new Error('Netwerk fout: ' + response.statusText);
                }
                const meldingen = await response.json();
                console.log(meldingen); // Debug: log the received notifications
                displayMeldingen(meldingen);
            } catch (error) {
                console.error('Er is een probleem met het ophalen van de meldingen:', error);
                document.getElementById('meldingen').innerHTML = '<p>Error fetching meldingen. Check console for details.</p>';
            }
        }

        function displayMeldingen(meldingen) {
            const meldingenContainer = document.getElementById('meldingen');
            meldingenContainer.innerHTML = ''; // Clear the container

            if (meldingen.error) {
                meldingenContainer.innerHTML = '<p>' + meldingen.error + '</p>';
                return;
            }

            if (meldingen.length === 0) {
                meldingenContainer.innerHTML = '<p>Geen meldingen gevonden.</p>';
                return;
            }

            meldingen.forEach(melding => {
                const meldingElement = document.createElement('div');
                meldingElement.classList.add('melding');
                meldingElement.innerHTML = `
                    <strong>${melding.melding}</strong> - ${melding.created_at}<br>
                    Van: ${melding.name} (${melding.email})
                `;
                meldingenContainer.appendChild(meldingElement);
            });
        }

        // Fetch notifications on page load
        window.onload = fetchMeldingen;
    </script>
</head>
<body>
    <h1>Meldingen</h1>
    <div id="meldingen">
        <!-- Meldingen worden hier weergegeven -->
    </div>
</body>
</html>
