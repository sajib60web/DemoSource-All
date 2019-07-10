@extends('master')
@section('title')
Home
@endsection
@section('homeContant')
<div class="container">
    @if(isset($details))
    <p> The Search results for your query <b> {{ $query }} </b> are :</p>
    <h2>Sample User details</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>country code</th>
                <th>country name</th>
            </tr>
        </thead>
        <tbody>
            @foreach($details as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->country_code}}</td>
                <td>{{$user->country_name}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @elseif(isset($message))
    <p>{{ $message }}</p>
    @endif
</div>
@endsection