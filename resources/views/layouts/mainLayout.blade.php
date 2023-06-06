<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&family=Quicksand:wght@600&display=swap"
        rel="stylesheet">
    {{-- alert --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css"
        integrity="sha512-O03ntXoVqaGUTAeAmvQ2YSzkCvclZEcPQu1eqloPaHfJ5RuNGiS4l+3duaidD801P50J28EHyonCV06CUlTSag=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"
        integrity="sha512-Zq9o+E00xhhR/7vJ49mxFNJ0KQw1E1TMWkPTxrWcnpfEFDEXgUiwJHIKit93EW/XxE31HSI5GEOW06G6BF1AtA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('assets/js/iziAlert.js') }}"></script>
    {{-- multiple select --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag/dist/css/multi-select-tag.css">
    @stack('js-top')
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
    @stack('css')
</head>

<body class="bg-body font-nunito overflow-visible">
    @include('partials.navbar')
    <div class="flex">
        @include('partials.aside')
        
        @yield('modal')
        @yield('content')
    </div>
    
    @if (Session::has('msg_error'))
        <script>
            showAlert("{{ Session::get('msg_error') }}", 'error')
        </script>
    @elseif(Session::has('msg_success'))
        <script>
            showAlert("{{ Session::get('msg_success') }}", 'success')
        </script>
    @elseif(Session::has('msg_info'))
        <script>
            showAlert("{{ Session::get('msg_info') }}", 'info')
        </script>
    @endif

    <script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag/dist/js/multi-select-tag.js"></script>
    <script src="{{ asset('assets/js/menu.js') }}"></script>
    <script src="{{ asset('assets/js/dropdown.js') }}"></script>
    @stack('js')
</body>

</html>