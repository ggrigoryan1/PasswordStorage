@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table table-striped table-borderless">
        <thead class="thead-dark">
            <th>Проект</th>
            <th>Имя пользователя</th>
            <th>Пароль</th>
            <th>Хост</th>
        </thead>
        <tbody>
            @forelse ($projects as $project)
                <tr>
                <td>
                    <a href="{{ route('project_id', $project) }}">
                        {{ $project->name }}
                    </a>
                </td>
                <td>{{ $project->user_name }}</td>
                <td>{{ $project->password }}</td>
                <td>{{ $project->hosts }}</td>

                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center"><h2>Данные отсутствуют</h2></td>
                </tr>
            @endforelse
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3">
                    {{ $projects->links() }}
                </td>
            </tr>
        </tfoot>
    </table>

</div>

@endsection
