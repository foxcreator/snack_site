@extends('admin.layouts.app')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Товары</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route('products.create') }}" class="btn btn-info btn-sm">Добавить
                                товар</a>

                            <div class="card-tools d-flex col-6">

                            </div>
                        </div>

                        <div id="products-table" class="card-body table-responsive p-0">
                            @include('admin.products.blocks.table')
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
