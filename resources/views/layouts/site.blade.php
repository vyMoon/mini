<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <title>Document</title>
</head>
<body>
    <header>
        <nav class="header">
            <div>
                <ul class="wrapper">
                    <li class="logo"></li>
                    <li><a href="http://minilaravel.loc">Main</a></li>
                    <li><a href="http://minilaravel.loc/page/add">New Article</a></li>
                    <li><a href="">О нас</a></li>
                    <li><a href="">Вебинары</a></li>
                    <li><a href="">Контакты</a></li>
                    <li class="searchIconBox">
                        <svg class="searchIcon gray" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
                    </li>
                    <li></li>
                    <li ><a class="enter" href="">Войти</a></li>
                </ul>
            </div>
        </nav>
        <div class="searchBox hidden">
            <!-- <div class="wrapper"> -->
                <form class="wrapper" action="">
                    <input type="text" class="searchField" placeholder="Введите то, что ищите на сайте">
                    <input type="submit" class="sendButton" value="Найти на сайте">
                </form>
            <!-- </div> -->
        </div>
    </header>
    
    @yield('content')

</body>
</html>