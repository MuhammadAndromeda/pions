@extends('layouts.main')
@section('content')
<body class="">
    <section class="pt-33 pb-20 w-full h-auto gap-10 flex flex-col justify-center items-center">
        <h1 class="text-white text-5xl sm:text-7xl font-normal font-nohemi text-center">
            Event in <span class="font-extrabold text-pink-600">Pions</span>
        </h1>

        <div class="w-full h-auto px-5 md:px-10 gap-5 flex md:grid flex-col md:grid-cols-3 justify-center items-center">
            @foreach ($events as $event)
                <div class="w-full h-auto p-5 bg-white border-2 border-black rounded-2xl relative overflow-hidden flex flex-col justify-center items-center">
                    <img src="{{ $event->image_url ?: 'https://picsum.photos/600/400?random=' . $event->id }}" class="w-full h-auto max-w-full mb-3 rounded-4xl">

                    <div class="w-full h-auto px-3 flex flex-col justify-center items-center">
                        <h1 class="w-full mb-3 text-blue-800 text-2xl text-left font-extrabold capitalize">
                            {{ $event->title }}
                        </h1>
                        <h3 class="w-full mb-1 text-gray-400 text-base text-left font-medium capitalize">
                            {{ $event->date?->format('d F Y') ?? 'Tanggal tidak ditentukan' }}
                        </h3>
                        <p class="w-full mb-3 text-black text-sm text-justify font-medium capitalize">
                            {{ Str::limit(strip_tags($event->content), 150) }}
                        </p>
                        <div class="w-full h-auto flex justify-center items-center">
                            <a href="{{ route('event.show', $event->slug) }}" class="w-full h-auto py-3 rounded-full bg-pink-600 border-2 border-black text-white text-sm text-center font-bold capitalize">
                                see more
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</body>
@endsection
