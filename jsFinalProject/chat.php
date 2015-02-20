 <?php require_once('inc/header.inc'); ?> 

    <head> <link href="css/chat.css" rel="stylesheet" media="screen">
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
        </head>
    
   
        
        
        <script>$(document).ready(function(){
  $('button').click(function(){
    var value = $('textarea.message').val();
    if(value != ''){
      var message = $('li.message').first().clone();
      $(message).find('p.text').html(value);
      $('ul.messages').append(message);
      $('textarea.message').val('');
      $('html, body').animate({ scrollTop: $(document).height() }, 700);
      $('textarea.message').removeClass('required');
    } else {
      $('textarea.message').addClass('required');
    }
  });
});</script>
        

<h1 class="title">Simple Responsive Chat / Messenger</h1>
<p class="description"><em>Go ahead and add a message.</em></p>
<ul class="messages">
  <li class="message">
    <h1 class="name">Chris Hutchinson</h1><img src="http://lorempixel.com/200/200" class="user"/>
    <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus porta condimentum ante id tristique. Nulla eget vestibulum dolor.</p>
  </li>
  <li class="message">
    <h1 class="name">Nic Cage</h1><img src="http://lorempixel.com/210/210" class="user"/>
    <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus porta condimentum ante id tristique. Nulla eget vestibulum dolor.</p>
  </li>
</ul>
<textarea placeholder="Your message..." class="message"></textarea>
<div class="actions">
  <button>Send</button>
</div>

 <?php require_once('inc/footer.inc'); ?> 
