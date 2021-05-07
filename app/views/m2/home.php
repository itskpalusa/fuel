<!DOCTYPE html>

<!-- You must have a homepage with a modern design that includes
basic welcome information and contains useful links to get to
the other pages on the site. -->

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">


<div class="container">
    <section class="jumbotron text-center">
        <h1 class="display-4">Goretex Professionals</h1>
        <p class="lead">Outstanding Designers & Website Developers</p>
        <hr class="my-4">
        <p>Our team has been crafting beautiful websites since 2021. We create sites that are lightning fast and
            tailored to your needs.</p>
        <p class="lead">
            <a class="btn btn-transparent btn-lg" href="https://cs.colostate.edu:4444/~kpalusa/m1/index/m1/about.php"
                role="button">Learn more</a>
        </p>
    </section>

    <div id=contact>
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
<footer>Copyright "GoreTex Professionals LLC" 2021</footer>

</html>