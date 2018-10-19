<?php 
include("controller/doConnect.php");
  session_start();
  ?>
        
        <?php
		include ("header.php")
		?>
		<style>
#myImg {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}
#myImg2 {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}
#myImg3 {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}
#myImg4 {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}
#myImg5 {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

#myImg2:hover {opacity: 0.7;}
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
}

/* Caption of Modal Image */
#caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
}

/* Add Animation */
.modal-content, #caption {
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
    from {-webkit-transform:scale(0)}
    to {-webkit-transform:scale(1)}
}

@keyframes zoom {
    from {transform:scale(0)}
    to {transform:scale(1)}
}

/* The Close Button */
.close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
}

.close:hover,
.close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
    .modal-content {
        width: 100%;
    }
}
</style>
         <!-- Slider Start
        ============================================================== -->
        
 <div class="container">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6" >
<div class="row col-xs-12 col-lg-12 col-md-12 col-sm-12 " >
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" align="center">
	<img id="myImg" src="img/1.jpg" class="img-thumbnail img-responsive" width="304" height="236"><br><br>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" align="center">
<img id="myImg2" src="img/2.jpg" class="img-thumbnail img-responsive" width="304" height="236"><br>
</div>
</div></div>

<div class="col-lg-6 col-md-6 col-sm-6" >
<div class="row col-xs-12 col-lg-12 col-md-12 col-sm-12 col-sx-offset-12" >
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" align="center">
	<br><img id="myImg3" src="img/5.jpg" class="img-thumbnail img-responsive" width="304" height="236"><br><br><br>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" align="center">
	<img id="myImg4" src="img/3.jpg" class="img-thumbnail img-responsive" width="304" height="236"><br><br><br>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" align="center">
<img id="myImg5" src="img/4.jpg" class="img-thumbnail img-responsive" width="304" height="236"><br>
</div>
</div>

</div>
</div>
</div>
<br>
<div id="myModal" class="modal">
  <span class="close">×</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var img2 = document.getElementById('myImg2');
var img3 = document.getElementById('myImg3');
var img4 = document.getElementById('myImg4');
var img5 = document.getElementById('myImg5');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}
img2.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}
img3.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}
img4.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}
img5.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}
</script>
		    <?php
	include ("footer.php")
	?>