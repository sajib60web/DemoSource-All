@extends('master')
@section('title')
Home
@endsection
@section('homeContant')
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h1 style="text-align: center;">Ajax Autocomplete in Laravel</h1>
            <input class="form-control" id="search" type="text"  name="search" placeholder="Search">
            <div id="live_search"></div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>

<script type="text/javascript">
    window.onload = function () {
        $(document).ready(function(){
            $( "#search" ).autocomplete({
                source: '{{ URL::to("autocomplete") }}'
            });
        });
    };
</script>
@endsection