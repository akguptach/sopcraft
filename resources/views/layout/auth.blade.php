<!DOCTYPE html>
<html lang="en" class="h-100">
    <x-layout.header_auth title="{{@$title}}" />
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <div class="masthead wcu-masthead">
            <div class="container">
                @yield('content')
            </div>
            </div>
        </main>
        <x-layout.footer />
    </body>
</html>
