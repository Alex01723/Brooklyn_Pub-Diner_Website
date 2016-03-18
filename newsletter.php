<?php include("header.php");
//var_dump($_POST);
if (isset($_POST['email']) && isset($_POST['name'])) {
    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $Submitted = true;
        $EMail = $_POST['email'];
        $Name = $_POST['name'];
        $statement = "INSERT INTO newsletter ('email','name') VALUES ('" . $EMail . "','" . $Name . "'); ";
        $DB->exec($statement);
        var_dump($DB->errorInfo());
        if ($DB->errorInfo()[1]==NULL) {
            $message = "<div class=\" w3-container w3-green\" style=\"padding: 20px;\">
						<p>Thank you $Name for your subscription, you'll receive our newletter on your e-mail adress : $EMail. <br> See you soon ;)	</p></div>";
        }elseif( $DB->errorInfo()[1]==19){
            $message = "<div class=\" w3-container w3-yellow\" style=\"padding: 20px;\">
						<p>You're already registered ;)
						</p></div>";
        }else {
            $message = "<div class=\" w3-container w3-red\" style=\"padding: 20px;\">
						<p>Sorry a problem occured :/ <br> Please try again ;)
						</p></div>";
        }

    } else {
        $message = "<div class=\" w3-container w3-blue\" style=\"padding: 20px;\">
						<p>Please, enter a valid e-mail adress :)</p></div>";
    }
}
?>
    <!--////////////////////////////////////Container-->
<section id="container" class="sub-page">
    <div class="wrap-container zerogrid">
        <div style="padding: 20px 0 20px 30px;"> 			<div class="crumbs w3-hide-small">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="newsletter.php">Newsletter</a></li>
            </ul>
        </div>
        </div>

        <?php if (isset($message)) { //Si le formulaire à été soumis
        echo $message;
        }

        ?>

        <br>

        <div id="main-content">

            <div class="wrap-content">

                <div class="row">
                    <div class="col-1-3">
                        <div class="wrap-col">
                            <h3>Complete the Submission Form</h3>

                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard</p><br/>
                        </div>
                    </div>
                    <div class="col-2-3">
                        <div class="wrap-col">
                            <div class="contact">
                                <div id="contact_form">


                                    <form name="contact" id="contact" method="post" action="newsletter.php">
                                        <div class="col-1-3">
                                            <div class="wrap-col">
                                                <p>
                                                    <input class="w3-input" type="text" name="name" required="">
                                                    <label class="w3-label w3-validate">Name</label></p>
                                            </div>
                                        </div><div class="col-2-3">
                                            <div class="wrap-col">
                                                <p>
                                                    <input class="w3-input" type="email" name="email" required="">
                                                    <label class="w3-label w3-validate">Email</label></p>
                                            </div>
                                        </div><input class="sendButton" type="submit" name="Submit" value="Submit" style="margin-left: 10px !important;">
                                    </form>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>

<?php include ("footer.php") ?>

<!-- js -->
<script src="js/classie.js"></script>
<script src="js/demo.js"></script>

</div>
</body></html>