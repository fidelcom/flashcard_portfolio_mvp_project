<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Subject') }}
        </h2>
    </x-slot>

    <!-- component -->
    <!-- component -->
    @foreach($subjects as $subject)
        <div class="container bg-white dark:bg-gray-900">
            <section class="text-gray-400 bg-white dark:bg-gray-900 body-font mb-60">
                <div class="container px-5 py-24 mx-auto">
                    <div class="flex flex-col">
                        <div class="h-1 bg-gray-800 rounded overflow-hidden">
                            <div class="w-24 h-full bg-indigo-500"></div>
                        </div>
                        <div class="flex flex-wrap sm:flex-row flex-col py-6 mb-12">
                            <h1 class="sm:w-2/5 text-white font-medium title-font text-2xl mb-2 sm:mb-0">{{ $subject->name }}</h1>
                            <p class="sm:w-3/5 leading-relaxed text-base sm:pl-10 pl-0">Street art subway tile salvia four dollar toast bitters selfies quinoa yuccie synth meditation iPhone intelligentsia prism tofu. Viral gochujang bitters dreamcatcher.</p>
                        </div>
                    </div>
                    <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
                        @foreach($subject->card as $card)
                            <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                                <div class="flip-card">
                                    <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                            <div class="rounded-lg h-64 bg-gray-500 dark:bg-gray-800 overflow-hidden">
                                                <h2 class="text-xl font-medium title-font text-white mt-5">Question</h2>
                                                <p class="text-base text-gray-500 leading-relaxed mt-2">{{ $card->question }}</p>
                                                {{--                                    <img alt="content" class="object-cover object-center h-full w-full" src="https://dummyimage.com/1203x503">--}}
                                            </div>
                                            {{--                                <h2 class="text-xl font-medium title-font text-white mt-5">Shooting Stars</h2>--}}
                                            {{--                                <p class="text-base leading-relaxed mt-2">Swag shoindxgoitch literally meditation subway tile tumblr cold-pressed. Gastropub street art beard dreamcatcher neutra, ethical XOXO lumbersexual.</p>--}}
                                            {{--                                <a class="text-indigo-400 inline-flex items-center mt-3">Learn More--}}
                                            {{--                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">--}}
                                            {{--                                        <path d="M5 12h14M12 5l7 7-7 7"></path>--}}
                                            {{--                                    </svg>--}}
                                            {{--                                </a>--}}
                                        </div>
                                        <div class="flip-card-back">
                                            <div class="rounded-lg h-64 bg-gray-500 dark:bg-gray-800 overflow-hidden">
                                                <h2 class="text-xl font-medium title-font text-white mt-5">Answer</h2>
                                                <p class="text-base text-gray-500 leading-relaxed mt-2">{{ $card->answer }}</p>
                                                <a class="text-indigo-400 text-base inline-flex items-center mt-3">Go Back
                                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                                        <path d="M19 12H5M12 19l-7-7 7-7"></path>
                                                    </svg>
                                                </a>
                                                {{--                                    <img alt="content" class="object-cover object-center h-full w-full" src="https://dummyimage.com/1203x503">--}}
                                            </div>
                                            {{--                                <h2 class="text-xl font-medium title-font text-white mt-5">Answer</h2>--}}
                                            {{--                                <p class="text-base leading-relaxed mt-2">{{ $card->answer }}</p>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        </div>

    @endforeach
    <style>
        .flip-card {
            background-color: transparent;
            perspective: 1000px;
        }
        .flip-card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform 0.6s;
            transform-style: preserve-3d;
        }
        .flip-card:hover .flip-card-inner {
            transform: rotateY(180deg);
        }
        .flip-card-front, .flip-card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            -webkit-backface-visibility: hidden; /* Safari */
            backface-visibility: hidden;
        }
        .flip-card-front {
            background-color: #bbb;
            color: black;
        }
        .flip-card-back {
            background-color: #333;
            color: white;
            transform: rotateY(180deg);
        }
    </style>
    <script>
        document.querySelectorAll('.flip-card').forEach(card => {
            card.addEventListener('click', () => {
                card.querySelector('.flip-card-inner').classList.toggle('flipped');
            });
        });
    </script>

</x-app-layout>


