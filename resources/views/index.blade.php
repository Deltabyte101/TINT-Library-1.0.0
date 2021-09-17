@extends('master')

<!DOCTYPE html>
<html lang="en">

@yield('head')

<body>

    ระบบสืบค้นทรัพยากรห้องสมุด
    <br>

    <a href="{{ route('login.index') }}">เข้าสู่ระบบ</a>
    <a href="{{ route('register.index') }}">สมัครสมาชิก</a>

    <br>
    ค้นหาหนังสือ
    <input type="text" placeholder="ชื่อหนังสือ / หัวข้อ">
</body>
</html>
