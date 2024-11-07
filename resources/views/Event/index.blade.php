@extends('index')

@section('content')
    <form method="POST" action="{{ url('evenement') }}" enctype="multipart/form-data" class="max-w-xl mx-auto">
        @csrf
        <div class="relative z-0 w-full mb-5 group">
            <input type="text" name="eventName" id="eventName"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " />
            <label for="eventName"
                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nom
                de l'évenement</label>
                @error('eventName')
                    <p style="color:red">{{ $message }}</p>
                @enderror
        </div>
        <div class="relative z-0 w-full mb-5 group">
            <label for="category_event_id" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Choisir la
                catégorie</label>
            <select name="category_event_id"
                class="mb-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected>--Selectionner--</option>
                @foreach ($category as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->libelle }} </option>
                @endforeach
            </select>
            @error('category_event_id')
                <p style="color:red">{{ $message }}</p>
            @enderror
        </div>
        <div class="relative z-0 w-full mb-5 group">
            <label for="eventDate" class="block text-sm font-medium text-gray-900 dark:text-white">Date de
                l'événement</label>
            <input type="date" name="eventDate" id="eventDate"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " />
                @error('eventDate')
                    <p style="color:red">{{ $message }}</p>
                @enderror
        </div>
        <div class="grid md:grid-cols-2 md:gap-6">
            <div class="relative z-0 w-full mb-5 group">
                <label for="startTime" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Heure de
                    début</label>
                <div class="relative">
                    <div class="absolute inset-y-0 end-0 top-0 flex items-center pe-3.5 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <input type="time" id="startTime" name="startTime"
                        class="bg-gray-50 border leading-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        min="09:00" max="18:00"  />
                        @error('startTime')
                            <p style="color:red">{{ $message }}</p>
                        @enderror
                </div>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <label for="endTime" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Heure de
                    fin</label>
                <div class="relative">
                    <div class="absolute inset-y-0 end-0 top-0 flex items-center pe-3.5 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <input type="time" id="endTime" name="endTime"
                        class="bg-gray-50 border leading-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        min="09:00" max="18:00"  />
                        @error('endTime')
                            <p style="color:red">{{ $message }}</p>
                        @enderror
                </div>
            </div>
        </div>
        <div class="relative z-0 w-full mb-5 group">
            <label for="region_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Choisir la
                région</label>
            <select id="region_id" name="region_id"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected>--Selectionner--</option>
                @foreach ($regions as $region)
                    <option value="{{ $region->id }}">{{ $region->libelle }}</option>
                @endforeach
            </select>
            @error('region_id')
                <p style="color:red">{{ $message }}</p>
            @enderror
        </div>
        <div class="grid md:grid-cols-2 md:gap-6">
            <div class="relative z-0 w-full mb-5 group">
                <input type="" name="lieu" id="lieu"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " />
                <label for="lieu"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Lieu
                    de l'événement
                </label>
                @error('lieu')
                    <p style="color:red">{{ $message }}</p>
                @enderror
            </div>

            <div class="relative z-0 w-full mb-5 group">
                <input type="text" name="capacity" id="capacity"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " />
                <label for="capacity"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Capacité</label>
                    @error('capacity')
                        <p style="color:red">{{ $message }}</p>
                    @enderror
            </div>
        </div>
        <div class="relative z-0 w-full mb-5 group">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="media1">Choisir une
                image</label>
            <input
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                aria-describedby="media1_help" id="media1" name="media1" type="file">
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="media1_help"> PNG, JPG </p>
            @error('media1')
                <p style="color:red">{{ $message }}</p>
            @enderror
        </div>

        <div class="relative z-0 w-full mb-5 group">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Choisir une
                vidéo</label>
            <input
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                aria-describedby="file_input_help" name="media2" id="file_input" type="file">
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">MP3, MP4,AVI</p>
            @error('media2')
                <p style="color:red">{{ $message }}</p>
            @enderror

        </div>


        <div class="relative z-0 w-full mb-5 group">

            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description de
                l'événement</label>
            <textarea id="message" name="description" rows="4"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Description..."></textarea>

            @error('description')
                <p style="color:red">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </form>
@endsection()
