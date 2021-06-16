@extends('layouts.layouts')

@section('content')
@push('style')
<link rel="stylesheet" href="{{asset('css/loginform.css')}}">
@endpush
<h2>Login Form</h2>
@if(session()->has('error'))
                   <div class="alert alert-danger">
                        {{ session()->get('error') }}
                    </div>
                @endif
<form action="{{route('auth')}}" method="post">

@csrf
  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <button type="submit">Login</button>
  </div>

</form>

@endsection
