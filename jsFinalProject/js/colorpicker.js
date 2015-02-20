//written by Isobel Lennox

/* HTML example:

            <p class="customize">Customize Profile</p>
            <div class="customizeTools">
          
                
                <p>Background:</p>
                <select onchange="backgroundColor(this);">
 <option>-Select-</option>
  <option>Black</option>
  <option>White</option>
  <option>Lightblue</option>
</select> 
                
                  <p>Content Background:</p>
                <select onchange="backgroundColorFeed(this);">
 <option>-Select-</option>
  <option>Black</option>
  <option>White</option>
  <option>Lightblue</option>
</select> 
                
                  <p>Font color:</p>
                <select onchange="fontColorFeed(this);">
  <option>-Select-</option>
  <option>Black</option>
  <option>White</option>
  <option>Lightblue</option>
</select> 
                <br/>
                <button id="save">SAVE</button>
                <button id="cancel">CANCEL</button>
       
    </div><!-- end customize tools -->
    



Example CSS:

.customizeTools {
    height: 0px;
    visibility: collapse;
    z-index: 9999;
    position: relative;
    top:50px;  
}
.customizeTools button{margin-top: 25px; margin-right: 5px; float: left; padding: 5px; }

.customize {text-transform: uppercase; cursor: pointer;}



*/





 $(document).ready(function() {
           
           //show customize tools
           $('.customize').click(function(){
               showTools();  }
            );//end show customize toolsc
           
            //hide customize tools
           $('#cancel').click(function(){
               cancelTools();  }
            );//end hide customize tools
     
     
                 //save settings
           $('#save').click(function(){
               saveTools();  }
            );//end save
     
          //reset settings
           $('#reset').click(function(){
               resetTools();  }
            );//end reset
           
   function showTools(){
 
        //tools wrapper     
 $('.customizeTools').css(
    
		{
            height:'300px',
            visibility:'visible',
			 padding: '10px',
            position: 'relative',
            background: 'white',
            position: 'relative',
            borderRadius: '20px',
            width:'300px',
            margin:'0 auto'
             
		}		); // css
   }//end showTools
           
 
         
			
}); // end ready
        
      var defaultBackgroundColor ="#8AADB8";
      var defaultFontColor ="#000";
      var defaultFontSize ="16px";
        //define listValue?
    var cookieVal;
    var fontCookieVal;

function backgroundColor(selectTag) {
    var listValue = selectTag.options[selectTag.selectedIndex].text;
     $('body').css({'background':listValue});
    //setCookie("bcolor", listValue, 30);
    cookieVal=listValue;
    
     
}
        

            function fontColorFeed(selectTag) {
    var listValueFont = selectTag.options[selectTag.selectedIndex].text;
         $('body').css({'color':listValueFont});
                fontCookieVal=listValueFont;
}



//SET COOKIES: BIND TO BUTTONS
        
        //if cancel is selected, hide tools
        function cancelTools(){
            
                     //tools wrapper     
         $('#toolbox').css(
                {
                    height:'0px', 
                    visibility:'hidden',
                     padding: '0px' 
                }		); // css
            location.reload(); 
        } //end cancel tools


        //if save is selected, set cookie
        function saveTools(){
            setCookie("bcolor", cookieVal, 30);
            setCookie("tcolor", fontCookieVal, 30);
            setCookie("tsize", cookieFontSize, 30);
            
            
                     //tools wrapper     
         $('#toolbox').css(
                {
                    height:'0px', 
                    visibility:'hidden',
                     padding: '0px',
                    background: 'white'
                }		); // css
            location.reload();
        } //end save tools

        //if reset is selected, set cookie to default css
        function resetTools(){
            setCookie("bcolor", defaultBackgroundColor, 30);
            setCookie("tcolor", defaultFontColor, 30);
            setCookie("tsize", defaultFontSize, 30);
                     //tools wrapper     
         $('#toolbox').css(
                {
                    height:'0px', 
                    visibility:'hidden',
                     padding: '0px' 
                }		); // css
            location.reload();
        } //end save tools