@extends('layout')

@section('content')

@if ($message =Session::get('success'))
    <div class="alert alert-success">
        <p>{{$message}}</p>
    </div>
@endif
<div class="row">
    <div class="col-md-6">
        <h1 style="text-align:center">LIBRARY</h1>
        <h1>book list</h1>
    </div>
    <div class="col-md-4">
        <form action="/search" method="get">
            <div class="input-group">
                <input type="search" name="search" class="form-control">
                <span class="form-group-prepend">
                    <button type="submit" class="btn btn-primary">search</button>
                </span>
            </div>
        </form>
    </div>
    <div class="col-md-2 text-right">
        <!--<a href="{{action('BookController@create')}}" class="btn btn-primary">my favourite</a>-->
        <!--<a href="/files/create" class="btn btn-primary">upload file</a>-->
    </div>
</div>
<table class="table table-bordered table-hover table-dark">
    <thread>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Auther</th>
            <th>Edition</th>
            <th>catagory</th>
            <th width="200">Action</th>
        </tr>
    </thread>
    <tbody>
        @foreach($books  as $book)
        <tr>
            <td>{{$book-> id}}</td>
            <td>{{$book-> name}}</td>
            <td>{{$book-> auther}}</td>
            <td>{{$book-> edition}}</td>
            <td>{{$book-> catagory}}</td>
            <td>
                <form action="{{action('BookController@destroy', $book->id)}}" method="post">
                    <a href="/files/{{$book->id}}" class="btn btn-info">Show</a>
                    <a class="btn btn-warning">favourite</a>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection