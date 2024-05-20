<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('css/landing.css')}}">

</head>
<body>
    <div class="top">
        <div class="left">
            <a href="/home" class="">Home</a>
            <a href="/admin">Edit</a>
            <a href="/client" class="text-sky-500">Products</a>
        </div>
        <div class="right">
            <a href="/user_login">Login</a>
            <a href="/insert_user">Signup</a>
        </div>
    </div>
    <div class="center flex mt-10">
        <div class="">
        <p >Get different in your <br> shoppings with xy shop</p>
        <a href="/user_login" class="rounded-xl w-12 bg-sky-400 py-2 px-3">Get started</a >
</div>
        <img src="{{asset('great.avif')}}" alt="">
    </div>
</body>
</html>