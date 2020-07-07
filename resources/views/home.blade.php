@extends('layouts.app')
@section('title')
    Disscussion
@endsection
@section('content')
<div class="d-flex justify-content-end mb-3">
    <a href="{{route('discussion.create')}}" class="btn btn-success">
        add discussion
    </a>
</div>
    <div class="card">
        <div class="card-header">{{ __('Dashboard') }}</div>
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            {{ __('You are logged in!') }}
        </div>
    </div>
@endsection
