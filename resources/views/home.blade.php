@extends('layouts.main')
@section('content')
    
    <section class="w-full h-screen bg-blue-900 relative overflow-hidden flex flex-col justify-end items-center">
        <img src="{{ asset('images/hero-vec-bg.svg') }}" class="w-130 h-auto max-w-full absolute -top-10 -right-40">

        <div class="w-full h-auto px-5 gap-5 flex flex-col-reverse md:flex-row justify-end md:justify-between items-center md:items-end z-10">
            <div class="w-full h-auto pl-0 md:pl-20 pb-8 md:pb-15 flex flex-col justify-center items-center md:items-start">
                <h1 class="mb-3 md:mb-4 text-5xl md:text-8xl text-white text-center md:text-left font-black font-nohemi capitalize tracking-wide">grow <br>your skill <br>with pions</h1>
                <p class="mb-5 md:mb-10 text-md md:text-2xl text-white text-center md:text-left font-medium">Let's grow together and<br>make cool things happend</p>
                <div class="w-full h-auto gap-5 flex justify-center md:justify-start items-center">
                    <a href="#" class="px-8 md:px-10 py-3 border-4 border-emerald-500 rounded-full bg-emerald-500 text-sm md:text-lg text-white text-center md:text-left font-medium font-nohemi capitalize">join us</a>
                    <a href="#" class="px-8 md:px-10 py-3 border-4 border-purple-600 rounded-full bg-purple-600 text-sm md:text-lg text-white text-center md:text-left font-medium font-nohemi capitalize">explore division</a>
                </div>
            </div>
            <div class="w-full h-auto pr-0 md:pr-30 flex justify-center md:justify-end items-center z-10">
                <img src="{{ asset('images/hero-img.png') }}" alt="hero-card-image" class="w-35 md:w-80 h-auto max-w-full">
            </div>
        </div>
    </section> 

    <section class="w-full h-auto bg-blue-900 py-10 relative overflow-hidden flex flex-col justify-center items-center">
        <div class="w-full h-auto px-5 md:px-20 mb-10 gap-5 flex justify-between items-center">
            <h1 class="w-full md:w-90 text-2xl md:text-5xl text-white font-black font-nohemi capitalize">Meet the leaders of <span class="font-medium">pions division</span></h1>
            <p class="w-full md:w-65 text-xs md:text-lg text-white text-right md:text-left font-normal">Find the division you vibe with & level up your skills 🚀</p>
        </div>

        <div class="w-full h-auto flex justify-center items-center">
            
            <div class="w-full h-auto px-3 md:px-25 absolute flex justify-between items-center z-10">
                <p id="kiri" class="h-11 px-4 rounded-full bg-white overflow-hidden flex justify-center items-center shadow-sm shadow-black/30 cursor-pointer"><i class="fa-solid fa-caret-left text-2xl text-blue-800"></i></p>
                <p id="kanan" class="h-11 px-4 rounded-full bg-white overflow-hidden flex justify-center items-center shadow-sm shadow-black/30 cursor-pointer"><i class="fa-solid fa-caret-right text-2xl text-blue-800"></i></p>
            </div>

            <div class="w-full h-auto px-2 md:px-30 overflow-x-scroll scrollbar-hidden flex items-center">
                <div id="cardContainer" class="w-max h-auto relative overflow-hidden gap-3 flex">

                    <div class="w-90 min-w-90 max-w-90 h-auto pb-10 border-4 border-black bg-white rounded-3xl relative overflow-hidden flex flex-col justify-center items-start">
                        <div class="w-full h-auto bg-blue-600 pt-6 mb-5 flex justify-center items-end">
                            <img src="{{ asset('images/orang-rendem.png') }}" alt="" class="w-60 h-auto max-w-full">
                        </div>
                        <div class="w-full h-auto px-4 mb-1 flex justify-between items-start">
                            <h1 class="text-blue-800 text-3xl capitalize font-black">Arjuna Lakeisha <br>attawan SDJ</h1>
                            <a href="#" class="px-5 py-2 rounded-full text-white text-[10px] capitalize font-medium bg-blue-600">see more</a>
                        </div>
                        <p class="ml-4 text-blue-800 text-sm capitalize font-bold">leader of media pions</p>
                    </div>

                    <div class="w-90 min-w-90 max-w-90 h-auto pb-10 border-4 border-black bg-white rounded-3xl relative overflow-hidden flex flex-col justify-center items-start">
                        <div class="w-full h-auto bg-purple-700 pt-6 mb-5 flex justify-center items-end">
                            <img src="{{ asset('images/orang-rendem.png') }}" alt="" class="w-60 h-auto max-w-full">
                        </div>
                        <div class="w-full h-auto px-4 mb-1 flex justify-between items-start">
                            <h1 class="text-blue-800 text-3xl capitalize font-black">yoga yoshio<br> suparman</h1>
                            <a href="#" class="px-5 py-2 rounded-full text-white text-[10px] capitalize font-medium bg-purple-700">see more</a>
                        </div>
                        <p class="ml-4 text-blue-800 text-sm capitalize font-bold">leader of entrepreneur & events pions</p>
                    </div>

                    <div class="w-90 min-w-90 max-w-90 h-auto pb-10 border-4 border-black bg-white rounded-3xl relative overflow-hidden flex flex-col justify-center items-start">
                        <div class="w-full h-auto bg-pink-600 pt-6 mb-5 flex justify-center items-end">
                            <img src="{{ asset('images/orang-rendem.png') }}" alt="" class="w-60 h-auto max-w-full">
                        </div>
                        <div class="w-full h-auto px-4 mb-1 flex justify-between items-start">
                            <h1 class="text-blue-800 text-3xl capitalize font-black">Tubagus <br>valentino .d .a</h1>
                            <a href="#" class="px-5 py-2 rounded-full text-white text-[10px] capitalize font-medium bg-pink-600">see more</a>
                        </div>
                        <p class="ml-4 text-blue-800 text-sm capitalize font-bold">leader of public relation pions</p>
                    </div>

                    <div class="w-90 min-w-90 max-w-90 h-auto pb-10 border-4 border-black bg-white rounded-3xl relative overflow-hidden flex flex-col justify-center items-start">
                        <div class="w-full h-auto bg-red-900 pt-6 mb-5 flex justify-center items-end">
                            <img src="{{ asset('images/orang-rendem.png') }}" alt="" class="w-60 h-auto max-w-full">
                        </div>
                        <div class="w-full h-auto px-4 mb-1 flex justify-between items-start">
                            <h1 class="text-blue-800 text-3xl capitalize font-black">ibnu alif <br>muhadzdzib</h1>
                            <a href="#" class="px-5 py-2 rounded-full text-white text-[10px] capitalize font-medium bg-red-900">see more</a>
                        </div>
                        <p class="ml-4 text-blue-800 text-sm capitalize font-bold">leader of cleanlines pions</p>
                    </div>

                    <div class="w-90 min-w-90 max-w-90 h-auto pb-10 border-4 border-black bg-white rounded-3xl relative overflow-hidden flex flex-col justify-center items-start">
                        <div class="w-full h-auto bg-yellow-400 pt-6 mb-5 flex justify-center items-end">
                            <img src="{{ asset('images/orang-rendem.png') }}" alt="" class="w-60 h-auto max-w-full">
                        </div>
                        <div class="w-full h-auto px-4 mb-1 flex justify-between items-start">
                            <h1 class="text-blue-800 text-3xl capitalize font-black">r.m. fadhel<br> suradipraja</h1>
                            <a href="#" class="px-5 py-2 rounded-full text-white text-[10px] capitalize font-medium bg-yellow-400">see more</a>
                        </div>
                        <p class="ml-4 text-blue-800 text-sm capitalize font-bold">leader of ubudiyyah pions</p>
                    </div>

                    <div class="w-90 min-w-90 max-w-90 h-auto pb-10 border-4 border-black bg-white rounded-3xl relative overflow-hidden flex flex-col justify-center items-start">
                        <div class="w-full h-auto bg-emerald-600 pt-6 mb-5 flex justify-center items-end">
                            <img src="{{ asset('images/orang-rendem.png') }}" alt="" class="w-60 h-auto max-w-full">
                        </div>
                        <div class="w-full h-auto px-4 mb-1 flex justify-between items-start">
                            <h1 class="text-blue-800 text-3xl capitalize font-black">alvin zaidan <br>faisal putra</h1>
                            <a href="#" class="px-5 py-2 rounded-full text-white text-[10px] capitalize font-medium bg-emerald-600">see more</a>
                        </div>
                        <p class="ml-4 text-blue-800 text-sm capitalize font-bold">leader of education pions</p>
                    </div>

                    <div class="w-90 min-w-90 max-w-90 h-auto pb-10 border-4 border-black bg-white rounded-3xl relative overflow-hidden flex flex-col justify-center items-start">
                        <div class="w-full h-auto bg-orange-600 pt-6 mb-5 flex justify-center items-end">
                            <img src="{{ asset('images/orang-rendem.png') }}" alt="" class="w-60 h-auto max-w-full">
                        </div>
                        <div class="w-full h-auto px-4 mb-1 flex justify-between items-start">
                            <h1 class="text-blue-800 text-3xl capitalize font-black">rafie zubair <br>djohar</h1>
                            <a href="#" class="px-5 py-2 rounded-full text-white text-[10px] capitalize font-medium bg-orange-600">see more</a>
                        </div>
                        <p class="ml-4 text-blue-800 text-sm capitalize font-bold">leader of sports pions</p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="w-full h-screen py-10 px-5 bg-blue-900 gap-10 relative overflow-hidden flex flex-col md:flex-row justify-center items-center">
        <div class="w-full h-auto flex justify-end items-center">
            <img src="{{ asset('images/posterPions.png') }}" class="w-100 h-auto max-w-full">
        </div>
        <div class="w-full h-auto flex flex-col justify-center items-center md:items-start">
            <h1 class="text-white text-6xl text-center md:text-left font-nohemi capitalize">what is <br><span class="font-extrabold font-nohemi tracking-wider">pions</span>?</h1>
            <p class="w-110 text-white text-xl text-justify font-medium mb-5">PIONS (Pamijahan IDN Organization Nimbly Student) is a student organization at SMK IDN Boarding School Bogor that helps students grow their skills, lead with confidence, and explore their passions through 4 main divisions.</p>

            <div class="w-full h-auto mb-6 gap-5 flex justify-start items-center">
                <div class="w-25 h-25 px-3 bg-emerald-600 relative overflow-hidden flex flex-col justify-center items-center">
                    <h2 class="w-full text-left text-white text-3xl font-bold font-nohemi capitalize">30+</h2>
                    <p class="w-full text-left text-white text-sm font-medium font-nohemi capitalize leading-4">active member</p>
                </div>
                <div class="w-25 h-25 px-3 bg-purple-700 relative overflow-hidden flex flex-col justify-center items-center">
                    <h2 class="w-full text-left text-white text-3xl font-bold font-nohemi capitalize">6</h2>
                    <p class="w-full text-left text-white text-sm font-medium font-nohemi capitalize leading-4">inspiring leaders division</p>
                </div>
                <div class="w-25 h-25 px-3 bg-pink-600 relative overflow-hidden flex flex-col justify-center items-center">
                    <h2 class="w-full text-left text-white text-3xl font-bold font-nohemi capitalize">5</h2>
                    <p class="w-full text-left text-white text-sm font-medium font-nohemi capitalize leading-4">pions pillars</p>
                </div>
            </div>

            <div class="w-full h-auto gap-5 flex justify-start items-center">
                <a href="#" class="px-8 py-2 border-4 border-emerald-600 rounded-full bg-emerald-600 text-sm text-white font-medium capitalize">learn more</a>
                <a href="#" class="px-8 py-2 border-4 border-pink-600 rounded-full bg-pink-600 text-sm text-white font-medium capitalize">explore division</a>
            </div>
        </div>
    </section>

    <section class="w-full h-auto px-15 bg-blue-900 relative overflow-hidden flex flex-row-reverse justify-between items-center">
        <h1 class="text-white text-5xl text-right font-bold font-nohemi capitalize">Welcome to pions <br>and here the 4 <br>Pillar <span class="font-medium">of Pions</span></h1>
        <p class="text-white text-xl text-left font-medium capitalize">Explore PIONS' Divisions, <br>Uncover Your Hidden Talents, <br>and Grow Your Potential!</p>
    </section>
    
    <section class="w-full h-auto px-20 py-6 bg-blue-900 gap-6 relative overflow-hidden grid grid-cols-2 justify-center items-center">

        <div class="w-max h-auto px-5 py-10 bg-white border-2 border-black rounded-xl gap-5 flex justify-center items-center">
            <img src="{{ asset('images/ketos.png') }}" class="w-60 h-auto max-w-full">
            <div class="w-70 h-auto flex flex-col justify-center items-start">
                <h1 class="text-blue-800 font-bold text-3xl text-left capitalize">muhammad fadlan <br>rabbani j.</h1>
                <p class="text-blue-800 font-medium text-md text-left capitalize mb-5">President of pions</p>
                <div class="w-auto h-auto gap-5 flex justify-start items-center">
                    <a href="#" class="w-18 h-18 p-3 bg-emerald-600 flex justify-center items-center"><i class="fa-brands fa-instagram text-white text-4xl"></i></a>
                    <a href="#" class="w-18 h-18 p-3 bg-purple-700 flex justify-center items-center"><i class="fa-brands fa-facebook text-white text-4xl"></i></a>
                    <a href="#" class="w-18 h-18 p-3 bg-pink-600 flex justify-center items-center"><i class="fa-brands fa-linkedin text-white text-4xl"></i></a>
                </div>
            </div>
        </div>

        <div class="w-max h-auto px-5 py-10 bg-white border-2 border-black rounded-xl gap-5 flex justify-center items-center">
            <img src="{{ asset('images/waketos.png') }}" class="w-60 h-auto max-w-full">
            <div class="w-70 h-auto flex flex-col justify-center items-start">
                <h1 class="text-blue-800 font-bold text-3xl text-left capitalize">azmi fauzan <br>akbar</h1>
                <p class="text-blue-800 font-medium text-md text-left capitalize mb-5">vice president of pions</p>
                <div class="w-auto h-auto gap-5 flex justify-start items-center">
                    <a href="#" class="w-18 h-18 p-3 bg-emerald-600 flex justify-center items-center"><i class="fa-brands fa-instagram text-white text-4xl"></i></a>
                    <a href="#" class="w-18 h-18 p-3 bg-purple-700 flex justify-center items-center"><i class="fa-brands fa-facebook text-white text-4xl"></i></a>
                    <a href="#" class="w-18 h-18 p-3 bg-pink-600 flex justify-center items-center"><i class="fa-brands fa-linkedin text-white text-4xl"></i></a>
                </div>
            </div>
        </div>

        <div class="w-max h-auto px-5 py-10 bg-white border-2 border-black rounded-xl gap-5 flex justify-center items-center">
            <img src="{{ asset('images/sekretaris.png') }}" class="w-60 h-auto max-w-full">
            <div class="w-70 h-auto flex flex-col justify-center items-start">
                <h1 class="text-blue-800 font-bold text-3xl text-left capitalize">masaid fairus <br>trimarsongko</h1>
                <p class="text-blue-800 font-medium text-md text-left capitalize mb-5">secretary of pions</p>
                <div class="w-auto h-auto gap-5 flex justify-start items-center">
                    <a href="#" class="w-18 h-18 p-3 bg-emerald-600 flex justify-center items-center"><i class="fa-brands fa-instagram text-white text-4xl"></i></a>
                    <a href="#" class="w-18 h-18 p-3 bg-purple-700 flex justify-center items-center"><i class="fa-brands fa-facebook text-white text-4xl"></i></a>
                    <a href="#" class="w-18 h-18 p-3 bg-pink-600 flex justify-center items-center"><i class="fa-brands fa-linkedin text-white text-4xl"></i></a>
                </div>
            </div>
        </div>

        <div class="w-max h-auto px-5 py-10 bg-white border-2 border-black rounded-xl gap-5 flex justify-center items-center">
            <img src="{{ asset('images/bendaharam.png') }}" class="w-60 h-auto max-w-full">
            <div class="w-70 h-auto flex flex-col justify-center items-start">
                <h1 class="text-blue-800 font-bold text-3xl text-left capitalize">akbar rizki <br>pratama</h1>
                <p class="text-blue-800 font-medium text-md text-left capitalize mb-5">treasurer of pions</p>
                <div class="w-auto h-auto gap-5 flex justify-start items-center">
                    <a href="#" class="w-18 h-18 p-3 bg-emerald-600 flex justify-center items-center"><i class="fa-brands fa-instagram text-white text-4xl"></i></a>
                    <a href="#" class="w-18 h-18 p-3 bg-purple-700 flex justify-center items-center"><i class="fa-brands fa-facebook text-white text-4xl"></i></a>
                    <a href="#" class="w-18 h-18 p-3 bg-pink-600 flex justify-center items-center"><i class="fa-brands fa-linkedin text-white text-4xl"></i></a>
                </div>
            </div>
        </div>

        <div class="w-max h-auto px-5 py-10 bg-white border-2 border-black rounded-xl gap-5 flex justify-center items-center">
            <img src="{{ asset('images/wasek.png') }}" class="w-60 h-auto max-w-full">
            <div class="w-70 h-auto flex flex-col justify-center items-start">
                <h1 class="text-blue-800 font-bold text-3xl text-left capitalize">milan parade <br>siahaan</h1>
                <p class="text-blue-800 font-medium text-md text-left capitalize mb-5">vice secretary of pions</p>
                <div class="w-auto h-auto gap-5 flex justify-start items-center">
                    <a href="#" class="w-18 h-18 p-3 bg-emerald-600 flex justify-center items-center"><i class="fa-brands fa-instagram text-white text-4xl"></i></a>
                    <a href="#" class="w-18 h-18 p-3 bg-purple-700 flex justify-center items-center"><i class="fa-brands fa-facebook text-white text-4xl"></i></a>
                    <a href="#" class="w-18 h-18 p-3 bg-pink-600 flex justify-center items-center"><i class="fa-brands fa-linkedin text-white text-4xl"></i></a>
                </div>
            </div>
        </div>
                
    </section>

    <script>
        const mobile = document.getElementById("mobile");

        function responsif()
        {
            mobile.classList.remove('translate-x-full')
        }

        function web()
        {
            mobile.classList.add('translate-x-full')
        }

        const container = document.getElementById("cardContainer");
        const scrollAmount = 372;

        const kanan = document.getElementById("kanan").onclick = () => {
            container.scrollBy({left: scrollAmount, behavior: "smooth"});
        };

        const kiri = document.getElementById("kiri").onclick = () => {
            container.scrollBy({left: -scrollAmount, behavior: "smooth"});
        };
    </script>

@endsection