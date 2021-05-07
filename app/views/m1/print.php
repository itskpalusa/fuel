<!DOCTYPE HTML>


<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<body id="printView">

<br><br>

<?php
$rows = $_POST['rowcols'];
$cols = $_POST['rowcols'];
$numcolor = $_POST['numcolor'];
$spots = array();
$spotsCol = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
for ($i = 1; $i <= $rows; $i++) {
    for ($j = 0; $j < $rows; $j++) {
        array_push($spots, $spotsCol[$j] . $i);
    }
}
?>




<!-- table1 -->
<?php

            $first_table = array();
            // first (upper) table
            $optcolor = array('red', 'brown', 'orange', 'yellow', 'green', 'teal', 'grey', 'blue', 'purple', 'black');
            $datums = array();
            echo "<table id='colorstable' class='colorstable'>";
            //loop over rows
            for ($i = 0; $i < $numcolor; $i++) {
                echo "<tr>";
                // loop over columns
                for ($j = 0; $j < 2; $j++) {
                    // Put select options in left column of table
                    if ($j == 0) {
                        $datum = $optcolor[$i]; //FIXME, should be selected color
                        echo"<td class='leftcol'>$datum</td>";
                    }
                    else {
                        echo "<td>";
                        $rowI = ($_POST['rowcols'] * $_POST['rowcols'] / $_POST['numcolor']);
                        while (sizeof($spots) != null && $rowI > 0) {
                        $selected = rand(0, (sizeof($spots) - 1));
                        if($rowI > 1 && sizeof($spots) > 1)
                            echo "$spots[$selected], ";
                        else if(sizeof($spots) != 1)
                            echo "$spots[$selected]";
                        else
                            echo "$spots[$selected]";
                            $temp = $spots[$selected];
                            $spots[$selected] = $spots[sizeof($spots) -1];
                            $spots[sizeof($spots) - 1] = $temp;
                        array_pop($spots);
                        $rowI--;
                        }
                    }
                }
                echo "</td>";
                echo "</tr>";
            }
            echo "</table>";
        ?>




<!-- table2 -->
<?php
$rows = $_POST['rowcols'];
$cols = $_POST['rowcols'];
$numcolor = $_POST['numcolor'];

        if (isset($_POST['rowcols'], $_POST['numcolor'])) { ?>
        <div id=table2>
            <table class='colorstable table2' id='color-table'><br>
                <?php
                    //loop over rows
                    for ($i = 0; $i <= $rows; $i++) {
                        echo "<tr>";
                        // loop over columns
                        for ($j = 0; $j <= $cols; $j++) {
                            echo "<td>";
                            if($i == 0){ //top row
                                if($j == 0){ //upper-leftmost cell is empty
                                    echo "<p>&nbsp</p>";
                                } else {
                                    echo "<p>" . chr($j + 64) . "</p>";
                                }
                            } else if($j == 0) { // left col
                                echo "<p>" . $i . "</p>";
                            }
                            echo "</td>";
                        }
                        echo "</tr>";
                    }
                    ?>
        </table>
        </div>
        <?php } ?>

</body>



</html>