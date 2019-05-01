<?php use App\Http\Controllers\UserController;
use App\User;
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
        <th width="30">
        user name
        </th>
        <th width="%60">
        user email
        </th>
        </thead>
        @foreach($data as $row)
    <tr>
        <td>{{$row->id}}</td>
        <td>{{$row->name}}</td>
        <td>{{$row->email}}</td>

         <td>
        <form action="{{ route('User.destroy',$row->id)}}" method="post">
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
