<!DOCTYPE html>
<html lang="en">
    @include('layouts.header-tag');
<body>
    <div>
        @include('layouts.header');
    </div>

    <div class="container mx-auto">
        @yield('body')
    </div>

    <div>
        @include('layouts.footer');
    </div>
    @livewireScripts
    @livewireChartsScripts
</body>

{{-- scripts --}}
    @include('layouts.scripts');
</html>
