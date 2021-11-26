@extends('adminlte::page')

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
