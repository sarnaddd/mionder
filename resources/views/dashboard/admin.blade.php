@extends('dashboard.master')

@section('konten')
  <h4>Welcome <b>{{Auth::user()->name}}</b>, You are logged in as <b>{{Auth::user()->role}}</b>.</h4>
@endsection