@extends('index')

@section('content')
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
                    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Rechercher</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 20 20">
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
            <a href="{{url('/musique&culture')}}">
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
            <a href="{{url('mode&beaute')}}">
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
            <a href="{{url('education&formation')}}">
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
            <a href="{{url('sport')}}">
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
            <a href="{{url('seminaire&conference')}}">
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
        <div class="w-64 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="p-4 rounded-t-lg w-full h-48 object-cover"
                    src="https://pbs.twimg.com/media/F0q6uX7XgAAzpBZ.jpg" alt="image produit" />
            </a>
            <div class="px-5 pb-5">
                <div class="">
                    <span class="text-1xl font-bold text-gray-900 dark:text-white">Sénégal vs Algerie</span><br>
                    <spaan>Mardi , 22 dec 2024, 19:00 ,Stade Abdoulaye Wade</spaan>
                </div>
            </div>
        </div>

        <div class="w-64 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="p-4 rounded-t-lg w-full h-48 object-cover"
                    src="https://pbs.twimg.com/media/GZPQec_X0AEyrti?format=jpg&name=large" alt="image produit" />
            </a>
            <div class="px-5 pb-5">
                <div class="">
                    <span class="text-1xl font-bold text-gray-900 dark:text-white"> Concert Omzo Dollar</span><br>
                    <spaan>Samedi , 21 dec 2024, 19:00 ,Dakar Arena</spaan>
                </div>
            </div>
        </div>

        <div class="w-64 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="p-4 rounded-t-lg w-full h-48 object-cover"
                    src="https://wiwsport.com/wp-content/uploads/2024/07/IMG_3970-1024x614.jpeg" alt="image produit" />
            </a>
            <div class="px-5 pb-5">
                <div class="">
                    <span class="text-1xl font-bold text-gray-900 dark:text-white">Modou Lo vs Siteu</span><br>
                    <spaan>Dimanche , 24 Nov 2024, 16:00 ,Arene National</spaan>
                </div>
            </div>
        </div>

        <div class="w-64 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="p-4 rounded-t-lg w-full h-48 object-cover"
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTchF_uDmBZcahb6UJAMuFnb5GpY-p7GeXaHrxZ0aIUgWJcgWa_FRL5l7Db6d88EfQtVn0&usqp=CAU"
                    alt="image produit" />
            </a>
            <div class="px-5 pb-5">
                <div class="">
                    <span class="text-1xl font-bold text-gray-900 dark:text-white">Wally Ballago Seck</span><br>
                    <spaan>Samedi , 22 dec 2024, 19:00 ,Grand theatre</spaan>
                </div>
            </div>
        </div>
        <div class="w-64 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="p-4 rounded-t-lg w-full h-48 object-cover"
                    src="https://www.senenews.com/wp-content/uploads/2024/07/431065171_18282885898166954_4129298055370430351_n.jpg"
                    alt="image produit" />
            </a>
            <div class="px-5 pb-5">
                <div class="">
                    <span class="text-1xl font-bold text-gray-900 dark:text-white">Abba Show</span><br>
                    <spaan>Mardi , 22 dec 2024, 21:00 ,CICES</spaan>
                </div>
            </div>
        </div>

    </div>
    <br>
    <a href="#"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Voir
        plus</a>
    {{-- end  evenement a venir --}}

</div>
@endsection
