<?php use App\Http\Controllers\CategoryController;
      use App\Http\Controllers\MovieController;
?>
@extends('layouts.adminlayouts.admin_design')
@section('content')
<div id="content">

<div class="container-fluid"><hr>
    <div class="span12">
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
        <td>
        <form action="{{ route('Movie.destroy',$row->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">
            Delete
            </button>
            </form>
        </td>

        </tr>

        @endforeach
    </table>

    </div>
    </div>
</div>
@endsection
