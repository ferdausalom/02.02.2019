<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop - PH
 * Date: 3/11/2019
 * Time: 9:49 AM
 */

class Demo
{
    public function makeOddEven(){
        if(isset($_POST['btn'])){
            $fnumber = $_POST['firstNumber'];
            $lnumber = $_POST['lastNumber'];
            $check = $_POST['check'];
            $result = "";

            if ($fnumber<$lnumber) {
                for ($i = $fnumber; $i <= $lnumber; $i++) {
                    if ($i % 2 != 0 && $check == "ODD") {
                        $result .= $i . " ";
                    } elseif ($i % 2 == 0 && $check == "EVEN") {
                        $result .= $i . " ";
                    }
                }
                return $result;
            }
            else{
                for ($i = $fnumber; $i >= $lnumber; $i--) {
                    if ($i % 2 != 0 && $check == "ODD") {
                        $result .= $i . " ";
                    } elseif ($i % 2 == 0 && $check == "EVEN") {
                        $result .= $i . " ";
                    }
                }
                return $result;
            }
        }
    }
}