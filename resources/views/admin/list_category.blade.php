<?php use App\Http\Controllers\CategoryController;?>
@extends('layouts.adminlayouts.admin_design')
@section('content')
<div id="content">

<div class="container-fluid"><hr>
    <div class="span12">
    <table class="table table-bordered table-striped">
        <thead>
        <th width="10%">
        number
        </th>
        <th width="30">
        category name
        </th>
        <th width="%60">
        categroy descrption
        </th>
        </thead>
        @foreach($data as $row)
    <tr>
        <td>{{$row->id}}</td>
        <td>{{$row->cat_name}}</td>
        <td>{{$row->cat_des}}</td>
        <td><a href="{{route('edit_category', $row->id)}}" class="btn btn-warning">Edit</a></td>
        </tr>

        @endforeach
    </table>
        </div>
    </div>
</div>
@endsection
