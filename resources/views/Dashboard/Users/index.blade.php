@extends('layouts.app')
@section('title','Users')

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
       <div class="row">
           <div class="col-sm-6">All Users <span class="badge">{{ $users->count() }}</span></div>
           <div class="col-sm-6">
              <a href="/users/create" class="pull-right"><i class="fa fa-plus" aria-hidden="true"> Add User</i></a>
          </div>
      </div>
  </div>

  <div class="panel-body">
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>SN</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>IsAdmin</th>
                    <th>Created_at</th>
                    <th>Updated_at</th>
                    <th colspan="3">Action</th>
                </tr>
            </thead>
            @foreach($users as $user)
            <tbody>
                <tr>
                    <td>{{ $counts++ }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        @if($user->is_admin == false)
                        <form action="/users/{{$user->id}}/is-admin" method="POST" role="form">

                            {{ csrf_field() }}

                            <button type="submit" class="btn btn-link">Normal User</button>
                        </form>
                        @else
                        <form action="/users/{{$user->id}}/is-admin" method="POST" role="form">

                            {{ csrf_field() }}


                            <button type="submit" class="btn btn-link">Admin</button>
                        </form>
                        @endif
                    </td>
                    <td>{{ $user->created_at->diffForHumans() }}</td>
                    <td>{{ $user->updated_at->diffForHumans() }}</td>
                    <td>
                        <a href="/users/{{ $user->id }}/edit"><button class="btn btn-link"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                    </td>

                    <td>

                        <form action="/users/{{ $user->id }}" method="POST" role="form">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-link"><i class="fa fa-trash" aria-hidden="true"> Delete</i></button>
                        </form>
                    </td>
                    <td>
                        <a href="/users/{{ $user->id }}"><button class="btn btn-link">show</button></a>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
</div>
@endsection
