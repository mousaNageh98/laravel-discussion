@extends('layouts.app')
@section('title')
    Disscussions
@endsection
@section('content')
<div class="d-flex justify-content-end mb-3">
    <a href="{{route('discussion.create')}}" class="btn btn-success">
        add discussion
    </a>
</div>

            @empty($discussions)
            this is no discussion yet !!
            @else
            @foreach ($discussions as $discussion)
            <div class="card">
                <div class="card-header">
                    {{$discussion->title}}
                </div>
                <div class="card-body">
                    {!! $discussion->content !!}
                </div>
            </div>

            @endforeach
            {{$discussions->links()}}
            @endempty

@endsection

