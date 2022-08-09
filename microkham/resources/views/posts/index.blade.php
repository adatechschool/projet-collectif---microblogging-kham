<x-guest-layout>
@foreach ($posts as $post)
<div class="grid grid-cols-4 gap-4">
    <p class="text-center">{{ $post->user->name }}</p>
    <div class="flex justify-center"><img width ="250px" height="250px" src="{{$post->img_url}}" ></div>
    <p class="text-center">"{{$post->description}}"</p>
    
</div>

@endforeach


</x-guest-layout>


