
        //Bruce is hidden as z-index 1 under image w zindex2
        
        // Bruce: move into doorway using animate 
        $('#bruce').animate({left: '-=70px'},2000,
            //use .css() to change z-index
                            function(){$('#bruce').css({'z-index' : '3'}); });
        
        //Then make bruce appear larger by changing css attributes while he moves into 'room'
        $('#bruce').animate({left: '+=350px', width: '120px', height: '390px', top: '100px'},5000, function(){
                            
        //Now, bring up speech bubbles, change bruces picture, and replace text in speach bubble
        
        //fade in speech bubble
        $('#caption1').fadeIn(300).delay(2500).delay(2000, function(){
            //replace captions and img of bruce
            $('#bruce').attr('src','img/pleasehold.png');
            $('#caption1').fadeIn(500).html("<p>Please Hold.</p>");
        
            
            // Animate mr. Baldwin
            $('#mrbaldwin').delay(500).animate({left: '-=70px'},2000,function(){
         $('#mrbaldwin').delay(1000).animate({left: '+=70px'},2000);
                
                //play again?
                function infiniteFader(){
        $('#pageRefresh').fadeOut(800);
        $('#pageRefresh').fadeIn(800);
        
        
    }
        var interval2 = setInterval(infiniteFader, 200);
         $('#pageRefresh').delay(3000).fadeIn(1000,infiniteFader);
         })
        
        }); //end speech bubbles
        
        
        }
        ); // End bruce animate into room
        
        
    
        
             //Image array for carousel on projectors

        var images = new Array("img/slide1.jpg", "img/slide2.jpg", "img/slide3.jpg", "img/slide4.jpg");

        //set i to 1 outside of function
        var i = 1;
        


        /*************jQuery***********************/

        //image carousel for projectors   
        function rotateImg() {
            
               
                    
                   
                    //create an array slot for the img src to be iterated through 
                    $("#slide1, #slide2").attr('src', images[i]);
                     
                   
                    //increase images[i]
                    i++;

                    //wash rinse and repeat
                    if (i >= images.length) {
                        i = 0;
                    } //end if
                      
            } //end rotate
        
        //interval for slideshow
        var interval = setInterval(rotateImg, 3000);
         
       
