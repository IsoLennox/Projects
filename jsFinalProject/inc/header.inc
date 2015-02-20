<!DOCTYPE html>
<html lang="en">

<head>
    <title>Isobel Lennox Does Finals</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    
    
    
    
    
    <!--

Created by: Isobel Lennox
Javascript Final Project
Instructor: Bruce Elgort
CTEC 126
Fall 2014


Instructions:

Using your HTML, CSS, JavaScript and other web development and graphic skills, each student is to develop 4 web pages that will demonstrate their knowledge and comprehension of the JavaScript and jQuery topics covered in CTEC 126. There are 7 pages that are described in the Details section. You are to choose 4 pages from the 7. 4 are required and you can do others for extra credit. 

During Week 10 all students are required to meet with the instructor to discuss their game plan on how best to complete this project.

These web pages should include all of the following elements and should all use the same design theme (colors, layout, navigation, branding etc.). 

    All pages should use a jQuery menu plugin for navigation. Explore the many jQuery menu plugins available and select one that fits the design of your pages. Here are a few for you to consider:
        http://www.smartmenus.org (Links to an external site.)
        http://www.1stwebdesigner.com/design/jquery-navigation-plugins/ (Links to an external site.)
        http://www.1stwebdesigner.com/css/36-eye-catching-jquery-navigation-menus/ (Links to an external site.)
        http://cssmenumaker.com/jquery-menus (Links to an external site.)
        http://www.designrazzi.com/2013/jquery-menus-plugins/ (Links to an external site.)
        jQuery UI Menu - http://jqueryui.com/menu/ (Links to an external site.)


    All pages should contain two buttons that will increase and decrease the font size of all elements on the page. You can see this on many websites. Place the buttons at the top of the page.

Details:

    Create a page with a form on it. The form should contain inputs, radio buttons, checkboxes and combo boxes. All fields on the form should be validated before allowing the form to be submitted. Students can use JavaScript or jQuery to perform validation however, jQuery is preferred. Your form should post to: http://ctec.clark.edu/~belgort/formprocessing/processform.php (Links to an external site.)
    Create a page with a photo library on it. Use either FancyBox2, Lightbox2 or another jQuery plugin for this. Your image library page should contain no less than 9 pictures. Fancybox (Links to an external site.) is another lightbox plugin that you may consider exploring.
    Create a page (or incorporate on another page) that contains no less than three RSS feeds on it. Use the ZRSS jQuery plugin (Links to an external site.) to do this. To learn more about RSS feeds and what they are visit this page: http://en.wikipedia.org/wiki/RSS_feed (Links to an external site.)
    Create a page that has a dashboard of news. Use arrays to store the news data and use intervals to swap out news stories every 60 seconds. Have at least two blocks that get updated. 
    Create a page that demonstrates the use of jQuery Ajax requests. More on this Week 9/10/11.
    Create a page that utilizes Google Maps using the .goMap() jQuery plugin. Have at least 4 markers on the page along with some marker popups.
    Create a page that employs a chart on it using http://www.highcharts.com (Links to an external site.)


-->
     

<!--

 (completed)   All pages should use a jQuery menu plugin for navigation. Explore the many jQuery menu plugins available and select one that fits the design of your pages. Here are a few for you to consider:
        http://www.smartmenus.org (Links to an external site.)
        http://www.1stwebdesigner.com/design/jquery-navigation-plugins/ (Links to an external site.)
        http://www.1stwebdesigner.com/css/36-eye-catching-jquery-navigation-menus/ (Links to an external site.)
        http://cssmenumaker.com/jquery-menus (Links to an external site.)
        http://www.designrazzi.com/2013/jquery-menus-plugins/ (Links to an external site.)
        jQuery UI Menu - http://jqueryui.com/menu/ (Links to an external site.)

****************

  (completed)  All pages should contain two buttons that will increase and decrease the font size of all elements on the page. You can see this on many websites. Place the buttons at the top of the page. 


-->
    
    <!-- main styles -->
    <link href="css/main.css" rel="stylesheet" media="screen"> 
    
     <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    
        <!-- style for navigation -->
   <link rel="stylesheet" href="css/navstyles.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   
   <!-- For fancy Box -->
   
   <link rel="stylesheet" href="fancybox/source/jquery.fancybox.css" type="text/css" media="screen" />
