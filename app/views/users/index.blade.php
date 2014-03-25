@extends('layouts.default')

@section('header')

<style>
body {
    font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; 
    font-weight: 300;
    padding-top: 40px;
    padding-bottom: 40px;
}

</style>

@stop

@section('content')

<div class="container">

    <div class="page-header">
    
        <h1>Users</h1>

    </div>
    
    <h2>Database</h2>

    <h3>Users</h3>

    <h4>Total</h4>

    <P>{{ $users = DB::table('users')->count(); }}</p>

    <h4>Online Now!</h4>

    <p>2</p>

    <hr />

    {{ link_to_route('register', 'Create New User') }}

</div>

@stop