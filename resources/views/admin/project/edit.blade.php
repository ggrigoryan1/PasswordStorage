@extends('layouts.app')

@section('content')

<div class="container">

    @component('admin.include.breadcrumb')
        @slot('title') Редактирование новости @endslot
        @slot('parent') Главная @endslot
        @slot('active') Новости @endslot
    @endcomponent

    <hr />

    <form class="form-horizontal" action="{{ route('project.update', $project) }}" method="post">
        @method('PUT')
        @csrf

        {{-- Form include --}}
        @include('admin.project._form')

    </form>

</div>

@endsection
