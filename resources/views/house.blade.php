<x-app-layout>




    <main>



            <section class="bg-gray-200 dark:bg-gray-900">
                <div class="gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
                    <figure class="max-w-lg">
                    <img class="w-full dark:hidden rounded-lg" src="{{asset('storage/images/'.$house->image)}}">
                    <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">
                        <span><i class="fa-solid fa-vector-square"></i>  {{$house->surface}} m<sup>2</sup></span>
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


        <section class="bg-white dark:bg-gray-900">

            <div class="items-center py-8 px-4 mx-auto max-w-screen-xl">
                <h2  class="font-semibold text-xl font-bold underline decoration-yellow-300 underline-offset-8 decoration-4 text-gray-800 leading-tight">
                    Adres gegevens
                </h2>
                <div class="overflow-x-auto relative shadow-md sm:rounded-lg">

                    <table class="w-full mt-4 text-sm text-left text-gray-500 dark:text-gray-400">
                        <tbody>
                        <tr class="border-b border-gray-200 dark:border-gray-700">
                            <th scope="row" class="py-4 border-r px-6 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800 ">
                                <b>Adres</b>
                            </th>
                            <td class="py-4 px-6 bg-gray-50">
                                {{$house->street_name . ' ' . $house->house_number . $house->house_number_addition}}
                            </td>
                        </tr>
                        <tr class="border-b border-gray-200 dark:border-gray-700">
                            <th scope="row" class="py-4 border-r px-6 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800 ">
                                <b>Postcode</b>
                            </th>
                            <td class="py-4 px-6 bg-gray-50">
                                {{$house->postal_code}}
                            </td>
                        </tr>
                        <tr class="border-b border-gray-200 dark:border-gray-700">
                            <th scope="row" class="py-4 border-r px-6 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800 ">
                                <b>Woonplaats</b>
                            </th>
                            <td class="py-4 px-6 bg-gray-50">
                                {{$house->city}}
                            </td>
                        </tr>
                        <tr class="border-b border-gray-200 dark:border-gray-700">
                            <th scope="row" class="py-4 border-r px-6 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800 ">
                                <b>Provincie</b>
                            </th>
                            <td class="py-4 px-6 bg-gray-50">
                                {{$house->province}}
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="items-center py-8 px-4 mx-auto max-w-screen-xl">
                <h2  class="font-semibold text-xl font-bold underline decoration-yellow-300 underline-offset-8 decoration-4 text-gray-800 leading-tight">
                    Algemene informatie
                </h2>
                <div class="overflow-x-auto relative shadow-md sm:rounded-lg">

                    <table class="w-full mt-4 text-sm text-left text-gray-500 dark:text-gray-400">
                        <tbody>
                        <tr class="border-b border-gray-200 dark:border-gray-700">
                            <th scope="row" class="py-4 border-r px-6 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800 ">
                                <b>Huurprijs</b>
                            </th>
                            <td class="py-4 px-6 bg-gray-50">
                                €{{$house->rent}},- p.m. <sup>*</sup>
                            </td>
                        </tr>
                        <tr class="border-b border-gray-200 dark:border-gray-700">
                            <th scope="row" class="py-4 border-r px-6 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800 ">
                                <b>*Inclusief gas/water/licht?</b>
                            </th>
                            <td class="py-4 px-6 bg-gray-50">
                                @if($house->rent_with_extra_costs == 1)
                                    <b>Ja</b>
                                @else
                                    <b>Nee</b>
                                @endif
                            </td>
                        </tr>
                        <tr class="border-b border-gray-200 dark:border-gray-700">
                            <th scope="row" class="py-4 border-r px-6 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800 ">
                                <b>Woonoppervlakte</b>
                            </th>
                            <td class="py-4 px-6 bg-gray-50">
                                {{$house->surface}} m<sup>2</sup>
                            </td>
                        </tr>
                        <tr class="border-b border-gray-200 dark:border-gray-700">
                            <th scope="row" class="py-4 border-r px-6 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800 ">
                                <b>Aantal kamers</b>
                            </th>
                            <td class="py-4 px-6 bg-gray-50">
                                {{$house->rooms}}
                            </td>
                        </tr>
                        <tr class="border-b border-gray-200 dark:border-gray-700">
                            <th scope="row" class="py-4 border-r px-6 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800 ">
                                <b>Gemeubileerd?</b>
                            </th>
                            <td class="py-4 px-6 bg-gray-50">
                                @if($house->furnished == 1)
                                    <b>Ja</b>
                                @else
                                    <b>Nee</b>
                                @endif
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="items-center py-8 px-4 mx-auto max-w-screen-xl">
                <h2  class="font-semibold text-xl font-bold underline decoration-yellow-300 underline-offset-8 decoration-4 text-gray-800 leading-tight">
                    Additionele informatie
                </h2>
                <div class="overflow-x-auto relative shadow-md sm:rounded-lg">

                    <table class="w-full mt-4 text-sm text-left text-gray-500 dark:text-gray-400">
                        <tbody>
                        <tr class="border-b border-gray-200 dark:border-gray-700">
                            <th scope="row" class="py-4 border-r px-6 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800 ">
                                <b>Tuin aanwezig?</b>
                            </th>
                            <td class="py-4 px-6 bg-gray-50">
                                @if($house->garden == 1)
                                    <b>ja</b>
                                @else
                                    <b>Nee</b>
                                @endauth
                            </td>
                        </tr>
                        <tr class="border-b border-gray-200 dark:border-gray-700">
                            <th scope="row" class="py-4 border-r px-6 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800 ">
                                <b>Balkon aanwezig?</b>
                            </th>
                            <td class="py-4 px-6 bg-gray-50">
                                @if($house->balcony == 1)
                                    <b>ja</b>
                                @else
                                    <b>Nee</b>
                                @endauth
                            </td>
                        </tr>
                        <tr class="border-b border-gray-200 dark:border-gray-700">
                            <th scope="row" class="py-4 border-r px-6 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800 ">
                                <b>Huisdieren toegestaan?</b>
                            </th>
                            <td class="py-4 px-6 bg-gray-50">
                                @if($house->pets_allowed == 1)
                                    <b>ja</b>
                                @else
                                    <b>Nee</b>
                                @endauth
                            </td>
                        </tr>
                        <tr class="border-b border-gray-200 dark:border-gray-700">
                            <th scope="row" class="py-4 border-r px-6 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800 ">
                                <b>Roken toegestaan?</b>
                            </th>
                            <td class="py-4 px-6 bg-gray-50">
                                @if($house->smoking_allowed == 1)
                                    <b>ja</b>
                                @else
                                    <b>Nee</b>
                                @endauth
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>


        <!-- section with images and a white background and a load more button -->
        <section class="bg-white dark:bg-gray-800 ">
            <div class="items-center py-8 px-4 mx-auto max-w-screen-xl">
                <h2  class="font-semibold text-xl my-3 font-bold underline decoration-yellow-300 underline-offset-8 decoration-4 text-gray-800 leading-tight">
                    Foto's
                </h2>
                <div class="grid grid-cols-2 gap-6 mt-4 sm:grid-cols-4">
                    @foreach($house->images as $image)


                            <img src="{{asset('storage/images/' . $image->path)}}" alt="house image" class="w-full h-64 object-cover rounded-lg shadow-xl object-center">

                    @endforeach
                </div>
            </div>
            </section>

        <!--section with a white background and a form to send a message to the owner of the house -->
        <section class="bg-white dark:bg-gray-800">
            <div class="items-center py-8 px-4 mx-auto max-w-screen-xl">
                <h2  class="font-semibold text-xl my-3 font-bold underline decoration-yellow-300 underline-offset-8 decoration-4 text-gray-800 leading-tight">
                    Stuur een bericht
                </h2>
                <div class="grid grid-cols-6 gap-6 mt-4 sm:grid-cols-4">
                    <div class="p-6 col-span-6 bg-white rounded-lg shadow dark:bg-gray-800">
                        <form method="POST" action="{{route('send-message')}}" id="form">
                            @csrf
                            <input type="hidden" name="house_id" value="{{$house->id}}">
                            <div class="mb-4">
                                <label for="name" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Naam</label>
                                <input type="text" name="name" id="name" placeholder="Volledige naam"  class="block w-full px-4 py-3 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 dark:focus:border-gray-400 dark:focus:shadow-outline-gray focus:border-indigo-300 focus:outline-none focus:shadow-outline-indigo">

                            </div>
                            <div class="mb-4">
                                <label for="email" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Email</label>
                                <input type="email" name="email" id="email" placeholder="Emailadres"  class="block w-full px-4 py-3 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 dark:focus:border-gray-400 dark:focus:shadow-outline-gray focus:border-indigo-300 focus:outline-none focus:shadow-outline-indigo">
                            </div>
                            <div class="mb-4">
                                <label for="phone" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Telefoonnummer</label>
                                <input type="text" name="phone" id="phone" placeholder="Telefoonnummer"  class="block w-full px-4 py-3 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 dark:focus:border-gray-400 dark:focus:shadow-outline-gray focus:border-indigo-300 focus:outline-none focus:shadow-outline-indigo">
                            </div>
                            <div class="mb-4">
                                <label for="message" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Bericht</label>
                                <textarea name="message" id="message" rows="3" placeholder="Beste verhuurder, ik heb interrese in..." class="block w-full px-4 py-3 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 dark:focus:border-gray-400 dark:focus:shadow-outline-gray focus:border-indigo-300 focus:outline-none focus:shadow-outline-indigo">{{old('message')}}</textarea>

                            </div>
                            <div class="mb-4">
                                <button type="submit" class="` px-4 py-2 text-white bg-indigo-500 rounded-md hover:bg-indigo-600 focus:bg-indigo-600 focus:outline-none">Verzenden</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function() {

            $('.send').click(function() {

                try {

                    let error = 0;
                    //add invalid class to empty fields
                    $('input, textarea').each(function () {
                        if ($(this).val() == '' || $(this).val() == null) {
                            $(this).addClass('border-pink-500');
                        }
                    });

                    if (error > 0) {
                        alert('Please fill in all fields');
                        throw new Error('Please fill in all fields');
                    }

                    event.preventDefault()
                    //get the data from the form
                    let formData = new FormData($('#form')[0]);
                    //make the ajax call
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': "{{csrf_token()}}",
                        },
                        url: "{{route('send-message')}}",
                        type: 'POST',
                        data: formData,
                        dataType: 'JSON',
                        contentType: false,
                        cache: false,
                        processData: false,
                        success: function (data, xhr) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Verzonden!',
                                text: 'Je krijgt zo snel mogelijk een reactie in je mailbox!',
                            })

                        }
                    });
                } catch (e) {
                    console.log(e.message);
                }
            });

        });

    </script>

</x-app-layout>
