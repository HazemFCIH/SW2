@extends('layouts.adminlayouts.admin_design')
@section('content')

<div id="content">


    <form action ="{{url('/admin/dashboard/add_category')}}" method="post">

    <input class="form-group row" type="hidden" name="_token" value="{{ csrf_token() }}">
    <input name="name"> name
    <input name ="description"> description
    <input type="submit" value="submit">

    </form>


</div>

@endsection
