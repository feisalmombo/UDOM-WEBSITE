<div class="form-group">
      <label for="name" class="col-sm-2 control-label">Name</label>
    <div class="col-sm-6">
       <input type="name" class="form-control" name="name" id="name" placeholder="
    Enter User Name" value="{{ isset($user->name) ? $user->name : old('name') }}">
   </div>
</div>	

 <div class="form-group">
      <label for="email" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-6">
       <input type="email" class="form-control" name="email" id="email" placeholder="
    Enter User Email" value="{{ isset($user->email) ? $user->email : old('email') }}">
   </div>
</div>  

<div class="form-group">
      <label for="password" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-6">
       <input type="password" class="form-control" name="password" id="password" placeholder="
    Enter User Password" value="{{ isset($user->password) ? $user->password : old('password') }}">
   </div>
</div>  