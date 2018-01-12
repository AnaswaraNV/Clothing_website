<!DOCTYPE html>
<html>
<!-- Below statement includes head tag details-->
<?php 	include("head.html");
?>

<body>
<!-- COmmon header containing company logo and similar information -->
<?php
include("header.html");
?>

<section id="navigation">
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
        <a href="add.php">Add Products</a>
        <a class="current-page" href="#"> Delete Products </a>
        <a href="contact.php">Contact Us</a>
    </div>
</section>

<!-- Page content -->

<section id="delete">

    <?php

    include("deleteform.html");
    include("functions.php");
    require("databaseConnection.php");
    // check if the 'id' variable is set , and check that it is valid
    // get id value
    $id = $_POST['prodid'];
    if (($_POST['prodid']=="")||($_POST['prodid']==null))
    {

        echo "<br/><br/>";
        echo '<p class="error">';
        echo "Please enter a valid id !!!";
        echo '</p>';
    }
    else
    {
        //trim the leading zeroes from id
        $varId= ltrim($_POST['prodid'], '0');

        if (is_numeric($_POST['prodid']))
        {

            // delete the entry
            $result = mysql_query("DELETE FROM products WHERE id='$id'");
            if(mysql_affected_rows()==0)
            {

                echo "<br/><br/>";
                echo '<p class="error">';
                echo ' No such product with id ='.$varId.' !!! ';
                echo '</p>';
            }
            else
            {
                echo "<br/><br/>";
                echo '<p class="success">';
                echo 'Product with id='.$varId.' is Successfully deleted !!! ';
                echo '</p>';

            }
        }
        else
        {
            echo "<br/><br/>";
            echo '<p class="error">';
            echo "Id is non numeric !!!";
            echo '</p>';

        }
    }
    // Query to get the products table
    $query="SELECT * FROM products 
                    ORDER BY id";
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
													<p class="wrap">id:'.$id.'<br/>'.$name.'</br> '.$price.'  </p>
													</td>';
            } else {
                echo 'Image not found';
            }

        }
        else {
            $dynamic_table .= '	<td><img src="./media/images/'.$row['imagelink'].'"
													alt="Person image" width="200" height="300" />
													<br/>
													<p class="wrap">id:'.$id.'<br/>'.$name.'</br> '.$price.' </p>
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
			