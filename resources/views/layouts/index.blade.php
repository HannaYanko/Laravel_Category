<!DOCTYPE html>
<html>
<head>
    <title>Категорії</title>
</head>
<body>

<h1>Категорії</h1>

<ul>
    @foreach ($categories as $category)
        <li>
            {{ $category->name }} - {{ $category->description ?? 'Немає опису' }}
            <form action="{{ url("/categories/{$category->id}") }}" method="post" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Видалити</button>
            </form>
        </li>
    @endforeach
</ul>

</body>
</html>
