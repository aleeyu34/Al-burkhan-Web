<?php

session_start();
include('../connect.php');
$a = $_POST['caption'];

// query

$file_name  = strtolower($_FILES['file']['name']);
$file_ext = substr($file_name, strrpos($file_name, '.'));
$prefix = 'book_'.md5(time()*rand(1, 9999));
$file_name_new = $prefix.$file_ext;
$path = '../uploads/'.$file_name_new;
    /* check if the file uploaded successfully */
    if(@move_uploaded_file($_FILES['file']['tmp_name'], $path)) {

  //do your write to the database filename and other details   
        $sql = "INSERT INTO books (book_title,book_pic,file) VALUES (:a,:b,:c)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$file_name_new,':c'=>$c));
if($q){
      header("location:add-book.php?success=true");
        }else{
            header("location:add-book.php?failed=true");
        } 
		}
		?>