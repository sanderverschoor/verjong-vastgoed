<x-app-layout>
    <x-slot name="header">
        <h2 id="pagetitle" class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Huis toevoegen') }}
        </h2>
    </x-slot>

    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <!-- Replace with your content -->
            <div class="px-4 py-6 sm:px-0">
                <div id="formcard" class="rounded-lg border-2 bg-white border border-gray-100 shadow-md">
                    <div id="fileupload" class="hidden flex justify-center items-center w-full">
                        <label for="dropzone-file" class="flex flex-col justify-center items-center w-full h-64 bg-gray-50 rounded-lg border-2 border-gray-300 border-dashed cursor-pointer hover:bg-gray-100  ">
                            <div class="flex flex-col justify-center items-center pt-5 pb-6">
                                <svg aria-hidden="true" class="mb-3 w-10 h-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                            </div>
                            <input id="dropzone-file" type="file" class="hidden" />
                        </label>
                    </div>
                    <form id="form"  enctype="multipart/form-data">
                        @csrf
                        <div class="shadow sm:overflow-hidden sm:rounded-md">
                            <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                                <h1 class="text-2xl my-3 font-bold">Algemene gegevens</h1>
                                <div class="grid grid-cols-3 gap-2">
                                    <div class="col">
                                        <label for="building_name" class="block text-sm font-medium text-gray-700">Naam gebouw (optioneel)</label>
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <input type="text" name="building_name" id="building_name" class="block w-full flex-1 rounded-md rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <label for="rent" class="block text-sm font-medium text-gray-700">huurprijs</label>
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <span class="inline-flex items-center rounded-l-md border border-r-0 border-gray-300 bg-gray-50 px-3 text-sm text-gray-500">€</span>
                                            <input type="number" name="rent" id="rent" class="block w-full flex-1  rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm invalid:border-pink-500 invalid:text-pink-600" >
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <label for="about" class="block text-sm font-medium text-gray-700">Omschrijving woning</label>
                                    <div class="mt-1">
                                        <textarea id="description" name="description" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Dit huis is gebouwd in.."></textarea>
                                    </div>
                                    <p class="mt-2 text-sm text-gray-500">Beschrijf de woning zo duidelijk mogelijk om een zo'n groot mogelijke groep aan te spreken.</p>
                                </div>
                                <div class="grid grid-cols-6 gap-2">
                                <div class="col-span-3 md:col-span-1">
                                    <label for="floors" class="block text-sm font-medium text-gray-700">Aantal verdiepingen</label>
                                    <div class="mt-1 flex rounded-md shadow-sm">
                                        <input type="number" name="floors" id="floors" class="block w-full flex-1 rounded-md rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                    </div>
                                </div>
                                    <div class="col-span-3 md:col-span-1">
                                        <label for="rooms" class="block text-sm font-medium text-gray-700">Aantal kamers</label>
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <input type="number" name="rooms" id="rooms" class="block w-full flex-1 rounded-md rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                        </div>
                                    </div>
                                </div>

                                <h1 class="text-2xl my-4 font-bold">Adresgegevens</h1>

                                <div class="grid grid-rows-2 grid-cols-8 md:grid-cols-6 gap-2">
                                    <div class="col-span-4 md:col-span-4w">
                                        <label for="street_name" class="block text-sm font-medium text-gray-700">Straatnaam</label>
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <input type="text" name="street_name" id="street_name" class="block w-full flex-1 rounded-md rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                        </div>
                                    </div>
                                    <div class="col-span-2 md:col-span-1">
                                        <label for="house_number" class="block text-sm font-medium text-gray-700">Huisnummer</label>
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <input type="number" name="house_number" id="house_number" class="block w-full flex-1 rounded-md rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                        </div>
                                    </div>
                                    <div class="col-span-2 md:col-span-1">
                                        <label for="house_number_addition" class="block text-sm font-medium text-gray-700">Toevoeging</label>
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <input type="text" name="house_number_addition" id="house_number_addition" class="block w-full flex-1 rounded-md rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                        </div>
                                    </div>
                                    <div class="col-span-3 md:col-span-2">
                                        <label for="city" class="block text-sm font-medium text-gray-700">Woonplaats</label>
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <input type="text" name="city" id="city" class="block w-full flex-1 rounded-md rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                        </div>
                                    </div>
                                    <div class="col-span-2 md:col-span-2">
                                        <label for="postal_code" class="block text-sm font-medium text-gray-700">Postcode</label>
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                            <input type="text" name="postal_code" id="postal_code" class="block w-full flex-1 rounded-md rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                        </div>
                                    </div>
                                    <div class="col-span-3 md:col-span-2">
                                        <label for="province" class="block text-sm font-medium text-gray-700">Provincie</label>
                                        <div class="mt-1 flex rounded-md shadow-sm">
                                           <select name="province" class="block w-full flex-1 rounded-md rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                                                  <option value="Drenthe">Drenthe</option>
                                                  <option value="Flevoland">Flevoland</option>
                                                  <option value="Friesland">Friesland</option>
                                                  <option value="Gelderland">Gelderland</option>
                                                  <option value="Groningen">Groningen</option>
                                                  <option value="Limburg">Limburg</option>
                                                  <option value="Noord-Brabant">Noord-Brabant</option>
                                                  <option value="Noord-Holland">Noord-Holland</option>
                                                  <option value="Overijssel">Overijssel</option>
                                                  <option value="Utrecht">Utrecht</option>
                                                  <option value="Zeeland">Zeeland</option>
                                                  <option value="Zuid-Holland">Zuid-Holland</option>
                                           </select>

                                        </div>
                                    </div>
                                </div>

                                <h1 class="text-2xl font-bold">Extra informatie</h1>

                                <div class="col-span-2">
                                    <label class="block text-sm font-medium text-gray-700"><b>Cover afbeelding</b></label>
                                    <label class="block">
                                        <input type="file" id="image" name="image" class="block w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 mt-3 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-violet-50 file:text-violet-700 hover:file:bg-violet-100"/>
                                    </label>
                                </div>

                                <fieldset>
                                    <legend class="sr-only">By Email</legend>
                                    <div class="text-base font-medium text-gray-900" aria-hidden="true"><b>Vink aan wat van toepassing is</b></div>
                                    <div class="mt-4 space-y-4">
                                        <div class="flex items-start">
                                            <div class="flex h-5 items-center">
                                                <input id="pets_allowed" name="pets_allowed" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="pets_allowed" class="font-medium text-gray-700">Huisdieren toegestaan</label>
                                            </div>
                                        </div>
                                        <div class="flex items-start">
                                            <div class="flex h-5 items-center">
                                                <input id="smoking_allowed" name="smoking_allowed" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="smoking_allowed" class="font-medium text-gray-700">Roken toegestaan</label>
                                            </div>
                                        </div>
                                        <div class="flex items-start">
                                            <div class="flex h-5 items-center">
                                                <input id="furnished" name="furnished" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="furnished" class="font-medium text-gray-700">Gemeubileerd</label>
                                            </div>
                                        </div>
                                        <div class="flex items-start">
                                            <div class="flex h-5 items-center">
                                                <input id="garden" name="garden" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="garden" class="font-medium text-gray-700">Tuin</label>
                                            </div>
                                        </div>
                                        <div class="flex items-start">
                                            <div class="flex h-5 items-center">
                                                <input id="balcony" name="balcony" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="balcony" class="font-medium text-gray-700">balkon</label>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                                <button type="button"name="save" id="save" class="save inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <script>



     $(document).ready(function() {

        function change() {
            $( "#form" ).fadeOut(1000);
            $("#pagetitle").html("Foto's uploaden");
            setTimeout(fadein, 1000);
        }



        function fadein() {
            $('#fileupload').fadeIn(1000);
        }
         change();
         //Jqeury loop trough all the inputs and check if they are empty except the house_number_addition

         $('.save').click(function() {

             try {

                 let error = 0;
                 //add invalid class to empty fields
                 $('input, textarea').not('.building_name').each(function () {
                     if ($(this).val() == '' || $(this).val() == null) {
                         $(this).addClass('border-pink-500');
                         error++;
                     }
                 });

                 if (error > 0) {
                     alert('Please fill in all fields');
                     throw new Error('Please fill in all fields');
                 }

                 event.preventDefault()
                 //get the data from the form
                    let formData = new FormData($('#form')[0]);
                 console.log(formData);
                 //make the ajax call
                 $.ajax({
                     headers: {
                         'X-CSRF-TOKEN': "{{csrf_token()}}",
                     },
                     url: "{{route('houses.store')}}",
                     type: 'POST',
                     data: formData,
                     dataType: 'JSON',
                     contentType: false,
                     cache: false,
                     processData: false,
                     success: function (data, xhr) {
                         //if the data is saved successfully, show a success message
                         console.log(data);
                         $( "#form" ).fadeOut(1000);
                         $( "#form" ).remove();

                     }
                 });
             } catch (e) {
                 console.log(e.message);
             }
         });
     });





    </script>

</x-app-layout>
