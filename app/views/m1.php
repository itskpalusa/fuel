<head>
    <title>
        <?php echo $title ?>
    </title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="$this->template->css">
    <style>
    body {
        background-color: #F4F5EB;
        font-family: Arial, Helvetica, sans-serif;
        margin: auto;
        align-content: center;
        width: 100%;
        max-width: 1200px;
    }

    nav {
        background-color: transparent;
        width: 100%;
    }

    nav ul {
        list-style-type: none;
        margin: 0;
        overflow: hidden;
        padding: 0;
    }

    nav li {
        float: left;
        padding: 16px;
    }

    nav a {
        color: #F4F5EB;
        background-color: #BF4F50;
        font-size: 17px;
        overflow: hidden;
        padding: 14px 16px;
        text-decoration: none;
        text-align: center;
        border-radius: 10px;
    }

    nav a:hover {
        background-color: #DE7846;
    }

    header {
        background-color: #59D195;
        color: #F4F5EB;
        font-size: 36px;
        padding: 24px;
        text-align: right;
    }

    #welcome {
        color: #1CBC9D;
    }

    h1 {
        font-size: 36px;
        padding: 24px;
    }

    h2 {
        color: #BF4F50;
        padding-bottom: 24px;
        font-style: italic;
        font-size: 24px;
        text-align: justify;
    }

    #content {
        margin: auto;
        padding: 10px;
        width: 50%;
    }

    #contact {
        background-color: #1CBC9D;
        box-shadow: 0 0 15px 4px rgba(0, 0, 0, 0.06);
        border-radius: 10px;
        text-align: center;
    }

    #contact>* {
        padding: 16px;
    }

    #contact h1 {
        color: #F4F5EB;
    }

    input[type=email] {
        padding: 10px;
        margin: 10px 0;
        border: 0;
        box-shadow: 0 0 15px 4px rgba(0, 0, 0, 0.06);
        border-radius: 10px;
        width: 80%;
    }

    input[type=submit] {
        background-color: #BF4F50;
        color: #F4F5EB;
        padding: 10px;
        margin: 0 auto;
        border: 0;
        box-shadow: 0 0 15px 4px rgba(0, 0, 0, 0.06);
        border-radius: 10px;
    }

    input[type=submit]:hover {
        background-color: #DE7846;
    }

    #members img {
        width: 280px;
        padding: 12px;
    }

    #column {
        float: inline-start;
        margin-right: 24px;
    }

    #person {
        margin-top: 56px;
        margin-right: 12px;
    }

    #bio {
        float: right;
        max-width: 260px;
        margin-top: 40px;
        text-align: justify;
    }

    #color-generator form {
        padding: 20px
    }

    #colorstable {
        width: 80%;
        margin: auto;
        align-content: center;
        background-color: white;
        border-collapse: collapse;
    }

    #colorstable tr td {
        border: 2px solid #DE7846;
        text-align: center;
    }

    #colorstable .leftcol {
        width: 20%;
    }

    #colorstable .rightcol {
        width: 80%;
    }

    #table2 {
        margin-bottom: 20px
    }

    .table2 {
        height: 900px;
        width: 900px;
    }

    .table2 td {
        height: 25px;
        width: 25px;
    }

    #table2 p {
        color: #BF4F50;
        font-weight: bold;
        font-size: 12px;
        margin: 0;
    }

    #printButton {
        margin: 25px;
        left: 50%;
    }

    p {
        color: #BF4F50;
        font-size: 16px;
    }

    footer {
        background-color: #59D195;
        bottom: 0;
        left: 0;
        right: 0;
        color: #F4F5EB;
        padding: 6px;
        position: absolute;
        text-align: center;
        margin: 0 auto;
        max-width: 1200px;
    }
    </style>

</head>

<body>

    <nav>
        <ul>
            <li><a href="https://cs.colostate.edu:4444/~kpalusa/m1/">Home</a></li>
            <li><a href="https://cs.colostate.edu:4444/~kpalusa/m1/index/m1/about.php">About</a></li>
            <li><a href="https://cs.colostate.edu:4444/~kpalusa/m1/index/m1/colorGenerator.php">Color Generator</a>
            </li>
        </ul>
    </nav>

    <header>Goretex Professionals LLC<img
            src='https://i.pinimg.com/originals/ca/57/5b/ca575bc595713822b92880db4219881a.png' alt='logo' width='32'>
    </header>

    <main>
        <?php echo $content ?>
    </main>

</body>