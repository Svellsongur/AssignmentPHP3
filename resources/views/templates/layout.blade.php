<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page_title')</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    @yield('page_css')
    @yield('head_js')

</head>

<body>
    @yield('header')
    @yield('content')
    @yield('footer')
    @yield('page_js')
</body>
<script src=" {{ asset('bootstrap/js/bootstrap.js') }}"></script>

    {{-- code bổ sung --}}
    <script src="{{ asset('bootstrap/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('bootstrap/input-mask/jquery.inputmask.js') }}"></script>
    <script src="{{ asset('bootstrap/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
    <script>
        $(function(){
            function readURL(input, selector) {
                if (input.files && input.files[0]) {
                    let reader = new FileReader();

                    reader.onload = function (e) {
                        $(selector).attr('src', e.target.result);
                    };

                    reader.readAsDataURL(input.files[0]);
                }
            }
            $("#cmt_anh").change(function () {
                readURL(this, '#anh_the_preview');
            });

        });
    </script>
</html>
