<div class="container-fluid main" id="exhibition">
    <div class="row">
        <div class="col-md-12">
            <h1>The 60s' Riffle<br />A Photographic Exhibition</h1>
        </div>
    </div>

	<div class="row">
	  <div class="col-md-12 text-center exhibition">
		<!-- <embed src="<?=PUBLIC_URL?>images/stock/exhibition/bensound.mp3" width="500" height="500" loop="true" autostart="true" hidden="true" /> -->
		<button clas="btn btn-large playaudio"><i class="fa fa-pause" aria-hidden="true"></i></button>	
		<!-- <button type="button" class="btn btn-primary" data-method="show" title="Play the images">Play</button> -->
   		<audio autoplay id="my_audio" src="<?=PUBLIC_URL?>images/stock/exhibition/bensound.mp3" loop="loop"></audio>
		<div id="photoexhibition">
			<img data-original="<?=PUBLIC_URL?>images/stock/exhibition/001.jpg" src="<?=PUBLIC_URL?>images/stock/exhibition/thumbs/001.jpg" alt="A Photographic Exhibition" />
			<img data-original="<?=PUBLIC_URL?>images/stock/exhibition/002.jpg" src="<?=PUBLIC_URL?>images/stock/exhibition/thumbs/002.jpg" alt="A Photographic Exhibition" />
			<img data-original="<?=PUBLIC_URL?>images/stock/exhibition/003.jpg" src="<?=PUBLIC_URL?>images/stock/exhibition/thumbs/003.jpg" alt="A Photographic Exhibition" />
			<img data-original="<?=PUBLIC_URL?>images/stock/exhibition/004.jpg" src="<?=PUBLIC_URL?>images/stock/exhibition/thumbs/004.jpg" alt="A Photographic Exhibition" />
			<img data-original="<?=PUBLIC_URL?>images/stock/exhibition/005.jpg" src="<?=PUBLIC_URL?>images/stock/exhibition/thumbs/005.jpg" alt="A Photographic Exhibition" />
			<img data-original="<?=PUBLIC_URL?>images/stock/exhibition/006.jpg" src="<?=PUBLIC_URL?>images/stock/exhibition/thumbs/006.jpg" alt="A Photographic Exhibition" />
			<img data-original="<?=PUBLIC_URL?>images/stock/exhibition/007.jpg" src="<?=PUBLIC_URL?>images/stock/exhibition/thumbs/007.jpg" alt="A Photographic Exhibition" />
			<img data-original="<?=PUBLIC_URL?>images/stock/exhibition/008.jpg" src="<?=PUBLIC_URL?>images/stock/exhibition/thumbs/008.jpg" alt="A Photographic Exhibition" />
			<img data-original="<?=PUBLIC_URL?>images/stock/exhibition/009.jpg" src="<?=PUBLIC_URL?>images/stock/exhibition/thumbs/009.jpg" alt="A Photographic Exhibition" />
			<img data-original="<?=PUBLIC_URL?>images/stock/exhibition/010.jpg" src="<?=PUBLIC_URL?>images/stock/exhibition/thumbs/010.jpg" alt="A Photographic Exhibition" />
			<img data-original="<?=PUBLIC_URL?>images/stock/exhibition/011.jpg" src="<?=PUBLIC_URL?>images/stock/exhibition/thumbs/011.jpg" alt="A Photographic Exhibition" />
			<img data-original="<?=PUBLIC_URL?>images/stock/exhibition/012.jpg" src="<?=PUBLIC_URL?>images/stock/exhibition/thumbs/012.jpg" alt="A Photographic Exhibition" />
			<img data-original="<?=PUBLIC_URL?>images/stock/exhibition/013.jpg" src="<?=PUBLIC_URL?>images/stock/exhibition/thumbs/013.jpg" alt="A Photographic Exhibition" />
			<img data-original="<?=PUBLIC_URL?>images/stock/exhibition/014.jpg" src="<?=PUBLIC_URL?>images/stock/exhibition/thumbs/014.jpg" alt="A Photographic Exhibition" />
			<img data-original="<?=PUBLIC_URL?>images/stock/exhibition/015.jpg" src="<?=PUBLIC_URL?>images/stock/exhibition/thumbs/015.jpg" alt="A Photographic Exhibition" />
			<img data-original="<?=PUBLIC_URL?>images/stock/exhibition/016.jpg" src="<?=PUBLIC_URL?>images/stock/exhibition/thumbs/016.jpg" alt="A Photographic Exhibition" />
			<img data-original="<?=PUBLIC_URL?>images/stock/exhibition/017.jpg" src="<?=PUBLIC_URL?>images/stock/exhibition/thumbs/017.jpg" alt="A Photographic Exhibition" />
			<img data-original="<?=PUBLIC_URL?>images/stock/exhibition/018.jpg" src="<?=PUBLIC_URL?>images/stock/exhibition/thumbs/018.jpg" alt="A Photographic Exhibition" />
			<img data-original="<?=PUBLIC_URL?>images/stock/exhibition/019.jpg" src="<?=PUBLIC_URL?>images/stock/exhibition/thumbs/019.jpg" alt="A Photographic Exhibition" />
			<img data-original="<?=PUBLIC_URL?>images/stock/exhibition/020.jpg" src="<?=PUBLIC_URL?>images/stock/exhibition/thumbs/020.jpg" alt="A Photographic Exhibition" />
			<img data-original="<?=PUBLIC_URL?>images/stock/exhibition/021.jpg" src="<?=PUBLIC_URL?>images/stock/exhibition/thumbs/021.jpg" alt="A Photographic Exhibition" />
			<img data-original="<?=PUBLIC_URL?>images/stock/exhibition/022.jpg" src="<?=PUBLIC_URL?>images/stock/exhibition/thumbs/022.jpg" alt="A Photographic Exhibition" />
			<img data-original="<?=PUBLIC_URL?>images/stock/exhibition/023.jpg" src="<?=PUBLIC_URL?>images/stock/exhibition/thumbs/023.jpg" alt="A Photographic Exhibition" />
			<img data-original="<?=PUBLIC_URL?>images/stock/exhibition/024.jpg" src="<?=PUBLIC_URL?>images/stock/exhibition/thumbs/024.jpg" alt="A Photographic Exhibition" />
			<img data-original="<?=PUBLIC_URL?>images/stock/exhibition/025.jpg" src="<?=PUBLIC_URL?>images/stock/exhibition/thumbs/025.jpg" alt="A Photographic Exhibition" />
			<img data-original="<?=PUBLIC_URL?>images/stock/exhibition/026.jpg" src="<?=PUBLIC_URL?>images/stock/exhibition/thumbs/026.jpg" alt="A Photographic Exhibition" />
			<img data-original="<?=PUBLIC_URL?>images/stock/exhibition/027.jpg" src="<?=PUBLIC_URL?>images/stock/exhibition/thumbs/027.jpg" alt="A Photographic Exhibition" />
			<img data-original="<?=PUBLIC_URL?>images/stock/exhibition/028.jpg" src="<?=PUBLIC_URL?>images/stock/exhibition/thumbs/028.jpg" alt="A Photographic Exhibition" />
			<img data-original="<?=PUBLIC_URL?>images/stock/exhibition/029.jpg" src="<?=PUBLIC_URL?>images/stock/exhibition/thumbs/029.jpg" alt="A Photographic Exhibition" />

		</div>
	  </div>
	</div>
</div>
<style>
	#k-subfooter{
		background-color: #444;
		margin-top: 0px !important;
	}
	button {
	  position: fixed;	
	  bottom: 0px;
      right: 0px;
	  background-color: #4CAF50;
	  border: none;
	  color: white;
	  padding: 10px 15px;
	  text-align: center;
	  text-decoration: none;
	  display: inline-block;
	  font-size: 16px;
	  margin: 4px 2px;
	  border-radius: 50%;
	}
</style>
<script>

$(document).ready(function () {
	
	$('button').click(function (){

		var audioElement= document.getElementById("my_audio");

		if(audioElement.paused){
			
			$('button').html('<i class="fa fa-pause"></i>');
			audioElement.play();
		}
		else{
			$('button').html('<i class="fa fa-play"></i>');
			audioElement.pause();
		}
	});

});
</script>


	