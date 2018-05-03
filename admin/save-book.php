<?php
session_start();
include('../connect.php');
$a = $_POST['caption'];
$c=$_FILES["file"]["name"];
// query
	$name = $_FILES["pdffile"] ["name"];
								$type = $_FILES["pdffile"] ["type"];
								$size = $_FILES["pdffile"] ["size"];
								$temp = $_FILES["pdffile"] ["tmp_name"];
								$error = $_FILES["pdffile"] ["error"];
										
								if ($error > 0){
									die("Error uploading file! Code $error.");}
								else
								{
									if($size > 30000000000000) //conditions for the file
									{
										die("Format is not allowed or file size is too big!");
									}
									else
									{
										move_uploaded_file($temp,"../books/".$name);
									}
			$pic = $_FILES["file"] ["name"];
								$type = $_FILES["file"] ["type"];
								$size = $_FILES["file"] ["size"];
								$temp = $_FILES["file"] ["tmp_name"];
								$error = $_FILES["file"] ["error"];
										
								if ($error > 0){
									die("Error uploading file! Code $error.");}
								else
								{
									if($size > 30000000000000) //conditions for the file
									{
										die("Format is not allowed or file size is too big!");
									}
									else
									{
										move_uploaded_file($temp,"../books/".$pic);
   //do your write to the database filename and other details   
        $sql = "INSERT INTO books (book_title,book_pic,file,date) VALUES (:a,:c,:b, NOW())";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$name,':c'=>$c));
if($q){
      header("location:add-book.php?success=true");
        }else{
            header("location:add-book.php?failed=true");
        } 
		
									}
		}
								}
		?>