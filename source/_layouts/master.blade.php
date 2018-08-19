<!DOCTYPE html>
<html>
<head>
    <title>hbrawnak.me</title>

    <link rel="apple-touch-icon" sizes="57x57" href="files/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="57x57" href="files/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="files/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="files/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="files/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="files/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="files/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="files/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="files/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="files/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="files/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="files/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="files/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="files/favicon/favicon-16x16.png">
    <link rel="manifest" href="files/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="files/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">


    <meta name="description" content="Habib is a software engineer from Dhaka, Bangladesh. He loves everything that has to do with Design & Development, Project management and Industrial design. Programming is full of his passion">
    <meta name="keywords" content="PHP, Laravel, Python, Django, ML, AI">
    <meta name="author" content="Habibur Rahman">
    <meta property="og:image" content="https://hbrawnak.me/files/hb_img.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
</head>

<body>
    <header>
        <h1><a href="{{ $page->baseUrl }}">Habibur Rahman</a></h1>
        <h3>Software Engineer</h3>
        <ul>
            <li><a href="{{ $page->baseUrl }}">About Me</a></li>
            <li><a href="/projects">Projects</a></li>
            <li><a href="/contact">Contact</a></li>
            <li><a href="/resume">Resume</a></li>
        </ul>
    </header>
        @yield('body')
    <footer>
        <ul>
            <li><a href="https://linkedin.com/in/hbrawnak/" target="_blank"><i class="fab fa-linkedin"></i></a></li>
            <li><a href="https://github.com/hbrawnak" target="_blank"><i class="fab fa-github-alt"></i></a></li>
            <li><a href="https://twitter.com/hbrawnak" target="_blank"><i class="fab fa-twitter-square"></i></a></li>
            <li><a href="https://medium.com/@hbrawnak" target="_blank"><i class="fab fa-medium"></i></a></li>
            <li><a href="https://reddit.com/u/hbrawnak" target="_blank"><i class="fab fa-reddit-square"></i></a></li>
        </ul>
    </footer>
</body>
</html>

