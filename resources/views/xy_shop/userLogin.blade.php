<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="bg-gray-500" style="background:url('../public/bg.jpg');no-repeat">

<!-- <div class="w-full top-0 left-0 h-12 p-4 fixed flex bg-white shadow-slate-200 shadow-xl justify-between">
<div class="flex ml-3 font-bold text-md gap-3 -mt-2">
    <a href="/home" >Home</a>
    <a href="/admin" >Edit</a>
    <a href="/client">Products</a>
</div>
<div class="ml-3 font-bold text-md -mt-2">
    <a href="/user_login" class="text-sky-500">Login</a>
    <a href="/insert_user" >Signup</a>

</div>
</div> -->
@if(session('message'))
                <div class="w-[19rem] h-16 rounded-xl mt-14 mx-auto ring-2 ring-black">
                <p class="font-bold text-center text-green-400 text-lg mt-4">{{session('message')}}</p>
                </div>
@endif
        <div class="bg-white w-1/5 h-[370px] mx-auto py-4 space-y-2 rounded-lg shadow-xl shadow-slate-100 mt-28 ring-slate-100 ring-2">
        <p class="text-center text-xl mt-2 font-bold ">User login</p>
            <form class="mt-5" action="/dashboard" method="post" >
               <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
               <label class="font-semibold mt-3 ml-8 text-lg" >enter email:</label><br/>
                <input type="email" name="email" class="ring-2 ring-slate-200 rounded-md py-1 px-2 font-semibold ml-8 outline-none" placeholder="Email here"><br/>
                <label class="font-semibold mt-3 ml-8 text-lg">enter password:</label><br/>
                <input type="password" name="password" class="ring-2 ring-slate-200 rounded-md py-1 px-2 font-semibold ml-8 outline-none" placeholder="Password here"><br/>
                <button class="w-[13.2rem] flex gap-2 rounded-md py-1 px-2 font-bold mt-3 ml-8 cursor-pointer bg-sky-400 text-white" type="submit" >
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 ml-14">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15M12 9l-3 3m0 0 3 3m-3-3h12.75" />
                </svg>

                    <p>Login</p>
            
            </button>
</form>
<p class="ml-7 text-semibold">Not have an account?<a href="/insert_user" class="text-sky-400">create it</a></p>

            </div>
</html>
