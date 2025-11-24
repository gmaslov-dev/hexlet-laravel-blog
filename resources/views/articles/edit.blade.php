@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        {{ html()->modelForm($article, 'PATCH', route('articles.update', $article))->open() }}
        @include('articles.form')
        {{ html()->submit('Обновить')->class('btn btn-primary') }}
        <a href="{{ route('articles.destroy', $article->id) }}" data-confirm="Вы уверены?" data-method="delete" rel="nofollow" class="btn btn-warning">Удалить</a>
        {{ html()->closeModelForm() }}
    </div>
</div>

@endsection
