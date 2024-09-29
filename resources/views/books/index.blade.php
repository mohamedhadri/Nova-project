<h1>Books</h1>

<ul>
    @foreach ($books as $book)
        <li>
            <h2>{{ $book['title'] }}</h2>
            <p>Author: {{ $book['authors'] }}</p>
            <p>{{ $book['description'] }}</p>
            @if ($book['thumbnail'])
                <img src="{{ $book['thumbnail'] }}" alt="{{ $book['title'] }} thumbnail">
            @endif
            <p>Published: {{ $book['published_date'] }}</p>
        </li>
    @endforeach
</ul>
