@extends('layouts.main')
@section('content')
<body class="bg-blue-900 p-6">
    <main class="max-w-[900px] mx-auto bg-white rounded-[20px] border-2 border-black p-6">
        <img class="rounded-[20px] w-full mb-4 h-96 object-cover" src="https://storage.googleapis.com/a1aa/image/d5028bd9-4fcd-4b4b-97be-a3f2494d308c.jpg"/>
        <p class="text-sm text-blue-800 mb-2"><i class="fas fa-map-pin mr-2"></i>SMK IDN Boarding School Bogor</p>
        <p class="text-sm text-blue-800 mb-3"><i class="fas fa-scroll mr-1"></i>Category: Education &amp; Skill Development</p>
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 sm:gap-6 mb-6">
            <!-- Bagian Kiri: Judul dan Penulis -->
            <div class="flex-1">
                <h1 class="text-blue-800 font-extrabold text-3xl leading-tight">Digital Marketing Seminar</h1>
                <p class="text-gray-400 text-sm mt-2">Written By: Education Department</p>
            </div>
        
            <!-- Bagian Kanan: Tanggal -->
            <div class="bg-green-600 text-white font-extrabold text-xl rounded-sm w-full sm:w-auto px-5 py-4 flex flex-row sm:flex-col items-center justify-center gap-1 sm:gap-0">
                <div class="text-3xl font-nohemi leading-none">10</div>
                <div class="text-lg md:text-xs font-semibold font-nohemi leading-none sm:mt-1 sm:text-center ml-2 sm:ml-0">May 25</div>
            </div>      
        </div>
        <p class="text-blue-800 text-base leading-tight mb-2 font-bold">Full Article (News Content):</p>
        <p class="text-blue-800 text-sm leading-tight mb-6 text-justify">On May 10, 2025, the OSIS of SMA PIONS successfully held a Digital Marketing Seminar aimed at introducing students to the basics of digital branding, content creation, and online marketing strategies. The event was held in the school hall and was attended by over 100 students from various classes. The seminar featured Mr. Arif Rahman, a digital strategist and guest speaker from a leading marketing agency in Jakarta. He explained the importance of digital presence in today's business world and shared valuable tips on how to build a strong personal brand using platforms like Instagram, TikTok, and LinkedIn. “Marketing is no longer just about selling, it's about storytelling and creating value online,” said Mr. Arif during his session. Participants were also invited to join a live content creation challenge, where they had to design a mock social media post for a school campaign. The best teams received exclusive OSIS merchandise and certificates of participation. This seminar is part of OSIS's ongoing effort to prepare students for future careers through practical knowledge beyond the classroom. The event received highly positive feedback from students who found the session both engaging and inspiring.</p>
        <p class="text-blue-800 text-sm mb-2 font-semibold">Share To:</p>
        <div class="flex space-x-4 text-blue-800 text-sm font-semibold">
            <div class="flex items-center space-x-1">
                <button type="button"><i class="fab fa-instagram text-base mr-1"></i><span>Instagram</span></button>
            </div>
            <div class="flex items-center space-x-1">
                <button type="button"><i class="fab fa-facebook-f text-base mr-1"></i><span>Facebook</span></button>
            </div>
            <div class="flex items-center space-x-1">
                <button type="button"><i class="fab fa-tiktok text-base mr-1"></i><span>TikTok</span></button>
            </div>
        </div>
    </main>
</body>
@endsection