<!DOCTYPE html>
<html dir="rtl">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    @vite('resources/js/app.js')
    @include('layouts.head-css')
    @inertiaHead
</head>
<body>
@inertia
@include('layouts.vendor-scripts')
</body>
</html>
