<?php use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MovieController;
?>
                 <?php
                       		 $catdata=CategoryController::index()
	 ?>
@extends('layouts.adminlayouts.admin_design')
@section('content')



<div id="content">

<div class="container-fluid"><hr>
    @if($message= Session::get('success'))

<div class="alert alert-success">
<p>{{$message}}</p>
</div>
@endif
@if($errors->any())
<div class="alert alert-danger">
<ul>
    @foreach($errors->all() as $error)
    <li>
    {{$error}}
    </li>
    @endforeach
    </ul>
</div>
@endif
 <form class="form-horizontal" method="post" action="{{ route('Movie.storeM') }}" name="basic_validate" id="basic_validate" novalidate="novalidate" enctype="multipart/form-data">
    @csrf
        <div class="control-group">
                <label class="control-label" > Moive Name</label>
                <div class="controls">
                  <input class="form-control" name="mov_name" id="required">
                </div>
              </div>

        <div class="control-group">
                <label class="control-label">Add Movie Path for Iframs</label>
                <div class="controls">
                  <input type="text" name ="source_path" class="span7">
                </div>
              </div>
     <div class="control-group">
                <label class="control-label">Add Img Path</label>
                <div class="controls">
                  <input type="file" name ="img_path" class="span7">
                </div>
              </div>
     <div class="control-group">
                <label class="control-label">Select Category</label>
                <div class="controls">
                  <select name="cat_id" class="span7">
                      @foreach($catdata as $row)
  <option value="{{$row->id}}">{{$row->cat_name}}</option>
                      @endforeach

</select>

                </div>
              </div>


     <div class="form-actions">
           <input class="btn btn-success" type="submit" name="add" value="submit">

                </div>




    </form>
</div>
</div>

@endsection

