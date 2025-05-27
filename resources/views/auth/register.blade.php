<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - PIONS | Pamijahan IDN Organization Nimbly Student</title>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    @vite('resources/css/app.css')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        *{
            font-family: 'poppins', serif;
        }
    </style>
</head>
<body>
    <section class="w-full h-screen bg-blue-800 relative flex justify-between items-center">
        <div class="w-full h-auto absolute top-0 flex justify-center items-center">
            <img src="{{ asset('images/Ellipse.svg') }}" class="w-150 h-auto z-0">
        </div>
        <div class="w-1/2 h-screen px-15 py-10 bg-transparent flex flex-col justify-start items-start z-10">
            <img src="{{ asset('images/logo_pions.svg') }}" class="w-20 h-auto max-w-full mb-40">
            <div class="w-full h-auto flex flex-col justify-center items-start">
                <h1 class="text-7xl font-medium text-white capitalize mb-10">Welcome to <br>Pions</h1>
                <p class="text-lg font-normal text-white">From Student to Leader - Start with PIONS</p>
            </div>
        </div>
        <div class="w-160 h-screen px-12 py-10 bg-white border-l-3 border-l-gray-300 flex flex-col justify-center items-start z-10">
            <h1 class="text-5xl text-blue-800 font-medium capitalize mb-12">sign up</h1>
            <form method="POST" action="{{ route('register') }}" class="w-full h-auto gap-3 flex flex-col justify-center items-start">
                @csrf
                <div class="w-full h-auto gap-1 flex flex-col justify-center items-start">
                    <h2 class="text-sm text-cyan-900 font-medium capitalize">name</h2>
                    <input type="text" name="name" id="name" class="w-full h-10 px-4 bg-white border-2 border-cyan-900 text-cyan-900 text-sm rounded-lg focus:outline-none" placeholder="Enter your name" required>
                </div>

                <div class="w-full h-auto gap-1 flex flex-col justify-center items-start">
                    <h2 class="text-sm text-cyan-900 font-medium capitalize">email</h2>
                    <input type="email" name="email" id="email" class="w-full h-10 px-4 bg-white border-2 border-cyan-900 text-cyan-900 text-sm rounded-lg focus:outline-none" placeholder="Enter your email" required>
                </div>

                <div class="w-full h-auto gap-1 flex flex-col justify-center items-start">
                    <h2 class="text-sm text-cyan-900 font-medium capitalize">password</h2>
                    <input type="password" name="password" id="password" class="w-full h-10 px-4 bg-white border-2 border-cyan-900 text-cyan-900 text-sm rounded-lg focus:outline-none" placeholder="Enter your password" required>
                </div>

                <div class="w-full h-auto gap-1 flex flex-col justify-center items-start">
                    <h2 class="text-sm text-cyan-900 font-medium capitalize">confirm password</h2>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="w-full h-10 px-4 bg-white border-2 border-cyan-900 text-cyan-900 text-sm rounded-lg focus:outline-none" placeholder="Confirm your password" required>
                </div>

                {{-- <div class="w-full h-auto px-3 mt-3 gap-3 flex flex-row-reverse justify-center items-start">
                    <h2 class="text-md text-cyan-900 font-medium capitalize">I've read and agree with Terms of Service and our Privacy Policy</h2>
                    <input type="checkbox" name="" id="password2" class="h-4 w-4 mt-1 focus:outline-none focus:bg-cyan-900" placeholder="Confirm your password" required>
                </div> --}}

                <div class="w-full h-auto mt-3 px-3 gap-3 flex flex-col justify-center items-center">
                    <button type="submit" class="w-full h-auto mb-1 py-3 text-md text-white capitalize bg-blue-800 rounded-xl border-2 border-blue-800 hover:bg-transparent hover:text-blue-800 transition cursor-pointer">sign up</button>
                    <p class="text-black text-sm">already have an account? <a href="/login" class="text-blue-800 text-sm font-medium decoration-0 capitalize">sign in</a></p>
                </div>
            </form>
        </div>
    </section>
</body>
</html>