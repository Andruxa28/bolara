@extends('admin.layouts.layout')
@section ('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Настройки блога</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Главная</a></li>
                            <li class="breadcrumb-item active">Настройки блога</li>
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
                    <h3 class="card-title"><i class="fa fa-cogs"></i> Настройки блога</h3>

                </div>
                <div class="card-body">

                    <div class="form-group">
                        <label for="title">Статус</label> &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="switch">
                            <input id="switch-1" type="checkbox" class="switch-input" name="status">
                            <label for="switch-1" class="switch-label">Статус</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="post_count">Количество статей на странице</label>
                        <input type="number" name="post_count" class="form-control" id="post_count" placeholder="0" value="">
                    </div>


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
                        <div class="form-group">
                            <label for="title">Мета-тег Title</label>
                            <input type="text" name="meta_title_ru" class="form-control" id="title" placeholder="Мета-тег Title" value="">
                        </div>
                    </div>
                        </div>
                        <div class="tab-pane fade" id="uk" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="form-group">
                                <label for="title">Мета-тег Title</label>
                                <input type="text" name="meta_title_uk" class="form-control" id="title" placeholder="Мета-тег Title" value="">
                            </div>
                        </div>

                </div>
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
