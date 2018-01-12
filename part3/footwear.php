<!DOCTYPE html>
<html>
<!-- Below statement includes head tag details-->
<?php 	include("head.html");
?>
<body>

<!-- COmmon header containing company logo and similar information -->
<?php
include ("header.html");
?>

<!-- Page content -->
<section id=""navigation">
<!-- Main Navigation menu -->
<nav id="nav_bar">
    <ul>
        <li><a href="assign2.php"> Home </a></li>
        <li><a href="clothing.php"> Clothing </a></li>
        <li><a href="makeup.php"> Makeup </a></li>
        <li class="current-item"><a href="#"> Footwear </a></li>
    </ul>
    <div class="search-container">
        <form action="./action_page.php">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
</nav>

<!-- Side navigation -->
<div class="sidenav">
    <a href="display.php">Display Products </a>
    <a href="add.php">Add Products</a>
    <a href="delete.php">Delete Products</a>
    <a href="contact.php">Contact Us</a>
</div>

</section>

<div class="coming-soon">

    <img src="./media/images/comingsoon.jpg" alt="Coming soon" height="30%" width="100%"/>
</div>


<!--Footer containing subscription and reach us information-->
<?php
include("footer.html");
?>

</body>
</html>
