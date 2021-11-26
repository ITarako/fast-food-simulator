<?php

/**
 * @var \App\Models\Unit $unit
 */

$title = 'Редактирование меры измерения';
$breadcrumbs = [
    [
        'url' => '/',
        'title' => 'Домой',
    ],
    [
        'url' => route('units.index'),
        'title' => 'Меры измерения',
    ],
    [
        'title' => $title,
    ],
];
?>
@extends('admin.layouts.app')

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
    @include('units.blocks.form.edit')
@endsection
