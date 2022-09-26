@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row py-5">
      <div class="col-8 offset-2">
         <div class="row">
            <div class="col-12">
               <h6>Author: {{ $post->user->name }}</h6>
               <h1>{{ $post->title }}</h1>
               @if (Storage::disk()->exists($post->post_image))
               <img src="{{ asset('storage/' . $post->post_image) }}" class="img-fluid w-100 mb-2" alt="{{ $post->title }}">    
                  @else
                     <img src="{{ $post->post_image }}" class="img-fluid w-100 mb-2" alt="{{ $post->title }}">
               @endif
               <small>Date: {{ $post->date }}</small>
               <p class="mt-2">
                  @foreach ( $post->tags as $tag)
                     #{{ $tag->tag_name }} &nbsp
                  @endforeach
               </p>
            </div>
         </div>
         <div class="row mt-4">
            <div class="col-12">
               <p>{{ $post->article_text }}</p>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection