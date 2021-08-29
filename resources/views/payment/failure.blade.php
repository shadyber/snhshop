@extends('layouts.app')
@section('title','Payment Fail. Please Try Again.')
@section('subtitle',$error)
@section('content')


    <h1> Payment Fail. Please Try Again.</h1>


    <p> {{$error}}</p>

@endsection
