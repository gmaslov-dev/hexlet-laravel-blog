@extends('layouts.app')

@section('title', 'article')

@section('content')

    <div class="container">
        <div class="row">
            <h2>{{ $article->name }}</h2>
        </div>
        <div class="row">
            <table class="table">
                <tbody>
                    <tr>
                        <th scope="row">Id</th>
                        <td>{{ $article->id }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Name</th>
                        <td>{{ $article->name }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Body</th>
                        <td>{{ $article->body }}</td>
                    </tr>
                    <tr>
                        <th scope="row">created_at</th>
                        <td>{{ $article->created_at }}</td>
                    </tr>
                    <tr>
                        <th scope="row">updated_at</th>
                        <td>{{ $article->updated_at }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="row">
            <a href="{{ route('articles.index') }}"><< Назад</a>
        </div>
    </div>

@endsection

