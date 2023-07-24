<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to New NativePHP</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f1f1f1;
        }

        .logo-container {
            text-align: center;
        }

        .logo {
            width: 50%;
            height: 50%;
        }
    </style>
</head>
<body>
    <div class="logo-container">
        <img src="{{ asset('https://nativephp.com/logo.svg') }}" alt="NativePHP Logo" class="logo">
        <h1>WELCOME TO NEW NATIVEPHP</h1>
    </div>
</body>
</html>
