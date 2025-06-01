@extends('layouts.main')
@section('content')
    <section class="w-full h-auto py-20 bg-blue-900 flex flex-col justify-center items-center">
        <header class="w-full px-8 md:px-15 my-18 flex justify-between items-center">
            <h1 class="w-120 text-4xl md:text-6xl text-white font-black font-nohemi">Being Appart of us in <span class="font-normal font-nohemi">Pions</span></h1>
            <p class="w-60 text-xs md:text-base text-white font-normal">Discover your division that you like it and grown your ability</p>
        </header>

        <h2 class="w-full px-8 md:px-15 font-extrabold font-nohemi text-white text-4xl md:text-5xl mb-10">Please Select</h2>

        <section class="w-full h-auto px-5 md:px-15 mb-15 gap-6 relative overflow-hidden flex md:grid flex-col md:grid-cols-2 justify-center items-center">

            <div class="w-max h-auto px-3 md:px-5 py-5 md:py-10 bg-white border-2 border-black rounded-xl gap-5 flex justify-center items-center">
                <img src="{{ asset('images/ketos.png') }}" class="w-30 md:w-60 h-auto max-w-full">
                <div class="w-auto md:w-70 h-auto flex flex-col justify-center items-start">
                    <h1 class="text-blue-800 font-bold text-lg md:text-3xl text-left capitalize">muhammad fadlan <br>rabbani j.</h1>
                    <p class="text-blue-800 font-medium text-xs md:text-base text-left capitalize mb-2 md:mb-5">President of pions</p>
                    <div class="w-auto h-auto gap-5 flex justify-start items-center">
                        <a href="#" class="w-10 md:w-18 h-10 md:h-18 p-3 bg-emerald-600 flex justify-center items-center"><i class="fa-brands fa-instagram text-white text-2xl md:text-4xl"></i></a>
                        <a href="#" class="w-10 md:w-18 h-10 md:h-18 p-3 bg-purple-700 flex justify-center items-center"><i class="fa-brands fa-facebook text-white text-2xl md:text-4xl"></i></a>
                        <a href="#" class="w-10 md:w-18 h-10 md:h-18 p-3 bg-pink-600 flex justify-center items-center"><i class="fa-brands fa-linkedin text-white text-2xl md:text-4xl"></i></a>
                    </div>
                </div>
            </div>

            <div class="w-max h-auto px-3 md:px-5 py-5 md:py-10 bg-white border-2 border-black rounded-xl gap-5 flex justify-center items-center">
                <img src="{{ asset('images/waketos.png') }}" class="w-30 md:w-60 h-auto max-w-full">
                <div class="w-auto md:w-70 h-auto flex flex-col justify-center items-start">
                    <h1 class="text-blue-800 font-bold text-lg md:text-3xl text-left capitalize">azmi fauzan <br>akbar</h1>
                    <p class="text-blue-800 font-medium text-xs md:text-base text-left capitalize mb-2 md:mb-5">vice president of pions</p>
                    <div class="w-auto h-auto gap-5 flex justify-start items-center">
                        <a href="#" class="w-10 md:w-18 h-10 md:h-18 p-3 bg-emerald-600 flex justify-center items-center"><i class="fa-brands fa-instagram text-white text-2xl md:text-4xl"></i></a>
                        <a href="#" class="w-10 md:w-18 h-10 md:h-18 p-3 bg-purple-700 flex justify-center items-center"><i class="fa-brands fa-facebook text-white text-2xl md:text-4xl"></i></a>
                        <a href="#" class="w-10 md:w-18 h-10 md:h-18 p-3 bg-pink-600 flex justify-center items-center"><i class="fa-brands fa-linkedin text-white text-2xl md:text-4xl"></i></a>
                    </div>
                </div>
            </div>

            <div class="w-max h-auto px-3 md:px-5 py-5 md:py-10 bg-white border-2 border-black rounded-xl gap-5 flex justify-center items-center">
                <img src="{{ asset('images/sekretaris.png') }}" class="w-30 md:w-60 h-auto max-w-full">
                <div class="w-auto md:w-70 h-auto flex flex-col justify-center items-start">
                    <h1 class="text-blue-800 font-bold text-lg md:text-3xl text-left capitalize">masaid fairus <br>trimarsongko</h1>
                    <p class="text-blue-800 font-medium text-xs md:text-base text-left capitalize mb-2 md:mb-5">secretary of pions</p>
                    <div class="w-auto h-auto gap-5 flex justify-start items-center">
                        <a href="#" class="w-10 md:w-18 h-10 md:h-18 p-3 bg-emerald-600 flex justify-center items-center"><i class="fa-brands fa-instagram text-white text-2xl md:text-4xl"></i></a>
                        <a href="#" class="w-10 md:w-18 h-10 md:h-18 p-3 bg-purple-700 flex justify-center items-center"><i class="fa-brands fa-facebook text-white text-2xl md:text-4xl"></i></a>
                        <a href="#" class="w-10 md:w-18 h-10 md:h-18 p-3 bg-pink-600 flex justify-center items-center"><i class="fa-brands fa-linkedin text-white text-2xl md:text-4xl"></i></a>
                    </div>
                </div>
            </div>

            <div class="w-max h-auto px-3 md:px-5 py-5 md:py-10 bg-white border-2 border-black rounded-xl gap-5 flex justify-center items-center">
                <img src="{{ asset('images/bendaharam.png') }}" class="w-30 md:w-60 h-auto max-w-full">
                <div class="w-auto md:w-70 h-auto flex flex-col justify-center items-start">
                    <h1 class="text-blue-800 font-bold text-lg md:text-3xl text-left capitalize">akbar rizki <br>pratama</h1>
                    <p class="text-blue-800 font-medium text-xs md:text-base text-left capitalize mb-2 md:mb-5">treasurer of pions</p>
                    <div class="w-auto h-auto gap-5 flex justify-start items-center">
                        <a href="#" class="w-10 md:w-18 h-10 md:h-18 p-3 bg-emerald-600 flex justify-center items-center"><i class="fa-brands fa-instagram text-white text-2xl md:text-4xl"></i></a>
                        <a href="#" class="w-10 md:w-18 h-10 md:h-18 p-3 bg-purple-700 flex justify-center items-center"><i class="fa-brands fa-facebook text-white text-2xl md:text-4xl"></i></a>
                        <a href="#" class="w-10 md:w-18 h-10 md:h-18 p-3 bg-pink-600 flex justify-center items-center"><i class="fa-brands fa-linkedin text-white text-2xl md:text-4xl"></i></a>
                    </div>
                </div>
            </div>

            <div class="w-max h-auto px-3 md:px-5 py-5 md:py-10 bg-white border-2 border-black rounded-xl gap-5 flex justify-center items-center">
                <img src="{{ asset('images/wasek.png') }}" class="w-30 md:w-60 h-auto max-w-full">
                <div class="w-auto md:w-70 h-auto flex flex-col justify-center items-start">
                    <h1 class="text-blue-800 font-bold text-lg md:text-3xl text-left capitalize">milan parade <br>siahaan</h1>
                    <p class="text-blue-800 font-medium text-xs md:text-base text-left capitalize mb-2 md:mb-5">vice secretary of pions</p>
                    <div class="w-auto h-auto gap-5 flex justify-start items-center">
                        <a href="#" class="w-10 md:w-18 h-10 md:h-18 p-3 bg-emerald-600 flex justify-center items-center"><i class="fa-brands fa-instagram text-white text-2xl md:text-4xl"></i></a>
                        <a href="#" class="w-10 md:w-18 h-10 md:h-18 p-3 bg-purple-700 flex justify-center items-center"><i class="fa-brands fa-facebook text-white text-2xl md:text-4xl"></i></a>
                        <a href="#" class="w-10 md:w-18 h-10 md:h-18 p-3 bg-pink-600 flex justify-center items-center"><i class="fa-brands fa-linkedin text-white text-2xl md:text-4xl"></i></a>
                    </div>
                </div>
            </div>
                    
        </section>

        <section class="w-full h-auto flex justify-center items-center">
            
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
        </section>
    </section>

    <script>
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