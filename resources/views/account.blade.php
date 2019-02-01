@extends('layouts.master')

@section('title')
    Profile
    @endsection

@section('content')
    <section class="row new-post">
        <div class="col-md-6 col-md-offset-3">
            <header><h3>Your Profile</h3></header>
            <form action="{{ route('account.save') }}" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $user->name }}" id="name">
                </div>

                <div class="form-group">
                    <label for="name">National Id card number</label>
                    <input type="text" name="nid" class="form-control" value="{{ $user->nid }}" id="nid">
                </div>

                <div class="form-group">
                    <label for="name">Address</label>
                    <input type="text" name="address" class="form-control" value="{{ $user->address }}" id="address">
                </div>

                <div class="form-group">
                    <label for="name">Phone</label>
                    <input type="text" name="phone" class="form-control" value="{{ $user->phone}}" id="phone">
                </div>

                <div class="form-group">
                    <label for="name">Email</label>
                    <input type="text" name="email" class="form-control" value="{{ $user->email }}" id="email">
                </div>
                <div class="form-group">
                    <label for="image">Upload Scanned copy of Certificates (only .jpg)</label>
                    <input type="file" name="image" class="form-control" id="image">
                </div>
                <button type="submit" class="btn btn-primary">Save Account</button>
                <input type="hidden" value="{{ Session::token() }}" name="_token">
            </form>
        </div>
    </section>
    @if (Storage::disk('local')->has($user->name . '-' . $user->id . '.jpg'))
        <h3>Certificates</h3>
        <section class="row new-post">
            <div class="col1-thumbnail">
                <img src="{{ route('account.image', ['filename' => $user->name . '-' . $user->id . '.jpg']) }}" alt="" class="img-responsive">
            </div>
        </section>
    @endif



    @endsection