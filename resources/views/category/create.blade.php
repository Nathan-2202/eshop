<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form method="post" action="{{ route('category.store')}}">
    @csrf
        <div>
            <label for="">Enter Category</label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <button type="submit">Save</button>
        </div>
    </form>
</body>
</html>