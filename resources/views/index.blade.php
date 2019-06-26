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
<h1>Danh sách khách hàng</h1>
<table border="1">
    <thead>
    <tr>
        <th>STT</th>
        <th>Họ và tên</th>
{{--        <th>Email</th>--}}
{{--        <th>Dia chi</th>--}}
    </tr>
    </thead>
    @foreach($customers as $key => $value)
    <tbody>
    <tr>
        <td class="tdwidth">{{$key+1}}</td>
        <td class="tdwidth" >{{$value->name}}</td>
{{--        <td class="tdwidth" >{{$value->email}}</td>--}}
{{--        <td class="tdwidth" >{{$value->address}}</td>--}}
        <td>
            <a href="{{route('show.edit',["id"=>$value->id])}}">Sửa</a> |
            <a href="{{route('deleteID',["id"=>$value->id])}}">Xóa</a>
        </td>
    </tr>
    </tbody>
    @endforeach

    <a href="{{route('FormAdd')}}">
        <button type="submit">Them</button>
    </a>
</table>
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
