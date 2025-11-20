@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        {{ html()->modelForm($article, 'PATCH', route('articles.update', $article))->open() }}
        @include('articles.form')
        {{ html()->submit('Обновить')->class('btn btn-primary') }}
        {{ html()->closeModelForm() }}
    </div>
</div>

@endsection
