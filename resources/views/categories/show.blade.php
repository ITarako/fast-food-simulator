<?php

/**
 * @var \App\Models\RecipeCategory $category
 */

$title = 'Категория: ' . $category->name;
$breadcrumbs = [
    [
        'url' => '/',
        'title' => 'Домой',
    ],
    [
        'url' => route('categories.index'),
        'title' => 'Категории',
    ],
    [
        'title' => $title,
    ],
];
?>
@extends('adminlte::page')

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
    <div class="card">
        <div class="card-body">
            <table class="table table-striped table-bordered">
                <tbody>
                    <tr>
                        <th>Название</th>
                        <td>{{$category->name}}</td>
                    </tr>
                    <tr>
                        <th>Активность</th>
                        <td>{{$category->getIsActiveLabel()}}</td>
                    </tr>
                    <tr>
                        <th>Дата создания</th>
                        <td>{{$category->created_at}}</td>
                    </tr>
                    <tr>
                        <th>Дата изменения</th>
                        <td>{{$category->updated_at}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <a href="{{route('categories.index')}}" class="btn btn-default">Назад</a>
            <a href="{{route('categories.edit', ['category' => $category])}}" class="btn btn-primary">Редактировать</a>
        </div>
    </div>
@endsection
