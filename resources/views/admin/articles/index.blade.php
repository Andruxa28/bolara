@extends('admin.layouts.layout')
@section ('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Статьи</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Главная</a></li>
                            <li class="breadcrumb-item active">Blank Page55</li>
                        </ol>
                    </div>
                    <div class="col-sm-6">
                        <div class="pull-right">
                            <a href="{{route('articles.create')}}" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Добавить"><i class="fa fa-plus"></i></a>
                            <button type="button" data-toggle="tooltip" title="" class="btn btn-danger" onclick="confirm('Данное действие необратимо. Вы уверены?') ? $('#form-information').submit() : false;" data-original-title="Удалить"><i class="fa fa-trash"></i></button>
                        </div>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><i class="fa fa-list"></i> Статьи</h3>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th style="width: 10px"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);"></th>
                            <th>Название статьи</th>
                            <th>Категория</th>
                            <th style="width: 40px" class="text-center">Статус</th>
                            <th style="width: 40px" class="text-center">Действие</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($articles as $article)
                        <tr>
                            <td><input type="checkbox" name="selected[]" value="1"></td>
                            <td>{{$article->alias}}</td>
                            <td>
                                <div class="progress progress-xs">
                                    <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                </div>
                            </td>
                            <td class="text-center"><span class="badge bg-danger">Отключено</span></td>
                            <td class="text-center"><a href="#" data-toggle="tooltip" title="" class="btn btn-primary btn-sm" data-original-title="Добавить"><i class="fa fa-edit"></i></a></td>
                        </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    Footer
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
@endsection
