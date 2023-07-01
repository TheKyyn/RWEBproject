@extends('layouts.base')

@section('body')
<head>
    <!-- Ajout de Tailwind CSS -->
    <link href="https://cdn.tailwindcss.com/2.2.19/tailwind.min.css" rel="stylesheet">
</head>
<body>
    @yield('content')

    @isset($slot)
        {{ $slot }}
    @endisset
</body>
@endsection
