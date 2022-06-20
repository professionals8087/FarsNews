<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>update</title>
    <link rel="stylesheet" href="../css/all.css">
    <link rel="stylesheet" href="../css/fonts/font/fonts.css">
    <link rel="stylesheet" href="../css/fonts/fontawesome/css/all.min.css">
</head>

<body>
    <br><br>
    <div class="container mt-5">
        <form action="{{ route('edit', ["id" => $id]) }}" method="POST" style="display: flex;">
            @csrf
            <input type="text" class="form-control" placeholder="نام دسته بندی را وارد کنید" name="name">
            <button type="submit" class="btn btn-primary">ثبت</button>
        </form>
    </div>
</body>

</html>
