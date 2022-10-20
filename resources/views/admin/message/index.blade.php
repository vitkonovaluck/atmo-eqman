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
    <h1 class="h3 mb-4 text-gray-800">Повідомлення</h1>
    <div class="card shadow mb-4">
        <div class="card-body">
            <a href="{{ url('admin/message/create') }}" class="btn btn-xs btn-primary"><i class="fas fa-plus">Створити</i></a>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col" width="50"><input type="checkbox"></th>
                    <th scope="col">Назва</th>
                    <th scope="col" width="200">Відправник</th>
                    <th scope="col" width="150">Дата</th>
                    <th scope="col" width="160">Дії</th>
                </tr>
                </thead>
                <tbody>
                @forelse ($msg_froms as $msg_from)
                    <tr @if($msg_from->read == 1)
                        bgcolor="#a5a5a5"
                        @endif
                        >
                        <th scope="row"><input type="checkbox" id="cb{{$loop->iteration}}" name="cb{{$loop->iteration}}"></th>
                        <td>{{$msg_from->title}}<br>
                            <small>{{substr($msg_from->text, 0,50)}}</small></td>
                        <td>{{$msg_from->from}}</td>
                        <td><small>{{$msg_from->created_at}}</small></td>
                        <td>
                            <a href="{{ url("admin/invetory_type/{$msg_from->id}")}}"  class="btn btn-xs btn-warning"><i class="fas fa-pen"></i></a>
                            <a onclick="confirm_delete({{$msg_from->id}})" class="btn btn-xs btn-danger"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" align="center"><p class="text-danger"><b>Записи у базі відсутні</b></p> </td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>

@endsection

