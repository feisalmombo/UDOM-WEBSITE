<div class="form-group">
  <label for="post_title" class="col-sm-2 control-label">Post Title</label>
  <div class="col-sm-6">
   <input type="text" class="form-control" name="post_title" id="post_title" placeholder="
   Enter Post Title" value="{{ isset($post->post_title) ? $post->post_title : old('post_title') }}">
 </div>
</div>	

<div class="form-group">
  <label for="post_content" class="col-sm-2 control-label">Post Content</label>
  <div class="col-sm-6">
   <textarea  rows=7 class="form-control" name="post_content" id="post_content" placeholder="Enter Post Content">{{ isset($post->post_content) ? $post->post_content : old('post_content') }}</textarea>
 </div>
</div>

<div class="form-group">
  <label for="author" class="col-sm-2 control-label">Author</label>
  <div class="col-sm-6">
   <input type="text" class="form-control" name="author" id="author" placeholder="
   Enter Author" value="{{ isset($post->author) ? $post->author : old('author') }}">
 </div>
</div>