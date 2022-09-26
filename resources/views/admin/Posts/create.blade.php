@extends('layouts.app')

@section('content')
   <div class="container">
      <div class="row py-5">
         <div class="col-8 offset-2">
            <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
               @csrf
               @include('admin.posts.includes.form')
               <button type="submit" class="btn btn-primary">Create post</button>
            </form>
         </div>
      </div>
   </div>
@endsection
