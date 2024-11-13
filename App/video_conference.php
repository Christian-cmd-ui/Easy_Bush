<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vidéoconférence DEJESUS19</title>
    <style>
        body { 
            margin: 0; 
            height: 100vh; 
            display: flex; 
            justify-content: center; 
            align-items: center; 
            background-color: #f0f0f0; 
        }
        #jitsi-meet {
            width: 100%; 
            height: 100%; 
        }
    </style>
</head>
<body>
    <div id="jitsi-meet"></div>

    <script src='https://meet.jit.si/external_api.js'></script>
    <script>
        const domain = 'meet.jit.si';
        const options = {
            roomName: 'NomDeVotreSalle',  
            width: '100%',
            height: '100%',
            parentNode: document.querySelector('#jitsi-meet'),
            configOverwrite: {},
            interfaceConfigOverwrite: {}
        };
        const api = new JitsiMeetExternalAPI(domain, options);
    </script>
</body>
</html>