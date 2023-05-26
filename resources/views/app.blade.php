<!DOCTYPE html>
<html direction="rtl" dir="rtl" style="direction: rtl" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    @vite('resources/js/app.js')
    @include('layouts.head-css')
    <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
    @inertiaHead
</head>
<body id="kt_body" class="header-fixed header-mobile-fixed
 subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">

<script>if (document.documentElement) {
        const defaultThemeMode = "system";
        const name = document.body.getAttribute("data-kt-name");
        let themeMode = localStorage.getItem("kt_" + (name !== null ? name + "_" : "") + "theme_mode_value");
        if (themeMode === null) {
            if (defaultThemeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            } else {
                themeMode = defaultThemeMode;
            }
        }
        document.documentElement.setAttribute("data-theme", themeMode);
    }</script>
@inertia
@include('layouts.vendor-scripts')
</body>
</html>
