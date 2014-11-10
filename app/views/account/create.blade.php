@extends('layout.main')

@section('content')

    <form action="{{ URL::route('account-create') }}" method="post">

        <div class="field">
            Email: <input type="text" name="email" {{ (Input::old('email')) ? ' value="' . e(Input::old('email')) . '"' : '' }}>
            @if($errors->has('email'))
                {{ $errors->first('email') }}
            @endif
        </div>

        <div class="field">
            Username: <input type="text" name="username"  {{ (Input::old('username')) ? ' value="' . e(Input::old('username')) . '"' : '' }}>
             @if($errors->has('username'))
                 {{ $errors->first('username') }}
             @endif
        </div>

        <div class="field">
            Password: <input type="password" name="password">
             @if($errors->has('password'))
                 {{ $errors->first('password') }}
             @endif
        </div>

        <div class="field">
            Confirm Password: <input type="password" name="password_confirm">
             @if($errors->has('password_confirm'))
                 {{ $errors->first('password_confirm') }}
             @endif
        </div>

        <div class="field">
            Business Type: <input type="radio" name="type" value = "broker">Broker
                           <input type="radio" name="type" value = "dealer">Dealer
             @if($errors->has('type'))
                 {{ $errors->first('type') }}
             @endif
        </div>

        <div class="field">
            Phone Number: <input type="text" name="phone"  {{ (Input::old('phone')) ? ' value="' . e(Input::old('phone')) . '"' : '' }}>
              @if($errors->has('phone'))
                  {{ $errors->first('phone') }}
              @endif
        </div>

        <div class="field">
            Website: <input type="text" name="website"  {{ (Input::old('website')) ? ' value="' . e(Input::old('website')) . '"' : '' }}>
               @if($errors->has('website'))
                   {{ $errors->first('website') }}
               @endif
        </div>

        <input type="submit" value="Create Account">
        {{ Form::token() }}
    </form>
@stop