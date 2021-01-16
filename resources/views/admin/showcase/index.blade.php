@extends('admin.layouts.layout')
@section ('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Витрина</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Главная</a></li>
                            <li class="breadcrumb-item active">Витрина</li>
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
                    <h3 class="card-title"><i class="fa fa-cogs"></i> Витрина</h3>

                </div>
                <div class="card-body row" id="sortable">
                    @foreach($offers as $offer)
                        <div class="col-sm-4 col-md-3 col-lg-2 sort_element " id="67">
                            <div class="card card-outline">
                                <div class="card-header text-center">
                                    <img class="img-fluid" src="{{asset ('assets/orange/img/companies/microcredit/'.$offer['alias'].'.webp')}}" alt="MoneyVeo">
                                </div>
                                <div class="card-body">
                                    <div class="col-md-12 text-center">
                                        <h5 style=" min-height: 45px;">{{$offer['original_name']}}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div >
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->
            <style type="text/css">
                .emptySpace {border: medium dotted red; }
            </style>
        </section>
        <script>
            $( function() {
                $("#sortable").sortable({
                    opacity: 0.5,
                    cursor:'move',
                    placeholder: 'emptySpace col-sm-4 col-md-3 col-lg-2',
                    update: function(){
                        var order = $(this).sortable("toArray");
                        for (var i = 0; i < order.length; i++) {
                            console.log("Position: " + i + " ID: " + order[i]);
                        }
                    }
                });

            } );
        </script>
        <!-- /.content -->
    </div>


@endsection
