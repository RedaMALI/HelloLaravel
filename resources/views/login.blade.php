@extends('layouts.master')

@section('title', 'Login')

<style>
  .login-page {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .login-page .btn-container {
    width: 50%;
    height: 60px;
    background-color: #F44336;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 10px;
    text-align: center;
    cursor: pointer;
    transition: all 0.2s ease-in-out;
  }

  .login-page .btn-container:hover {
    background-color: #B71C1C;
  }

  .login-page .btn-container a {
    text-decoration: none;
    color: white;
    text-transform: uppercase;
    font-size: 14pt;
  }
</style>

@section('content')
  <div class="login-page">
    <div class="btn-container">
      <a href="{{$loginUrl}}">Login with Google</a>
    </div>
  </div>
@endsection