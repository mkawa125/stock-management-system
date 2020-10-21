<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Stock management system - login</title>
	<meta name="author" content="Dahabu Mkawa">
    <meta name="description" content="">

    <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <style>
        .body-bg {
            --bg-opacity: 1;
            background-color: #f4f5f7;
            background-color: rgba(244, 245, 247, var(--bg-opacity));
            /* background-image: linear-gradient(315deg, #F7F9F9 0%, #F7F9F9 74%); */
        }
        body{
            overflow: hidden;
        }
    </style>
</head>
<body class="body-bg min-h-screen pt-12 md:pt-20 pb-6 px-2 md:px-0" style="font-family:'Lato',sans-serif;">
    <header class="max-w-lg mx-auto">
        <a href="#">
            <h1 class="text-3xl font-bold text-gray text-center">Logo</h1>
        </a>
    </header>
    
    <main class="bg-white max-w-md mx-auto p-8 md:p-12 my-10 rounded-lg shadow-lg">
            @yield('content')
    </main>

    {{-- <div class="max-w-lg mx-auto text-center mt-12 mb-6">
        <p class="text-white">Don't have an account? <a href="#" class="font-bold hover:underline">Sign up</a>.</p>
    </div> --}}

    
</body>
</html>