@extends('layouts.app')

@section('template_title')
    {{ $table->name ?? __('Show') . " " . __('Table') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Table</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('tables.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Capacity:</strong>
                                    {{ $table->capacity }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Dish Id:</strong>
                                    {{ $table->dish_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Category Id:</strong>
                                    {{ $table->category_id }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
