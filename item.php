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
<div style="background: white;width: 1000px;height: 500000px;margin-top: 50px;">

    <div class="post">
        <a href="#"><img src="images/15.jpg"></a>

        <div class="wrapper">
            <h5><a href="#">Lorem ipsum dolor</a></h5>
            <span>$25 - $26</span>
        </div>
    </div>


    <? var_dump($Courses);?>
</div>