<?php
include("header.php");
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 15/03/2016
 * Time: 11:42
 */
$Courses=$DB->query("SELECT * FROM course")->fetchAll();
//Fais un foreach et regarde les tutos ;)
?>
<div style="background: white;width: 1000px;height: 5000px;margin-top: 50px;">

<?php
foreach ($Courses as $row){
    echo '<div class="post w3-container w3-round w3-border w3-margin w3-dropdown-hover w3-row" style="width: 330px;height: 120px;float:left;">

        <div class="w3-content w3-third" >
            <a href="#"><img src="images/15.jpg"></a>
        </div>

        <div class="wrapper  w3-content w3-twothird  " style="padding-left: 15px; float: left;">
            <div style="width: 210px;"><a style="font-weight:bold;color:#000000;letter-spacing:1pt;word-spacing:0pt;font-size:16px;text-align:left;font-family:helvetica, sans-serif;line-height:1;" href="#">'.$row["name"].'</a></div>
            <span>'. money_format('%i ', $row["price"]) .'€</span>
            <div class="w3-dropdown-content w3-container w3-red w3-bottombar w3-border-red" style="width:300px">
                <p>'.$row["description"].'</p>
            </div>
        </div>
    </div>';
}
?>
</div>