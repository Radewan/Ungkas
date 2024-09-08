<!DOCTYPE html>
<html lang="en">

<head>
    <script src="js/color-modes.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <title>{{ $title ?? 'Nyasar' }}</title>
</head>

<body>
    <x-theme></x-theme>
    <x-header></x-header>
    <x-sidebar>
        <x-main>
            <x-slot:title>
                {{ $title }}
            </x-slot:title>
            {{ $slot }}
        </x-main>
    </x-sidebar>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/dashboard.js"></script>
</body>

</html>
