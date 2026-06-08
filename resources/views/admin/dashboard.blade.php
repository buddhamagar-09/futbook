<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('admin.home.css')
<body>
    @include('admin.home.header')
    @include('admin.home.sidebar')
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <h2 class="h5 no-margin-bottom">Dashboard</h2>
            </div>
        </div>
        @include('admin.home.footer')
        @include('admin.home.js')
</body>
</html>