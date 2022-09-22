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
<div class="mb-3 form-check">
   @foreach ($tags as $tag)   
      <input type="checkbox" name="tags[]" class="form-check-input" id="input-tags"
      value="">
      <label for="input-tags" class="form-check-label">
         {{ $tag->tag_name }}
      </label>
   @endforeach
</div>
<div class="mb-3">
   <label class="form-label" for="create-textarea">Post text</label>
   <textarea name="article_text" class="form-control" id="create-textarea" rows="6">
      {{ request()->routeIs('admin.posts.edit') ? $post->article_text : '' }}
   </textarea>
</div>