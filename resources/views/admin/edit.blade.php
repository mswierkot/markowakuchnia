@extends('layout')


@section('content')
    <div class="row">
        <div style="margin-top:70px; margin-bottom:30px;" class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h5>Edycja artykułu</h5>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('admin.index') }}"> Wróć</a>
            </div>
        </div>
    </div>


    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    {!! Form::model($article, ['method' => 'PATCH','route' => ['admin.update', $article->id]]) !!}
        @include('admin.form')
    {!! Form::close() !!}


@endsection
