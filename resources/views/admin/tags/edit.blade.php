@extends('layouts.app')

@section('content')
   <div class="container">
      <div class="row py-5">
         <div class="col-8 offset-2">
            <form action="{{ route('admin.tags.update', $tags->id) }}" method="POST">
               @csrf
               @method('PATCH')
               @include('admin.tags.includes.form')
               <button type="submit" class="btn btn-primary">Edit tag</button>
            </form>
         </div>
      </div>
   </div>
@endsection