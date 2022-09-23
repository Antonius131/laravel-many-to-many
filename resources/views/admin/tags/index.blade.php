@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row py-5">
      <div class="col-6 offset-3">
         <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col"></th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
               @forelse ($tags as $tag)                  
                  <tr>
                     <td>
                        {{ $tag->id }}
                     </td>
                     <td>
                        <a href="{{ route('admin.tags.show', $tag->id) }}">{{ $tag->tag_name }}</a>
                     </td>
                     <td>
                        <a href="{{ route('admin.tags.edit', $tag->id) }}" class="btn btn-outline-primary">Edit</a>
                     </td>
                     <td>
                        <form action="{{ route('admin.tags.destroy', $tag->id) }}" method="POST">
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
          {{ $tags->links() }}
      </div>
   </div>
</div>
@endsection