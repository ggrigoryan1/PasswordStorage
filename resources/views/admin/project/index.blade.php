@extends('layouts.app')

@section('content')

<div class="container">

    @component('admin.include.breadcrumb')
        @slot('title') Список проектов @endslot
        @slot('parent') Главная @endslot
        @slot('active') Проекты @endslot
    @endcomponent

    <a href="{{ route('project.create') }}" class="btn btn-primary mb-2"><i class="far fa-plus-square"></i> Создать</a>

    <table class="table table-striped table-borderless">
        <thead class="thead-dark">
            <th>Наименование</th>
            <th class="text-right">Действие</th>
        </thead>
        <tbody>
        @forelse ($projects as $project)
            <tr>
                <td>{{ $project->name }}</td>
                <td class="text-right">
                    <form onsubmit="if(confirm('Удалить?')){ return true }else{ return false }" action="{{ route('project.destroy', $project) }}" method="post">
                        @method('DELETE')
                        @csrf

                        <a class="btn btn-primary" href="{{ route('project.edit', $project) }}"><i class="fa fa-edit"></i></a>

                        <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="3" class="text-center"><h2>Данные отсутствуют</h2></td>
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
