<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<body>

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
            $leftColID = 0;
            $rightColID = 0;
            echo "<table id=colorstable>";
            //loop over rows
            for ($i = 0; $i < $numcolor; $i++) {
                echo "<tr>";
                // loop over columns
                for ($j = 0; $j < 2; $j++) {
                    // Put select options in left column of table
                    if ($j == 0) {
                        echo "<td class=leftcol id=leftcol" . $leftColID . ">";
                        $leftColID++;
                        echo "<form method=post>";
                        $datum = "color" . $i;
                        echo "<div id=color_select>";
                        echo "<select name=" . $datum . " id=" . $datum . " onchange='dupeCheck()'>";
                        array_push($datums, $datum);
                        foreach ($optcolor as &$value) {
                            echo "<option value=" . $value . ">" . $value . "</option>";
                            echo "</div>";
                        }
                        $first = array_shift($optcolor);
                        array_push($optcolor, $first);
                    }
                    else {
                        echo "<td class=rightcol id=rightcol" . $rightColID . ">";
                        $rightColID++;
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
            // Now, in the top table, each of the left column cells has a drop-down with
            // 10 color names (red, orange, yellow, green, blue, purple, grey, brown, black,
            // teal).  Order these in an intuitive way for the user.  Initially, a different
            // color is selected in each drop down.  No two drop downs can select the same
            // color at the same time (if this happens, revert the most recently changed drop
            // down to the previous value that was selected.  Inform the user of this in a
            // non-intrusive way (i.e. not an alert() ).
        }
        ?>

        <script type="text/javascript">
        // In script tag, check if there's a change. Call this function
          function dupeCheck() {
            table = document.getElementById("colorstable");
            let value;  //Fill valueArray with up to the 10 available colors
            let valueArray = [];
            // Loop over table rows and get the first cell to access the select element
            // and the option that's currently selected
            // Theoretically, the array should change each time this function is called
            // Right now it isn't.
            for(let i = 0; i < table.rows.length; i++) {
              value = document.getElementById("color" + i)[0].value;
              valueArray.push(value);
              console.log(value);
            }
            console.log(valueArray);
            let dupeArray = [];
            // Fill dupeArray with valueArray and check for duplicates as it's filled
            for(var color in valueArray) {
              if(dupeArray.includes(color)) {
                document.write("Colors must be different.");
              }
              dupeArray.push(color);
            }
          }

        </script>

        <!-- second table -->
        <?php if (isset($_POST['rowcols'], $_POST['numcolor'])) { ?>
            <div id=table2>
                <table id=colorstable class=table2>"
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

        <!-- printable view button -->
        <?php if (isset($_POST['rowcols'], $_POST['numcolor'])) { ?>
            <div id=printButton>
                <form action='link to print view' method=get>
                    <input type=hidden id=rowcols name=rowcols value=$rows>
                    <input type=hidden id=numcolor name=numcolor value=$numcolor>
                    <input type=submit value="Printable View">
                </form>
            </div>
        <?php } ?>
    </div>

    <!-- <footer>Copyright "GoreTex Professionals LLC" 2021</footer> -->

</body>

</html>
