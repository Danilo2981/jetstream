<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tailwind</title>

    {{-- Tailwind CSS --}}
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body class="bg-body-pattern bg-scorll">
    @include('tailwind.header')
</body>
</html>