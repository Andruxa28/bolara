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
                            <li class="breadcrumb-item"><a href="{{route('categories.index')}}">Категории блога</a></li>
                            <li class="breadcrumb-item active">Добавить категорию блога</li>
                        </ol>
                    </div>
                    <div class="col-sm-6">

                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><i class="fa fa-edit"></i> Добавить категорию блога</h3>

                </div>

                <form role="form" method="post" action="{{ route('categories.store') }}">
                    {{ csrf_field() }}
                    <div class="card-body">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#ru" role="tab" aria-controls="home" aria-selected="true"><img src="{{asset ('assets/admin/img/lang/ru-ru.png')}}"/> Русский</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#uk" role="tab" aria-controls="profile" aria-selected="false"><img src="{{asset ('assets/admin/img/lang/ua-uk.png')}}"/> Українська</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="ru" role="tabpanel" aria-labelledby="home-tab">
                                <div class="form-group">
                                    <label for="title">Название</label>
                                    <input type="text" name="title_ru" class="form-control @if ($errors->get('title_ru')) is-invalid @endif" id="title_ru" placeholder="Название">
                                </div>
                                <div class="form-group">
                                    <label for="title">Мета-тег Title</label>
                                    <input type="text" name="meta_title_ru" class="form-control @if ($errors->get('meta_title_ru')) is-invalid @endif" id="meta_title_ru" placeholder="Мета-тег Title">
                                </div>
                                <div class="form-group">
                                    <label for="title">Мета-тег Description</label>
                                    <textarea name="meta_description_ru" rows="5" class="form-control @if ($errors->get('meta_description_ru')) is-invalid @endif" id="meta_description_ru" placeholder="Мета-тег Description"></textarea>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="uk" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="form-group">
                                    <label for="title">Название</label>
                                    <input type="text" name="title_uk" class="form-control @if ($errors->get('title_uk')) is-invalid @endif" id="title" placeholder="Название">
                                </div>
                                <div class="form-group">
                                    <label for="title">Мета-тег Title</label>
                                    <input type="text" name="meta_title_uk" class="form-control @if ($errors->get('meta_title_uk')) is-invalid @endif" id="meta_title_uk" placeholder="Мета-тег Title">
                                </div>
                                <div class="form-group">
                                    <label for="title">Мета-тег Description</label>
                                    <textarea name="meta_description_uk" rows="5" class="form-control @if ($errors->get('meta_description_ru')) is-invalid @endif" id="meta_description_ru" placeholder="Мета-тег Description"></textarea>
                                </div>
                            </div>
                        </div>
                            </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Сохранить</button>
                    </div>
                </form>

                <!-- /.card-body -->
                <div class="card-footer">

                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
@endsection
