 <?php require_once('inc/header.inc'); ?> 


<head> <link href="css/weather.css" rel="stylesheet" media="screen"></head>

    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/74196/jquery.velocity.min.js"></script> 


<!--


 Create a page that demonstrates the use of jQuery Ajax requests. More on this Week 9/10/11.


-->

<script>$('#ajaxnav').addClass('active');</script>


 <div class="content">

     
   <h1>Ajax Requests</h1> 
   
     
     
      <div class="whereami">
         <h2>Where am I?</h2>
    Simple ajax call to demonstrate how to get a client's location using <a href="http://developers.mercadolibre.com/api-directory/">MercadoLibre's Locations API</a>
    <br /><br />
    <input type='button' id='findme' value='Find me!'/>
    <br /><br />
    <div id='message'></div>
     </div><!--end whereami -->
     
     
     <div class="weatherapi">
         
         <h2>Check The Weather!</h2>
         <p>Animations with <a href="http://julian.com/research/velocity/">Velocity.js</a><br/>Weather data from <a href="http://openweathermap.org/API">the Open Weather Map API</a></p>
         
  <form class="weather group">
    <input type="text" class="location" placeholder="Enter a City.."/><button>Check The Weather</button>
   
  </form>
   <div class="weather-result group">
      <div class="loading">
        <p class="message"></p>
        <span class="loader"></span>
     </div>
     
      <div class="content">
        <div class="icon"></div>
        <h2 class="title"></h2>
        <p class="name"></p>
        <p class="temp" data-far=""></p>
        
        <p class="description"></p>
      </div>
      
    </div>
<!-- THIS WEATHER API WAS INSPIRED BY:
       
<a href="http://codepen.io/natewiley">Nate Wiley</a>

animations with <a href="http://julian.com/research/velocity/">Velocity.js</a>, weather data from <a href="http://openweathermap.org/API">the Open Weather Map API</a> 
-->
         
</div> <!-- end weatherapi -->
     
     

     
     
     <script>
         //WHERE AM I?
         
         $(document).on('ready', function() {
  //Call ajax and API
  $('#findme').on('click', function() {    
    $('#message').html('Loading...');    
      $.ajax( {
        url: "https://api.mercadolibre.com/geolocation/whereami",
        success: function(data) {
          var city = data.city_name;
          var country = data.country_name;
          $('#message').text("You are in " + city + ", " + country + '!');  
        }
      });
  }); //end find me
  
});//end ready
         
         
         
         
         //WEATHER API:
         
