<?php use App\Http\Controllers\CategoryController;
      use App\Http\Controllers\MovieController;
?>
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
        <th width="20">
        Movie name
        </th>
        <th width="10">
        categroy
        </th>
            <th width="%30">
        Poster
        </th>
             <th width="%30">
        Movie link
        </th>

        </thead>
        @foreach($data as $row)
    <tr>
        <td>{{$row->id}}</td>
        <td>{{$row->mov_name}}</td>
        <td>{{$row->cat_id}}</td>
        <td><img src="{{URL::to('/')}}/images/{{$row->img_path}}" class="img-thumbnail" width="75"></td>
        <td><a href="{{$row->source_path}}" target="_blank">{{$row->mov_name}}</a></td>
<td><a href="{{route('edit_movie', $row->id)}}" class="btn btn-warning">Edit</a></td>

        </tr>

        @endforeach
    </table>

    </div>
    </div>
</div>
@endsection
