@extends('base')

@section('content')
    <h1>{{ __('Edit book') }}</h1>

    <form action="{{ route('books.update', $book) }}" method="POST">
        @csrf
        @method('PUT')

        <input type="text" name="title" placeholder="{{ __('Title') }}" required value="{{ $book->title }}"/>
        <input type="text" name="description" placeholder="{{ __('Description') }}" required value="{{ $book->description }}"/>
        <input type="text" name="author" placeholder="{{ __('Author') }}" required value="{{ $book->author }}"/>

        <button type="submit">{{ __('Update') }}</button>
    </form>
@endsection
