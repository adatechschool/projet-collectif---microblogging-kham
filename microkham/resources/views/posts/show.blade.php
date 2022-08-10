@include('header')

<x-guest-layout>
  <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-white">
    <a href="/users/{{$post->user->id}}" class=>{{$post->user->name}}:</a>
    <img src="{{ $post->img_url }}" class="w-64 h-auto">
    <p>{{$post->description}}</p>
  </div>
</x-guest-layout>
