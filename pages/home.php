<?php
$active=0;
$activetag=$html=$sql=$res='';
$sql='SELECT * FROM `main_info` WHERE song_type IN (1,2) ORDER BY released';
$res=fetch_data_qry($sql);
$html='<div class="container my-3">
		<h2 class="font-weight-light">Haryanvi Songs</h2>
			<div class="row mx-auto my-auto justify-content-center">
				<div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
					<div class="carousel-inner" role="listbox">';
for($i=0;$i<count($res);$i++)
{
	$song_title=trim($res[$i]['song_title']);
	$singer_name=trim($res[$i]['singer_name']);
	$file_path=trim($res[$i]['file_path']);
	$video=trim($res[$i]['video']);
	$cover_pic=trim($res[$i]['cover_pic']);
	if($active==$i) { $activetag='active';}
	else { $activetag='';}
	$html.=' <div class="carousel-item '.$activetag.' ">
				<div class="col-md-3">
					<div class="card">
						<div class="card-img">
							<video class="img-fluid" autoplay loop /*muted*/ controls>
								<source src="'.$file_path.$video.'" />
							</video>
						</div>
						<div class="card-img-overlay text-white">'.$song_title.'</div>
					</div>
				</div>
            </div>';
}
	
$html.='
			</div>
			<a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev">
				<span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
			</a>
			<a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="next">
				<span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
			</a>
		</div>
	</div>
	<h5 class="mt-2 fw-light"></h5>
</div>';
echo $html;	

$active1=0;
$activetag1=$html1=$sql1=$res1='';
$sql1='SELECT * FROM `main_info` WHERE song_type=3 ORDER BY released';
$res1=fetch_data_qry($sql1);
$html1='<div class="container my-3">
		<h2 class="font-weight-light">Punjabi Songs</h2>
			<div class="row mx-auto my-auto justify-content-center">
				<div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
					<div class="carousel-inner" role="listbox">';
for($j=0;$j<count($res1);$j++)
{
	$song_title1=trim($res1[$j]['song_title']);
	$singer_name1=trim($res1[$j]['singer_name']);
	$file_path1=trim($res1[$j]['file_path']);
	$video1=trim($res1[$j]['video']);
	$cover_pic1=trim($res1[$j]['cover_pic']);
	if($active1==$j) { $activetag1='active';}
	else { $activetag1='';}
	//autoplay loop muted controls
	$html1.=' <div class="carousel-item '.$activetag1.' ">
				<div class="col-md-3">
					<div class="card">
						<div class="card-img">
							<video class="img-fluid" autoplay loop /*muted*/ controls>
								<source src="'.$file_path1.$video1.'" />
							</video>
						</div>
						<div class="card-img-overlay text-white">'.$song_title1.'</div>
					</div>
				</div>
            </div>';
}
	
$html1.='
			</div>
			<a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev">
				<span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
			</a>
			<a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="next">
				<span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
			</a>
		</div>
	</div>
	<h5 class="mt-2 fw-light"></h5>
</div>';
echo $html1;							
?>           


