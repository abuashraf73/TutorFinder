@extends('layouts.master')

@section('title')
    Tutor Finder
@endsection

@section('content')
<div class="container">
    <hr>

  <p1>
  </p1>
    <br>
 <hr>
 <div class="jumbotron" >
        <div class="col-md-5">

            <h1 align="center">Log In</h1>
            <form action="{{ route('signin') }}" method="post" align="center">
                <div class="form-group {{$errors->has('email')? 'has-error':''}}">
                    <lavel for="email">Email:</lavel>
                    <input class="form-control" type="text" name="email" id="email" value="{{ Request::old('email') }}">
                </div>
                <div class="form-group {{$errors->has('password')? 'has-error':''}}">
                    <lavel for="email">Password:</lavel>
                    <input class="form-control" type="password" name="password" id="password" value="{{ Request::old('password') }}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>
    </div>

    <br>
    <hr>

    <div class="row" >
        <div class="col-md-offset-6">
            <h1>Register</h1>
            <form action="{{route('signup')}}" method="post">
                <div class="form-group {{$errors->has('category')? 'has-error':''}}">

                    <input type="radio" name="category" value="student"> Student
                    <input type="radio" name="category" value="parent"> Parent
                    <input type="radio" name="category" value="tutor"> Tutor
                </div>

                <div class="form-group">
                    <lavel for="name">Name:</lavel>
                    <input class="form-control" type="text" name="name" id="name" value="{{ Request::old('name') }}">
                </div>

                <div class="form-group">
                    <lavel for="phone">Phone number:</lavel>
                    <input class="form-control" type="text" name="phone" id="phone" value="{{ Request::old('phone') }}" >
                </div>

                <div class="form-group">
                    <lavel for="address">Address:</lavel>
                    <input class="form-control" type="text" name="address" id="address" value="{{ Request::old('address') }}">
                </div>

                <div class="form-group">
                    <lavel for="nid">NID number:</lavel>
                    <input class="form-control" type="text" name="nid" id="nid" value="{{ Request::old('nid') }}">
                </div>

                <div class="form-group {{$errors->has('email')? 'has-error':''}}">
                    <lavel for="email">Email:</lavel>
                    <input class="form-control" type="text" name="email" id="email" value="{{ Request::old('email') }}">
                </div>

                <div class="form-group {{$errors->has('password')? 'has-error':''}}">
                    <lavel for="password">Password:</lavel>
                    <input class="form-control" type="password" name="password" id="password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>
    </div>
</div>
@include('includes.message-block')
@endsection