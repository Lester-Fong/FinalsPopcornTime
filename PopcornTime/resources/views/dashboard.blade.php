<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-start items-center">
            <h1 class="font-bold text-xl text-gray-800 leading-tight" style="margin-right: 1rem; font-weight: 700">
                {{ __('Movies') }}
            </h1>
           <a href="{{ route('createMovie') }}" class="bg-gray-800 text-white text-sm py-2 px-4 rounded-md">Add Movie</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="mt-3">
                    <table class="table-auto w-full">
                        <thead class="bg-gray-800 text-white">
                            <tr>
                                <th class="px-4 py-2">Movie name</th>
                                <th class="px-4 py-2">Rating</th>
                                <th class="px-4 py-2">Genre</th>
                                <th class="px-4 py-2">Status</th>
                                <th class="px-4 py-2">Platform</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            @foreach ($movie_records as $item)
                            <tr>
                                <td class="border px-4 py-2">{{ $item->movie_title}}</td>
                                <td class="border px-4 py-2">{{ $item->movie_ratings}}</td>
                                <td class="border px-4 py-2">{{ $item->movie_genre}}</td>
                                <td class="border px-4 py-2"> {{$item->movie_status}}</td>
                                <td class="border px-4 py-2">{{ $item->movie_platform}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
    </div>
</x-app-layout>
