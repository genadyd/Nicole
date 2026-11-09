@extends('layouts.main')
@section('vite')
    @vite(
    [
     'resources/css/app.css',
     'resources/css/pages/home.css',
     'resources/js/app.js']
     )
@endsection

@section('content')
<x-layouts.hero></x-layouts.hero>
@endsection
