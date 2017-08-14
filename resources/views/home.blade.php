@extends('layouts.app')
@section('title','Home')

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        <div class="row">
            <div class="col-sm-6">WELCOME TO UDOM-WEBSITE</div>
            <div class="col-sm-6">

            </div>
        </div>
    </div>

    <div class="panel-body">
     <div id="page-wrapper">
        <div class="row">
           <div class="col-lg-12">
              <div class="panel panel-default">
                <div class="panel-heading">
                 Home
             </div>
             <!-- .panel-heading -->
             <div class="panel-body">
                <div class="panel-group" id="accordion">
                <p align='justify'>You have successfully logged in to the University of Dodoma Website (UDOM-WEBSITE).You currently have access to the following sections</p>
                </br>
                <ul>
                    <li>Edit Users</li>
                    <li>Edit Posts</li>
                    <li>Show Users</li>
                    <li>Show Posts</li>
                    <li>Delete Users</li>
                    <li>Delete Posts</li>
                </ul>
            </br></br></br>                         
            Please select appropriate action to continue...!
        </div>
    </div>
    <!-- .panel-body -->
</div>
<!-- /.panel -->
</div>
<!-- /.col-lg-12 -->
</div>            
<!-- /.row -->
</div>
</div>
</div>
@endsection
