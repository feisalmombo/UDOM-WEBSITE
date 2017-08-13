@extends('layouts.app')
@section('title','Show Post')

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        <div class="row">
         <div class="col-sm-6">{{ $post->post_title }}</div>
         <div class="col-sm-6">
          <a href="/posts" class="pull-right">All Posts</a>
      </div>
  </div>
</div>

<div class="panel-body">
    .<div class="table-responsive">
    <table class="table table-hover">
        <tbody>
            <tr>
            <td><label for="id">Post Id:</label></td>
                <td>{{ $post->id }}</td>
            </tr>
            <tr>
                <td><label for="post_title">Post Title:</label></td>
                <td>{{ $post->post_title }}</td>
            </tr>
            <tr>
                <td><label for="post_content">Post Content:</label></td>
                <td>{{ $post->post_content }}</td>
            </tr>
            <tr>
                <td><label for="author">Author:</label></td>
                <td>{{ $post->author }}</td>
            </tr>
            <tr>
                <td><label for="created_at">Created Date:</label></td>
                <td>{{ $post->created_at->diffForHumans() }}</td>
            </tr>

            <tr>
                <td><label for="updated_at">Updated Date:</label></td>
                <td>{{ $post->updated_at->diffForHumans() }}</td>
            </tr>
        </tbody>
    </table>
</div>

</div>
</div>
</div>
@endsection
