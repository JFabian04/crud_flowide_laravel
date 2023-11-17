<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    {{-- @vite(['resources/js/jquery/jquery.js']) --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.input-insert').on('input', function() {
                $(this).closest('.input-container').find('.validate-error-span').text('');
            });

            $('#submitBtn').on('click', function(e) {
                e.preventDefault();
                let formData = $('#form').serialize();

                $.ajax({
                    method: 'POST',
                    url: '/store-user',
                    data: formData,
                    success: function(response) {
                        window.location.reload()
                    },
                    error: function(xhr) {
                        console.log('xd: ', xhr);
                        let errors = xhr.responseJSON.errors;

                        $.each(errors, function(key, value) {
                            $("#" + key).next().text(value);
                        });
                    }
                });
            });
        });

        $('body').on('submit', '#formUpdate', function(e) {
            e.preventDefault();
            let formData = $(this).serialize();
            const id = $(this).data('id');

            $.ajax({
                method: 'POST',
                url: '/update-user/' + id,
                data: formData,
                success: function(response) {
                    window.location.reload()
                },
                error: function(xhr) {
                    console.log('xd --: ', xhr);
                    let errors = xhr.responseJSON.errors;

                    $.each(errors, function(key, value) {
                        console.log(key + ' : ' + value);
                        $(".input-container:has(input[name='" + key +
                            "']) .validate-error-span").text(value);
                    });
                }
            });
        });
    </script>
</head>

<body>
    @include('layouts.modal')
    <div class="p-12 mt-10">
        @yield('content')
    </div>

</html>
