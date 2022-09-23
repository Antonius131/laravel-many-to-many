@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row py-5">
      <div class="col-8 offset-2">
         <div class="row">
            <div class="col-12">
               <h3>Tag: {{ $tag->tag_name }}</h3>
            </div>
         </div>
         <div class="row py-5">
            @forelse ($tag->posts as $post)
               <div class="col-6 mb-3">
                  <div class="card">
                     <div class="card-body">
                        <h6 class="card-title">
                           {{ $post->title }}
                        </h6>
                        <a href="{{ route('admin.posts.show', $post->id) }}" class="btn-link">
                           Go to post
                        </a>
                     </div>
                  </div>
               </div>
            @empty
               <h2>No posts assigned to this Tag</h2>
            @endforelse
         </div>
      </div>
   </div>
</div>
@endsection