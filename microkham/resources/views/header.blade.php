
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav class="flex items-center justify-between flex-wrap bg-header p-6">
  <div class="flex items-center flex-shrink-0 text-white mr-6">
    <img class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54" src="{{asset('otter.png')}}"></img>
    <span class="font-semibold text-xl tracking-tight">Otter Lover</span>
  </div>
  <div class="block lg:hidden">
    <button class="flex items-center px-3 py-2 border rounded text-forest border-forest hover:text-forest hover:border-white">
      <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
    </button>
  </div>
  <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
    <div class="text-sm lg:flex-grow">
      <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-forest hover:text-white mr-4">
        Profilotter
      </a>
      <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-forest hover:text-white mr-4">
        Ottergraphy
      </a>
      <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-forest hover:text-white">
      <form class="flex items-center">
    <label for="simple-search" class="sr-only">>Otter Search</label>
    <div class="relative w-full">
        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
        </div>
        <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search" required>
    </div>
    <button type="submit" class="p-2.5 ml-2 text-sm font-medium text-header bg-button rounded-lg border border-header hover:bg-forest focus:ring-4 focus:outline-none focus:ring-white dark:bg-button dark:hover:bg-forest dark:focus:bg-forest">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
        <span class="sr-only">Otter Search</span>
    </button>
</form>
      </a>
    </div>
    <div>
      @if (Route::has('login'))
                <div class="block mt-4 lg:inline-block lg:mt-0 text-forest hover:text-white mr-4">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-forest hover:text-white underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 text-forest hover:text-white underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-forest hover:text-white underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
    </div>
  </div>
</nav>
</body>
</html>
