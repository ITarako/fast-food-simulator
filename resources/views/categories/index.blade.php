@extends('admin.layouts.app')

<?php
$title = 'Категории';
$breadcrumbs = [
    [
        'url' => '/',
        'title' => 'Домой',
    ],
    [
        'title' => $title,
    ],
];
?>
@section('title')
    {{$title}}
@endsection

@section('content_header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h3>{{$title}}</h3>
        </div>
        <div class="col-sm-6">
            @include('blocks.breadcrumbs.index', ['breadcrumbs' => $breadcrumbs])
        </div>
    </div>
@endsection

@section('content')
    @include('categories.blocks.list.index')
@endsection
