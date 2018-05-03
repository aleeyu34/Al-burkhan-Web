<?php
session_start();
include('../connect.php');
$a = $_POST['caption'];
$b = $_POST['desc'];

// query

			$vid = $_FILES["file"] ["name"];
								$type = $_FILES["file"] ["type"];
								$size = $_FILES["file"] ["size"];
								$temp = $_FILES["file"] ["tmp_name"];
								$error = $_FILES["file"] ["error"];
										
								if ($error > 0){
									die("Error uploading file! Code $error.");}
								else
								{
									if($size > 3000000000000) //conditions for the file
									{
										die("Format is not allowed or file size is too big!");
									}
									else
									{
										move_uploaded_file($temp,"../videos/".$vid);
   //do your write to the database filename and other details   
        $sql = "INSERT INTO books (video_title,video_detail,file,date) VALUES (:a,:b,:c, NOW())";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$vid));
if($q){
      header("location:add-video.php?success=true");
        }else{
            header("location:add-video.php?failed=true");
        } 
		
									
		}
								}
		?>