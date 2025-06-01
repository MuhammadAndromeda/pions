<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} | Pamijahan IDN Organization Nimbly Student</title>

    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />

    @vite('resources/css/app.css')

    <link rel="shortcut icon" href="{{ asset('images/logo_pions.svg') }}" type="image/x-icon">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/all.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-thin.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-solid.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-regular.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-light.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        *{
            font-family: 'plus jakarta sans', serif;
        }

        .font-nohemi{
            font-family: 'nohemi', 'plus jakarta sans';
        }

        .scrollbar-hidden::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>
<body class="h-full">
    <div class="min-h-full">

        @include('partials.navbar')

        <main>
            @yield('content')
        </main>
        
        @include('partials.footer')
    </div>
</body>
</html>