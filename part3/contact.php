<!DOCTYPE html>
<html>

<!-- Below statement includes head tag details-->
<?php
include("head.html");

?>

<body>
<!-- COmmon header containing company logo and similar information -->
<?php
include ("header.html");
?>

<section id=""navigation>
    <!-- Main Navigation Menu -->
    <nav id="nav_bar">
        <ul>
            <li><a href="assign2.php"> Home </a></li>
            <li><a href="clothing.php"> Clothing </a></li>
            <li><a href="makeup.php"> Makeup </a></li>
            <li><a href="footwear.php"> Footwear </a></li>
        </ul>
        <div class="search-container">
            <form action="./action_page.php">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </nav>
</section>

<!-- Side navigation -->
<div class="sidenav">
    <a href="display.php">Display Products </a>
    <a href="add.php">Add Products</a>
    <a href="delete.php">Delete Products</a>
    <a class="current-page" href="#">Contact Us</a>
</div>

<br/>
<!-- Page content : This page contains contact us form as well as contact address information-->

<div  id="wrapper">
    <div class="container">

        <form id="contact" method="post" action="/action_page.php">

            <h2>Quick Contact</h2>

            <h4>Contact us today, and get reply with in 24 hours!</h4>


            <fieldset>
                <select id="dept" name="dept" required autofocus>
                    <option value="" disabled selected> Choose a department </option>
                    <option value="product">Our Products</option>
                    <option value="website">Website Experience</option>
                    <option value="career">Careers with us</option>
                </select>
                <br>
            </fieldset>

            <fieldset>
                <input type="text" id="name" name="name" placeholder="Your name..">
            </fieldset>

            <fieldset>
                <input type="email" id="email" name="email" placeholder="Your email..">
            </fieldset>

            <fieldset>
                <input type="tel" id="tel" name="tel" placeholder="Your telephone number..">
            </fieldset>

            <fieldset>
                <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
            </fieldset>



            <input name="submit" type="submit" value="Submit">


        </form>
    </div>

    <!-- This contains contact address information at the side of contact us form-->
    <section id="contactdetails">
        <h2>Contact Us</h2>

        <p>It is our pleasure to help you!</p>

        <p>You can e-mail us using the form  or call 1-647-640-5492 (9am – 5pm ET), 5 days a week.</p>

        <h3> Or directly visit us at:</h3>
    </section>

    <!-- THis is the contact address box at the left bottom of the screen -->
    <section id="author">

        <h3> Contact Address : </h3>
        <p>40 Fountainhead Road </p> <p> North York, ON </p> <p> M3J2V1 </p>
        <p>Manager: Charusmita Shah </p>
        <p>Email:  <a href="mailto:cshah9@myseneca.ca?subject=MySiteEmail">cshah9@myseneca.ca</a> </p>
        <p>Phone: +1 (647)-640-5492 </p>
        <p>Manging Partner: Anaswara Naderi Vadakkeperatta </p>
        <p>Email:  <a href="mailto:anaswaranv91@gmail.com">anaswaranv91@gmail.com</a> </p>
        <p>Phone: +1 (647)-975-8301 </p>
    </section>


</div>

<!--Footer contains subscription information and reach us information-->
<?php
include("footer.html");
?>
</body>
</html>
