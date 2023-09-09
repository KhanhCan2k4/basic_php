

<!DOCTYPE html>
<html>
<body>

<h1>The year of birthday</h1>

<form action="/action_page.php">
  <label for="cars">Choose a car:</label>
  <select name="cars" id="cars">
  <?php 
    /**
     * TOPIC: EXERCISE 6 CHAPTER 1
     * CREATE COMBOBOX
     * 
     * NAME: LE VIET KHANH
     * CLASS: CD22TT11
     * ID: 22211TT2577
     * DATE: 2023/08/04
     */

    //VARIABLES DECLARATIONS
    $startYear = 1990;
    $endYear = 2023;

    $option = "";

    for ($i=$startYear; $i <= $endYear ; $i++) { 
        # code...
        $option = $option. '<option value='.$i.'>'.$i.'</option>';
    }

    echo $option;

?>
  </select>
  <br><br>
  <input type="submit" value="Submit">
</form>
 
</body>
</html>