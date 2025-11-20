@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h2>Список статей</h2>
        </div>
        <div class="row">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Body</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                    @foreach($articles as $article)
                    <tr>
                        <th scope="row">{{ $article->id }}</th>
                        <td><a href="{{ route('article.show', $article->id) }}">{{ $article->name }}</a></td>
                        <td>{{ $article->body }}</td>
                        <td><a href="{{ route('articles.edit', $article->id) }}">edit</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="row">
            {{ $articles->links('vendor.pagination.bootstrap-5') }}
        </div>
    </div>
@endsection
