 <?php require_once('inc/header.inc'); ?> 

<script>$('#newsnav').addClass('active');</script>
    
<script>
		// http://ideajam.net/ideajam/p/ij.nsf/jsonGetRecentComments
		// http://api.jquery.com/jquery.getjson/
		
		$(document).ready(function(){
			var comments = '<ul class="content" id="ideajamcomments">';
            
            // Get API URL
			var ideajam_api = "http://ideajam.net/ideajam/p/ij.nsf/jsonGetRecentComments";
            var ideaspaces_api = 'http://ideajam.net/ideajam/p/ij.nsf/jsonGetIdeaSpaces';
            
//            GET RECENT COMMENTS
//       FIRST, inspect JSON object to change properties
			$.getJSON(ideajam_api,function(data){;
				$.each(data,function(key,val){
					for (var i=0 ; i < val.length; i++){
						   comments = comments + "<li><strong>" + val[i].createdby + "</strong><br/>Date Created: " + val[i].datecreated + "<br/><p> " + val[i].comment + "</p></li>";
						};
				}); // each
				
				comments = comments + "</ul>";
				$('body').append(comments);
				
			}); // end getjson			
		}); // end docready
    
 
	</script>
 
<div class="wrapper content">
    
    <h1>API Feed</h1>
    <h3><a href="http://www.ideajam.net">IdeaJam</a> Recent Comments</h3>
    
  
		</div>
 

</body>
 
</html>

