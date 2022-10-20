@extends('admin.layouts.app')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">Створити ТМЦ</h1>
    <div class="card shadow mb-4">
        <div class="card-body">
            {!! Form::model($invetory, ['method' => 'PUT', 'url' => "/admin/invetory_type/{$invetory->id}", 'class' => 'form-horizontal', 'role' => 'form']) !!}

            @include('admin.invetory._form')

            <div class="form-group">
                <div class="col-md-8 col-md-offset-2">
                    <button type="submit" class="btn btn-primary">
                        Зберегти
                    </button>
                </div>
            </div>

            {!! Form::close() !!}

        </div>
    </div>

@endsection
