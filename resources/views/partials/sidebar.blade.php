  <div class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
      <ul class="nav" id="side-menu">
        <li class="sidebar-search">
          <div class="input-group custom-search-form">
            <input type="text" class="form-control" placeholder="Search..." disabled="">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">
                <i class="fa fa-search"></i>
              </button>
            </span>
          </div>

        </li>
        <li>
          <a href="/home"><i class="fa fa-home fa-fw" aria-hidden="true"></i>&nbsp;Home</a>
        </li>

        <li>
          <a href="/posts"><i class="fa fa-book fa-fw" aria-hidden="true"></i>&nbsp; Posts</a></li>

          <li>

           @if(Auth::user()->is_admin == true)
           <a href="/users"><i class="fa fa-users" aria-hidden="true"></i>&nbsp; Users</a></li>
           @endif
           <li>
             <a href="Application"><i class="fa fa-cog fa-fw" aria-hidden="true"></i>&nbsp; Settings</a></li>
           </ul>
         </div>
       </div>