<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,400">
        <link rel="stylesheet" href="/css/replay.css">
        <title>Replay</title>
    </head>
    <body>
        <header class="visible-sm">
            @yield("title", "&nbsp;")
        </header>
        <nav>
            <a href="{{ route("replay.auth.home") }}" class="branding">Replay</a>
            <div class="links">
                @if (auth("replay")->guest())
                    <a href="{{ route("replay.auth.showLoginForm") }}" title="Login" class="{{ $isOnLogin ? "active" : "" }}">
                        <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>
                        <span class="hidden-xs">Login</span>
                    </a>
                    <a href="{{ route("replay.auth.showRegisterForm") }}" title="Register" class="{{ $isOnRegister ? "active" : "" }}">
                        <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                        <span class="hidden-xs">Register</span>
                    </a>
                @else
                    <form action="{{ route("replay.auth.logout") }}" method="post">
                        {{ csrf_field() }}
                        <a href="#" class="logout-button {{ $isOnLogout ? "active" : "" }}" title="Logout">
                            <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>
                            <span class="hidden-xs">Logout</span>
                        </a>
                    </form>
                @endif
            </div>
        </nav>
        <header class="hidden-sm">
            @yield("title", "&nbsp;")
        </header>
        <main>
            @yield("content")
        </main>
        <script src="/js/replay.js"></script>
    </body>
</html>
