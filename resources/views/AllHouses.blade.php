<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Alle Woningen') }}
        </h2>
    </x-slot>

    <div class="my-12 md:ml-12 sm:ml-4">
  <!-- Show all houses with cards -->
        <div class="grid grid-cols-3 gap-2">
@foreach($houses as $house)
            <div class="max-w-sm bg-white col-span-1 rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700 text-center">
                <a href="#">
                    <img class="rounded-t-lg  max-w-full max-h-full " src="storage/images/{{$house->image}}" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$house->street_name}} {{$house->house_number}}{{$house->house_number_addition}} </h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$house->postal_code}}, {{$house->city}}</p>
                    <div class="flex justify-between items-center pt-4">
                        <span class="text-2xl font-bold text-gray-900 dark:text-white">€{{$house->rent}} p.m.</span>
                        <a href="{{route('houses.show', $house)}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Bekijk woning</a>
                    </div>
                </div>
            </div>
    @endforeach
        </div>
    </div>
</x-app-layout>

