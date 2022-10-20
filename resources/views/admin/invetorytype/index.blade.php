@extends('admin.layouts.app')

@section('content')
    <script type="application/javascript">
        function confirm_delete(id){
            let isOk = confirm("Ви впевнені?");

            if(isOk){
                alert('Видалення відмінено');
            }

        }
    </script>
    <h1 class="h3 mb-4 text-gray-800">Тип ТМЦ</h1>
    <div class="card shadow mb-4">
        <div class="card-body">
            <a href="{{ url('admin/invetory_type/create') }}" class="btn btn-xs btn-primary"><i class="fas fa-plus">Додати</i></a>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col" width="50">#</th>
                    <th scope="col">Назва</th>
                    <th scope="col" width="100">Комплект</th>
                    <th scope="col" width="160">Дії</th>
                </tr>
                </thead>
                <tbody>
                @forelse ($invetory_types as $invetory_type)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$invetory_type->title}}</td>
                        <td>
                            @if($invetory_type->complekt==0)
                                Ні
                            @else
                                Так
                            @endif
                        </td>
                        <td>
                            <a href="{{ url("admin/invetory_type/{$invetory_type->id}/edit")}}"  class="btn btn-xs btn-warning"><i class="fas fa-pen"></i></a>
                            <a onclick="confirm_delete({{$invetory_type->id}})" class="btn btn-xs btn-danger"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" align="center"><p class="text-danger"><b>Записи у базі відсутні</b></p> </td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>

@endsection

