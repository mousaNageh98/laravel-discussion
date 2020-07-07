@extends('layouts.app')
@section('title')
    create Discussion
@endsection
@section('content')

    <div class="card">
        <div class="card-header">create Discussion</div>
        <div class="card-body">
            <form action="{{route('discussion.store')}}" method="POST">
            @csrf
                <div class="form-group row">
                    <label for="title" class="col-sm-3 col-form-label">title</label>
                    <div class="col-sm-9">
                    <input type="text" name="title" class="form-control" id="title" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <label  class="col-sm-3 col-form-label">content</label>
                    <div class="col-sm-9">
                    <input type="hidden" name="content" id="content">
                    <trix-editor input="content"></trix-editor>
                    </div>
                </div>
                @empty($channels)
                @else

                <div class="form-group row">
                    <label for="channel" class="col-sm-3 col-form-label">channel</label>
                    <div class="col-sm-6">
                        <select name="channel" class="form-control" id="channel" class="col-8">
                            @foreach ($channels as $channel)
                            <option value="{{$channel->id}}">{{$channel->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                @endempty
                <div class="form-group row">
                    <label  class="col-sm-3 col-form-label"></label>
                    <div class="col-3">
                    <input type="submit"  class="form-control btn btn-primary"  >
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.3/trix.css">
@endsection
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.3/trix.js" defer></script>
@endsection
