<!DOCTYPE html>
<html>
<!-- Below statement includes head tag details-->
<?php 	include("head.html");
?>

<body>
<!-- Common header containing company logo and similar information -->
<?php
include("header.html");
?>

section id="navigation">
<!-- Main Navigation menu -->
<nav id="nav_bar">
    <ul>
        <li> <a href="assign2.php"> Home </a></li>
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
    <a href="display.php">Display Products</a>
    <a class="current-page" href="#"> Add Products </a>
    <a href="delete.php">Delete Products</a>
    <a href="contact.php">Contact Us</a>
</div>
</section>

<!-- Page content -->

<section id="add">

    <?php

    include("addForm.html");
    include("functions.php");
    require("databaseConnection.php");

    $prodid=$_POST['prodId'];
    $desc=$_POST['description'];
    $price=$_POST['price'];
    $qty=$_POST['qty'];
    $genericImage="imagesoon.jpg";


    $query="INSERT INTO products (id,name,price,quantity,imagelink) 
            values('$prodid','$desc','$price','$qty','$genericImage')";
    $data=mysql_query($query,$dbhandler);

    if(mysql_affected_rows()==-1) {

            echo "<br/><br/>";
            echo '<p class="error">';
            echo ' Insertion Not successful !!! ';
            echo '</p>';
        }
    else
        {
            echo "<br/><br/>";
            echo '<p class="success">';
            echo 'Product with id='.$prodid.' is Successfully added !!! ';
            echo '</p>';

        }
    echo "<br/><br/>";
    $query="SELECT * FROM products
                    ORDER BY id";
    $data=mysql_query($query,$dbhandler);

    $dynamic_table =  '<table id="gridstyle" border="1" cellpadding="10">';
    $i=0;
    while($row=mysql_fetch_array($data)){

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
													<p class="wrap">id:'.$id.'<br/>'.$name.'</br> '.$price.' </p>
													</td>';
            }
            else
            {
                echo 'Image not found';
            }

        }
        else
        {

            $dynamic_table .= '	<td><img src="./media/images/'.$row['imagelink'].'"
													alt="Person image" width="200" height="300" />
													<br/>
													<p class="wrap">id:'.$id.'<br/>'.$name.'</br> '.$price.' </p>
								</td>';
        }
        $i++;
    }
    $dynamic_table .= "</tr></table>";
    ?>
    <?php echo $dynamic_table; ?>

</section>

<!--Footer containing subscription information and reach us information-->
<?php
include("footer.html");
?>
</body>
</html>

