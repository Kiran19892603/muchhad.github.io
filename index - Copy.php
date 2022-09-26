<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Muchhad</title>
    <!-- Bootstrap core CSS -->
	<!--link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"-->
    <!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!--link rel="stylesheet" href="bootstrap/css/animated.css">
	<link rel="stylesheet" href="bootstrap/css/owl.css"-->
	 <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
	
	

@media (max-width: 767px) 
{
    .carousel-inner .carousel-item > div {
        display: none;
    }
    .carousel-inner .carousel-item > div:first-child {
        display: block;
    }
}

.carousel-inner .carousel-item.active,
.carousel-inner .carousel-item-next,
.carousel-inner .carousel-item-prev 
{
    display: flex;
}

/* medium and up screens */
@media (min-width: 768px) 
{
    
    .carousel-inner .carousel-item-end.active,
    .carousel-inner .carousel-item-next {
      transform: translateX(25%);
    }
    
    .carousel-inner .carousel-item-start.active, 
    .carousel-inner .carousel-item-prev {
      transform: translateX(-25%);
    }
}

.carousel-inner .carousel-item-end,
.carousel-inner .carousel-item-start 
{ 
  transform: translateX(0);
}

</style>
  </head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
		<img src="img/logo.png" class="img-rounded" alt="Website logo" height="55px" width="60px">
	</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
		  <a class="nav-link active" href="index.php?trs=home">Home</a>
        </li>
        <li class="nav-item">
		  <a class="nav-link" href="index.php?trs=ltst">All Latest Song</a>
        </li>  
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Haryanvi Songs</a>
          <ul class="dropdown-menu">
			<li><a class="dropdown-item" href="index.php?trs=hr">Songs</a></li>
			<li><a class="dropdown-item" href="index.php?trs=hr">Ragini</a></li>
          </ul>
        </li>
		<li class="nav-item">
		  <a class="nav-link" href="index.php?trs=pb">Punjabi Songs</a>
        </li>
		<li class="nav-item">
         <a class="nav-link" href="index.php?trs=data">Upload Data</a>
        </li>
		<li class="nav-item">
         <a class="nav-link" href="index.php?trs=contact">Contact Us Now</a>
        </li>
      </ul>
	  <!--form class="d-flex ">
        <input class="form-control me-2" type="text" placeholder="Search">
        <button class="btn btn-primary" type="button">
			Search
		</button>
      </form-->
	  <ul class="nav navbar-nav navbar-right">
	   <li class="nav-item">
		<a class="nav-link" href="index.php?trs=login">
			<button class="btn btn-success"><i class="fa fa-sign-in" aria-hidden="true"></i>Login</button>	
		</a>
	  </li>
	  <li class="nav-item">
		<a class="nav-link" href="index.php?trs=signup">
			<button class="btn btn-primary"><i class="fa fa-registered" aria-hidden="true"></i>Sign Up</button>	
		</a>
	  </li>
	 </ul>
    </div>
  </div>
</nav>
<div class="container-fluid">
	<?php
	 if(isset($_GET['trs']))
	 {
		include_once('content.php');
	 }
	 else
	 {
		include_once('pages/home.php');
	 } 
	?>
</div>
<footer class="footer bg-dark fixed-bottom pb-3">
  <div class="row text-center text-white">
   <div class="col-xs-12 col-sm-12 col-lg-12">Copyright © 2022 All Rights Reserved.<br>
            Designed by <a rel="nofollow" href="https://templatemo.com" title="free CSS templates">Muchhad.com</a></div>
  </div>   
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!--script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>

<!--script src="bootstrap/js/owl-carousel.js"></script>
<script src="bootstrap/js/animation.js"></script>
<script src="bootstrap/js/imagesloaded.js"></script>
<script src="bootstrap/js/custom.js"></script-->
<script>
let items = document.querySelectorAll('.carousel .carousel-item')

