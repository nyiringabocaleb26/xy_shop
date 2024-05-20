<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loading...</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body onload="load()">
    <div id="load" class="w-full h-full">
        <p class="ml-[40%] mt-[20%] font-bold text-5xl ">
        XY<br/>Shop<span class="text-4xl animate-bounce">...</span>
</p>
    </div>
    <div class="w-9 h-9 rounded-full border-4 border-b-white border-sky-500 animate-spin mx-auto"></div>
    <script>

        function load(params) {
            setInterval(() => {
                window.location.href = 'home';
            }, 3000);
        }
        </script>
</body>
</html>