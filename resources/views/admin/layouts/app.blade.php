<!DOCTYPE html>
<html lang="en">

@include('admin.layouts.css')

<body>

    @include('admin.layouts.sidebar')

    <div class="wrapper d-flex flex-column min-vh-100">

        @include('admin.layouts.header')

        <div class="body flex-grow-1 overflow-auto px-3 pb-5">
            @yield('content')
        </div>

        @include('admin.layouts.footer')

    </div>

    @include('admin.layouts.js')

</body>

</html>