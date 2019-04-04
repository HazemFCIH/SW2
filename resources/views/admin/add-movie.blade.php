@extends('layouts.adminlayouts.admin_design')
@section('content')

<div id="content">


    <form action ="{{url('/admin/dashboard/add_movies')}}" method="post">

    <input class="form-group row" type="hidden" name="_token" value="{{ csrf_token() }}">
    <input name="name"> name
    </br>
    </br>
    <input name ="description"> description
    </br>
    </br>
    <input name ="image_path"> image_path
    </br>
    </br>
    <input name ="source_path"> source_path
    </br>
    </br>
    <input type="submit" value="submit">

    </form>


</div>

@endsection

