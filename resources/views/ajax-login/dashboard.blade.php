@extends('master')
@section('title')
laravel login with ajax
@endsection
@section('homeContant')
<div class="container" style="border: 2px solid green;">
    <div class="row">
        <div class="col-md-6">
            <h1 style="text-align: center;">Dashboard</h1>
        </div>
        <div class="col-md-6">
            <a style="float: right; margin-top: 20px;
    margin-bottom: 10px;" href="{{ url('/logout') }}">LogOut</a>
        </div>
    </div>
</div>

<script type="text/javascript">
    window.onload = function () {
        $(document).ready(function(){

        });
    };
</script>
@endsection