(function($, window){
  
  var weather = {
    init: function(){
      this.form = $(".weather");
      this.loc = $(".location");
      this.icon = $(".icon");
      this.temp = $(".temp");
      this.city = $(".name");
      this.weather = $(".title");
      this.desc = $(".description");
      this.message = $(".message");
      this.loader = $(".loader");
      this.loadingBox = $(".loading");
      this.currentCity = null;
      // maps api weather codes to icon font 
      this.icons = {
        "01d": "B",
        "01n": "C",
        
        "02d": "H",
        "02n": "I",
        
        "03d": "N",
        "03n": "N",
        
        "04d": "Y",
        "04n": "Y",
        
        "09d": "Q",
        "09n": "Q",
        
        "10d": "R",
        "10n": "R",
        
        "11d": "0",
        "11n": "0",
        
        "13d": "W",
        "13n": "W",
        
        "50d": "J",
        "50n": "K",
      };
      this.binding();
    },
    
    binding: function(){
      this.form.on("submit", $.proxy(this.formSubmit, this));
    },
    
    formSubmit: function(e){
      if(this.loc.val() && this.loc.val() !== this.currentCity){
        this.getWeather(this.loc.val());
      } else if(this.loc.val() == this.currentCity){
        $(".content").velocity({
          translateX: [-3, 3, 0],
          translate3d: 0
        }, {
          duration: 50,
          loop: 2
        });
      }
      e.preventDefault();
    },
    
    getWeather: function(loc){
      var city = encodeURIComponent(loc);
      this.currentCity = loc;
      this.loading();
      $.ajax({
        url: "http://api.openweathermap.org/data/2.5/weather?units=imperial&q=" + city,
        dataType: "json",
        success: $.proxy(this.showWeather, this)
      });
    },
    
    weatherData: function(data){
      if(data.name){
        return {
          name: data.name,
          lat: data.coord.lat,
          lon: data.coord.lon,
          weather: data.weather[0].main,
          weatherDesc: data.weather[0].description,
          temp: Math.round(data.main.temp),
          tempMax: data.main.temp_max,
          tempMin: data.main.temp_min,
          humidity: data.main.humidity,
          iconMap: data.weather[0].icon,
          wind: {
            deg: data.wind.deg,
            speed: data.wind.speed
          }
        }
      } else {
        return false;
      }
    },
    
    showWeather: function(data){
     var w = this.weatherData(data);
     if(w){
       this.icon.html(this.icons[w.iconMap]);
       this.city.html(w.name);
       this.temp.html(w.temp);
       this.temp.attr("data-far", "+");
       this.desc.html(w.weatherDesc);
       this.weather.html(w.weather);
       this.weatherChange();
     } else {
       this.cityNotFound();
     }
    },
    
    clearAll: function(){
      var els = ["temp", "city", "desc", "weather", "icon"];
      var i;
      for(i=0;i<els.length;i++){
        var s = els[i];
        this[s].velocity("stop");
        this[s].velocity({
          opacity: 0,
          translateY: [0, -50]
        },{
          display: "none",
          duration: 0
        });
      }
    },
    
    loading: function(){
      this.clearAll();
      this.message.html("Checking the weather for: <em>" + this.currentCity) + "</em>";
      this.message.velocity({
        translateY: [20, 0],
        opacity: 1
      }, {
        display: "block",
        duration: 1000
      });
      
      this.loader.velocity({
        translateY: [40, 10],
        translateX: [0, 1000],
        opacity: 1,
      }, {
        display: "inline-block",
        duration: 750
      }).velocity({
        rotateZ: [-540, 0],
        easing: "linear"
      }, {
        loop: 10,
        delay: 250,
        duration: 3000
      });
    },
    
    cityNotFound: function(){
      this.message.html("No weather data found for <em>" + this.currentCity + "</em>, please try a different city.");
      this.loader.velocity("stop");
      this.loader.velocity({
        opacity: 0,
        translateX: 1000
      }, {
        duration: 1000,
        display: "none"
      })
    },
    
    weatherChange: function(){
     this.message.velocity("stop");
     this.message.velocity({
       translateY: 0,
       opacity: 0,
     }, {
       display: "none",
       duration: 0,
     });
     this.loader.velocity("stop");
     this.loader.velocity({
       translateY: 0,
       opacity: 0
      }, {
        display: "none",
        delay: 0,
        duration: 0,
        complete: function(){
          var w = weather;
          w.icon.velocity({
            opacity: 1,
            translateX: [0, 25],
            
          }, {
            display: "block",
            duration: 600,
            
          });
          w.city.velocity({
            opacity: [1, 0],
            translateX: [0, 300]
            
          }, {
            duration: 800,
            display: "block"
          });
          w.weather.velocity({
            opacity: [1,0],
            translateY: [0, 100]
          }, {
            duration: 600,
            display: "block"
          });
          
          w.desc.velocity({
            opacity: [1, 0],
            translateX: [0, -100]
          }, {
            duration: 600,
            delay: 600,
            display: "block"
          });
          
          w.temp.velocity({
            opacity: 1,
            translateY: [0, -20]
          }, {
            display: "inline-block",
            duration: 600,
            delay: 400
          });
        }
      });
      
    },
    
   
  }; // end weather {}
  
  
  weather.init();
  
})(jQuery, window);
     
     </script>
     
     
     
</div><!-- end content -->
 <?php require_once('inc/footer.inc'); ?> 
