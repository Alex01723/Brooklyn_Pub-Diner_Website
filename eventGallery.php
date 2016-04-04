<?php include("header.php");
$eventsDirectory = 'images/events/';
$event = $_GET['event'];
$photoDirectory=$eventsDirectory.$event;
?>
<!--////////////////////////////////////Container-->
<section id="container" class="sub-page">
    <div class="wrap-container zerogrid">
        <div style="padding: 20px 0 20px 30px;">
            <div class="crumbs w3-hide-small">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="#"><?php echo($event) ?></a></li>
            </ul>
        </div>
        </div>
        <div id="main-content">
            <div class="wrap-content">
                <div class="w3-container w3-red ">
                    <h1><?php echo($event) ?></h1>
                </div>

                <div style="position: initial">
                    <?php  foreach (preg_grep('~\.(jpeg|jpg|png)$~i', scandir($photoDirectory)) as $file) {
                        $photo=$photoDirectory."/".$file;
                        preg_match("/(?<=\\*).*?(?=\\.)/",$file, $description);
                        echo("<div class=\"w3-third w3-row-padding w3-padding-8\">
                                <div class=\"w3-card-2 w3-dropdown-hover\" style='position: relative;max-height: 300px;max-width: 200px;float: left'>
                                    <img src=\" $photo\" style=\"width:100%\">
                                    <div class=\"w3-dropdown-content w3-border \" style=\"width:700px\"><br>
                                        <img src=\"$photo\" alt=\"Norway\" style=\"max-width: 100%;max-height: 100%;\">
                                        <p>$description[0]</p>
                                        <a href='$photo'>Download</a>

                                      </div>
                                    ");
                        if(!is_null($description[0]))
                            echo(" <div class=\"w3-display-bottomleft w3-large w3-container w3-padding-16 w3-black\">
												 $description[0]
											</div>");
                        echo("
                                </div>
                            </div>");

                    }

                    if($file==null)echo"<div class=\"w3-container w3-section w3-yellow\">
                        <span class=\"w3-closebtn\"><a href='gallery.php' >×</a></span>
                        <h3>Arf!</h3>
                        <p>It seem there's no pictures of this event yet :/ <br>Close this alert box to get back to our gallery page ;) </p>
                        </div>";
                    ?>


                </div>
            </div>
        </div>
    </div>
</section>

<!--////////////////////////////////////Footer-->
<?php include("footer.php") ?>


<!-- js -->
<script src="js/classie.js"></script>
<script src="js/demo.js"></script>
<script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
        showDivs(slideIndex += n);
    }

    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        if (n > x.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = x.length
        }
        ;
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        x[slideIndex - 1].style.display = "block";
    }


    var slideIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > x.length) {
            slideIndex = 1
        }
        x[slideIndex - 1].style.display = "block";
        setTimeout(carousel, 2000);
    }
</script>


</div>
</body></html>