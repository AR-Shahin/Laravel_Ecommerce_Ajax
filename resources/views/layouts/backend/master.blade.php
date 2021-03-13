@extends('layouts.backend.app')
@section('app_content')
@include('includes.backend.sidebar')

<div class="main-content">
@include('includes.backend.header')
@yield('master_content')
</div>

@include('includes.backend.chats')

@include('includes.backend.modals')
@stop