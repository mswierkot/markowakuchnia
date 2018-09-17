@extends('layout')


@section('content')
    <div class="row">
        <div style="margin-top:70px; margin-bottom:30px;" class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h5> Szczegóły artykłu</h5>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('admin.index') }}"> Wróć</a>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tytuł:</strong>
                {{ $article->title}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Treść:</strong>
                {{ $article->body}}
            </div>
        </div>
    </div>
@endsection