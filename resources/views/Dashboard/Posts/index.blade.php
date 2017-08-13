@extends('layouts.app')
@section('title','Posts')

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        <div class="row">
            <div class="col-sm-6">All Posts <span class="badge">{{ $posts->count() }}</span></div>
            <div class="col-sm-6">
                <a href="/posts/create" class="pull-right"><i class="fa fa-plus" aria-hidden="true"> New Post</i></a>
            </div>
        </div>
    </div>

    <div class="panel-body">
       @if($posts->count()) 
       <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>SN</th>
                    <th>Post Title</th>
                    <th>Post Content</th>
                    <th>Author</th>
                    <th>Created Date</th>
                    <th>Updated Date</th>
                    <th colspan="3">Action</th>
                </tr>
            </thead>
            <tbody>
              @foreach($posts as $post)
              <tr>
              <td>{{ $counts++ }}</td>
                  <td>{{ str_limit($post->post_title, 10) }}</td>
                  <td>{{ str_limit($post->post_content, 20) }}</td>
                  <td>{{ str_limit($post->author, 10) }}</td>
                  <td>{{ $post->created_at->diffForHumans() }}</td>
                  <td>{{ $post->updated_at->diffForHumans() }}</td>
                  <td>
                    <a href="/posts/{{ $post->id }}/edit"><button class="btn btn-link"><i class="fa fa-pencil-square-o" aria-hidden="true">Edit</i></button></a>
                </td>

                <td>

                    <form action="/posts/{{ $post->id }}" method="POST" role="form">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-link"><i class="fa fa-trash" aria-hidden="true">Delete</i></button>
                    </form>
                </td>
                <td>
                    <a href="/posts/{{ $post->id }}"><button class="btn btn-link">Show</button></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@else
<div class="alert alert-info">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>No data has been Added.</strong>
</div>
@endif
{{-- {{ $posts->links() }} --}}
</div>
</div>
@endsection
