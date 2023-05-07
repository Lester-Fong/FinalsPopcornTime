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
            <div class="bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg" style="padding:1.5rem">
                <div>
                    <h1 class="text-white" style=" margin-left: 1rem; font-weight: 700; font-size:1.5rem">Add Movie</h1>
                </div>
                <div class="mt-3">
                    <form method="POST" action="{{ route("createMovie") }}">
                        @csrf
                        <div class="mb-6">
                          <label class="block mb-2 text-sm font-medium text-white text-lg">Movie Title</label>
                          <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required name="movie_title">
                        </div>
                        <div class="inline-block relative w-64 mb-6">
                            <label class="block mb-2 text-sm font-medium text-white text-lg">Movie Rating</label>
                            <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline" name="movie_rating">
                              <option value="⭐⭐⭐⭐⭐">⭐⭐⭐⭐⭐</option>
                              <option value="⭐⭐⭐⭐">⭐⭐⭐⭐</option>
                              <option value="⭐⭐⭐">⭐⭐⭐</option>
                              <option value="⭐⭐">⭐⭐</option>
                              <option value="⭐">⭐</option>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                              <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                            </div>
                          </div>
                        <div class="inline-block relative w-64 mb-6">
                            <label class="block mb-2 text-sm font-medium text-white text-lg">Movie Genre</label>
                            <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline" name="movie_genre">
                              <option value="Crime">Crime</option>
                              <option value="Romance">Romance</option>
                              <option value="Drame">Drama</option>
                              <option value="Comedy">Comedy</option>
                              <option value="Action">Action</option>
                              <option value="Thriller">Thriller</option>
                              <option value="Horror">Horror</option>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                              <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                            </div>
                          </div>
                        <div class="inline-block relative w-64 mb-6">
                            <label class="block mb-2 text-sm font-medium text-white text-lg">Status</label>
                            <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline" name="movie_status">
                              <option value="Watched">Watched</option>
                              <option value="Not Finished">Not Finished</option>
                              <option value="To Watch">To Watch</option>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                              <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                            </div>
                          </div>
                        <div class="inline-block relative w-64 mb-6">
                            <label class="block mb-2 text-sm font-medium text-white text-lg">Platform</label>
                            <select class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline" name="movie_platform">
                              <option value="Netflix">Netflix</option>
                              <option value="HBO">HBO</option>
                              <option value="Disney plus">Disney plus</option>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                              <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                            </div>
                          </div>
                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
