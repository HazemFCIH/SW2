<?php use App\Http\Controllers\CategoryController;?>
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
 <form class="form-horizontal" method="post" action="{{ route('Category.store') }}" name="basic_validate" id="basic_validate" novalidate="novalidate">
    @csrf
        <div class="control-group">
                <label class="control-label" > Category Name</label>
                <div class="controls">
                  <input class="form-control" name="cat_name" id="required">
                </div>
              </div>

        <div class="control-group">
                <label class="control-label">Category  Description</label>
                <div class="controls">
                  <input type="text" name ="cat_des" class="span7">
                </div>
              </div>

     <div class="form-actions">
           <input class="btn btn-success" type="submit" name="add" value="submit">

                </div>




    </form>
</div>
</div>
@endsection
