@extends('master')
@section('title')
Home
@endsection
@section('homeContant')
<div class="container">
    <h2 style="padding: 50px 0px 50px 0px;">How to implement search functionality in laravel</h2>
    <form action="{{url('/scearch')}}" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <input type="text" name="scearch" class="form-control" id="scearch" placeholder="Scearch.........">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>
@endsection