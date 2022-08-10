@include('header')

<x-guest-layout>

<div class="bg-white">
  <div class="grid justify-items-center grid-cols-1 gap-y-10 sm:grid-cols-2 gap-x-6 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
    <!-- <h2 class="sr-only">Postters List</h2> -->
    @foreach ($posts as $post)
    <div class="w-64 h-80">
      <a href="/posts/{{$post->id}}" class="group">
        <h3 class="mt-4 text-sm text-gray-700">{{ $post->user->name }}</h3>
        <div class="w-64 aspect-w-1 aspect-h-1 bg-gray-200 rounded-lg overflow-hidden xl:aspect-w-7 xl:aspect-h-8">
          <img src="{{$post->img_url}}" alt="Otters 💖" class="w-64 h-64 object-center object-cover group-hover:opacity-75">
        </div>
        <p class="mt-1 italic break-words text-lg font-medium text-gray-900">"{{$post->description}}"</p>
      </a>
    </div>
    @endforeach
  </div>
</div>

</x-guest-layout>