<link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-buttons.css" type="text/css" media="screen" />
<link rel="stylesheet" href="fancybox/source/helpers/jquery.fancybox-thumbs.css" type="text/css" media="screen" />
    
    <!-- JS-style for navigation -->
   <script src="js/navScript.js"></script>
   
   <!-- Color picker for change site colors -->
   <script src="js/colorpicker.js"></script>
    
  <!-- COOKIES -->
  
  <script>
    
    // SET COOKIES
    //Example taken from W3Schools
    //body onload included

function setCookie(cname,cvalue,exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname+"="+cvalue+"; "+expires;
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) != -1) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

 
    
    
    //CHECK COOKIES
    function checkCookie() {
    var bakColor=getCookie("bcolor");
    var textColor=getCookie("tcolor");
    var textSize=getCookie("tsize");
    
    //background color
    if (bakColor != "") { 
        document.body.style.backgroundColor = bakColor;
        //SET CSS COLOR
    } else {
       bakColor = listValue;
       if (bakColor != "" && bakColor != null) {
           setCookie("bcolor", bakColor, 30);
       }
    }
    
    //font color 
    if (textColor != "") { 
        document.body.style.color = textColor;
        //SET CSS COLOR
    } else {
       textColor = listValue;
       if (textColor != "" && textColor != null) {
           setCookie("tcolor", textColor, 30);
       }
    }//end font color
    
        //font size
    if (textSize != "") { 
        document.body.style.fontSize = textSize;
        //SET CSS COLOR
    } else {
       textSize = listValue;
       if (textSize != "" && textSize != null) {
           setCookie("tsize", textSize, 30);
       }
    }//end font size
    
    
    
    //NAME
     var user=getCookie("username");
    if (user != "") {
        //alert("Welcome again " + user);
        document.getElementById('name').innerHTML="Hi, "+user;
    } else {
       user = prompt("Please enter your name:","");
       if (user != "" && user != null) {
           setCookie("username", user, 30);
           location.reload();
       }
    }
    
} //END CHECK COOKIES

