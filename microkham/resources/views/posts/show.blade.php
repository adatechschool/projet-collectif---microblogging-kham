@include('header')

<x-guest-layout>
  <div class="min-h-screen flex flex-col justify-center sm:justify-center items-center pt-6 sm:pt-0 bg-white">
    <div class = "w-screen text-center sm:max-w-md mt-6 px-6 py-4 bg-forest shadow-md overflow-hidden sm:rounded-lg">
      <a href="/users/{{$post->user->id}}" class="text-xl font-bold pb-5">{{$post->user->name}}</a>
      <div class= " grid justify-items-center"><img src="{{ $post->img_url }}" class="pt-5 w-4/5 h-auto "></div>
      <br>
      <p class="italic break-words">"{{$post->description}}"</p>
    </div>
  </div>
</x-guest-layout>
