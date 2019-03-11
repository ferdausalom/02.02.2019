<?php

    require "./Demo.php";

    $demo = new Demo();

    $result = $demo->makeOddEven();

?>

<form action="" method="post">
    <table>
        <tr>
            <td>first Number</td>
            <td><input type="text" name="firstNumber"></td>
        </tr>
        <tr>
            <td>last Number</td>
            <td><input type="text" name="lastNumber"></td>
        </tr>

        <tr>
            <td><input type="radio" name="check" value="ODD" > ODD</td>
            <td><input type="radio" name="check" value="EVEN" > EVEN</td>
        </tr>
        <tr>
            <td>full Number</td>
            <td><input type="text" name="fullName" value="<?php echo $result; ?>" ></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn" value="Submit"></td>
        </tr>
    </table>
</form>