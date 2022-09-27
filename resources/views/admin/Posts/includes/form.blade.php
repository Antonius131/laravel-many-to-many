@if (request()->routeIs('admin.posts.edit'))    
   <div class="mb-3">
      <label for="input-autor" class="form-label">Author</label>
      <input type="text" name="author" class="form-control" id="input-autor"
      value="{{ request()->routeIs('admin.posts.edit') ? $post->user->name : '' }}">
   </div>
   @elseif (request()->routeIs('admin.posts.create'))
   <div class="mb-3">
      <p>Author: <strong>{{ Auth::user()->name }}</strong></p>
   </div>
@endif

<div class="mb-3">
   <label for="input-title" class="form-label">Title</label>
   <input type="text" name="title" class="form-control" id="input-title"
   value="{{ request()->routeIs('admin.posts.edit') ? $post->title : '' }}">
</div>
<div class="mb-3">
   <label for="input-image" class="form-label">Post image</label>
   <input type="file" name="post_image" class="form-control" id="input-image">
</div>



<div class="mb-3 form-group">
   <label for="input-tags" >Tags</label>
   @foreach ($tags as $tag)   
      <div class="form-check">
         <input 
            type="checkbox"
            name="tags[]"
            class="form-check-input"
            id="input-tags"
            value="{{ $tag->id }}"
            @if (isset($post))    
            {{ $post->tags->contains($tag) ? 'checked' : '' }}
            @endif
         >
         <label class="form-check-label" for="input-tags">{{ $tag->tag_name }}</label>
      </div>
   @endforeach
</div>

<div class="mb-3">
   <label class="form-label" for="create-textarea">Post text</label>
   <textarea name="article_text" class="form-control" id="create-textarea" rows="6">
      {{ request()->routeIs('admin.posts.edit') ? $post->article_text : '' }}
   </textarea>
</div>