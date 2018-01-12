<?php

function insertLeadingZeroes($id)
{
    $noOfZeroes=6-strlen($id);
    $prodid="";
    for($i=1;$i<=$noOfZeroes;$i++)
    {
        $prodid.='0';
    }
    $prodid=$prodid.strval($id);

    return $prodid;
}

?>
