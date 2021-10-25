@extends('layouts.app')

@section('content')
    <h2>All tasks</h2>
    <!-- Bootstrap шаблон... -->
    <div class="panel-body">
        <!-- Отображение ошибок проверки ввода -->
    @include('common.errors')

    </div>
    <a href="{{route('tasks.create')}}" class="btn btn-success"><i class="fa fa-plus"></i> Crete new task</a>

    <!-- Текущие задачи -->
    @if (count($tasks) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                All tasks
            </div>
            <div class="panel-body">
                <table class="table table-striped task-table">
                    <!-- Заголовок таблицы -->
                    <thead>
                        <tr>
                            <th>Task</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <!-- Тело таблицы -->
                    <tbody>
                    @foreach ($tasks as $task)
                        <tr>
                            <!-- Имя задачи -->
                            <td class="table-text">
                                <div>{{ $task->name }}</div>
                            </td>
                            <td>
                                Удалить {{ $task->id }}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection