@extends('layouts.app')

@section('content')

<div class="container">

    @component('admin.include.breadcrumb')
        @slot('title') Редактирование пользователя @endslot
        @slot('parent') Главная @endslot
        @slot('active') Пользователи @endslot
    @endcomponent

    <hr />

    <form class="form-horizontal" action="{{ route('user.update', $user) }}" method="post">
        @method('PUT')
        @csrf


        {{-- Form include --}}
        @include('admin.users.partials.form')

    </form>
</div>

@endsection
