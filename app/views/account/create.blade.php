@extends('layout.main')

@section('content')
    <form action="{{ URL::route('account-create') }}" method="post">

        <div class="field">
            Email: <input type="text" name="email">
        </div>

        <div class="field">
            Username: <input type="text" name="username">
        </div>

        <div class="field">
            Password: <input type="password" name="password">
        </div>

        <div class="field">
            Confirm Password: <input type="password" name="password_confirm">
        </div>

        <div class="field">
            Business Type: <input type="radio" name="type" value = "broker">Broker
                           <input type="radio" name="type" value = "dealer">Dealer
        </div>

        <div class="field">
            Phone Number: <input type="text" name="phone">
        </div>

        <div class="field">
            Website: <input type="text" name="website">
        </div>

        <input type="submit" value="Create Account">
        {{ Form::token() }}
    </form>
@stop