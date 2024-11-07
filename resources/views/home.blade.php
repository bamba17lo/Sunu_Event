@extends('index')

@section('content')
    @if (session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'success',
                    title: 'Succès',
                    text: '{{ session('success') }}',
                    confirmButtonText: 'OK'
                });
            });
        </script>
    @endif

    @if (session('successLogin'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'success',
                    title: 'Succès',
                    text: '{{ session('successLogin') }}',
                });
            });
        </script>
    @endif
    {{-- Carousel --}}
    <div class="relative w-full h-screen max-w-5xl mx-auto bg-cover bg-center animated-bg">

        <!-- Overlay -->
        <div class="absolute inset-0 bg-black/50"></div>

        <!-- Slogan Text -->
        <div class="relative z-10 flex flex-col items-center justify-center h-full text-white">
            <h1 class="text-5xl font-bold mb-4">SunuEvent</h1>
            <p class="text-xl mb-8">Votre guichet unique pour tous les événements au Sénégal!</p>

            <!-- Search Bar -->
            <div class="w-full max-w-md">
                <form class="max-w-md mx-auto">
                    <label for="default-search"
                        class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Rechercher</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="search" id="default-search"
                            class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Rechercher Artiste,Evenement..." required />
                        <button type="submit"
                            class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Rechercher</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- end carousel --}}

    <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
        {{-- submenu --}}
        <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab"
                data-tabs-toggle="#default-tab-content" role="tablist">
                <li class="me-2" role="presentation">
                    <a href="" class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab"
                        data-tabs-target="#profile" type="button" role="tab" aria-controls="profile"
                        aria-selected="false">Tous</a>
                </li>
                <li class="me-2" role="presentation">
                    <a href=""
                        class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                        id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab"
                        aria-controls="dashboard" aria-selected="false">Aujourd'hui</a>
                </li>
                <li class="me-2" role="presentation">
                    <a href=""
                        class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                        id="settings-tab" data-tabs-target="#settings" type="button" role="tab"
                        aria-controls="settings" aria-selected="false">Cette semaine</a>
                </li>
            </ul>
        </div>
        <div id="default-tab-content">
            <div class="hidden p-4 rounded-lg  dark:bg-gray-800" id="profile" role="tabpanel"
                aria-labelledby="profile-tab">
            </div>
            <div class="hidden p-4 rounded-lg  dark:bg-gray-800" id="dashboard" role="tabpanel"
                aria-labelledby="dashboard-tab">
            </div>
            <div class="hidden p-4 rounded-lg  dark:bg-gray-800" id="settings" role="tabpanel"
                aria-labelledby="settings-tab">
            </div>
        </div>
        {{-- end submenu --}}
        {{-- evenment region --}}
        <h3 class="text-2xl font-bold dark:text-white">Rechercher par Régions</h3>
        <br>

        <div class="space-x-1">
            <button type="button"
                class="text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 me-2 mb-2">
                Dakar
            </button>
            <button type="button"
                class="text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 me-2 mb-2">
                Thies
            </button>
            <button type="button"
                class="text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 me-2 mb-2">
                Diourbel
            </button>
            <button type="button"
                class="text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 me-2 mb-2">
                Tambacounda
            </button>
            <button type="button"
                class="text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 me-2 mb-2">
                Kedougou
            </button>
            <button type="button"
                class="text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 me-2 mb-2">
                Matam
            </button>
            <button type="button"
                class="text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 me-2 mb-2">
                Ziguinchor
            </button>
            <button type="button"
                class="text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 me-2 mb-2">
                Saint Louis
            </button>
            <button type="button"
                class="text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 me-2 mb-2">
                Kaffrine
            </button>
            <button type="button"
                class="text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 me-2 mb-2">
                Kaolack
            </button>
            <button type="button"
                class="text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 me-2 mb-2">
                Kolda
            </button>
            <button type="button"
                class="text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 me-2 mb-2">
                Louga
            </button>
            <button type="button"
                class="text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 me-2 mb-2">
                Sedhiou
            </button>
            <button type="button"
                class="text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 me-2 mb-2">
                Fatick
            </button>
        </div>
        <br>
        {{--  evenement region --}}

        {{-- Categorie evenement --}}
        <h3 class="text-2xl font-bold dark:text-white">Categorie populaire</h3>
        <br>

        <div class="flex justify-center space-x-4">
            <div class="w-64 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="{{ url('/musique&culture') }}">
                    <img class="p-4 rounded-t-lg w-full h-48 object-cover"
                        src="https://i0.wp.com/africtelegraph.com/wp-content/uploads/2017/07/Youssou-Ndour-un-artiste-s%C3%A9n%C3%A9galais.jpg?fit=1000%2C665&ssl=1"
                        alt="image produit" />
                </a>
                <div class="px-5 pb-5">
                    <div class="flex items-center justify-between">
                        <span class="text-1xl font-bold text-gray-900 dark:text-white">Musique et Culture</span>
                    </div>
                </div>
            </div>

            <div class="w-64 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="{{ url('mode&beaute') }}">
                    <img class="p-4 rounded-t-lg w-full h-48 object-cover"
                        src="https://images.squarespace-cdn.com/content/v1/59a48902e45a7c218ce3c53b/1561077063836-IHP8C55TBH7UPQTKHARY/IMG_2576.jpg?format=300w"
                        alt="image produit" />
                </a>
                <div class="px-5 pb-5">
                    <div class="flex items-center justify-between">
                        <span class="text-1xl font-bold text-gray-900 dark:text-white">Mode et beauté</span>
                    </div>
                </div>
            </div>

            <div class="w-64 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="{{ url('education&formation') }}">
                    <img class="p-4 rounded-t-lg w-full h-48 object-cover"
                        src="https://images.seneweb.com/dynamic/modules/news/images/gen/fb/b79502cdc70719cb0c8571972781b242981cc22f.jpeg"
                        alt="image produit" />
                </a>
                <div class="px-5 pb-5">
                    <div class="flex items-center justify-between">
                        <span class="text-1xl font-bold text-gray-900 dark:text-white">Education et Formation</span>
                    </div>
                </div>
            </div>

            <div class="w-64 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="{{ url('sport') }}">
                    <img class="p-4 rounded-t-lg w-full h-48 object-cover"
                        src="https://cloudfront-us-east-2.images.arcpublishing.com/reuters/OTWHJ2RYI5I6DLIPKMNWT5ISVQ.jpg"
                        alt="image produit" />
                </a>
                <div class="px-5 pb-5">
                    <div class="flex items-center justify-between">
                        <span class="text-1xl font-bold text-gray-900 dark:text-white">Sport</span>
                    </div>
                </div>
            </div>
            <div class="w-64 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="{{ url('seminaire&conference') }}">
                    <img class="p-4 rounded-t-lg w-full h-48 object-cover"
                        src="https://www.exclusif.net/photo/art/grande/72544640-50468195.jpg?v=1682976723"
                        alt="image produit" />
                </a>
                <div class="px-5 pb-5">
                    <div class="flex items-center justify-between">
                        <span class="text-1xl font-bold text-gray-900 dark:text-white">Séminaire et Conférence</span>
                    </div>
                </div>
            </div>

        </div>
        <br>
        <a href="#"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Voir
            plus</a>
        <br> <br>
        {{-- end categorie evenement --}}


        {{-- a venir evenement --}}
        <h3 class="text-2xl font-bold dark:text-white">A venir</h3>
        <br>

        <div class="flex justify-center space-x-4">
            @foreach ($events as $event)
                <div class="w-50 bg-white border border-gray-200 rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-700 transition-transform transform hover:scale-105">
                    <a href="{{route('event',['event'=>$event])}}">
                        <figure class="relative max-w-sm ">
                           
                              <img class="rounded-t-lg w-full h-66" src="/storage/{{ $event->media1 }}" alt="image description">
                            
                          </figure>

                        {{-- <img class="rounded-t-lg w-full h-66 object-cover" src="/storage/{{ $event->media1 }}"
                        alt="image" /> --}}

                        <div class="px-6 py-5">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-3">{{ $event->eventName }}
                            </h3>
                            <div class="text-md text-gray-500 dark:text-gray-400 flex items-center mb-2">
                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M5 5a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1 2 2 0 0 1 2 2v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V7a2 2 0 0 1 2-2ZM3 19v-7a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Zm6.01-6a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm-10 4a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Z"
                                        clip-rule="evenodd" />
                                </svg>

                                <span>
                                    {{ \Carbon\Carbon::parse($event->date)->locale('fr')->isoFormat('dddd, D MMM YYYY. ') . \Carbon\Carbon::parse($event->startTime)->format('H:i') }}
                                </span>
                            </div>
                            <div class="text-md text-gray-500 dark:text-gray-400 flex items-center">
                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M11.906 1.994a8.002 8.002 0 0 1 8.09 8.421 7.996 7.996 0 0 1-1.297 3.957.996.996 0 0 1-.133.204l-.108.129c-.178.243-.37.477-.573.699l-5.112 6.224a1 1 0 0 1-1.545 0L5.982 15.26l-.002-.002a18.146 18.146 0 0 1-.309-.38l-.133-.163a.999.999 0 0 1-.13-.202 7.995 7.995 0 0 1 6.498-12.518ZM15 9.997a3 3 0 1 1-5.999 0 3 3 0 0 1 5.999 0Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span> {{ $event->lieu }}</span>
                            </div>
                            <div class="text-md text-gray-500 dark:text-gray-400 flex items-center">
                                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M4 5a2 2 0 0 0-2 2v2.5a1 1 0 0 0 1 1 1.5 1.5 0 1 1 0 3 1 1 0 0 0-1 1V17a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-2.5a1 1 0 0 0-1-1 1.5 1.5 0 1 1 0-3 1 1 0 0 0 1-1V7a2 2 0 0 0-2-2H4Z" />
                                </svg>

                                @foreach ($event->tickets as $ticket)
                                    @if ($ticket->category_ticket_id == 3)
                                        {{ number_format($ticket->unitPrice, 0, ',', ' ') }}-
                                    @elseif($ticket->category_ticket_id == 2)
                                        {{ number_format($ticket->unitPrice, 0, ',', ' ') }}-
                                    @elseif($ticket->category_ticket_id == 1)
                                        {{ number_format($ticket->unitPrice, 0, ',', ' ') }}-
                                    @endif
                                @endforeach
                                FCFA
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <br>
        <a href="#"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Voir
            plus</a>
        {{-- end  evenement a venir --}}

    </div>
@endsection
