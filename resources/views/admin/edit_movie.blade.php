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
         <div class="span12">
           <form class="form-horizontal" method="post" action="{{ route('Movie.updateM', $data->id) }}" name="basic_validate" id="basic_validate" novalidate="novalidate" enctype="multipart/form-data">
    @csrf
        {{ method_field('PATCH') }}


                <div class="control-group">
                <label class="control-label" > Moive Name</label>
                <div class="controls">
                  <input class="form-control" name="mov_name" id="required" value="{{$data->mov_name}}">
                </div>
              </div>

        <div class="control-group">
                <label class="control-label">Add Movie Path for Iframs</label>
                <div class="controls">
                  <input type="text" name ="source_path" class="span7" value="{{$data->source_path}}">
                </div>
              </div>
     <div class="control-group">
                <label class="control-label">Add Img Path</label>
                <div class="controls">
                  <input type="file" name ="img_path" class="span7">
                    <img src="{{URL::to('/')}}/images/{{$data->img_path}}" class="img-thumbnail" width="70">
                    <input type="hidden" name="hid_img_path" value="{{$data->img_path}}">
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
</div>
@endsection
