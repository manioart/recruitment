@extends('base')

@section('content')
    <h1>{{ __('Books') }}</h1>

    <p>{{ __('Book title:') }} <span>{{ $book->title }}</span></p>
    <p>{{ __('Book description:') }} <span>{{ $book->description }}</span></p>
    <p>{{ __('Book author:') }} <span>{{ $book->author }}</span></p>
@endsection
