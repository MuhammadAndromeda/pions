<nav class="w-full h-auto py-4 bg-blue-800/10 backdrop-blur-sm fixed top-0 flex justify-center items-center z-20">
    <img src="{{ asset('images/logo_pions.svg') }}" class="w-20 h-auto max-w-full mr-50 invisible lg:visible">
    <div class="w-auto h-auto mr-20 px-10 py-1 bg-white shadow-sm shadow-black/50 rounded-full gap-5 flex justify-center items-center invisible lg:visible">
        <a href="#" class="px-6 py-2 rounded-md text-md text-black font-normal capitalize">home</a>
        <a href="#" class="px-6 py-2 rounded-md text-md text-black font-normal capitalize">register</a>
        <a href="#" class="px-6 py-2 rounded-md text-md text-black font-normal capitalize">about us</a>
        <a href="#" class="px-6 py-2 rounded-md text-md text-black font-normal capitalize">contact us</a>
    </div>
    <div class="w-auto h-auto gap-5 flex justify-center items-center invisible lg:visible">
        <a href="#" class="px-8 py-3 border-4 border-blue-950 rounded-full bg-blue-950 hover:bg-transparent text-md shadow-sm shadow-black/50 text-white font-medium capitalize transition-all">login</a>
        <a href="#" class="px-8 py-3 border-4 border-blue-600 rounded-full bg-blue-600 hover:bg-transparent text-md shadow-sm shadow-black/50 text-white font-medium capitalize transition-all">register</a>
    </div>
    <i onclick="responsif()" class="fa-solid fa-bars text-2xl py-3 px-3 rounded-lg bg-white text-blue-800 cursor-pointer absolute right-5 visible lg:invisible"></i>
</nav>

<div id="mobile" class="w-auto h-screen px-5 py-13 bg-blue-800/55 backdrop-blur-xs fixed right-0 top-0 flex flex-col justify-start items-center z-30 transition-all translate-x-full">
    <div class="w-full h-auto mb-10 flex justify-between items-center">
        <img src="{{ asset('images/logo_pions.svg') }}" class="w-13 h-auto max-w-full">
        <i onclick="web()" class="fa-solid fa-xmark text-2xl py-3 px-3 rounded-lg bg-white text-blue-800 cursor-pointer"></i>
    </div>
    <div class="w-full h-auto mb-10 gap-3 flex flex-col justify-center items-start">
        <a href="#" class="text-lg text-black w-full h-auto px-3 py-2 bg-white font-medium decoration-0 rounded-md capitalize">Home</a>
        <a href="#" class="text-lg text-black w-full h-auto px-3 py-2 bg-white font-medium decoration-0 rounded-md capitalize">About Us</a>
        <a href="#" class="text-lg text-black w-full h-auto px-3 py-2 bg-white font-medium decoration-0 rounded-md capitalize">Services</a>
        <a href="#" class="text-lg text-black w-full h-auto px-3 py-2 bg-white font-medium decoration-0 rounded-md capitalize">Doctors</a>
        <a href="#" class="text-lg text-black w-full h-auto px-3 py-2 bg-white font-medium decoration-0 rounded-md capitalize">FaQ</a>
    </div>
    <div class="w-full h-auto gap-5 flex justify-start items-center">
        <a href="#" class="px-10 py-2 border-4 border-blue-950 rounded-full bg-blue-950 hover:bg-transparent text-md shadow-sm shadow-black/50 text-white font-medium capitalize transition-all">login</a>
        <a href="#" class="px-10 py-2 border-4 border-blue-600 rounded-full bg-blue-600 hover:bg-transparent text-md shadow-sm shadow-black/50 text-white font-medium capitalize transition-all">register</a>
    </div>
</div>

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
</script>