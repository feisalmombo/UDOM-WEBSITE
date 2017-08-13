@extends('layouts.app')
@section('title','Add User')

@section('content')
<div class="panel panel-default">
  <div class="panel-heading">
    <div class="row">
     <div class="col-sm-6">Add User</div>
     <div class="col-sm-6">
      <a href="/users" class="pull-right">All Users</a>
    </div>
  </div>
</div>

<div class="panel-body">
 <form method="POST" action="/users" role="form" class="form-horizontal">

   {{ csrf_field() }}

   @include('Dashboard.Users._form')
   <div class="form-group">
     <div class="col-sm-2 col-sm-offset-2">
      <button type="submit" class="btn btn-primary form-control">Add User</button>
    </div>
  </div>
</form>
</div>
</div>
</div>
@endsection
