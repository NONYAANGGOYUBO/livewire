<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>


    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        {{-- <a href="{{ @livewire('try2') }}">Link Text</a> --}}

            {{-- first method to call livewire component --}}
            @livewire('clicker')

            {{-- second method to call livewire component --}}
            {{-- <livewire:clicker/> --}}
            <hr>

            {{-- calling another blade file of livewire --}}
            @livewire('test')
            <hr>
            @livewire('try2')

    </body>
</html>