</script><!-- end cookies -->
    
    <style>
    body {  background: #8AADB8; }
</style>

</head>

<body onload="checkCookie()">
    
    <header>
    
    <!--<a id="sitelogo" href="index.php">Javascript Final</a>-->
 
  
        
        
        <div id='cssmenu'>
<ul>
   <li id="homenav"><a href='index.php'>Home</a></li>
  <!--IF ACTIVE: <li class='active has-sub'> -->
  <!--IF HAS SUB ITEMS <li class='has-sub' id="newsnav"><a href="rss.php">News</a>-->
   <li id="newsnav"><a href="rss.php">News</a>
      <ul>
      <!--<li><a href="news.php">Headlines</a></li>-->
      <li><a href="ideajamAPI.php">API feed</a></li>
         <li><a id="rsspage" href="rss.php">RSS</a>
          <!--  <ul>
               <li><a href='#'>Sub Product</a></li>
               <li><a href='#'>Sub Product</a></li>
            </ul> -->
         </li>
        
          
      </ul>
   </li>
   <li id="ajaxnav"><a href="ajaxRequest.php">AJAX</a></li>
          <li id="chartnav"><a href="chart.php">Chart</a></li>
     <li id="gallerynav"><a href="photos.php">Gallery</a>        </li>
   
      <li class="" id="mapnav"><a href="map.php">Map</a> </li>
   
   <li id="formnav"><a href="form.php">Register</a> </li>
</ul>

<span id="settingsMenu"><span id="name"></span> |  <span id="settings"><a href="#page">Settings</a></span>  </span> 

  <!-- INCREASE/DECREASE page font size -->
   <!-- <span id="fontSizeButtons"> Change Font Size:
    <button class='increase'> + </button>
		<button class='decrease'> - </button>
        </span>-->
        <!-- END INCREASE/DECR BUTTONS -->
      
</div><!-- end CSS menu -->

 


    
    
  
        
        	 <!-- INCREASE/DECREASE page font size SCRIPT -->
	<!--
<script>
	$('.increase').click(function(){
		var current = +($('.content').css('fontSize').split('px')[0]); //split take px off and + makes it an integer
		if (current < 30){ //while current size is less than 30
			var newcurrent = +current + 2; //add 2
			console.log(newcurrent);
			current = newcurrent + 'px'; // add px to number
			$('.content').css('fontSize',current); //place into font size
		};//end if
	});//end click

	$('.decrease').click(function(){
		var current = +($('.content').css('fontSize').split('px')[0]); //split take px off and + makes it an integer
		
		if (current > 8){ //while current size is greater than 8
			var newcurrent = +current - 2; //minus 2
			console.log(newcurrent);
			current = newcurrent + 'px'; // add px to number
			$('.content').css('fontSize',current); //place into font size
		
		};//end if
	});//end click
	</script> -->
    <!-- END INCREASE/DECR BUTTONS SCRIPT-->
    
        
    </header>
     <body><div id="page" class="page">
     
     
     <span id="toolbox">
     
     <h2>SETTINGS</h2>
     <hr/>
     
     
       
            <div class="customizeTools">
            
            
             
            
              <!-- INCREASE/DECREASE page font size -->
              
              <h3>Change Font Size</h3>
    <span id="fontSizeButtons"> 
    <button class='increase'> + </button>
		<button class='decrease'> - </button>
        </span><!-- END INCREASE/DECR BUTTONS -->
        
        <!-- INCREASE/DECREASE page font size SCRIPT -->
	
<script>

    var cookieFontSize;
    
	$('.increase').click(function(){
		var current = +($('.content').css('fontSize').split('px')[0]); //split take px off and + makes it an integer
		if (current < 30){ //while current size is less than 30
			var newcurrent = +current + 2; //add 2
			console.log(newcurrent);
			current = newcurrent + 'px'; // add px to number
            cookieFontSize = current;
			$('.content').css('fontSize',current); //place into font size
		};//end if
	});//end click

	$('.decrease').click(function(){
		var current = +($('.content').css('fontSize').split('px')[0]); //split take px off and + makes it an integer
		
		if (current > 8){ //while current size is greater than 8
			var newcurrent = +current - 2; //minus 2
			console.log(newcurrent);
			current = newcurrent + 'px'; // add px to number
            cookieFontSize = current;
			$('.content').css('fontSize',current); //place into font size
		
		};//end if
	});//end click
	</script><!-- END INCREASE/DECR BUTTONS SCRIPT-->
        
        
            <h3 id="settingsTitle">Customize Site Colors</h3>
          
        
                
                
                <p>Background:</p>
                <select onchange="backgroundColor(this);">
 <option>-Select-</option>
  <option>Black</option>
  <option>lightgrey</option>
  <option>grey</option>
  <option>White</option>
  <option>darkred</option>
  <option>red</option>
  <option>purple</option>
  <option>darkorange</option>
  <option>orange</option>
  <option>yellow</option>
<option>green</option>
  <option>darkgreen</option>
<option>lightgreen</option>
<option>Lightblue</option>
  <option>blue</option>
  <option>darkblue</option>
  <option>indigo</option>
<option>Magenta</option>
<option>violet</option>
<option>pink</option>
</select> 
                


                
                  <p>Font Color:</p>
                <select onchange="fontColorFeed(this);">
 <option>-Select-</option>
  <option>Black</option>
  <option>lightgrey</option>
  <option>grey</option>
  <option>White</option>
  <option>darkred</option>
  <option>red</option>
  <option>purple</option>
  <option>darkorange</option>
  <option>orange</option>
  <option>yellow</option>
<option>green</option>
  <option>darkgreen</option>
<option>lightgreen</option>
<option>Lightblue</option>
  <option>blue</option>
  <option>darkblue</option>
  <option>indigo</option>
<option>Magenta</option>
<option>violet</option>
<option>pink</option>
</select> 
                
                
                
                      
                <br/>
               <button id="save">SAVE</button>
                <button id="cancel">CANCEL</button>
                <button id="reset">RESET TO DEFAULT</button>
                 
       
    </div><!-- end customize tools -->
     
     </span>
     
     <script>
     $('#settings').click(function(){
        $('#toolbox').css('visibility', 'visible');
 
     });//end click

     </script>
     
        
        <!-- END INCLUDE -->