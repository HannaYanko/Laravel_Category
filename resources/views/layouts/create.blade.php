<!DOCTYPE html>
<html>
<head>
    <title>Create Category</title>
</head>
<body>

<h1>Створення категорії</h1>

<form action="{{ url('/categories') }}" method="post">
    @csrf
    <label for="name">Ім'я:</label>
    <input type="text" name="name" required>
    <br>
    <label for="description">Опис:</label>
    <textarea name="description"></textarea>
    <br>
    <button type="submit">Створити</button>
</form>

</body>
</html>

