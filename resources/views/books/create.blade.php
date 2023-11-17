@extends('base')

@section('content')
    <h1>{{ __('Create book') }}</h1>

    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <input type="text" name="title" placeholder="{{ __('Title') }}" required/>
        <input type="text" name="description" placeholder="{{ __('Description') }}" required/>
        <input type="text" name="author" placeholder="{{ __('Author') }}" required/>

        <button type="submit">{{ __('Add') }}</button>
    </form>
@endsection
