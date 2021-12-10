@extends('adminlte::page')

@section('meta_tags')
    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/img/favicon/site.webmanifest">
    <link rel="shortcut icon" href="/img/favicon/favicon.ico">

    <meta name="theme-color" content="#ffffff">
@endsection

@push('js')
    <script>
        jQuery(document).ready(function () {
            @if(Session::has('message'))
            toastr.success("{{ session('message') }}");
            @endif

            @if(Session::has('error'))
            toastr.error("{{ session('error') }}");
            @endif

            @if(Session::has('info'))
            toastr.info("{{ session('info') }}");
            @endif

            @if(Session::has('warning'))
            toastr.warning("{{ session('warning') }}");
            @endif

            @if($errors->all())
                @foreach ($errors->all() as $error)
                    toastr.error("{{ $error }}");
                @endforeach
            @endif
        })
    </script>
@endpush
