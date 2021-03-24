<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>
        <?php echo $title ?>
    </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../assets/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <meta name="description" content="M1 Project">

</head>

<body>
    <header>
        <nav class='nav'>
            <a
                href="https://cs.colostate.edu:4444/~kpalusa/cs312/fuelviews/index/eastwest/west/west?direction=west">West</a>

            <?php echo '<a href="https://cs.colostate.edu:4444/~kpalusa/cs312/fuelviews/index/eastwest/'.$direction.'">One</a>' ?>
            <?php echo '<a href="https://cs.colostate.edu:4444/~kpalusa/cs312/fuelviews/index/eastwest/'.$direction2.'">Two</a>' ?>

            <a href="https://cs.colostate.edu:4444/~kpalusa/cs312/fuelviews/index/eastwest/east">Home</a><a
                href="https://cs.colostate.edu:4444/~kpalusa/cs312/fuelviews/index/eastwest/east/east?direction=east">East</a>

        </nav>
    </header>
    <main class="content">
        <div class='container'><?php echo $content ?><div>
    </main>
    <footer class="footer mt-auto py-3 bg-light">
        <div class="container">
            <span class="text-center">Copyright "GoreTex Professionals LLC" 2021</span>
        </div>
    </footer>
</body>