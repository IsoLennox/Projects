 <?php require_once('inc/header.inc'); ?> 

<!--

Instructions for this page:


(completed)
Create a page that utilizes Google Maps using the .goMap() jQuery plugin. Have at least 4 markers on the page along with some marker popups.

-->
 
 
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/jquery.gomap-1.3.2.min.js"></script>
 

<script>$('#mapnav').addClass('active');</script>

    
<script>
    
 /*-- search results only show "only shows ozolciema iedla" */
    //UPDATE AND REMOVE DATA FROM MAP TO ENABLE SEARCH
    function updateMap(queryAddress){
        $('#map').removeData();
            $('#map').goMap({
                address: queryAddress,
                zoom: 18,
                maptype: 'HYBRID'
            });
    }//end update map
    
 
$(document).ready(function() {
    
    //SEARCH FUNCTION
    $('#query').submit(function(){
        var queryAddress=$('#address').val();
        updateMap(queryAddress);
        //make sure submit doesn't refresh page
        return false;
    });//end search
  
    
    //DEFAULT MAP
//with markers object array   
    $('#map').goMap({
zoom:12,
    markers:[
        {
    address: '1818 e fourth plain blvd vancouver,wa,USA', 
     title: "Isobels House",
        html:"<h2>Our House: In the middle of the street</h2><p>Home of the Izzy</p>"
    },
        {
    address: "1933 fort vancouver way vancouver,WA,USA", 
     title: "Clark College",
        html:"<h2>Clark College</h2><p>Home of the Brucie</p><img src='https://pbs.twimg.com/profile_images/1241409270/Attitude_Penguin_normal.png'>"
        },
        {
    address: "Vancouver Mall", 
     title: "Vancouver Mall",
        html:"<h2>Vancouver Mall</h2>"
        },
        {
    address: "Esther short park", 
     title: "Esther short park",
        html:"<h2>Esther short park</h2><p>In the heart of downtown Vancouver, WA</p>"
        }  
    ] //end markers
}); // end goMap
    
 
}); // end ready
</script>
  
     
  <div class="content">
    
    
 
	<div class="content">
		<div class="main">
			<h1>Google Maps</h1>
            
       <!--     <form method="post" action="#" id="query">
            
                <input type="text" id="search" placeholder="Type in an address to find on map">
                <input type="submit" value="Search" >
            </form>-->
            
            <br/>
            
		    <div id="map"></div> 
		</div>
	</div>
 
 
     
</div><!-- end content -->
 

 <?php require_once('inc/footer.inc'); ?> 

