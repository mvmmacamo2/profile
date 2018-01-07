
@extends('layouts.master')

@section('title')
welcome
@endsection

@section('menu')
@include('pages.menu')    
@endsection


@section('content')
    @include('pages.corpo')
@endsection


@section('footer')

@include('pages.footer')
@endsection
