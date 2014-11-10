@extends('layout.main')

@section('content')
    <form action="{{ URL::route('account-create') }}" method="post">
        <input type="submit" value="Create Account">
        {{ Form::token() }}
    </form>
@stop