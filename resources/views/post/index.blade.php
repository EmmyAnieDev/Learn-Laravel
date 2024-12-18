<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
</head>
<body>

    <h2>Post Form</h2>
    <form action=" {{ route('post.store') }} " method="POST">
        @csrf
        <input type="hidden" value="7" name="user_id"><br><br>

        <input type="text" id="age" name="title" placeholder="Title"><br><br>

        <textarea  name="description" placeholder="Description"></textarea><br><br>

        <button type="submit">Submit</button>
    </form>

</body>
</html>
