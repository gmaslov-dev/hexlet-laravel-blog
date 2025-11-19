@extends('layouts.app')

@section('content')

@if ($errors->any())
    <div>
        <ul>
            {{ dd($errors) }}
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="container">
    <div class="row">
        {{ html()->modelForm($article, 'POST', route('articles.store'))->open() }}
            <div class="mb-3">
                {{ html()->label('Имя', 'name')->class('form-label') }}
                {{ html()->input('text', 'name')->class('form-control') }}
            </div>
            <div class="mb-3">
                {{ html()->label('Содержание', 'body')->class('form-label') }}
                {{ html()->textarea('body')->class('form-control') }}
            </div>
            {{ html()->submit('Создать')->class('btn btn-primary') }}
        {{ html()->closeModelForm() }}
    </div>
</div>
@endsection
