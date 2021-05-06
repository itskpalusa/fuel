<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script type="text/javascript">
  // Function to change background color of cell based on radio button that's selected
  function fillColors(event) {
      console.log("fillColors");
  }

  // Add event listeners to all <td>s in bottom table to know when they are clicked.
  // All <td> in that table have the class .coordinate for easy access
  function createEvents() {
     let cells = document.querySelectorAll("td");
     for(let i = 0; i < cells.length; i++) {
         cells[i].addEventListener("click", function() {
            console.log(":(");
         });
     }
  }

  // In select tag, check if there's a change. Call this function with ID of the option that was selected
  function dupeCheck(oldOption, newOption, optionID, selectID) {
      // Loop over table rows, looking for an option that matches the one that was selected
      let table = document.getElementById("colorstable");
      for(let i = 0; i < table.rows.length; i++) {
          let id = "color" + i;
          let value = document.getElementById(id).value;
          // If the option isn'the same as the parameter and has the same value,
          // outline cells in red, wait 1.5 seconds then remove outline and relace
          // duplicate option with the old option
          if(id != optionID && value == newOption) {
              $("#" + optionID).addClass("outline");
              $("#" + id).addClass("outline");
              setTimeout(function() {
                  $("#" + optionID).removeClass("outline");
                  $("#" + id).removeClass("outline");
                  let value = $("#"+optionID).attr('value');
                  $("#" + selectID).val(oldOption);
              }, 1500);
              break;
          }
      }
  }
</script>

<body>

    <div id=color-generator>
      <form method=post>
        <div class="enter-nums">
          <label for="rowcols">
              <p>Number of rows/columns</p>
          </label>
          <input type="number" name="rowcols" id="rowcols">
        </div>
        <div class="enter-nums">
          <label for="numcolor">
              <p>Number of colors</p>
          </label>
          <input type="number" name="numcolor" id="numcolor">
        </div>
        <input type="submit" value="Submit">
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
                        echo "<input type='radio' id='radio" . $i . "' name='color-select'>";
                        echo "<form method=post>";
                        $datum = "color" . $i;
                        echo "<div id=color_select>";
                        // This ugly thing is for getting the previously selected option. I set the value of the selectd option as the class to store it and use the value itself for updating
                        echo "<select id=" . $datum . " class='select-color' onFocus=\"$(this).attr('class', $('option:selected', this).text());\" onChange=\"dupeCheck($(this).attr('class'), $(this).prop('value'), $(this).attr('id'), $(this).attr('id'))\">";
                        array_push($datums, $datum);
                        $k = 0;
                        foreach ($optcolor as &$value) {
                            if($k == 0) {
                              echo "<option class='color-option' name=" . $value . " value=" . $value . " selected='selected'>" . $value . "</option>";
                            }
                            else {
                              echo "<option class='color-option' name=" . $value . " value=" . $value . ">" . $value . "</option>";
                            }
                            echo "</div>";
                            $k++;
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
        }
        ?>

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
                            $alpha = chr($j + 64);
                            if($i == 0) {
                                // Uper left cell isn't used so it doesn't get an id
                                if($j == 0 && $i == 0) {
                                    echo "<th>";
                                }
                                else {
                                    //top row ids are column coordinates
                                    echo "<th id='$alpha'>";
                                }
                            }
                            else {
                                if($j == 0) {
                                    // Left column ids are row coordinates
                                    echo "<td id='$i'>";
                                }
                                else {
                                    // id is coordinates: (row,column)
                                    echo "<td class='coordinate' id='($i,$alpha)'>";
                                }
                            }
                            if($i == 0){ //top row
                                if($j == 0){ //upper-leftmost cell is empty
                                    echo "<p>&nbsp</p>";
                                } else {
                                    echo "<p>$alpha</p>";
                                }
                            } else if($j == 0) { // left col
                                echo "<p>$i</p>";
                            }
                            if($i == 0) {
                                echo "</th>";
                            }
                            else {
                                echo "</td>";
                            }
                        }
                        echo "</tr>";
                    }
                    ?>
            </table>
        </div>
        <?php } ?>
        <script type="text/javascript">
          createEvents();
        </script>

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
