@extends('layouts.app')

@section('content')
    <h2>All tasks</h2>
    <!-- Bootstrap шаблон... -->
    <div class="panel-body">
        <!-- Отображение ошибок проверки ввода -->
    @include('common.errors')

    </div>
    <a href="{{route('tasks.create')}}" class="btn btn-success"><i class="fa fa-plus"></i> Crete new task</a>

    <!-- TODO: Текущие задачи -->
@endsection