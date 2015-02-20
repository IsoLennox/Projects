<?php

  header("Content-type: text/css; charset: UTF-8");

   //$brandColor = "#990000";
   //$linkColor = "#555555";
   //$CDNURL = "http://cdn.blahblah.net";

$transWhite = "rgba(255,255,255,";
?>

*{font-family: sans-serif;}
a {text-decoration: none; cursor: pointer;}

body {background: #dadada;}

body,.content, ul li{margin: 0 auto;}

.content {margin: 30px; margin-top: 60px; }
#readme{
    margin: 0 auto; 
    width: 60%;
    background: rgba(255,255,255,.6);
    border-radius: 20px;
    padding: 30px;
}


 #fontSizeButtons { 
     padding:15px; 
     color: white;
     font-weight:600; width: 300px; 
     position: fixed; 
     right:100px;
     top: -.2px;
     z-index: 9999;
 }

/*  Customize site colors */

.customizeTools {
    height: 0px;
    visibility: collapse;
    z-index: 9999;
    position: relative;
    top:50px; 
}
.customizeTools button{margin-top: 25px; margin-right: 5px; float: left; padding: 5px; }

.customize {text-transform: uppercase; cursor: pointer;}



/*  MAPS PAGE  */

#map{
  height: 400px;
  width: 760px;
    border-radius: 50px;
}


#map h2 {
	color: black;
	text-shadow : none;
}
#map p {
	color: black;	
}
    
input  {padding: 5px; border-radius: 10px;}

#search {width: 300px;}

.article {margin-top: 50px; }

#intro {text-align: center;}
h1 {font-size: 70px; }





/*  IdeaJam API */
#ideajamcomments li{
    list-style: none;
    width: 600px;
    background: white;
    padding: 20px;
    clear: both;
    border-radius: 20px;
    margin: 0 auto;
    margin-top: 10px;

}
 

/*  animated feed **/
.slider {
	width: 460px;
	height: 60px;

}


	/* RSS Slider */

.rssFeed {margin-top: 20px;}
/*.thirds h2{color: white;}*/

.thirds {width: 28%; 
    float: left; 
    padding: 20px; 
    border: 1px solid grey; 
    /*background: rgba(255,255,255,.5);*/
    background: rgba(0,0,0,.2);
    margin-right: 10px;
    border-radius: 10px;
}



	.slider, .slider li {
		margin: 0;
		padding: 0;
		list-style: none;
		overflow: hidden;
	}
	.slider li { float: left; }

	.sliderItem {}

	.sliderPrevious, .sliderNext {}


	/* Tabs */

	.tabs {
		margin: 0;
		padding: 0;
		height: 1px;
		list-style: none;
	}
	.tabs li {
		float: left;
		margin: 0 2px 0 0;
		position: relative;
		top: 1px;
		border: 1px solid #888;
		border-top-left-radius: 6px;
		border-top-right-radius: 6px;
	}
	.tabs li a {
		display: block;
		margin: 0 1px;
		padding: 0.2em 1em;
	}
	.tabs li.current {
		background: #fff;
		border-bottom: none;
	}
	.tabs li.current a { border-bottom: 1px solid #fff; }
	.tabs li a:focus { outline: none; }

	.tab {
		clear: left;
		padding: 0.5em 1em;
		background: #fff;
		border: 1px solid #888;
		border-top-right-radius: 6px;
	}


/*  PHOTO GALLERY */

.gallerythumbnails {background:white;width: 200px; height: 200px; border: 1px solid grey; padding: 10px; margin: 5px;}



footer {text-align: center; 
    position: relative; 
    bottom: 0; 
    margin: 0 auto;
    margin-top: 100px;
    padding: 10px;
}


@media (max-width: 900px) {
  .thirds {
    clear: both;
      width: 80%;
  }
}