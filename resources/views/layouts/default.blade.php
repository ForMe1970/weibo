<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title', 'Weibo App') - Laravel 新手入门教程</title>
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <nav class="navbar weibo-nav">
            <div class="container">
                <a href="#" class="navbar-brand navbar-logo">Weibo App</a>
                <ul class="nav navbar-nav navbar-menu">
                    <li>
                        <a href="#" class="navbar-link">帮助</a>
                    </li>
                    <li>
                        <a href="#" class="navbar-link">登录</a>
                    </li>
                </ul>
            </div>
        </nav>
        @yield('content')
    </body>
</html>
