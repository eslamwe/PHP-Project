<?php
require_once("../PHP-Project/db.php");
require_once("../PHP-Project/component.php");


$con = Createdb();

//create button click
if (isset($_POST["create"])){
    createData();
}

//update button click
if (isset($_POST["update"])){
    updateData();
}

function createData(){
    $bookname = textBoxValue("book_name");
    $bookpublisher = textBoxValue("publisher_name");
    $bookprice = textBoxValue("book_price");

    if ($bookname && $bookpublisher && $bookprice){
        $sql = "INSERT INTO books(book_name,book_publisher,book_price) 
                VALUES('$bookname','$bookpublisher','$bookprice')";

        if (mysqli_query($GLOBALS['con'],$sql)){
            TextNode("success","Successfully Done");
        }
        else{echo "error";}
    }
    else{
        TextNode("error","Provide Data !");
    }
}

function textBoxValue($value){
    $textbox = mysqli_real_escape_string($GLOBALS['con'],trim($_POST[$value]));
    if (empty($textbox)){
        return false;
    }
    else{
        return $textbox;
    }

}

function TextNode($classname,$msg){
    $element = "<h6 class= '$classname'>$msg</h6>";
    echo $element;
}

function getData(){
    $sql = "SELECT * FROM books";
    $result = mysqli_query($GLOBALS['con'],$sql);

    if (mysqli_num_rows($result)> 0){
        return $result;
    }
}

function updateData(){
    $bookId = textBoxValue("book_id");
    $bookName = textBoxValue("book_name");
    $bookPublisher = textBoxValue("book_publisher");
    $bookPrice = textBoxValue("book_price");

    if($bookName && $bookPublisher && $bookPrice){
        $sql = "UPDATE books SET book_name='$bookName',
                 book_publisher='$bookPublisher',
                 book_price='$bookPrice'
                 WHERE id= '$bookId' ";
        if (mysqli_query($GLOBALS['con'],$sql)){
            TextNode("success","Data Updated !");
        }
        else{
            TextNode("error","Failed to update data !");
        }
    }
    else{
        TextNode("error","Select Data to be updated !");
    }
}
