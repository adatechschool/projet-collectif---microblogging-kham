@include('header')
<x-guest-layout>
<div class="grid grid-cols-4 gap-4">
@foreach ($posts as $post)
    <div class="group">
 <span class="table-row">
    <img class="fill-current h-8 w-8 mr-2" width="54" height="54" src="{{asset('008.png')}}">
    <p class="text-center">{{ $post->user->name }}</p> 
</span>
    <img class="flex justify-center" width ="250px" height="250px" src="{{$post->img_url}}" >
    <p class="text-center italic text-sm">"{{$post->description}}"</p>
 </div>
 @endforeach
</div>



</x-guest-layout>


