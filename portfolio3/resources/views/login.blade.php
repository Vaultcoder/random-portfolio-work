<!DOCTYPE html>
<html>
<head><!-- resources/views/auth/login.blade.php -->

{{ Form::open(array('url' => 'sendlogin')) }}
    <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        Password
        <input type="password" name="password" id="password">
    </div>

    <div>
        <input type="checkbox" name="remember"> Remember Me
    </div>

    <div>
        <button type="submit">Login</button>
    </div>
</form>
{{ Form::close() }}

<a href="logout">Logout</a>


@if(Auth::check())
   logedin     logedout {{ $user }}
@else
    logedout 
@endif


@forelse ($user as $user)
    <li>{{ $user->email }}</li>
@empty
    <p>No users</p>
@endforelse