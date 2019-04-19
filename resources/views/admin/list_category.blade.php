<?php use App\Http\Controllers\CategoryController;?>
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
         <td>
        <form action="{{ route('Category.destroy',$row->id)}}" method="post">
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
