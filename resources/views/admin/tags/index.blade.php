@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row py-5">
      <div class="col-10 offset-1">
         <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
              </tr>
            </thead>
            <tbody>
               @forelse ($tags as $tag)                  
                  <tr>
                     <td>
                        {{ $tag->id }}
                     </td>
                     <td>
                        {{ $tag->tag_name }}
                     </td>
                     <td>
                        <a href="{{ route('admin.tags.edit', $post->id) }}" class="btn btn-outline-primary">Edit</a>
                     </td>
                     <td>
                        <form action="{{ route('admin.tags.destroy', $post->id) }}" method="POST">
                           @csrf
                           @method('DELETE')
         
                           <button type="submit" class="btn btn-outline-danger">Delete</button>
                        </form>
                     </td>
                  </tr>
               @empty
                  <h2 class="text-center">No tags to show</h2>
               @endforelse
            </tbody>
          </table>
      </div>
   </div>
</div>
@endsection