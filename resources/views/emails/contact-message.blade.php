<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,100..900;1,100..900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap">

</head>

<body>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Inter Tight', sans-serif;
            background-image: url("@images/hero-background.png"),
                linear-gradient(180deg,
                    rgba(8, 10, 12, 1) 100vh,
                    rgba(16, 20, 24, 1) 100%);
            background-size: cover;
            background-position: top;
            color: #fef6ff;
        }

        .email {
            padding: 24px;
            color: #fef6ff;
            max-width: 600px;
            margin: 0 auto;
        }

        .email h1 {
            font-size: 48px;
            font-weight: bold;
            line-height: 120%;
            text-align: left;
            background-image: linear-gradient(to right, #fef6ff 40%, #808080 60%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin: 0;
            padding: 0;
        }

        .email h3 {
            font-size: 24px;
            font-weight: bold;
            line-height: 120%;
            margin-top: 12px;
            margin-bottom: 24px;
            color: #cbc2cc;
        }

        .email .info {
            margin-bottom: 16px;
            font-size: 16px;
            line-height: 160%;
        }

        .email .info span {
            display: block;
            font-size: 20px;
            font-weight: bold;
            line-height: 120%;
            color: #cbc2cc;
            margin-bottom: 4px;
        }

        .email .services {
            margin-top: 20px;
        }

        .email ul {
            padding-left: 24px;
            list-style-type: disc;
        }

        .email li {
            margin-bottom: 8px;
        }

        .email .footer {
            text-align: center;
            font-size: 14px;
            color: #808080;
            padding-top: 24px;
            margin-top: 32px;
        }
    </style>

    <div class="email">
        <div>
            <div>
                <h1>ByteByte Studio</h1>
                <h3>Nuevo Mensaje de Contacto</h3>
            </div>
        </div>

        <div>
            <div class="info">
                <span>Nombre:</span>
                {{ $name }} {{ $lastName }}
            </div>

            <div class="info">
                <span>Empresa:</span>
                {{ $company }}
            </div>

            @if($email)
            <div class="info">
                <span>Correo:</span>
                {{ $email }}
            </div>
            @endif

            <div class="info">
                <span>Teléfono:</span>
                {{ $phone }}
            </div>

            <div class="info">
                <span>Mensaje:</span>
                <div>{{ $contactMessage }}</div>
            </div>

            @if(count($services) > 0)
            <div class="info services">
                <span>Servicios interesados:</span>
                <ul>
                    @foreach($services as $service)
                    <li>{{ $service }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>

        <div class="footer">
            <p>Este correo fue generado automáticamente. Por favor no responda directamente a este mensaje.</p>
        </div>
    </div>

</body>

</html>