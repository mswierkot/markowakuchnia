@extends('layout')


@section('content')
    <div class="row">
        <div style="margin-top:70px; margin-bottom:30px;" class="col-lg-12 margin-tb">
            <div>
                <h5>Zarzadzanie opublikowanymi przepisami</h5>
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-striped ">
        <tr>
            <th>No</th>
            <th>Kategoria</th>
            <th>Tytuł</th>
            <th>Treść</th>
            <th width="310px">Akcja</th>
        </tr>
    @foreach ($articles as $article)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $article->category}}</td>
        <td>{{ $article->title}}</td>
        <td>{{ str_limit($article->body, 25)}}</td> 
        <td>
           
            <a class="btn btn-primary " href="{{ route('admin.edit',$article->id) }}">Edytuj</a>
            {!! Form::open(['method' => 'DELETE','route' => ['admin.destroy', $article->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Usuń', ['class' => 'btn btn-danger ']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>
 <div class="row">
        <div class="col-lg-12 margin-tb">
           
            <div class="pull-right">
                <a class="btn btn-info " href="{{ route('admin.create') }}"> Nowy post</a>
            </div>
        </div>
    </div>

    {!! $articles->links() !!}
@endsection