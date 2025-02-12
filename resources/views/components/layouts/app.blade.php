<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @fluxStyles
        @livewireStyles
    </head>

    <body class="min-h-screen bg-white dark:bg-zinc-900">
        <flux:header container class="bg-zinc-50 dark:bg-zinc-950 border-b border-zinc-200 dark:border-zinc-800">
            <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />

            <flux:brand href="/"
                logo='https://ui-avatars.com/api/?name=Faceless+Forge&background=8B5CF6&color=fff' name="FacelessForge"
                class="max-lg:hidden dark:hidden" />
            <flux:brand href="/"
                logo='https://ui-avatars.com/api/?name=Faceless+Forge&background=7C3AED&color=fff' name="FacelessForge"
                class="max-lg:!hidden hidden dark:flex" />

            <flux:navbar class="-mb-px max-lg:hidden">
                <flux:navbar.item icon="sparkles" href="{{ route('home') }}" :current="URL::isCurrentRoute('home')">
                    Agent
                </flux:navbar.item>
            </flux:navbar>

            <flux:spacer />

            <div class="flex">
                <flux:button x-data x-on:click="$flux.dark = ! $flux.dark" icon="moon" variant="subtle"
                    aria-label="Toggle dark mode" />
            </div>

        </flux:header>

        <flux:sidebar stashable sticky
            class="lg:hidden bg-zinc-50 dark:bg-zinc-900 border-r border-zinc-200 dark:border-zinc-700">
            <flux:sidebar.toggle class="lg:hidden" icon="x-mark" />

            <flux:brand href="/"
                logo='https://ui-avatars.com/api/?name=Faceless+Forge&background=8B5CF6&color=fff' name="FacelessForge"
                class="px-2 dark:hidden" />
            <flux:brand href="/"
                logo='https://ui-avatars.com/api/?name=Faceless+Forge&background=7C3AED&color=fff' name="FacelessForge"
                class="px-2 hidden dark:flex" />

            <flux:navlist variant="outline">
                <flux:navlist.item icon="home" href="{{ route('home') }}" :current="URL::isCurrentRoute('home')">
                    Agent</flux:navlist.item>
            </flux:navlist>
        </flux:sidebar>

        <flux:main container>
            {{ $slot }}
        </flux:main>


        @fluxScripts
        @livewireScripts
    </body>

</html>
