@extends('layouts.layouts')

@section('content')
    @push('style')

    @endpush
    @foreach($errors->all() as $error)
    <p style="color: red">{{$error}}</p>
    @endforeach
{{-- @if($error('email')) --}}
    <form method="POST" action="{{route('store.user')}}">
        @csrf
        <div class="form-row">
          <div class="form-group col-md-6">
            <label >First Name</label>
            <input type="text" class="form-control" name="firstname" placeholder="FirstName">
          </div>
          <div class="form-group col-md-6">
            <label >Last Name</label>
            <input type="text" class="form-control" name="lastname" placeholder="Last Name">
          </div>
        </div>
        <div class="form-group col-md-6">
          <label for="inputAddress">Address</label>
          <input type="text" class="form-control" name="address" placeholder="Address">
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCity">Contact</label>
            <input type="text" class="form-control" name="contact" placeholder="contact">
          </div>
          <div class="form-group col-md-6">
            <label >Email</label>
            <input type="text" class="form-control" name="email" placeholder="Email">
          </div>
          <div class="form-group col-md-6">
            <label for="inputAddress">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Password">
          </div>
          <div class="form-group col-md-6">
          <label for="inputAddress">Confirm Password</label>
          <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password">
        </div>
        </div>
        {{-- <div class="form-group">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              Check me out
            </label>
          </div>
        </div> --}}
        <button type="submit" class="btn btn-primary">Sign Up</button>
      </form>
@endsection
