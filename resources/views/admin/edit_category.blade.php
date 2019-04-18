<?php use App\Http\Controllers\CategoryController;?>
@extends('layouts.adminlayouts.admin_design')
@section('content')
<div id="content">
     <div class="container-fluid"><hr>
         <div class="span12">
           <form class="form-horizontal" method="post" action="{{ route('edit_category', $data->id) }}" name="basic_validate" id="basic_validate" novalidate="novalidate">
    @csrf
     @method('PATCH')
        <div class="control-group">
                <label class="control-label" > Category Name</label>
                <div class="controls">
                  <input class="form-control" name="cat_name" id="required" value="{{$data->cat_name}}">
                </div>
              </div>

        <div class="control-group">
                <label class="control-label">Category  Description</label>
                <div class="controls">
                  <input type="text" name ="cat_des" class="span7" value="{{$data->cat_des}}">
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
