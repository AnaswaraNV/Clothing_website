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

<section id=""navigation">
<!-- Main Navigation menu -->
<nav id="nav_bar">
    <ul>
        <li><a href="assign2.php"> Home </a></li>
        <li class="current-item"><a href="#"> Clothing </a></li>
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

<section id="display">

    <!---table -->

    <?php

    //Including external database connection php file
    require("databaseConnection.php");
    include("functions.php");

    // Query to get the products table
    $query="SELECT * FROM products";

    //initialization
    $i=0;
    $result=mysql_query($query, $dbhandler) or die(mysql_error());

    $dynamic_table =  '<table id="gridstyle" border="1" cellpadding="10">';

    while($row=mysql_fetch_array($result)){

        $prodid=$row['id'];
        $id=insertLeadingZeroes($prodid);

        $name=$row['name'];
        $price='$'.$row['price'];

        if($i%3==0)
        {

            if(!empty($row['imagelink'])){

                $dynamic_table .= '<tr>
													<td><img src="./media/images/'.$row['imagelink'].'"
													alt="Person image" width="200" height="300" />
													<br/>
													<p>id:'.$id.'<br/>'.$name.'</br> '.$price.'  </p>
													</td>';
            } else {
                echo 'Image not found';
            }

        }
        else {
            $dynamic_table .= '	<td><img src="./media/images/'.$row['imagelink'].'"
													alt="Person image" width="200" height="300" />
													<br/>
													<p>id:'.$id.'<br/>'.$name.'</br> '.$price.' </p>
											</td>';
        }
        $i++;
    }

    $dynamic_table .= "</tr>
								</table>";
    ?>
    <?php echo $dynamic_table; ?>


</section>

<!--Footer containing subscription information and reach us information-->
<?php
include("footer.html");
?>
</body>
</html>
