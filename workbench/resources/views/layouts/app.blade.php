<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <link rel="stylesheet" href="{{ asset('vendor/livewire-dropzone/styles.css') }}">
    
    <title>Livewire Dropzone</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="max-w-2xl mx-auto min-h-screen flex justify-center items-center">
    {{ $slot }}
</body>
</html>