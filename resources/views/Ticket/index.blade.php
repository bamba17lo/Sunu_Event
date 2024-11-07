@extends('index')

@section('content')
    <form method="POST" action="{{ url('ticket') }}" enctype="multipart/form-data" class="max-w-xl mx-auto">
        @csrf
        <div class="relative z-0 w-full mb-5 group">
            <label for="event_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Chosir l'événement pour
                ticket</label>
            <select id="event_id" name="event_id"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected>--Selectionner--</option>
                @foreach ($events as $event)
                    <option value="{{ $event->id }}">{{ $event->eventName }}</option>
                @endforeach
            </select>
            @error('event_id')
                <p style="color:red">{{ $message }}</p>
            @enderror
        </div>

        <label for="" class=" block text-sm font-medium text-gray-900 dark:text-white">Ticket Simple</label>
        <div class="grid md:grid-cols-2 md:gap-6">

            <div class="relative z-0 w-full mb-5 group">
                {{-- <input type="" hidden name="category_ticket_id3" id="category_ticket_id" class="" placeholder=""
                    value="Simple" /> --}}

                <input type="" name="unitPriceSimple" id="unitPriceSimple"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " />
                <label for="unitPriceSimple"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Prix
                    Unitaire
                </label>
                @error('unitPrice')
                    <p style="color:red">{{ $message }}</p>
                @enderror
            </div>

            <div class="relative z-0 w-full mb-5 group">
                <input type="text" name="quantitySimple" id="quantitySimple"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " />
                <label for="quantitySimple"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Quantité</label>
                @error('quantity')
                    <p style="color:red">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <label for="" class=" block text-sm font-medium text-gray-900 dark:text-white">Ticket VIP</label>
        <div class="grid md:grid-cols-2 md:gap-6">
            <div class="relative z-0 w-full mb-5 group">
                {{-- <input type="" hidden name="category_ticket_id1" id="category_ticket_id" class="" placeholder=""
                    value="VIP" /> --}}
                <input type="" name="unitPriceVip" id="unitPriceVip"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " />
                <label for="unitPriceVip"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Prix
                    Unitaire
                </label>
                @error('unitPrice')
                    <p style="color:red">{{ $message }}</p>
                @enderror
            </div>

            <div class="relative z-0 w-full mb-5 group">
                <input type="text" name="quantityVip" id="quantityVip"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " />
                <label for="quantityVip"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Quantité</label>
                @error('quantity')
                    <p style="color:red">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <label for="" class=" block text-sm font-medium text-gray-900 dark:text-white">Ticket VIP Prestige</label>
        <div class="grid md:grid-cols-2 md:gap-6">

            <div class="relative z-0 w-full mb-5 group">
                {{-- <input type="" hidden name="category_ticket_id2" id="category_ticket_id" class="" placeholder=""
                    value="VIP" /> --}}
                <input type="" name="unitPriceVipPrestige" id="unitPriceVipPrestige"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " />
                <label for="unitPriceVipPrestige"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Prix
                    Unitaire
                </label>
                @error('unitPrice')
                    <p style="color:red">{{ $message }}</p>
                @enderror
            </div>

            <div class="relative z-0 w-full mb-5 group">
                <input type="text" name="quantityVipPrestige" id="quantityVipPrestige"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " />
                <label for="quantityVipPrestige"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Quantité</label>
                @error('quantity')
                    <p style="color:red">{{ $message }}</p>
                @enderror
            </div>
        </div>


        <button type="submit" name="action" value="valider"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Valider</button>
        <button type="submit" name="action" value="publier"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Valider
            et Publier</button>
    </form>
@endsection()
