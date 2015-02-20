 <?php require_once('inc/header.inc'); ?> 


<!--


    Create a page (or incorporate on another page) that contains no less than three RSS feeds on it. 

Use the ZRSS jQuery plugin (Links to an external site.) to do this. 

To learn more about RSS feeds and what they are visit this page: 

http://en.wikipedia.org/wiki/RSS_feed 

-->

<!-- add current page marker to nav-->
<script>$('#newsnav').addClass('active');</script>


   <!--  // ZRSS plugin:-->
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="ZRSSfeed/jquery.zrssfeed.min.js" type="text/javascript"></script>
 

<!-- Zazar Presentation Framework -->
<script src="http://admin.zazar.net/__system/_js/zframework/jquery.zframework.js" type="text/javascript"></script>




<script>
    
    // from: http://www.zazar.net/developers/jquery/zrssfeed/example.html
     
$(document).ready(function () {
    
    
    //oddly enough news
  $('#oddlynews').rssfeed('http://feeds.reuters.com/reuters/oddlyEnoughNews', {
    limit: 5
  }); //end oddly enough news
    
    
    // Reddit news
  $('#redditnews').rssfeed('http://www.reddit.com/r/news/.rss', {
    limit: 5
  }); //end Reddit news
    
    // NYT Tech news
  $('#nytnews').rssfeed('http://feeds.nytimes.com/nyt/rss/Technology', {
    limit: 5
  }); //end NYT tech news
    
    
    
    //SLIDER! animated RSS
    
    //oddly news
    	$('#zslider').rssfeed('http://feeds.reuters.com/reuters/oddlyEnoughNews',{
		header: false,
		titletag: 'div',
		date: false,
		content: false,
		limit: 5
	}, function(e) {
		$.zazar.slider({selector: '#zslider ul'});
	}); // end oddly news animated
    
    
        //Reddit news
    	$('#redditslider').rssfeed('http://www.reddit.com/r/news/.rss',{
		header: false,
		titletag: 'div',
		date: false,
		content: false,
		limit: 5
	}, function(e) {
		$.zazar.slider({selector: '#redditslider ul'});
	}); // end reddit news animated
    
    //Reddit news
    	$('#nytslider').rssfeed('http://feeds.nytimes.com/nyt/rss/Technology',{
		header: false,
		titletag: 'div',
		date: false,
		content: false,
		limit: 5
	}, function(e) {
		$.zazar.slider({selector: '#nytslider ul'});
	}); // end reddit news animated
    
    
    
}); //end ready
    </script>

 





 <div class="content">
     
     <h1>RSS Feeds</h1>
     
     

     

     <div class="thirds">
     <!-- ODDLY ENOUGH NEWS -->
         
         <h2>ODDLY ENOUGH NEWS</h2>
<div id="zslider"></div>
     
   <div id="oddlynews" class="rssFeed">
  <div class="rssHeader">
    <a>... (heading) ...</a>
  </div>
  <div class="rssBody"></div>
    <ul>
      <li class="rssRow odd">
        <h4><a>... (title) ...</a></h4>
        <div>... (date) ...</div>
        <p>... (description) ...</p>
        <div class="rssMedia">
          <div>Media files</div>
          <ul>
            <li><a>... (media link) ...</a></li>
          </ul>
        </div>
      </li>
      <li class="rssRow even">...</li>
      ...
    </ul>
  </div>
     
      
     
</div> <!-- END THIRDS-->



     <div class="thirds">
     <!-- REDDIT NEWS
http://www.reddit.com/wiki/rss
http://www.reddit.com/r/news/.rss
-->
     
         
              <h2>REDDIT NEWS</h2>
<div id="redditslider"></div>
         
   <div id="redditnews" class="rssFeed">
  <div class="rssHeader">
    <a>... (heading) ...</a>
  </div>
  <div class="rssBody"></div>
    <ul>
      <li class="rssRow odd">
        <h4><a>... (title) ...</a></h4>
        <div>... (date) ...</div>
        <p>... (description) ...</p>
        <div class="rssMedia">
          <div>Media files</div>
          <ul>
            <li><a>... (media link) ...</a></li>
          </ul>
        </div>
      </li>
      <li class="rssRow even">...</li>
      ...
    </ul>
  </div>
</div> <!-- END THIRDS-->



     <div class="thirds">
     <!-- NY Times Technology NEWS -->
     
         
                  
              <h2>NYT TECH NEWS</h2>
<div id="nytslider"></div>
         
   <div id="nytnews" class="rssFeed">
  <div class="rssHeader">
    <a>... (heading) ...</a>
  </div>
  <div class="rssBody"></div>
    <ul>
      <li class="rssRow odd">
        <h4><a>... (title) ...</a></h4>
        <div>... (date) ...</div>
        <p>... (description) ...</p>
        <div class="rssMedia">
          <div>Media files</div>
          <ul>
            <li><a>... (media link) ...</a></li>
          </ul>
        </div>
      </li>
      <li class="rssRow even">...</li>
      ...
    </ul>
  </div>
</div> <!-- END THIRDS-->





</div> <!-- END CONTENT-->
     
     
     
     
</div><!-- end content -->

</body>
 
</html>
