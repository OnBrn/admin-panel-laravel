<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head-tag')
</head>

<body class="d-flex flex-column min-vh-100">

    @include('layouts.navbar')

    <main class="content-area flex-grow-1">
        @yield('content')
    </main>

    @include('Alerts.success')
    @include('Alerts.error')

    {{-- @include('layouts.footer') --}}

    <script src="{{ asset('js/alert.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
```
