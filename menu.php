<?php include("header.php");
$query = "SELECT * FROM course";
if(!is_null($_GET['category'])) {
    $query = $query ." WHERE category = '" . $_GET['category']."'";
}
$Courses=$DB->query($query)->fetchAll();?>

<!--////////////////////////////////////Container-->
<section id="container" class="sub-page">
    <div class="wrap-container zerogrid">
        <div style="padding: 20px 0 20px 30px;"> 			<div class="crumbs w3-hide-small">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="menu.php">Menu</a></li>
            </ul>
        </div>
        </div>
        <div id="main-content">

            <div class="wrap-content">


                <div class="w3-row w3-border" style="overflow: hidden">
                    <div class="w3-col l3 m4 w3-container w3-red" style="margin-bottom: -100000px; padding-bottom: 100000px;">
                        <div style="text-align: center; color: white;">
                            <h3 style="font-family: Airstream;color: white">Midday Meal</h3>
                                Monday to Friday<br>
                                salad, bagel, wrap or burger<br>
                                + 1 drink<br>
                                12,90€<br>
                        </div>
                    </div>
                    <div class="w3-col l9 m8 w3-container " style="background: white;padding-left: 0px !important;">

                        <div class="w3-dropdown-click" style="width: 100%">
                            <div onclick="myFunction()" class="w3-btn w3-red ">Click Me to select your type of course! <i class="fa fa-caret-down"></i></div>
                            <div id="Demo" class="w3-dropdown-content w3-card" style="z-index: 10;">
                                <a class="w3-yellow" href="menu.php">ALL</a>
                                <a href="menu.php?category=starters">Starters</a>
                                <a href="menu.php?category=salads">Salads</a>
                                <a href="menu.php?category=bakery">Bakery</a>
                                <a href="menu.php?category=burgers">Burgers</a>
                                <a href="menu.php?category=exotic">Exotic</a>
                                <a href="menu.php?category=fish">Fish</a>
                                <a href="menu.php?category=specialities">Specialities</a>
                                <a href="menu.php?category=kids">Kids</a>
                                <a href="menu.php?category=desserts">Desserts</a>

                            </div>
                        </div>

                        <?php
                        foreach ($Courses as $row){
                            echo '<div class="post w3-container w3-round w3-border w3-margin w3-dropdown-hover w3-row menu-card">

                            <div class="w3-content w3-third" >
                                <a href="#"><img src="images/15.jpg"></a>
                            </div>

                            <div class="wrapper  w3-content w3-twothird  " style="padding-left: 15px; float: left;">
                                <div style="width: 210px;"><a style="font-weight:bold;color:#000000;letter-spacing:1pt;word-spacing:0pt;font-size:16px;text-align:left;font-family:helvetica, sans-serif;line-height:1;" href="#">'.$row["name"].'</a></div>
                                <span>'. number_format($row["price"], 2) .' €</span>
                                <div class="w3-dropdown-content w3-container w3-red w3-bottombar w3-border-red" style="width:300px">
                                    <p>'.$row["description"].'</p>
                                </div>
                            </div>
                        </div>';
                        }
                        ?>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<?php include("footer.php") ?>


<!-- js -->
<script src="js/classie.js"></script>
<script src="js/demo.js"></script>
<script>
    function myFunction() {
        document.getElementById("Demo").classList.toggle("w3-show");
    }
</script>

</div>
</body></html>