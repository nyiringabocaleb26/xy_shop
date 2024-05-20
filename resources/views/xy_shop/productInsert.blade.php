<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!-- <script src="https://cdn.tailwindcss.com"></script> -->

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/product.css')}}">
    </head>
    <body class="bg-slate-100" style="background:url('../public/bg.jpg');no-repeat">
    <div class="sidebar ">
    <div class="xy">
        <p id="lg">Xy shop</p>
    </div>

    <a href="/home" class="">
    
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48">
        <path d="M23.951172 4 A 1.50015 1.50015 0 0 0 23.072266 4.3222656L8.859375 15.519531C7.0554772 16.941163 6 19.113506 6 21.410156L6 40.5C6 41.863594 7.1364058 43 8.5 43L18.5 43C19.863594 43 21 41.863594 21 40.5L21 30.5C21 30.204955 21.204955 30 21.5 30L26.5 30C26.795045 30 27 30.204955 27 30.5L27 40.5C27 41.863594 28.136406 43 29.5 43L39.5 43C40.863594 43 42 41.863594 42 40.5L42 21.410156C42 19.113506 40.944523 16.941163 39.140625 15.519531L24.927734 4.3222656 A 1.50015 1.50015 0 0 0 23.951172 4 z M 24 7.4101562L37.285156 17.876953C38.369258 18.731322 39 20.030807 39 21.410156L39 40L30 40L30 30.5C30 28.585045 28.414955 27 26.5 27L21.5 27C19.585045 27 18 28.585045 18 30.5L18 40L9 40L9 21.410156C9 20.030807 9.6307412 18.731322 10.714844 17.876953L24 7.4101562 z"/>
    </svg>
    <p>Home</p></a>
    <a href="/admin">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48" class="w-8 h-8" style="stroke:2px">
                    <path d="M10.490234 2C10.011234 2 9.6017656 2.3385938 9.5097656 2.8085938L9.1757812 4.5234375C8.3550224 4.8338012 7.5961042 5.2674041 6.9296875 5.8144531L5.2851562 5.2480469C4.8321563 5.0920469 4.33375 5.2793594 4.09375 5.6933594L2.5859375 8.3066406C2.3469375 8.7216406 2.4339219 9.2485 2.7949219 9.5625L4.1132812 10.708984C4.0447181 11.130337 4 11.559284 4 12C4 12.440716 4.0447181 12.869663 4.1132812 13.291016L2.7949219 14.4375C2.4339219 14.7515 2.3469375 15.278359 2.5859375 15.693359L4.09375 18.306641C4.33275 18.721641 4.8321562 18.908906 5.2851562 18.753906L6.9296875 18.1875C7.5958842 18.734206 8.3553934 19.166339 9.1757812 19.476562L9.5097656 21.191406C9.6017656 21.661406 10.011234 22 10.490234 22L13.509766 22C13.988766 22 14.398234 21.661406 14.490234 21.191406L14.824219 19.476562C15.644978 19.166199 16.403896 18.732596 17.070312 18.185547L18.714844 18.751953C19.167844 18.907953 19.66625 18.721641 19.90625 18.306641L21.414062 15.691406C21.653063 15.276406 21.566078 14.7515 21.205078 14.4375L19.886719 13.291016C19.955282 12.869663 20 12.440716 20 12C20 11.559284 19.955282 11.130337 19.886719 10.708984L21.205078 9.5625C21.566078 9.2485 21.653063 8.7216406 21.414062 8.3066406L19.90625 5.6933594C19.66725 5.2783594 19.167844 5.0910937 18.714844 5.2460938L17.070312 5.8125C16.404116 5.2657937 15.644607 4.8336609 14.824219 4.5234375L14.490234 2.8085938C14.398234 2.3385937 13.988766 2 13.509766 2L10.490234 2 z M 12 8C14.209 8 16 9.791 16 12C16 14.209 14.209 16 12 16C9.791 16 8 14.209 8 12C8 9.791 9.791 8 12 8 z" fill="#FFFFFF" />
                    </svg>
    <p>Edit</p>
</a>
    <a href="/client" class="">
        <img src=" {{asset('product_cart.png')}} " alt="">
        <p>Products </p></a>

<div class="log">
    <a href="/user_login">
    <img src=" {{asset('login.png')}} " alt="">
    <p>Login</p>

</a>
    <a href="/insert_user">
    <img src=" {{asset('signup.png')}} " alt="">
    <p>Signup</p>
</a>

</div>
</div>
<div class="header"></div>
        <div class="form">
        <p id="pr" class="text-center text-xl mt-5 font-bold px-2">Product registration</p>
            <form class="mt-5 h-2/3" action="/create" method="post" enctype="multipart/form-data">
               <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
               <label class="font-semibold mt-3 ml-8 text-lg">enter product code:</label><br/>
                <input type="number" name="productCode" class="ring-2 ring-slate-300 rounded-md py-1 px-2 font-semibold ml-8 outline-none" placeholder="enter product code"><br/>
                <label class="font-semibold mt-16 ml-8 text-lg">enter product name:</label><br/>
                <input type="text" name="productName" class="ring-2 ring-slate-300 rounded-md py-1 px-2 font-semibold ml-8 outline-none" placeholder="enter product name"><br/>
                <label class="font-semibold mt-16 ml-8 text-lg">Upload product image:</label><br/>
                <input style="border-style:dashed;" type="file" name="image" class="w-[13rem]  h-11 cursor-pointer border-2 border-slate-400 border-dashed rounded-md py-2 px-1 font-semibold ml-8 mt-3 outline-none" value="upload photo"><br/>

                <!-- <label class="font-semibold mt-3 ml-8 text-lg">Upload product image:</label><br/> -->
                <button class="w-[13rem] flex gap-3 rounded-md py-2 px-3 font-bold mt-3 ml-8 cursor-pointer bg-sky-400 text-white" type="submit" ><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="64" height="64" class="ml-4 w-8 h-8 stroke-2 ">
                    <path d="M16 3C8.832031 3 3 8.832031 3 16C3 23.167969 8.832031 29 16 29C23.167969 29 29 23.167969 29 16C29 8.832031 23.167969 3 16 3 Z M 16 5C22.085938 5 27 9.914063 27 16C27 22.085938 22.085938 27 16 27C9.914063 27 5 22.085938 5 16C5 9.914063 9.914063 5 16 5 Z M 15 10L15 15L10 15L10 17L15 17L15 22L17 22L17 17L22 17L22 15L17 15L17 10Z" fill="#FFFFFF" />
                    </svg> <p class="mt-1"> Add product</p> </button>

</form>

            </div>
    </body>
</html>
