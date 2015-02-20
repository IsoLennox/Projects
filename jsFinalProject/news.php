 <?php require_once('inc/header.inc'); ?> 


<!--  NOT DOING THIS PAGE!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

WHY?  because my RSS feed page also uses a "dashboard" feature that auto rotates. 

Instructions for this page:

  Dashboard Of News

Create a page that has a dashboard of news. Use ARRAYS to store the news data and use intervals to swap out news stories every 60 seconds. Have at least two blocks that get updated. 

-->

<script>$('#newsnav').addClass('active');</script>

<script>

// PUT API into ARRAY???
    
    $(document).ready(function(){
			var articles = '<div class="content">';
            
            // Get API URL

       var news_api ='http://api.feedzilla.com/v1/articles.json';
        
        
   
            // Feedzilla NEWS API
        
            /*
    Perameters:
        "publish_date",
         "source",
         "source_url",
         "summary",
         "title",
         "url"
         
         */

        
			$.getJSON(news_api,function(data){;
				$.each(data,function(key,val){
                    
                    //only show 3
					for (var i=0 ; i < 3; i++){
                        
						   articles = articles + "<div class='article'><strong><a href='"+ val[i].url +"'>" + val[i].title + "</a></strong></div><br/>"+ val[i].summary;
                        
                          
						};
				}); // each
				
				articles = articles + "</content>";
				$('body').append(articles);
				
			}); // end getjson			
		}); // end docready
    

</script>

 
 

 
 <?php require_once('inc/footer.inc'); ?> 

