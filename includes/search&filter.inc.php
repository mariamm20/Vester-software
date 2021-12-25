<?php


    $sql='SELECT * FROM products WHERE category_id !="" ';

    if(isset($_POST['category'])){
        $category = implode("','",$_POST['category']);
        $sql .=" AND category_id IN('" .$category."') ";

    }
    if(isset($_POST['Operating_System'])){
        foreach($_POST['Operating_System'] as $item)
        {
            if ($item == 'support_mac'){
                $sql .=" AND support_mac = 1 ";
            }
            if ($item == 'support_windows'){
                $sql .=" AND support_windows = 1 ";
            }
            if ($item == 'support_linux'){
                $sql .=" AND support_linux = 1 ";
            }
        }
    }
    if(isset($_POST['text'])){
        
        $text = $_POST['text'];
        if (!empty($text)){
             $sql .=" AND name LIKE '"."%".$text. "%" ."' ";
        }
    }
    if(isset($_POST['price'])){
            $num = $_POST['price'];
            if ($num == '1'){
                $sql .=" AND price between 0 and 1000";
            }
            else if ($num == '2'){
                $sql .=" AND price between 1000 and 2000";
            }
            else if ($num == '3'){
                $sql .=" AND price between 2000 and 3000";
            }
            else if ($num == '4'){
                $sql .=" AND price between 3000 and 10000";
            }
            else{
                $sql .=" AND price between 10000 and 20000";
            }
    }

    // includes
    include "../Controllers/db.class.php";
    include "../Controllers/ProductsContr.class.php";
    include "../Views/ProductsView.class.php";
    // make an object from the view
    $proView = new productView();

    echo $proView->FilterProducts($sql);

?>

