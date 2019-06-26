<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{route('add.customer')}}" name="FormAdd" method="post">
    @csrf
    <br><span>Customer Name</span>
    <input name="name" type="text" required>
    <br><span>Email</span>
    <input name="email" type="text" required>
    <br><span>Address</span>
    <input name="address" type="text" required>
    <br><span></span>
    <input type="submit" value="Add Product">
</form>

<style>
    th{
        background: #0c5460;
        color: #ffffff;
    }
    th, td{
        border: 1px solid #000;
        text-align: center;
    }
    .tdwidth{
        min-width: 200px;
    }
    span {
        min-width: 120px;
        display: inline-block;
    }
</style>
</body>
</html>
