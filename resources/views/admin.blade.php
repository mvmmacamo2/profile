@extends('layouts.master-admin')

@section('title')
Profile Adim MVM
@stop

@section('menu')
@include('pages.admin.menu')
@stop

@section('sidebar')
@include('pages.admin.aside')
@stop


@section('content')
@include('pages.admin.corpo')
@stop

@section('footer')
@include('pages.admin.footer')
@stop
@section('content-wrapper')
@include('pages.admin.content-wrapper')
@stop
