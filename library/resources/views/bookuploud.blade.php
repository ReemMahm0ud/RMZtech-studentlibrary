<!DOCTYPE html>
<html>
    <head>
        <title>uploudfile</title>
    </head>
    <body>
        <form action="/files" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <input type="text" name="name" placeholder="title">
            <input type="text" name="auther" placeholder="auther">
            <input type="text" name="edition" placeholder="edition">
            <input type="text" name="catagory" placeholder="catagory">
            <input type="file" name="file">
            <input type="submit" value="submit">
        </form>
    </body>
</html>
