<!DOCTYPE html>
<html>

<!-- Below statement includes head tag details-->
<?php
include("head.html");

?>

<section>
    <!-- COmmon header containing company logo and similar information -->
    <?php
    include ("header.html");
    ?>
    <section id=""navigation">
    <!-- Main Navigation menu -->
    <nav id="nav_bar">
        <ul>
            <li class="current-item"><a href="#"> Home </a></li>
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

    <!-- Side navigation -->
    <div class="sidenav">
        <a href="display.php">Display Products </a>
        <a href="add.php">Add Products</a>
        <a href="delete.php">Delete Products</a>
        <a href="contact.php">Contact Us</a>
    </div>

</section>

<section id= "multimedia">
    <!-- Page content -->

    <audio controls autoplay>
        <source src="./media/audio1.mp3" />
        <p>Your browser doesn't support HTML5 audio. Here is a <a href="https://www.youtube.com/watch?v=-zi498IIglY&list=PLJe-o1k-Sn6RGzTQy7ibHKd7oACRyxaGh">link to the audio</a> instead.</p>
    </audio>

    <video controls muted width="800" height="500" preload="auto">
        <source src="./media/video2.mp4" type="video/mp4">
        <p>Your browser does not support the video tag.</p>
    </video>

</section>
<!--Footer contains subscription information and reach us information-->

<?php
include("footer.html");
?>
</body>
</html>
