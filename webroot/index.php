<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Installation réussie</title>
    <link rel="icon" type="image/png" href="img/icon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-blue: #0A192F;
            --secondary-blue: #007bff;
            --text-light-gray: #E0E0E0;
            --text-dark-gray: #A0A0A0;
            --card-bg: #1A202C;
            --border-color: #334155;

            --glow-color: var(--secondary-blue);
            --glow-spread: 0 0 15px rgba(0, 123, 255, 0.7);
            --gradient-angle: 45deg;
        }

        body {
            margin: 0;
            font-family: 'Montserrat', sans-serif;
            background: var(--primary-blue);
            color: var(--text-light-gray);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            text-align: center;
            padding: 20px;
        }

        .background-gradient {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(var(--gradient-angle), var(--primary-blue), #0f1c3f);
            opacity: 0.8;
            z-index: 0;
            animation: gradient-anim 10s ease infinite alternate;
            background-size: 200% 200%;
        }

        @keyframes gradient-anim {
            0% { background-position: 0% 50%; }
            100% { background-position: 100% 50%; }
        }

        .container {
            background: var(--card-bg);
            padding: 40px;
            border-radius: 15px;
            max-width: 700px;
            width: 100%;
            z-index: 1;
            border: 1px solid var(--border-color);
        }

        h1 {
            font-size: 2.5em;
            color: #fff;
            text-shadow: var(--glow-spread);
        }

        p {
            font-size: 1.2em;
            margin: 20px 0;
        }

        .status {
            font-size: 1.4em;
            color: #00ffcc;
            margin: 20px 0;
            text-shadow: 0 0 10px #00ffcc;
        }

        .button {
            display: inline-block;
            padding: 15px 30px;
            background: linear-gradient(45deg, var(--secondary-blue), #0056b3);
            color: #fff;
            text-decoration: none;
            border-radius: 50px;
            font-weight: bold;
            margin-top: 20px;
        }

        footer {
            margin-top: 30px;
            font-size: 0.9em;
            color: var(--text-dark-gray);
        }
    </style>
</head>
<body>
    <div class="background-gradient"></div>

    <div class="container">
        <h1>Installation réussie !</h1>

        <p>Votre serveur web est maintenant opérationnel.</p>

        <div class="status">
            ✔ Nginx fonctionnel<br>
            ✔ PHP actif<br>
            ✔ Environnement prêt
        </div>

        <a href="#" class="button">Commencer</a>

        <footer>
            AMIHOST
        </footer>
    </div>

    <script>
        let angle = 45;
        let direction = 1;

        setInterval(() => {
            const root = document.documentElement;
            if (angle >= 315) direction = -1;
            if (angle <= 45) direction = 1;
            angle += direction * 0.5;
            root.style.setProperty('--gradient-angle', `${angle}deg`);
        }, 50);
    </script>
</body>
</html>