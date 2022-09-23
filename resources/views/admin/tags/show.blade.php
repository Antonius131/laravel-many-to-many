@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row py-5">
      <div class="col-8 offset-2">
         <div class="row">
            <div class="col-12">
               <h3>Tag: {{ $tag->tag_name }}</h3>
               {{-- <p class="mt-2">
                  @foreach ( $post as $post)
                     {{ $tag->tag_name }}
                  @endforeach
               </p> --}}
            </div>
         </div>
      </div>
   </div>
</div>
@endsection