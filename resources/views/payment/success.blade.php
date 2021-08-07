@extends('layouts.app')
@section('title','payment Placed Successfully')
@section('subtitle',$success)
@section('content')
    <h1> Payment Placed Successfully </h1>
    <p>{{$success}}</p>
@endsection
