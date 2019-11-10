<div>
    @foreach($books as $book)
        <p> Title: {{ $book->title }}</p>
        <p> Title: {!! $book->annotations !!}</p>
    @endforeach
</div>
