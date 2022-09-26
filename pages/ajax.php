<?php
error_reporting(0);
error_reporting(E_ERROR|E_WARNING);
error_reporting(E_ERROR | E_PARSE);
session_start();
include_once('database.php');
$html=$err_msg='';	
$err=0;
$ip=ip2long($_SERVER['REMOTE_ADDR']);
$date = date('Y-m-d h:i:s');
if(isset($_POST['action']) && $_POST['action'] == 'final_save') 
{
	$song_title=htmlspecialchars(trim($_POST['title']));
	$album_name=htmlspecialchars(trim($_POST['album']));
	$singer_name=htmlspecialchars(trim($_POST['singer']));
	$lyrics=htmlspecialchars(trim($_POST['lyrics']));
	$music=htmlspecialchars(trim($_POST['music']));
	$label=htmlspecialchars(trim($_POST['label']));
	$category=htmlspecialchars(trim($_POST['category']));
	$duration=htmlspecialchars(trim($_POST['duration']));
	$released=htmlspecialchars(trim($_POST['released']));
	$song_type=trim($_POST['song_type']);
	$dir = '';
	if($song_type==1)
	{
		$dir = 'upload/haryanvi_songs/';	
	}
	if($song_type==2)
	{
		$dir = 'upload/haryanvi_ragini/';	
	}
	if($song_type==3)
	{
		$dir = 'upload/punjabi_songs/';	
	}
	if($song_type==4)
	{
		$dir = 'upload/latest_songs/';	
	}
	if($song_type==5)
	{
		$dir = 'upload/trending_song/';	
	}			
	
	if($_FILES['cvr_pic']['size']>0)
	{
		$filename_pic = strip_tags( $_FILES['cvr_pic']['name']);  
		$filesize_pic = $_FILES['cvr_pic']['size'];                 
		$filepath_pic=$dir.$filename_pic;
		   
		if (is_uploaded_file($_FILES['cvr_pic']['tmp_name']))
		{
			if (move_uploaded_file($_FILES['cvr_pic']['tmp_name'],$filepath_pic)) 
			{
				chmod($dir.$filename_pic, 0755);			 
			}
			else
			{ 
				$err_msg.="<span style='color:red;'>Error uploading in cover pic..</span></br>";	
				$err++;
			}	  
		} //is upload close
	}
	if($_FILES['upload_video']['size']>0)
	{
		$filename_video = strip_tags( $_FILES['upload_video']['name']);  
		$filesize_video = $_FILES['upload_video']['size'];                 
		$filepath_video=$dir.$filename_video;
		   
		if (is_uploaded_file($_FILES['upload_video']['tmp_name']))
		{
			if (move_uploaded_file($_FILES['upload_video']['tmp_name'],$filepath_video)) 
			{
				chmod($dir.$filename_video, 0755);			 
			}
			else
			{ 
				$err_msg.="<span style='color:red;'>Error uploading in video..</span></br>";	
				$err++;
			}	  
		} //is upload close
	}
	if($_FILES['upload_audio']['size']>0)
	{
		$filename_audio = strip_tags( $_FILES['upload_audio']['name']);  
		$filesize_audio = $_FILES['upload_audio']['size'];                 
		$filepath_audio=$dir.$filename_audio;
		   
		if (is_uploaded_file($_FILES['upload_audio']['tmp_name']))
		{
			if (move_uploaded_file($_FILES['upload_audio']['tmp_name'],$filepath_audio)) 
			{
				chmod($dir.$filename_audio, 0755);			 
			}
			else
			{ 
				$err_msg.="<span style='color:red;'>Error uploading in video..</span></br>";	
				$err++;
			}	  
		} //is upload close
	}
	if($err>0)
	{
		echo $err_msg;
		exit;
	}
	else
	{
		$sql = "INSERT INTO main_info (song_title, album_name, singer_name, lyrics, music, label, category, duration, released, file_path, cover_pic, video, audio, song_type)
		VALUES ('".$song_title."', '".$album_name."', '".$singer_name."', '".$lyrics."', '".$music."', '".$label."', '".$category."', '".$duration."', '".$released."', '".$dir."', '".$filename_pic."', '".$filename_video."', '".$filename_audio."', $song_type)";
		//echo $sql;
		if (mysqli_query($link, $sql)) 
		{
		  echo "New record created successfully";
		} 
		else 
		{
		  echo "Error: " . $sql . "<br>" . mysqli_error($link);
		}
	}
}
?>