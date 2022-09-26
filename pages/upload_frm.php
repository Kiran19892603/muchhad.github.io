<div class="main-content mx-5 my-5">
  <form id="data_upload" name="data_upload" action="" method="post" enctype="multipart/form-data">
   <div class="card border-primary">
	<div class="card-header bg-primary text-white">Data Uploading Form</div>
	<div class="card-body">
		<div align="center">
			<span class="text-danger" id="msg_err"></span>
			<span class="text-success" id="msg_success"></span>
		</div>
		<div class="row">
		  <div class="col-xs-4 col-sm-4 col-lg-4">
			<label for="fname">Song Title:</label>
			<input type="text" name="title" id="title" autocomplete="on" class="form-control" required>
			<span class="error" id="title_err"></span>
		  </div>
		  <div class="col-xs-4 col-sm-4 col-lg-4">
			  <label for="fname">Album Name:</label>
			  <input type="text" name="album" id="album" autocomplete="on" class="form-control" required>
			  <span class="error" id="album_err"></span>
		  </div>
		  <div class="col-xs-4 col-sm-4 col-lg-4">
			<label for="fname">Singer Name:</label>
			<input type="text" name="singer" id="singer" autocomplete="on" class="form-control" required>
			<span class="error" id="singer_err"></span>
		 </div>
		</div>
		<div class="row"> 
		  <div class="col-xs-4 col-sm-4 col-lg-4">
			<label for="fname">Lyrics:</label>
			<input type="text" name="lyrics" id="lyrics" autocomplete="on" class="form-control" required>
			<span class="error" id="lyrics_err"></span>
		 </div>
		  <div class="col-xs-4 col-sm-4 col-lg-4">
			<label for="fname">Music:</label>
			<input type="text" name="music" id="music" autocomplete="on" class="form-control" required>
			<span class="error" id="music_err"></span>
		  </div>
		  <div class="col-xs-4 col-sm-4 col-lg-4">
			<label for="fname">Label:</label>
			<input type="text" name="label" id="label" autocomplete="on" class="form-control" required>
			<span class="error" id="label_err"></span>
		  </div>
		</div>
		<div class="row">
		  <div class="col-xs-4 col-sm-4 col-lg-4">
			<label for="fname">Category:</label>
			<input type="text" name="category" id="category" autocomplete="on" class="form-control" required>
			<span class="error" id="category_err"></span>
		  </div>
		  <div class="col-xs-4 col-sm-4 col-lg-4">
			<label for="fname">Duration:</label>
			<input type="text" name="duration" id="duration" autocomplete="on" class="form-control" required>
			<span class="error" id="duration_err"></span>
		  </div>
		  <div class="col-xs-4 col-sm-4 col-lg-4">
			<label for="fname">Released:</label>
			<input type="text" name="released" id="released" autocomplete="on" class="form-control" required>
			<span class="error" id="released_err"></span>
		  </div>
		</div>
		<div class="row">
		  <div class="col-xs-4 col-sm-4 col-lg-4">
			<label for="fname">Cover Photo:</label>
			<input type="file" id="cvr_pic" name="cvr_pic" accept="image/*" class="form-control" required>
			<span class="error" id="cvr_pic_err"></span>
		  </div>
		  <div class="col-xs-4 col-sm-4 col-lg-4">
			<label for="fname">Upload Video:</label>
			<input type="file" id="upload_video" name="upload_video" accept="video/*" class="form-control" required>
			<span class="error" id="upload_video_err"></span>
		  </div>
		  <div class="col-xs-4 col-sm-4 col-lg-4">
			<label for="fname">Upload Audio:</label>
			<input type="file" id="upload_audio" name="upload_audio" accept="audio/*" class="form-control" required>
			<span class="error" id="upload_audio_err"></span>
		  </div>
		</div>
		<div class="row">
		  <div class="col-xs-8 col-sm-8 col-lg-8">
			  <label for="fname">Song Type:</label>
			  <select name="song_type" id="song_type" class="form-control" required>
				<option Value="">--Select--</option>
				<option Value="1">Haryanvi Song</option>
				<option Value="2">Haryanvi Ragni</option>
				<option Value="3">Punjabi Songs</option>
				<option Value="4">Latest Songs</option>
				<option Value="5">Trending Songs</option>
			  </select>
			  <span class="error" id="song_type_err"></span>
		  </div>
		  <div class="col-xs-4 col-sm-4 col-lg-4">
			<input type="button" id="form-submit" name="form-submit" class="btn btn-primary" value="Submit" onclick="validate_data();">
		  </div>
		</div>
	</div>
  </div>
</form>
</div>


