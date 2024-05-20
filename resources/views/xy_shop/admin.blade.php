<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="bg-slate-50">
<div class="w-full top-0 left-0 h-12 p-4 fixed flex bg-white shadow-slate-200 shadow-xl justify-between">
<div class="flex ml-3 font-bold text-md gap-3 -mt-2">
    <a href="/home" >Home</a>
    <a href="/admin" class="text-sky-500">Edit</a>
    <a href="/client">Products</a>
</div>
<div class="ml-3 font-bold text-md -mt-2">
    <a href="/user_login">Login</a>
    <a href="/insert_user">Signup</a>

</div>
</div>
    <div class="w-1/2 h-12 rounded-lg bg-white py-2 px-2 mt-20 mx-auto">
        <p class="text-xl font-bold text-center">Set prices for your products</p>
</div>
@if (session('message'))
                <p class="font-bold ml-20 ">{{ session('message') }}</p>
                @endif
<div class="bg-white w-1/5 h-[420px] mx-auto py-4 space-y-2 rounded-lg shadow-xl shadow-slate-100 mt-16 ">
        <p class="text-center text-xl mt-2 font-bold ">Product settings</p>
            <form class="mt-5" action="/admin" method="post" enctype="multipart/form-data">
               <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
               <label class="font-semibold mt-3 ml-8 text-lg">select product :</label><br/>
               <select name="product_id" class="ring-2 ring-slate-200 rounded-md py-1 px-9 font-semibold ml-8 outline-none leading-tight" value="select product">
                <option value="">--select--</option>
               @foreach($products as $key => $product):
                <option value=" {{$product->productCode}} ">{{ $product->productName }}</option>
               @endforeach
               </select><br/>
               <select name="name" class="ring-2 ring-slate-200 rounded-md py-1 px-9 font-semibold ml-8 outline-none leading-tight" value="select product">
                <option value="">--select--</option>
               @foreach($products as $key => $product):
                <option value=" {{$product->productName}} ">{{ $product->productName }}</option>
               @endforeach
               </select><br>
               <label class="font-semibold mt-3 ml-8 text-lg">enter product date:</label><br/>
                <input type="date" name="DateTime" class="ring-2 ring-slate-200 rounded-md py-1 px-9 font-semibold ml-8 outline-none" placeholder=" product unit price"><br/>
                <label class="font-semibold mt-3 ml-8 text-lg">enter product quantity:</label><br/>
                <input type="number" name="Quantity" class="ring-2 ring-slate-200 rounded-md py-1 px-2 font-semibold ml-8 outline-none" placeholder=" product unit price"><br/>
                <label class="font-semibold mt-3 ml-8 text-lg">enter product price:</label><br/>
                <input type="number" name="UnitPrice" class="ml-7 mt-3 font-bold rounded-md ring-2 ring-slate-200 rounded-md py-1 px-0 outline-none"  placeholder=" product unit price">
                <input type="file" class="ml-7 mt-3 font-bold rounded-md appearance-none" name="image" value="add product">
                
                
                
                <button class="w-[13rem] flex gap-3 rounded-md py-2 px-3 font-bold mt-3 ml-8 cursor-pointer bg-sky-400 text-white" type="submit" ><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48" class="w-8 h-8">
                    <path d="M10.490234 2C10.011234 2 9.6017656 2.3385938 9.5097656 2.8085938L9.1757812 4.5234375C8.3550224 4.8338012 7.5961042 5.2674041 6.9296875 5.8144531L5.2851562 5.2480469C4.8321563 5.0920469 4.33375 5.2793594 4.09375 5.6933594L2.5859375 8.3066406C2.3469375 8.7216406 2.4339219 9.2485 2.7949219 9.5625L4.1132812 10.708984C4.0447181 11.130337 4 11.559284 4 12C4 12.440716 4.0447181 12.869663 4.1132812 13.291016L2.7949219 14.4375C2.4339219 14.7515 2.3469375 15.278359 2.5859375 15.693359L4.09375 18.306641C4.33275 18.721641 4.8321562 18.908906 5.2851562 18.753906L6.9296875 18.1875C7.5958842 18.734206 8.3553934 19.166339 9.1757812 19.476562L9.5097656 21.191406C9.6017656 21.661406 10.011234 22 10.490234 22L13.509766 22C13.988766 22 14.398234 21.661406 14.490234 21.191406L14.824219 19.476562C15.644978 19.166199 16.403896 18.732596 17.070312 18.185547L18.714844 18.751953C19.167844 18.907953 19.66625 18.721641 19.90625 18.306641L21.414062 15.691406C21.653063 15.276406 21.566078 14.7515 21.205078 14.4375L19.886719 13.291016C19.955282 12.869663 20 12.440716 20 12C20 11.559284 19.955282 11.130337 19.886719 10.708984L21.205078 9.5625C21.566078 9.2485 21.653063 8.7216406 21.414062 8.3066406L19.90625 5.6933594C19.66725 5.2783594 19.167844 5.0910937 18.714844 5.2460938L17.070312 5.8125C16.404116 5.2657937 15.644607 4.8336609 14.824219 4.5234375L14.490234 2.8085938C14.398234 2.3385937 13.988766 2 13.509766 2L10.490234 2 z M 12 8C14.209 8 16 9.791 16 12C16 14.209 14.209 16 12 16C9.791 16 8 14.209 8 12C8 9.791 9.791 8 12 8 z" fill="#FFFFFF" />
                    </svg>  <p class="mt-1"> Set product</p> 
                </button>
                

</form>

            </div>
</body>
</html>