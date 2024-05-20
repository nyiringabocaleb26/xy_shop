<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
<div class="w-full top-0 left-0 h-12 p-4 fixed flex bg-white shadow-slate-200 shadow-xl justify-between">
<div class="flex ml-3 font-bold text-md gap-3 -mt-2">
    <a href="/home" class="text-sky-500">Home</a>
    <a href="/admin">Edit</a>
    <a href="/client">Products</a>
</div>
<div class="ml-3 font-bold text-md -mt-2">
    <a href="/insert_user">Login</a>
    <a href="/insert_user">Signup</a>

</div>
</div>

<table >
<table  class="border-2 border-slate-200 px-5 py-3 w-full h-1/2 mx-auto mt-16 text-xl">
    <tr class="hover:bg-slate-100"><th class="border-2 border-slate-200 px-5 ">No</th>
    <th class="border-2 border-slate-200 px-5">Product code</th>
    <th class="border-2 border-slate-200 px-5">Product name</th>
    </tr>
        @foreach($products as $product)
        <tr class="font-semibold hover:bg-slate-100"><td class="border-r-2 border-slate-200 px-5 ">{{$product->id}} </td>
        <td class="border-r-2 border-slate-200 px-5">{{$product->productCode}}</td>
        <td class="border-r-2 border-slate-200 px-5">{{$product->productName}}</td>
        <td class="border-r-2 border-slate-200 px-5"><img src="{{asset($product->image)}}" alt=""></td>
</tr>
       @endforeach 
</table>

    
    </div>
</body>
</html>