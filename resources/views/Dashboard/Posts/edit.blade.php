@extends('layouts.app')
@section('title','Update Post')

@section('content')
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                	<div class="col-sm-6">Update Post</div>
                	<div class="col-sm-6">
                		<a href="/posts" class="pull-right">All Posts</a>
                	</div>
                </div>
                </div>

                <div class="panel-body">
        <form method="POST" action="/posts/{{ $post->id }}" role="form" class="form-horizontal">

{{ csrf_field() }}

{{ method_field('PATCH') }}

@include('Dashboard.Posts._form')



<div class="form-group">
<div class="col-sm-2 col-sm-offset-2">
<button type="submit" class="btn btn-primary form-control">Update Post</button>
</div>
</div>
</form>
    </div>
</div>
</div>
@endsection
