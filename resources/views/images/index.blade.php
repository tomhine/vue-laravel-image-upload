<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <title>Image Uploader - Vue & Laravel</title>
</head>

<body class="font-poppins antialiased">
    <div class="max-w-lg mx-auto mt-24">
        <h1 class="text-4xl font-bold text-center">Image Uploader
        </h1>
    </div>

    <main class="flex flex-col items-center p-4">
        <!-- vue app mounts here -->
        <div id="app"></div>
    </main>

    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>
