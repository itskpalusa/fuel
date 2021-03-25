<!DOCTYPE HTML>


<html lang="en" xmlns="http://www.w3.org/1999/xhtml">


<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../assets/style.css">
    <title>GoreTex - Printable Table</title>
</head>


<body class="print-table">


    <?php if (isset($_POST['rowcols1'], $_POST['numcolor1'])) {​​​​​​​
            echo $_POST['rowcols1'];
            echo $_POST['numcolor1']; ?>
    <div id=table2>
        <table id=colorstable class=table2>
            <?php echo "table";
                    //loop over rows
                    for ($i = 0; $i <= $_POST['rowcols1']; $i++) {​​​​​​​
                        echo "<tr>";
                        // loop over columns
                        for ($j = 0; $j <= $_POST['rowcols1']; $j++) {​​​​​​​
                            echo "<td>";
                            if($i == 0){​​​​​​​ //top row
                                if($j == 0){​​​​​​​ //upper-leftmost cell is empty
                                    echo "<p>&nbsp</p>";
                                }​​​​​​​ else {​​​​​​​
                                    echo "<p>" . chr($j + 64) . "</p>";
                                }​​​​​​​
                            }​​​​​​​ else if($j == 0) {​​​​​​​ // left col
                                echo "<p>" . $i . "</p>";
                            }​​​​​​​
                            echo "</td>";
                        }​​​​​​​
                        echo "</tr>";
                    }​​​​​​​
                    ?>
        </table>
    </div>
    <?php }​​​​​​​ ?>



</body>


</html>