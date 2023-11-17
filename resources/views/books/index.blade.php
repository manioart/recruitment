@extends('base')

@section('content')
    <h1>{{ __('List Of Books') }}</h1>

    <table>
        <tr>
            <th>{{ __('Id') }}</th>
            <th>{{ __('Title') }}</th>
            <th>{{ __('Description') }}</th>
            <th>{{ __('Author') }}</th>
            <th>{{ __('Actions') }}</th>
        </tr>
        @if($books->isNotEmpty())
            @foreach($books as $book)
                <tr>
                    <td>{{ $book->id }}</td>
                    <td> <a href="{{ route('books.show', [$book]) }}"> {{ $book->title }} </a> </td>
                    <td>{{ $book->description }}</td>
                    <td>{{ $book->author }}</td>
                    <td>
                        <form action="{{ route('books.destroy', [$book]) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit">{{ __('Delete') }}</button>
                        </form>
                        <a href="{{ route('books.edit', [$book]) }}"> {{ __('Edit') }} </a>
                    </td>
                </tr>
            @endforeach
        @endif
    </table>
    {{ $books->links() }}

    <a href="{{ route('books.create') }}"> {{ __('Create book') }} </a>
@endsection