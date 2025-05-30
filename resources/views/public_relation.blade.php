@extends('layouts.main')
@section('content')

    <main class="w-full h-auto px-5 py-15 relative overflow-hidden flex flex-col justify-center items-center">
        <header class="w-full h-auto gap-10 flex flex-col md:flex-row justify-center items-center">
            <div class="min-w-90 max-w-90 h-auto p-3 border-4 border-black bg-white rounded-3xl relative overflow-hidden flex flex-col justify-center items-center">
                <img src="{{ asset('/imagev.png') }}" alt="" class="w-80 h-auto max-w-full mb-5">
                <div class="w-full h-auto px-4 mb-5 flex justify-between items-center">
                    <div class="w-full h-auto flex flex-col justify-center items-start">
                        <h1 class="text-blue-800 text-2xl capitalize font-black mb-3">leader of public relation pions</h1>
                        <p class="text-blue-800 text-sm capitalize font-bold">SMK IDN boarding school bogor</p>
                    </div>
                    <img src="{{ asset('/logo_pions_colored.svg') }}" alt="" class="w-13 h-auto max-w-full">
                </div>
            </div>

            <div class="w-auto h-auto flex flex-col justify-center items-start">
                <h1 class="w-full md:w-105 text-white text-5xl md:text-6xl text-center md:text-left font-black font-nohemi capitalize mb-3">tubagus valentino d. a.</h1>
                <p class="w-full md:w-95 text-white text-base text-justify md:text-left font-medium capitalize leading-7 mb-8">Public Relation in PIONS is the security division. We help keep everything safe, organized, and running smoothly in every event and activity.</p>
                <div class="w-auto h-auto mb-5 gap-5 flex justify-start items-center">
                    <a href="#" class="w-25 h-25 text-xs font-nohemi font-medium tracking-wider bg-emerald-600 relative overflow-hidden gap-2 flex flex-col justify-center items-center"><i class="fa-brands fa-instagram text-white text-5xl"></i>@Tubagusva</a>
                    <a href="#" class="w-25 h-25 text-xs font-nohemi font-medium tracking-wider bg-purple-700 relative overflow-hidden gap-2 flex flex-col justify-center items-center"><i class="fa-brands fa-facebook text-white text-5xl"></i>@Tubagusva</a>
                    <a href="#" class="w-25 h-25 text-xs font-nohemi font-medium tracking-wider bg-pink-600 relative overflow-hidden gap-2 flex flex-col justify-center items-center"><i class="fa-brands fa-linkedin text-white text-5xl"></i>@Tubagusva</a>
                </div>
                <p class="text-white text-xl text-left font-medium font-nohemi capitalize leading-7 tracking-wide mb-5">let's connect!</p>
            </div>
        </header>    
    </main>

    <section class="w-full h-auto py-10 relative overflow-hidden flex flex-col justify-center items-center">
        <div class="w-full h-auto mb-10 flex justify-center items-center">
            <h1 class="w-max text-white text-4xl md:text-6xl text-center font-nohemi font-black tracking-wide">Meet Our <span class="font-nohemi font-medium">Public <br>Relation</span> Team</h1>
        </div>
        
        <section class="w-full h-auto px-5 md:px-15 bg-blue-900 gap-6 relative overflow-hidden flex md:grid flex-col md:grid-cols-2 justify-center items-center">

            <div class="w-max h-auto px-3 md:px-5 py-5 bg-white border-2 border-black rounded-xl gap-5 flex justify-center items-center">
                <img src="{{ asset('/imagea.png') }}" class="w-30 md:w-60 h-auto max-w-full">
                <div class="w-40 md:w-70 h-auto flex flex-col justify-center items-start">
                    <h1 class="text-blue-800 font-bold text-lg md:text-3xl text-left capitalize mb-1">faqih rafadinata idris</h1>
                    <p class="text-blue-800 font-bold text-xs md:text-base text-left capitalize mb-2 md:mb-5">Member of Public Relation Pions</p>
                    <div class="w-auto h-auto gap-2 md:gap-5 flex justify-start items-center">
                        <a href="#" class="w-10 md:w-18 h-10 md:h-18 p-3 bg-emerald-600 flex justify-center items-center"><i class="fa-brands fa-instagram text-white text-2xl md:text-4xl"></i></a>
                        <a href="#" class="w-10 md:w-18 h-10 md:h-18 p-3 bg-purple-700 flex justify-center items-center"><i class="fa-brands fa-facebook text-white text-2xl md:text-4xl"></i></a>
                        <a href="#" class="w-10 md:w-18 h-10 md:h-18 p-3 bg-pink-600 flex justify-center items-center"><i class="fa-brands fa-linkedin text-white text-2xl md:text-4xl"></i></a>
                    </div>
                </div>
            </div>

            <div class="w-max h-auto px-3 md:px-5 py-5 bg-white border-2 border-black rounded-xl gap-5 flex justify-center items-center">
                <img src="{{ asset('/imagec.png') }}" class="w-30 md:w-60 h-auto max-w-full">
                <div class="w-40 md:w-70 h-auto flex flex-col justify-center items-start">
                    <h1 class="text-blue-800 font-bold text-lg md:text-3xl text-left capitalize mb-1">chaerul alwi gibran</h1>
                    <p class="text-blue-800 font-bold text-xs md:text-base text-left capitalize mb-2 md:mb-5">Member of Public Relation Pions</p>
                    <div class="w-auto h-auto gap-2 md:gap-5 flex justify-start items-center">
                        <a href="#" class="w-10 md:w-18 h-10 md:h-18 p-3 bg-emerald-600 flex justify-center items-center"><i class="fa-brands fa-instagram text-white text-2xl md:text-4xl"></i></a>
                        <a href="#" class="w-10 md:w-18 h-10 md:h-18 p-3 bg-purple-700 flex justify-center items-center"><i class="fa-brands fa-facebook text-white text-2xl md:text-4xl"></i></a>
                        <a href="#" class="w-10 md:w-18 h-10 md:h-18 p-3 bg-pink-600 flex justify-center items-center"><i class="fa-brands fa-linkedin text-white text-2xl md:text-4xl"></i></a>
                    </div>
                </div>
            </div>

            <div class="w-max h-auto px-3 md:px-5 py-5 bg-white border-2 border-black rounded-xl gap-5 flex justify-center items-center">
                <img src="{{ asset('/imagep.png') }}" class="w-30 md:w-60 h-auto max-w-full">
                <div class="w-40 md:w-70 h-auto flex flex-col justify-center items-start">
                    <h1 class="text-blue-800 font-bold text-lg md:text-3xl text-left capitalize mb-1">prabu damar jati</h1>
                    <p class="text-blue-800 font-bold text-xs md:text-base text-left capitalize mb-2 md:mb-5">Member of Public Relation Pions</p>
                    <div class="w-auto h-auto gap-2 md:gap-5 flex justify-start items-center">
                        <a href="#" class="w-10 md:w-18 h-10 md:h-18 p-3 bg-emerald-600 flex justify-center items-center"><i class="fa-brands fa-instagram text-white text-2xl md:text-4xl"></i></a>
                        <a href="#" class="w-10 md:w-18 h-10 md:h-18 p-3 bg-purple-700 flex justify-center items-center"><i class="fa-brands fa-facebook text-white text-2xl md:text-4xl"></i></a>
                        <a href="#" class="w-10 md:w-18 h-10 md:h-18 p-3 bg-pink-600 flex justify-center items-center"><i class="fa-brands fa-linkedin text-white text-2xl md:text-4xl"></i></a>
                    </div>
                </div>
            </div>

            <div class="w-max h-auto px-3 md:px-5 py-5 bg-white border-2 border-black rounded-xl gap-5 flex justify-center items-center">
                <img src="{{ asset('/imagey.png') }}" class="w-30 md:w-60 h-auto max-w-full">
                <div class="w-40 md:w-70 h-auto flex flex-col justify-center items-start">
                    <h1 class="text-blue-800 font-bold text-lg md:text-3xl text-left capitalize mb-1">mohammad yazid</h1>
                    <p class="text-blue-800 font-bold text-xs md:text-base text-left capitalize mb-2 md:mb-5">Member of Public Relation Pions</p>
                    <div class="w-auto h-auto gap-2 md:gap-5 flex justify-start items-center">
                        <a href="#" class="w-10 md:w-18 h-10 md:h-18 p-3 bg-emerald-600 flex justify-center items-center"><i class="fa-brands fa-instagram text-white text-2xl md:text-4xl"></i></a>
                        <a href="#" class="w-10 md:w-18 h-10 md:h-18 p-3 bg-purple-700 flex justify-center items-center"><i class="fa-brands fa-facebook text-white text-2xl md:text-4xl"></i></a>
                        <a href="#" class="w-10 md:w-18 h-10 md:h-18 p-3 bg-pink-600 flex justify-center items-center"><i class="fa-brands fa-linkedin text-white text-2xl md:text-4xl"></i></a>
                    </div>
                </div>
            </div>     
        </section>
    </section>

@endsection