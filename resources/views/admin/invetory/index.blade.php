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
    <h1 class="h3 mb-4 text-gray-800">ТМЦ</h1>
    <div class="card shadow mb-4">
        <div class="card-body">
            <a href="{{ url('admin/invetory/create') }}" class="btn btn-xs btn-primary"><i class="fas fa-plus">Додати</i></a>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col" width="50"></th>
                    <th scope="col">Назва</th>
                    <th scope="col">Дод. інформація</th>
                    <th scope="col">Статус</th>
                    <th scope="col">Локація</th>
                    <th scope="col" width="100">Відповідальний</th>
                    <th scope="col" width="100">Останні зміни</th>
                    <th scope="col" width="160">Дії</th>
                </tr>
                </thead>
                <tbody>
                @forelse ($invetorys as $invetory)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <a href="{{ url("admin/invetory/{$invetory->id}/edit")}}"  class="btn btn-xs btn-warning"><i class="fas fa-pen"></i></a>
                            <a onclick="confirm_delete({{$invetory->id}})" class="btn btn-xs btn-danger"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" align="center"><p class="text-danger"><b>Записи у базі відсутні</b></p> </td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>

@endsection

