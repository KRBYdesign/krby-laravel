<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {!! SEO::generate() !!}
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Rethink+Sans:ital,wght@0,400..800;1,400..800&display=swap');
    </style>
    <script src="https://kit.fontawesome.com/6b817bc630.js" crossorigin="anonymous"></script>
</head>
<body>
    <header class="header">
        <div class="content"></div>
    </header>

{{ $slot }}
</body>
</html>
