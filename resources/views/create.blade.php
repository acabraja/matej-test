<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/store" method="POST">
        @csrf
        <input type="text" name="name">
        <input type="text" name="description">
        <input type="text" name="author">
        <input type="submit" name="Submit">
    </form>
</body>
</html>
