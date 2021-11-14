@extends('adminlte::page')

@php($title = 'Список категорий')
@section('title')
    {{$title}}
@endsection

@section('content_header')
    {{$title}}
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
                <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                    <div class="col-sm-12">
                        <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid"
                               aria-describedby="example2_info">
                            <thead>
                            <tr role="row">
{{--                                <th class="sorting sorting_asc" tabindex="0" aria-controls="example2" rowspan="1"--}}
{{--                                    colspan="1" aria-sort="ascending"--}}
{{--                                    aria-label="Rendering engine: activate to sort column descending">Rendering engine--}}
{{--                                </th>--}}
{{--                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"--}}
{{--                                    aria-label="Browser: activate to sort column ascending">Browser--}}
{{--                                </th>--}}
{{--                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"--}}
{{--                                    aria-label="Platform(s): activate to sort column ascending">Platform(s)--}}
{{--                                </th>--}}
{{--                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"--}}
{{--                                    aria-label="Engine version: activate to sort column ascending">Engine version--}}
{{--                                </th>--}}
                                <th>Название</th>
                                <th>Действия</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{$category->name}}</td>
                                    <td>
                                        <a class="btn btn-primary btn-sm" href="#" title="Редактировать"><i class="fas fa-edit"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
{{--                    <div class="col-sm-12 col-md-5">--}}
{{--                        <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10--}}
{{--                            of 57 entries--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm-12 col-md-7">--}}
{{--                        <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">--}}
{{--                            <ul class="pagination">--}}
{{--                                <li class="paginate_button page-item previous disabled" id="example2_previous"><a--}}
{{--                                        href="#" aria-controls="example2" data-dt-idx="0" tabindex="0"--}}
{{--                                        class="page-link">Previous</a></li>--}}
{{--                                <li class="paginate_button page-item active"><a href="#" aria-controls="example2"--}}
{{--                                                                                data-dt-idx="1" tabindex="0"--}}
{{--                                                                                class="page-link">1</a></li>--}}
{{--                                <li class="paginate_button page-item "><a href="#" aria-controls="example2"--}}
{{--                                                                          data-dt-idx="2" tabindex="0"--}}
{{--                                                                          class="page-link">2</a></li>--}}
{{--                                <li class="paginate_button page-item "><a href="#" aria-controls="example2"--}}
{{--                                                                          data-dt-idx="3" tabindex="0"--}}
{{--                                                                          class="page-link">3</a></li>--}}
{{--                                <li class="paginate_button page-item "><a href="#" aria-controls="example2"--}}
{{--                                                                          data-dt-idx="4" tabindex="0"--}}
{{--                                                                          class="page-link">4</a></li>--}}
{{--                                <li class="paginate_button page-item "><a href="#" aria-controls="example2"--}}
{{--                                                                          data-dt-idx="5" tabindex="0"--}}
{{--                                                                          class="page-link">5</a></li>--}}
{{--                                <li class="paginate_button page-item "><a href="#" aria-controls="example2"--}}
{{--                                                                          data-dt-idx="6" tabindex="0"--}}
{{--                                                                          class="page-link">6</a></li>--}}
{{--                                <li class="paginate_button page-item next" id="example2_next"><a href="#"--}}
{{--                                                                                                 aria-controls="example2"--}}
{{--                                                                                                 data-dt-idx="7"--}}
{{--                                                                                                 tabindex="0"--}}
{{--                                                                                                 class="page-link">Next</a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    {{$categories->links()}}
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
