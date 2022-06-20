<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
    <link rel="stylesheet" href="../css/all.css">
    <link rel="stylesheet" href="../css/fonts/font/fonts.css">
    <link rel="stylesheet" href="../css/fonts/fontawesome/css/all.min.css">
    <title>todo</title>
</head>

<body>
    <div class="container">
        <br><br>
        <table class="table table-striped">
            <tr>
                <td>کد</td>
                <td>نام</td>
                <td>حذف</td>
                <td>ویرایش</td>
            </tr>
            <tr>
                <td>{{ $show->id }}</td>
                <td>{{ $show->name }}</td>
                <td><a href="/delete/{{ $show->id }}" class="btn btn-danger">حذف <i
                            class="fa-solid fa-trash-can"></a></td>
                <td><a href="" class="btn btn-primary">ویرایش <i class="fa-solid fa-pen-to-square"></a></td>
            </tr>
        </table>
</body>

</html>
