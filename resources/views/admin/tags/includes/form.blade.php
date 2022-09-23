<div class="mb-3">
   <label for="input-autor" class="form-label">Tag name</label>
   <input type="text" name="tag_name" class="form-control" id="input-autor"
   value="{{ request()->routeIs('admin.tags.edit') ? $tags->tag_name : '' }}">
</div>