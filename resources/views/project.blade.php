@extends('layouts.app')

@section('title', $project->name)
@section('meta_keyword', $project->user_name)
@section('meta_description', $project->password)

@section('content')

	<div class="container">

		<div class="card">
		  	<div class="card-body">
                <h1 class="card-title text-center">{{ $project->name }}</h1>
                @if ($project->created_at)
                <h6 class="card-subtitle mb-2 text-muted text-center">
			    	<i class="far fa-calendar-alt"></i>
			    	{{ $project->created_at->format('d.m.Y H:i') }}
			    	({{ $project->created_at->diffForHumans() }})
                </h6>
                @endif
                <h2 class="card-text text-center">Доступы к серверу</h2>
                <table class="table table-striped table-borderless">
                    <thead class="thead-dark">
                        <th>Имя пользователя</th>
                        <th>Пароль</th>
                        <th>Хост</th>
                    </thead>
                    <tbody>
                            <tr>
                            <td>{{ $project->user_name }}</td>
                            <td>{{ $project->password }}</td>
                            <td>{{ $project->hosts }}</td>
                            </tr>
                    </tbody>
                </table>

                @if ($project->downloads->count() > 0)
                    <table class="table table-striped table-borderless">
                        <thead class="thead-dark">
                            <th>ssh ключ</th>
                            <th>ssh пароль</th>
                        </thead>
                        <tbody>
                            @foreach ($project->downloads as $download)
                                <tr>
                                    <td>
                                        <a href="{{ route('download', $download) }}" title="">{{ $download->title ?? '' }}</a>
                                    </td>
                                    <td>{{ $download->password }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif

                <h2 class="card-text text-center">Доступы к базе данных</h2>
                <table class="table table-striped table-borderless">
                    <thead class="thead-dark">
                        <th>Имя пользователя</th>
                        <th>Пароль</th>
                        <th>Имя базы данных</th>
                    </thead>
                    <tbody>
                            <tr>
                            <td>{{ $project->db_user }}</td>
                            <td>{{ $project->db_password }}</td>
                            <td>{{ $project->db_database }}</td>
                            </tr>
                    </tbody>
                </table>

		  	</div>
		</div>

	</div>

@endsection
