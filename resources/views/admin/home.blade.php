@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <admin_index-component :data='@json($data)'></admin_index-component>
    </div>
</div>

@endsection
