<!DOCTYPE html>

<!-- You must have a homepage with a modern design that includes
basic welcome information and contains useful links to get to
the other pages on the site. -->

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<body>

    <header>Goretex Professionals LLC<img
            src='https://i.pinimg.com/originals/ca/57/5b/ca575bc595713822b92880db4219881a.png' alt='logo' width='32'>
    </header>
    <div>
        <div class="jumbotron">
            <h1 class="display-4">Hello, world!</h1>
            <div id="welcome">
                <h1>Outstanding Designers & Website Developers</h1>
                <h2>Our team has been crafting beautiful websites since 2021. We create sites that are lightning fast
                    and
                    tailored to your needs.</h2>
            </div>
        </div>

        <div id="contact">
            <!-- the email doesn't get sent anywhere -->
            <form action="home.php" method="post">
                <label for="email">
                    <h1>Contact us for a free consultation!</h1>
                </label>
                <input type="email" id="email" name="email" placeholder="Enter your email">
                <input type="submit" value="submit">
            </form>
        </div>
        <?php
    if (isset($_POST['email'])) {
      echo "Thank you! You'll hear form us shortly.";
    }
    ?>
    </div>
</body>

</html>