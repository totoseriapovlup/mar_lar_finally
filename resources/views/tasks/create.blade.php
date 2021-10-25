@extends('layouts.app')

@section('content')
    <h2>New task</h2>
    <!-- Bootstrap шаблон... -->
    <div class="panel-body">
        <!-- Отображение ошибок проверки ввода -->
    @include('common.errors')
    <!-- Форма новой задачи -->
        <form action="{{ route('tasks.store') }}" method="POST" class="form-horizontal">
        {{ csrf_field() }}
        <!-- Имя задачи -->
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Задача</label>
                <div class="col-sm-6">
                    <input type="text" name="name" id="task" class="form-control">
                </div>
            </div>
            <!-- Кнопка добавления задачи -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Добавить задачу
                    </button>
                </div>
            </div>
        </form>
    </div>
    <a href="{{route('tasks.create')}}" class="btn btn-success"><i class="fa fa-plus"></i> Crete new task</a>

    <!-- TODO: Текущие задачи -->
@endsection