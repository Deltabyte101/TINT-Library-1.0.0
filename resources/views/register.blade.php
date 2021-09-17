<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    สมัครสมาชิก
    <form action="{{ route('regis.create') }}">

        <label for="username">Username</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="password">password</label><br>
        <input type="text" id="password" name="password">
        <input type="submit" value="เข้าสู่ระบบ">

    </form>

</body>
</html>
