<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Alle Woningen') }}
        </h2>
    </x-slot>

    <div class="my-12 md:ml-12 sm:ml-4 md:pb-10">
  <!-- Show all houses with cards -->
        <div class="grid grid-cols-3 gap-2">
@foreach($houses as $house)
            <div class="max-w-sm bg-white col-span-1 rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 text-center" id="house{{$house->id}}">
                <a href="{{route('houses.show', $house)}}">
                    <img class="rounded-t-lg  max-w-full max-h-full " src="storage/images/{{$house->image}}" alt="" />
                </a>
                <div class="p-5">
                    <a href="{{route('houses.show', $house)}}">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$house->street_name}} {{$house->house_number}}{{$house->house_number_addition}} </h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$house->postal_code}}, {{$house->city}}</p>
                    <div class="flex justify-between items-center pt-4">
                        <span class="text-2xl font-bold text-gray-900 dark:text-white">€{{$house->rent}} p.m.</span>
                        <button type="button" id="{{$house->id}}" class="delete focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"><i class="fa-sharp fa-solid fa-trash"></i></button>

                        <a href="{{route('houses.show', $house)}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Bekijk woning</a>
                    </div>
                </div>
            </div>
    @endforeach
        </div>
    </div>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function() {

            $('.delete').click(function() {
                Swal.fire({
                    title: 'Weet je dit zeker?' ,
                    text: 'deze wijzigen kan niet ongedaan worden gemaakt',
                    icon: 'error',
                    showDenyButton: true,
                    showCancelButton: false,
                    confirmButtonText: 'Annuleren',
                    denyButtonText: 'Verwijderen',
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {

                    } else if (result.isDenied) {
                        let id = $(this).attr("id");

                        $.ajax({
                            headers: {
                                'X-CSRF-TOKEN': "{{csrf_token()}}",
                            },
                            url: "houses/"+id,
                            type: 'DELETE',
                        });

                        $('#house'+id).hide();

                        Swal.fire('De woning is verwijderd!', '', 'success')

                    }
                })
            });


        });
    </script>
</x-app-layout>

