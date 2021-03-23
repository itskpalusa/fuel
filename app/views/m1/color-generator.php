<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../assets/style.css">
    <title>GoreTex - Color Generator</title>
</head>

<body>

    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="color-generator.php">Color Generator</a></li>
        </ul>
    </nav>

    <header>Goretex Professionals LLC<img
            src='https://i.pinimg.com/originals/ca/57/5b/ca575bc595713822b92880db4219881a.png' alt='logo' width='32'>
    </header>

    <div id=color-generator>
        <form method=post>
            <table>
                <tr>
                    <td>
                        <label for=rowcols>
                            <p>Number of rows/columns</p>
                        </label>
                        <input type=number name=rowcols id=rowcols>
                    </td>
                    <td>
                        <label for=numcolor>
                            <p>Number of colors</p>
                        </label>
                        <input type=number name=numcolor id=numcolor>
                    </td>
                    <td>
                        <input type=submit value=Submit>
                    </td>
                </tr>
            </table>
        </form>
        <?php
        if (isset($_POST['rowcols'], $_POST['numcolor'])) {
            $rows = $_POST['rowcols'];
            $cols = $_POST['rowcols'];
            $numcolor = $_POST['numcolor'];
            //validate
            $kill = false;
            if ($rows < 1 || $rows > 26) {
                echo ("<p id=err>rows/columns must be between 1 and 26.</p>");
                $kill = true;
            }
            if ($numcolor < 1 || $numcolor > 10) {
                echo ("<p id=err>number of colors must be between 1 and 10.</p>");
                $kill = true;
            }
            if ($kill == true) {
                die();
            }

            $first_table = array();
            // first (upper) table
            $optcolor = array('red', 'brown', 'orange', 'yellow', 'green', 'teal', 'grey', 'blue', 'purple', 'black');
            $datums = array();
            echo "<table id=colorstable>";
            for ($i = 0; $i < $numcolor; $i++) {
                echo "<tr>";
                for ($j = 0; $j < 2; $j++) {

                    if ($j == 0) {
                        echo "<td id=leftcol>";
                        echo "<form method=post>";
                        $datum = "color" . $i;
                        echo "<div id=color_select>";
                        echo "<select name=" . $datum . "id=" . $datum . '>';
                        array_push($datums, $datum);
                        foreach ($optcolor as &$value) {
                            echo "<option value=" . $value . ">" . $value . "</option>";
                            echo "</div>";
                        }
                        $first = array_shift($optcolor);
                        array_push($optcolor, $first);
                    } else {
                        echo "<td id=rightcol>";
                        echo "<p>&nbsp</p>";
                    }
        ?>

        </select>
        </form>
        </td>
        <?php
                }
                echo "</tr>";
            }
            echo "</table>";

            // USE JAVASCRIPT(???) TO CHECK FOR DUPLICATES

        }
        ?>
    </div>

    <footer>Copyright "GoreTex Professionals LLC" 2021</footer>

    <?php
    function has_dupes($array)
    {
        $dupe_array = array();
        foreach ($array as $val) {
            if (++$dupe_array[$val] > 1) {
                return true;
            }
        }
        return false;
    }
    ?>

</body>

</html>