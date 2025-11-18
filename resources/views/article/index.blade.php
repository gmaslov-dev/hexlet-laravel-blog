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
                </tr>
                </thead>
                <tbody>
                    @foreach($articles as $article)
                    <tr>
                        <th scope="row">{{ $article->id }}</th>
                        <td>{{ $article->name }}</td>
                        <td>{{ $article->body }}</td>
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
