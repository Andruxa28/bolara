@extends('admin.layouts.layout')
@section ('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Категории блога</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Главная</a></li>
                            <li class="breadcrumb-item active">Категории блога</li>
                        </ol>
                    </div>
                    <div class="col-sm-6">
                        <div class="pull-right">
                            <a href="{{route('categories.create')}}" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Добавить"><i class="fa fa-plus"></i></a>
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
                    <h3 class="card-title"><i class="fa fa-list"></i> Категории блога</h3>

                </div>
                <div class="card-body">
                    @if($categories->count())
                    <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th style="width: 10px"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);"></th>
                            <th>Название категории</th>
                            <th style="width: 40px" class="text-center">Статус</th>
                            <th style="width: 40px" class="text-center">Действие</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                        <tr>
                            <td><input type="checkbox" name="selected[]" value="1"></td>
                            <td>{{$category->title_ru}}</td>
                            <td class="text-center">
                                @if($category->status == 0)
                                <span class="badge bg-danger">Отключено</span>
                                    @else
                                    <span class="badge bg-success">Включено</span>
                                @endif
                            </td>
                            <td class="text-center">
                                <a href="{{route('categories.edit', ['category'=>$category->id])}}" data-toggle="tooltip" title="" class="btn btn-primary btn-sm" data-original-title="Редактировать"><i class="fa fa-edit"></i></a>
                                <form action="{{route('categories.destroy', ['category'=>$category->id])}}" method="post" class="float-right">
                                    {{ csrf_field() }}
                                    {{method_field('DELETE')}}
                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Подтвердите удаление')"><i class="fa fa-trash"></i> </button> </form>
                            </td>
                        </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                    @else
                        <p class="text-center"> <i class="fas fa-exclamation-triangle"></i><br> Нет данных для отображения</p>
                        @endif
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    {{$categories->links()}}
                    @if(Session::has('success'))
                        <script>
                            $( document ).ready(function() {
                                toastr.success('{{Session::get('success')}}')
                            });
                        </script>
                    @endif
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>


@endsection
