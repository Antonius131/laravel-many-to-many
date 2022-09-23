@extends('layouts.app')

@section('content')
   <div class="container">
      <div class="row py-5">
         <div class="col-8 offset-2">
            <form action="{{ route('admin.tags.store') }}" method="POST">
               @csrf
               @include('admin.tags.includes.form')
               
               <button type="submit" class="btn btn-primary">Create Tag</button>
            </form>
         </div>
      </div>
   </div>
@endsection
