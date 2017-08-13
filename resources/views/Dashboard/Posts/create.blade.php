@extends('layouts.app')
@section('title','Add Post')

@section('content')
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                	<div class="col-sm-6">Add Post</div>
                	<div class="col-sm-6">
                		<a href="/posts" class="pull-right">All Posts</a>
                	</div>
                </div>
                </div>

                <div class="panel-body">
 <form method="POST" action="/posts" role="form" class="form-horizontal">

 {{ csrf_field() }}

  @include('Dashboard.Posts._form')

 

<div class="form-group">
	<div class="col-sm-2 col-sm-offset-2">
		<button type="submit" class="btn btn-primary form-control">Add Post</button>
	</div>
</div>
</form>
                </div>
            </div>
            </div>
@endsection
