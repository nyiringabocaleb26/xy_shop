<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="bg-slate-50">
<div class="w-full top-0 left-0 h-12 p-4 fixed flex bg-white shadow-slate-200 shadow-xl justify-between">
<div class="flex ml-3 font-bold text-md gap-3 -mt-2">
    <a href="/" class="text-sky-500">Home</a>
    <a href="/admin">Edit</a>
    <a href="/client">Products</a>
</div>
<div class="ml-3 font-bold text-md -mt-2">
    <a href="/insert_user">Login</a>
    <a href="/insert_user">Signup</a>

</div>
</div>
    <div class="flex w-2/3 h-96 ml-72 mt-20 gap-4">
        <div class="w-1/3 h-1/2 rounded-xl bg-white shadow-xl shadow-slate-100">
        <div class="flex mt-3 px-3 py-2 rounded-lg m-2 justify-between shadow-lg shadow-slate-100  hover:bg-slate-50">
    <p class="float-left text-lg font-bold">Products</p>
    <!-- <img src = "{{asset('in.png')}}" class="float-right"> -->
   
</div>
<p class="text-center mt-3 text-8xl font-bold">
    {{$productCount}}
</p>
    
</div>

<div class="w-1/3 h-1/2 rounded-xl bg-white shadow-xl shadow-slate-100">
    <div class="flex mt-3 px-3 py-2 rounded-lg m-2 justify-between shadow-lg shadow-slate-100  hover:bg-slate-50">
    <p class="float-left text-lg font-bold">Stock in</p>
    <img src = "{{asset('in.png')}}" class="float-right">

</div>
<p class="text-center mt-3 text-8xl font-bold">
    {{$inCount}}
</p>
</div>
<div class="w-1/3 h-1/2 rounded-xl bg-white shadow-xl shadow-slate-100">
<div class="flex mt-2 px-2 py-2 rounded-lg m-2 justify-between shadow-xl shadow-slate-100  hover:bg-slate-50">
    <p class="float-left text-lg font-bold">Stock out</p>
    <img src = "{{asset('out.png')}}" class="float-right">
</div>
<p class="text-center mt-3 text-8xl font-bold">
    {{$CountOut}}
</p>
</div>
</div>


<div class="flex w-2/3 h-[370px] -mt-40 ml-72 gap-4 py-2">
<div class="w-96 h-full rounded-lg bg-white shadow-xl shadow-slate-100 px-4 py-4 overflow-hidden">
<img src="{{ asset('chart2.png') }}" class="shadow-xl shadow-slate-100 rounded-lg mt-5">
<p class="font-bold text-center text-lg mt-3">Shop growing</p>
<p class="font-bold text-center text-lg mt-3">check your shop growing  using XY_shop shop management system</p>
</div>

<div class="w-96 h-full rounded-lg bg-white shadow-xl shadow-slate-100">
<p class="text-center font-bold text-4xl mt-7">Solutions</p>
<p class="text-center font-bold text-lg mt-3 ">This system helps xy_shop shopkeepers<br> to create products data,<br> to view products data and<br> setting products prices and checking<br> transactions of products </p>

</div>

<div class="w-96 h-full rounded-lg bg-white shadow-xl shadow-slate-100">
<p class="text-center font-bold text-4xl mt-7">Transactions</p>

<p class="text-center mt-3 text-8xl font-bold">
    {{$inCount+$CountOut}}
</p>

</div>
</div>

</body>
</html>