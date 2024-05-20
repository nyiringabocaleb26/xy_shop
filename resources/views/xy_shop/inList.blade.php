<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-mono">
<div class="w-full top-0 left-0 h-12 p-4 fixed flex bg-white shadow-slate-200 shadow-xl justify-between">
<div class="flex ml-3 font-bold text-md gap-3 -mt-2">
    <a href="/home" class="">Home</a>
    <a href="/admin">Edit</a>
    <a href="/client" class="text-sky-500">Products</a>
</div>
<div class="ml-3 font-bold text-md -mt-2">
    <a href="/user_login">Login</a>
    <a href="/insert_user">Signup</a>

</div>
</div>
    <div class="w-full h-14 rounded-lg text-4xl py-2 text-center font-bold bg-white shadow-xl shadow-slate-200 mt-16">
        <p class="">Products in stock</p>
</div>
    <table  class="border-2 border-slate-200 px-5 py-3 w-full h-1/2 mx-auto mt-16 text-xl">
    <tr class="hover:bg-slate-100"><th class="border-2 border-slate-200 px-5 ">No</th>
    <th class="border-2 border-slate-200 px-5">product code</th>
    <th class="border-2 border-slate-200 px-5">Date time</th>
    <th class="border-2 border-slate-200 px-5">Quantity</th>
    <th class="border-2 border-slate-200 px-5">Price per unit</th>
    <th class="border-2 border-slate-200 px-5">Total price</th></tr>
        @foreach($productIns as $productIn)
        <tr class="font-semibold hover:bg-slate-100"><td class="border-r-2 border-slate-200 px-5 ">{{$productIn->id}} </td>
        <td class="border-r-2 border-slate-200 px-5">{{$productIn->product_id}}</td>
        <td class="border-r-2 border-slate-200 px-5">{{$productIn->DateTime}}</td>
        <td class="border-r-2 border-slate-200 px-5">{{number_format($productIn->Quantity)}} pieces</td>
         <td class="border-r-2 border-slate-200 px-5">{{number_format($productIn->UnitPrice)}}<span class="text-slate-400 text-italic"><i>RWF</i></span></td>
        <td class="border-r-2 border-slate-200 px-5">{{number_format($productIn->TotalPrice)}}<span class="text-slate-400 text-italic"><i>RWF</i></span></td>
    </tr>
       @endforeach 
</table>

       <div class="w-full h-14 rounded-lg text-4xl py-2 text-center font-bold bg-white shadow-xl shadow-slate-200">
        <p class="">Sold products</p>
</div>
    <table  class="border-2 border-slate-200 px-5 py-3 w-full h-1/2 mx-auto mt-7 text-xl">
    <tr class="hover:bg-slate-100"><th class="border-2 border-slate-200 px-5 ">No</th>
    <th class="border-2 border-slate-200 px-5">product code</th>
    <th class="border-2 border-slate-200 px-5">Date time</th>
    <th class="border-2 border-slate-200 px-5">Quantity</th>
    <th class="border-2 border-slate-200 px-5">Price per unit</th>
    <th class="border-2 border-slate-200 px-5">Total price</th>
    
</tr>
        @foreach($productOuts as $productOut)
        <tr class="font-semibold hover:bg-slate-100"><td class="border-r-2 border-slate-200 px-5 ">{{$productOut->id}} </td>
        <td class="border-r-2 border-slate-200 px-5">{{$productOut->product_id}}</td>
        <td class="border-r-2 border-slate-200 px-5">{{$productOut->DateTime}}</td>
        <td class="border-r-2 border-slate-200 px-5">{{number_format($productOut->Quantity)}} pieces</td>
         <td class="border-r-2 border-slate-200 px-5">{{number_format($productOut->UnitPrice)}}<span class="text-slate-400">RWF</span></td>
        <td class="border-r-2 border-slate-200 px-5">{{number_format($productOut->TotalPrice)}}<span class="text-slate-400">RWF</span></td>
    </tr>
       @endforeach 
</body>
</html>