<x-app-layout>


    <x-slot name="header">
        <h2 id="pagetitle" class="font-semibold text-2xl font-bold underline decoration-yellow-300 underline-offset-8 decoration-4 text-gray-800 leading-tight text-center">
            {{ __('Woning bekijken') }}
        </h2>
    </x-slot>

    <main>


            <section class="bg-white dark:bg-gray-900">
                <div class="gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
                    <figure class="max-w-lg">
                    <img class="w-full dark:hidden rounded-lg" src="{{asset('storage/images/'.$house->images[1]->path)}}">
                    <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">
                        <span><i class="fa-solid fa-vector-square"></i>  {{$house->rooms}} m<sup>2</sup></span>
                        <span class="mx-2"><i class="fa-solid fa-door-open"></i> {{$house->rooms}} kamers</span>
                        <span><i class="fa-solid fa-couch"></i>
                            @if($house->furnished == 1)
                                <b>Gemeubileerd</b>
                            @else
                                <b>Niet gemeubileerd</b>
                            @endauth
                        </span>
                    </figcaption>
                    </figure>
                    <div class="mt-4 md:mt-0">
                        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">{{$house->street_name . ' ' . $house->house_number . $house->house_number_addition}}</h2>
                        <p class="mb-6 font-light text-gray-500 md:text-lg dark:text-gray-400">{{$house->description}}</p>
                        <h2 class="mb-4 text-2xl tracking-tight font-extrabold text-gray-900 dark:text-white">€ {{$house->rent}},- per maand</h2>
                    </div>
                </div>
            </section>

        <section class=" py-8 px-4 mx-auto max-w-screen-xl">
            <h2  class="font-semibold text-xl font-bold underline decoration-yellow-300 underline-offset-8 decoration-4 text-gray-800 leading-tight">
                Adres gegevens
            </h2>
            <div class="grid grid-cols-2 gap-6 mt-4 sm:grid-cols-4">
                <div class="p-6 bg-white rounded-lg shadow dark:bg-gray-800">
                    <h4 class="mb-2 text-lg font-semibold text-gray-800 dark:text-white">Adres</h4>
                    <p class="text-gray-600 dark:text-gray-400">{{$house->street_name . ' ' . $house->house_number . $house->house_number_addition}}</p>
                </div>
                <div class="p-6 bg-white rounded-lg shadow dark:bg-gray-800">
                    <h4 class="mb-2 text-lg font-semibold text-gray-800 dark:text-white">Postcode</h4>
                    <p class="text-gray-600 dark:text-gray-400">{{$house->postal_code}}</p>
                </div>
                <div class="p-6 bg-white rounded-lg shadow dark:bg-gray-800">
                    <h4 class="mb-2 text-lg font-semibold text-gray-800 dark:text-white">Plaats</h4>
                    <p class="text-gray-600 dark:text-gray-400">{{$house->city}}</p>
                </div>
                <div class="p-6 bg-white rounded-lg shadow dark:bg-gray-800">
                    <h4 class="mb-2 text-lg font-semibold text-gray-800 dark:text-white">Provincie</h4>
                    <p class="text-gray-600 dark:text-gray-400">{{$house->province}}</p>
                </div>
            </div>
            <h2  class="font-semibold text-xl my-3 font-bold underline decoration-yellow-300 underline-offset-8 decoration-4 text-gray-800 leading-tight">
                Algemene informatie
            </h2>
            <div class="grid grid-cols-2 gap-6 mt-4 sm:grid-cols-4">
                <div class="p-6 bg-white rounded-lg shadow dark:bg-gray-800">
                    <h4 class="mb-2 text-lg font-semibold text-gray-800 dark:text-white">Woonoppervlakte</h4>
                    <p class="text-gray-600 dark:text-gray-400">{{$house->living_area}} 75m<sup>2</sup></p>
                </div>
                <div class="p-6 bg-white rounded-lg shadow dark:bg-gray-800">
                    <h4 class="mb-2 text-lg font-semibold text-gray-800 dark:text-white">Aantal kamers</h4>
                    <p class="text-gray-600 dark:text-gray-400">{{$house->rooms}}</p>
                </div>
                <div class="p-6 bg-white rounded-lg shadow dark:bg-gray-800">
                    <h4 class="mb-2 text-lg font-semibold text-gray-800 dark:text-white">Gemeubileerd?</h4>
                    <p class="text-gray-600 dark:text-gray-400">
                        @if($house->furnished == 1)
                            <b>ja</b>
                        @else
                            <b>Nee</b>
                        @endauth
                    </p>
                </div>
            </div>
            <h2  class="font-semibold text-xl my-3 font-bold underline decoration-yellow-300 underline-offset-8 decoration-4 text-gray-800 leading-tight">
                Additionele informatie
            </h2>
            <div class="grid grid-cols-2 gap-6 mt-4 sm:grid-cols-4">

                <div class="p-6 bg-white rounded-lg shadow dark:bg-gray-800">
                    <h4 class="mb-2 text-lg font-semibold text-gray-800 dark:text-white">Tuin aanwezig?</h4>
                    <p class="text-gray-600 dark:text-gray-400">
                        @if($house->garden == 1)
                            <b>ja</b>
                        @else
                            <b>Nee</b>
                        @endauth
                    </p>
                </div>
                <div class="p-6 bg-white rounded-lg shadow dark:bg-gray-800">
                    <h4 class="mb-2 text-lg font-semibold text-gray-800 dark:text-white">Balkon aanwezig?</h4>
                    <p class="text-gray-600 dark:text-gray-400">
                        @if($house->balcony == 1)
                            <b>ja</b>
                        @else
                            <b>Nee</b>
                        @endauth
                    </p>
                </div>
                <div class="p-6 bg-white rounded-lg shadow dark:bg-gray-800">
                    <h4 class="mb-2 text-lg font-semibold text-gray-800 dark:text-white">Huisdieren toegestaan?</h4>
                    <p class="text-gray-600 dark:text-gray-400">
                        @if($house->pets_allowed == 1)
                            <b>ja</b>
                        @else
                            <b>Nee</b>
                        @endauth
                    </p>
                </div>
                <div class="p-6 bg-white rounded-lg shadow dark:bg-gray-800">
                    <h4 class="mb-2 text-lg font-semibold text-gray-800 dark:text-white">Roken toegestaan?</h4>
                    <p class="text-gray-600 dark:text-gray-400">
                        @if($house->smoking_allowed == 1)
                            <b>ja</b>
                        @else
                            <b>Nee</b>
                        @endauth
                    </p>
                </div>
            </div>
        </section>

        <!-- section with images and a white background and a load more button -->
        <section class="bg-white dark:bg-gray-800">
            <div class="container px-6 py-8 mx-auto">
                <h2  class="font-semibold text-xl my-3 font-bold underline decoration-yellow-300 underline-offset-8 decoration-4 text-gray-800 leading-tight">
                    Foto's
                </h2>
                <div class="grid grid-cols-2 gap-6 mt-4 sm:grid-cols-4">
                    @foreach($house->images as $image)
                        <div class="p-6 bg-white rounded-lg shadow dark:bg-gray-800">

                            <img src="{{asset('storage/images/' . $image->path)}}" alt="house image" class="w-full h-64 object-cover object-center">
                        </div>
                    @endforeach
                </div>
            </div>
            </section>

        <!--section with a white background and a form to send a message to the owner of the house -->
        <section class="bg-white dark:bg-gray-800">
            <div class="container px-6 py-8 mx-auto">
                <h2  class="font-semibold text-xl my-3 font-bold underline decoration-yellow-300 underline-offset-8 decoration-4 text-gray-800 leading-tight">
                    Stuur een bericht
                </h2>
                <div class="grid grid-cols-6 gap-6 mt-4 sm:grid-cols-4">
                    <div class="p-6 col-span-6 bg-white rounded-lg shadow dark:bg-gray-800">
                        <form action="" method="post">
                            @csrf
                            <div class="mb-4">
                                <label for="name" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Naam</label>
                                <input type="text" name="name" id="name" placeholder="Naam" value="{{old('name')}}" class="block w-full px-4 py-3 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 dark:focus:border-gray-400 dark:focus:shadow-outline-gray focus:border-indigo-300 focus:outline-none focus:shadow-outline-indigo">
                                @error('name')
                                <p class="text-red-500 text-xs italic">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="email" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Email</label>
                                <input type="email" name="email" id="email" placeholder="Email" value="{{old('email')}}" class="block w-full px-4 py-3 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 dark:focus:border-gray-400 dark:focus:shadow-outline-gray focus:border-indigo-300 focus:outline-none focus:shadow-outline-indigo">
                                @error('email')
                                <p class="text-red-500 text-xs italic">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="message" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Bericht</label>
                                <textarea name="message" id="message" rows="3" placeholder="Bericht" class="block w-full px-4 py-3 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 dark:focus:border-gray-400 dark:focus:shadow-outline-gray focus:border-indigo-300 focus:outline-none focus:shadow-outline-indigo">{{old('message')}}</textarea>
                                @error('message')
                                <p class="text-red-500 text-xs italic">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <button type="submit" class="px-4 py-2 text-white bg-indigo-500 rounded-md hover:bg-indigo-600 focus:bg-indigo-600 focus:outline-none">Verstuur</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</x-app-layout>