items.forEach((el) => {
    const minPerSlide = 4
    let next = el.nextElementSibling
    for (var i=1; i<minPerSlide; i++) {
        if (!next) {
            // wrap carousel by using first child
        	next = items[0]
      	}
        let cloneChild = next.cloneNode(true)
        el.appendChild(cloneChild.children[0])
        next = next.nextElementSibling
    }
})
</script>
<script>
	function validate_data()
	{
		$(".failure").html('');
		$(".success").html('');
		var err=0;
		var validExt_pic = ".jpg, .png, .gif, .jpeg, .tif, .tiff";
		var validExt_video= ".wmv, .avi, .mp4, .mov, .mkv, .avchd";
		var validExt_audio= ".mp3, .wav, .wma, .webm, .ogg, .aiff, .flac";
		
		var title = $("#title").val().trim();
		var album = $("#album").val().trim();
		var singer = $("#singer").val().trim();
		var lyrics = $("#lyrics").val().trim();
		var music = $("#music").val().trim();
		var label = $("#label").val().trim();
		var category = $("#category").val().trim();
		var duration = $("#duration").val().trim();
		var released = $("#released").val().trim();
		var song_type = $("#song_type").val().trim();
		
		var cvr_pic = document.getElementById("cvr_pic");
		var filePath = cvr_pic.value;
		var getFileExt_pic = filePath.substring(filePath.lastIndexOf('.') + 1).toLowerCase();
		var dbl_check_ext = filePath.split(".").length-1;
		var withoutFilename = filePath.substr(0, filePath.lastIndexOf('.')).length;
		//var checkMIMETypeFile=document.getElementById('cvr_pic').files[0].type; 
		var checkfileContent = document.getElementById("cvr_pic").files[0];
		var pos = validExt_pic.indexOf(getFileExt_pic);
		
		var upload_video = document.getElementById("upload_video");
		var filePath_video = upload_video.value;
		var getFileExt_video = filePath_video.substring(filePath_video.lastIndexOf('.') + 1).toLowerCase();
		var dbl_check_ext_video = filePath_video.split(".").length-1;
		var withoutFilename_video = filePath_video.substr(0, filePath_video.lastIndexOf('.')).length;
		//var checkMIMETypeFile_video=document.getElementById('upload_video').files[0].type; 
		var checkfileContent_video = document.getElementById("upload_video").files[0];
		var pos_video = validExt_video.indexOf(getFileExt_video);
		
		var upload_audio = document.getElementById("upload_audio");
		var filePath_audio = upload_audio.value;
		var getFileExt_audio = filePath_audio.substring(filePath_audio.lastIndexOf('.') + 1).toLowerCase();
		var dbl_check_ext_audio = filePath_audio.split(".").length-1;
		var withoutFilename_audio = filePath_audio.substr(0, filePath_audio.lastIndexOf('.')).length;
		//var checkMIMETypeFile_audio=document.getElementById('upload_audio').files[0].type; 
		var checkfileContent_audio = document.getElementById("upload_audio").files[0];
		var pos_audio = validExt_audio.indexOf(getFileExt_audio);

		if(title==""){
			 $("#title_err").html('Plese enter here');
			 err++;
		 }
		if(album==""){
			 $("#album_err").html('Plese enter here');
			 err++;
		 }
		if(singer==""){
			 $("#singer_err").html('Plese enter here');
			 err++;
		 }
		if(lyrics==""){
			 $("#lyrics_err").html('Plese enter here');
			 err++;
		 }
		if(music==""){
			 $("#music_err").html('Plese enter here');
			 err++;
		 }
		if(label==""){
			 $("#label_err").html('Plese enter here');
			 err++;
		 }
		if(category==""){
			 $("#category_err").html('Plese enter here');
			 err++;
		 }
		if(duration==""){
			 $("#duration_err").html('Plese enter here');
			 err++;
		 }
		if(released==""){
			 $("#released_err").html('Plese enter here');
			 err++;
		 }
		if(song_type==""){
			 $("#song_type_err").html('Plese enter here');
			 err++;
		 }
		if(err>0)
		{
		 return false;
		}
		else
		{
			var form = $('form')[0]; 
			var formData = new FormData(form);
			formData.append('action', 'final_save');
			$.ajax
			({
				url : "pages/ajax.php",
				type : "post",     
				data: formData, 
				contentType: false,                  
				processData:false, 
				success : function(result)
				{
					alert(result);
					$('.success').html(result);
					$('#data_upload')[0].reset();
					return false;
				}
			});	 
		}
	}
  </script>
</body>
</html>