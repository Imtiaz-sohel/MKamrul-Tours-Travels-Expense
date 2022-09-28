@extends('login_master')
@section('title')
{{ 'Register Page' }}
@endsection
@section('content')
<div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">
    <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white rounded shadow-base">
        <img width="100" class="ml-5" src="{{ asset('assets/img/logo.jpg') }}" alt="" srcset="">
      <div class="signin-logo tx-center tx-22 tx-bold tx-inverse mb-3"><span class="tx-normal">[</span>M Kamrul Tours & Travels<span
          class="tx-normal">]</span></div>
      <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-group">
          <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Enter Your Full Name">
        </div>
        <div class="form-group">
          <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Enter Your Email">
        </div>
        <div class="form-group">
          <input type="password" name="password" class="form-control" placeholder="Enter Your Password">
        </div>
        <button type="submit" class="btn btn-info btn-block">Sign Up</button>
      </form>
    </div>
  </div>
@endsection
