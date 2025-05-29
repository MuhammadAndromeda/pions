<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - PIONS | Pamijahan IDN Organization Nimbly Student</title>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    @vite('resources/css/app.css')

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        *{
            font-family: 'plus jakarta sans', 'nohemi';
        }
    </style>
</head>
<body>
    <section class="w-full h-screen bg-blue-800 relative flex flex-row-reverse justify-between items-center">
        <div class="w-full h-auto absolute top-0 flex justify-center items-center">
            <img src="{{ asset('images/Ellipse.svg') }}" class="w-150 h-auto z-0">
        </div>
        <div class="w-1/2 h-screen px-15 py-10 bg-transparent flex flex-col justify-start items-end z-10">
            <img src="{{ asset('images/logo_pions.svg') }}" class="w-20 h-auto max-w-full mb-40">
            <div class="w-full h-auto flex flex-col justify-center items-end">
                <h1 class="text-7xl font-medium text-white text-right capitalize mb-10">Welcome <br>back to Pions</h1>
                <p class="text-lg font-normal text-white text-right capitalize">sign in. stay active. stay inspired</p>
            </div>
        </div>
        <div class="w-160 h-screen px-12 py-10 bg-white border-l-3 border-l-gray-300 flex flex-col justify-center items-start z-10">
            <h1 class="text-5xl text-blue-800 font-medium capitalize mb-12">sign in</h1>
            <form method="post" action="/login" class="w-full h-auto gap-5 flex flex-col justify-center items-start">

                @csrf

                <div class="w-full h-auto gap-1 flex flex-col justify-center items-start">
                    <h2 class="text-sm text-cyan-900 font-medium capitalize">email</h2>
                    <input type="email" name="email" id="email" class="w-full h-12 px-4 bg-white border-2 border-cyan-900 text-cyan-900 text-sm rounded-lg focus:outline-none" placeholder="Enter your email" required>
                </div>

                <div class="w-full h-auto gap-1 flex flex-col justify-center items-start">
                    <h2 class="text-sm text-cyan-900 font-medium capitalize">password</h2>
                    <input type="password" name="password" id="password" class="w-full h-12 px-4 bg-white border-2 border-cyan-900 text-cyan-900 text-sm rounded-lg focus:outline-none" placeholder="Enter your password" required>
                </div>

                <div class="w-full h-auto mt-8 gap-3 flex flex-col justify-center items-center">
                    <button type="submit" class="w-full h-auto mb-1 py-3 text-md text-white capitalize bg-blue-800 rounded-xl border-2 border-blue-800 hover:bg-transparent hover:text-blue-800 transition cursor-pointer">sign in</button>
                    <p class="text-black text-sm">Don't have an account? <a href="/register" class="text-blue-800 text-sm font-medium decoration-0 capitalize">sign up</a></p>
                </div>
            </form>
        </div>
    </section>
</body>
</html>