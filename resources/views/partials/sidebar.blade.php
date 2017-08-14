<div class="list-group">
  <a class="list-group-item {{ request()->fullUrl() == url('/home') ? 'active' : '' }}" href="/home"><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp; Home</a>
  <a class="list-group-item {{ request()->fullUrl() == url('/posts') ? 'active' : '' }}" href="/posts"><i class="fa fa-book fa-fw" aria-hidden="true"></i>&nbsp; Posts</a>
  
  @if(Auth::user()->is_admin == true)
  <a class="list-group-item {{ request()->fullUrl() == url('/users') ? 'active' : '' }}" href="/users"><i class="fa fa-users" aria-hidden="true"></i>&nbsp; Users</a>
  @endif
  <a class="list-group-item" href="#"><i class="fa fa-cog fa-fw" aria-hidden="true"></i>&nbsp; Settings</a>
</div>
