<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</head>
<body class="bg-gray-500" style="background:url('../public/bg.jpg');no-repeat">

<!-- <div class="w-full top-0 left-0 h-12 p-4 fixed flex bg-white shadow-slate-200 shadow-xl justify-between">
<div class="flex ml-3 font-bold text-md gap-3 -mt-2">
    <a href="/home" >Home</a>
    <a href="/admin" >Edit</a>
    <a href="/client">Products</a>
</div>
<div class="ml-3 font-bold text-md -mt-2">
    <a href="/user_login">Login</a>
    <a href="/insert_user" class="text-sky-500">Signup</a>

</div>
</div> -->
                @if(session('message'))
                <div class="w-[19rem] h-16 rounded-xl mt-14 mx-auto ring-2 ring-black">
                <p class="font-bold text-center text-lg mt-4">{{session('message')}}</p>
                </div>
                @endif

        <div class="bg-white w-1/5 h-[370px] mx-auto py-4 space-y-2 rounded-lg shadow-xl shadow-slate-100 mt-28 ring-slate-100 ring-2">
        <p class="text-center text-xl mt-2 font-bold ">User registration</p>
            <form class="mt-5" action="/create_user" method="post" >
               <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
               <label class="font-semibold mt-3 ml-8 text-lg">enter username:</label><br/>
                <input type="text" name="name" class="ring-2 ring-slate-200 rounded-md py-1 px-2 font-semibold ml-8 outline-none" placeholder="enter username"><br/>
                <label class="font-semibold mt-3 ml-8 text-lg">enter email:</label><br/>
                <input type="email" name="email" class="ring-2 ring-slate-200 rounded-md py-1 px-2 font-semibold ml-8 outline-none" placeholder="enter username"><br/>
                <label class="font-semibold mt-3 ml-8 text-lg">enter password:</label><br/>
                <input type="password" name="password" class="ring-2 ring-slate-200 rounded-md py-1 px-2 font-semibold ml-8 outline-none" placeholder="password here"><br/>
                <input class="w-[13rem] rounded-md py-1 px-2 font-bold mt-3 ml-8 cursor-pointer bg-sky-400 text-white" type="submit" value="Signup now" onclick="create()" id="btn">
</form>
<p class="ml-7 ">Already have an account?<br><a href="/user_login" class="text-sky-400">Login</a></p>
            </div>
            <script>
    let btn=document.getElementById('btn');
    btn.onclick=function(){
    Swal.fire({
    title: "Very Good",
    text: "you are so brave",
    icon: "success",
    color:"green",
    confirmButtonText: 'Success',
    confirmButtonColor: 'green',
    confirmButtonTextColor: 'blue',
    timer:6000,
    width:"400px",
    height:"1000px",
    showCloseButton:true,
    button:false,
    })};
        
    </script>
</body>
</html>
