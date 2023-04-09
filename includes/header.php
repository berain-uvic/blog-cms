<!DOCTYPE html>
<html>
<head>
    <title>My blog</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>

    <div class="container">

    <header>
        <h1>My blog</h1>
    </header>

    <nav>
        <ul class="nav">
            <li class="navi-item"><a class="nav-link" href="/">Home</a></li>
            <?php if (Auth::isLoggedIn()) : ?>
                
                <li class="navi-item"><a class="nav-link" href="/admin/">Admin</a></li>
                <li class="navi-item"><a class="nav-link" href="/logout.php">Log out</a></li>

            <?php else: ?>

                <li class="navi-item"><a class="nav-link" href="/login.php">Log in</a></li>

            <?php endif; ?>
        </ul>
    </nav>

    <main>
