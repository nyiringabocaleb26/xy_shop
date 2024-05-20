<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>panel</title>
    <link rel="stylesheet" href="{{asset('css/panel.css')}}">
        <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
    <table>
        <tr>
            <th>No</th>
            <th>Product code</th>
            <th>Product name</th>
            <th>Delete</th>
            <th>update</th>
        </tr>
    @foreach($products as $product)

        <tr class="tr">
            <td> {{$product->id}} </td>
            <td> {{$product->productCode}} </td>
            <td> {{$product->productName}} </td>
            <td class="delete" > <a id="a" href="panel/{{ $product->id }}">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
        </svg>
      <p>Delete</p></a>
 </td>
 <td class="update">
    <a id="a" href="update/{{ $product->id }}">
 <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
</svg>
    <p>Update</p></a>
 </td>
        </tr>

    @endforeach
    
    </table>
    <a href="/insert" class="add w-[13rem] flex gap-3 rounded-md py-2 px-3 font-bold mt-3 ml-8 cursor-pointer bg-sky-400 text-white" type="submit" >
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="64" height="64" class="ml-4 w-8 h-8 stroke-2 ">
                    <path d="M16 3C8.832031 3 3 8.832031 3 16C3 23.167969 8.832031 29 16 29C23.167969 29 29 23.167969 29 16C29 8.832031 23.167969 3 16 3 Z M 16 5C22.085938 5 27 9.914063 27 16C27 22.085938 22.085938 27 16 27C9.914063 27 5 22.085938 5 16C5 9.914063 9.914063 5 16 5 Z M 15 10L15 15L10 15L10 17L15 17L15 22L17 22L17 17L22 17L22 15L17 15L17 10Z" fill="#FFFFFF" />
        </svg> <p class="mt-1"> Add product</p> 
</a>
</body>
</html>