@extends('layouts.app')

@section('content')

<div class="container">
    @component('admin.include.breadcrumb')
        @slot('title') Создание пользователя @endslot
        @slot('parent') Главная @endslot
        @slot('active') Пользователи @endslot
    @endcomponent

    <form class="form-horizontal" action="{{ route('user.store') }}" method="post">
        @csrf

        {{-- Form include --}}
        @include('admin.users.partials.form')

    </form>
</div>

@endsection
