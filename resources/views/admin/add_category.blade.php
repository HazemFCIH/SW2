@extends('layouts.adminlayouts.admin_design')
@section('content')

<div class="container-fluid" id="content">


    <form action ="{{url('/admin/dashboard/add_category')}}" method="post">
<div class="form-group">
    <input class="form-group row" type="hidden" name="_token" value="{{ csrf_token() }}">
    <input class="form-control" name="name"> name
    <input name ="description"> description
    <input class="form-control" type="submit" value="submit">

    </div>

    </form>
</div>

@endsection
