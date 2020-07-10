@extends('layouts.app')

@section('content')

<div class="container">

    @component('admin.include.breadcrumb')
        @slot('title') Создание новости @endslot
        @slot('parent') Главная @endslot
        @slot('active') Новости @endslot
    @endcomponent

    <hr />

    <form class="form-horizontal" action="{{ route('project.store') }}" method="post">
        @csrf

        {{-- Form include --}}
        @include('admin.project._form')

    </form>

</div>

@endsection
