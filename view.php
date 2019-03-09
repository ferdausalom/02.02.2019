<?php 

if (isset($_POST["btn"])){
    require './MyCalculator.php';
    
    $myCalculator = new MyCalculator();
    
    $result = $myCalculator->calculator($_POST);
    
}

?>
<form action="" method="post">
    <table>
        <tr>
            <td>F number</td>
            <td><input type="text" name="firstNumber"></td>
        </tr>
        <tr>
            <td>L number</td>
            <td><input type="text" name="lastNumber"></td>
        </tr>
        <tr>
            <td>Full number</td>
            <td><input type="text" name="fullNumber" value="<?php echo $result;?>"></td>
        </tr>
        <tr>
            <td><input type="submit" name="btn" value="+"></td>
            <td><input type="submit" name="btn" value="-"></td>
            <td><input type="submit" name="btn" value="*"></td>
            <td><input type="submit" name="btn" value="/"></td>
            <td><input type="submit" name="btn" value="%"></td>
        </tr>
    </table>
</form>