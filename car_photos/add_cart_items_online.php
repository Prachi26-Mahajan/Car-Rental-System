<?php
$item = strtolower(urlencode($_REQUEST['i']));
$q = $_REQUEST['q'];
include "connection.php";
include_once "cart.php";
session_start();
$select = "select * from items where item_name='$item'";
//echo $select;
$item_res = mysqli_query($conn, $select);
$item_row = mysqli_fetch_array($item_res);
$ar1 = array();
$num = 0;
if (isset($_SESSION['cart'])) {
    $ar1 = (array)$_SESSION['cart'];
    $count = count($ar1);
    $flag = false;
    foreach($ar1 as $items)
    {
        if($item==$items->get_itemname())
        {
            $flag=1;
            break;
        }
    }
    if($flag==1)
    {
        $total= $items->get_qty()+$q;
        $items->set_qty($total);

    }
    else
    {
        array_push($ar1, new cart($count, $item,  $item_row[2], $item_row[1], $q));
        $_SESSION['cart']=$ar1;
    }

} else {
    $ar1[0] = new cart($num, $item, $item_row[2], $item_row[1], $q);
    $_SESSION['cart'] = $ar1;

}
include "orderdisplay_online.php";
?>
