<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Zeneron</title>
    <link rel="stylesheet" href="css/foundation.css" />
     <link rel="stylesheet" href="css/main.css" />
       <link rel="stylesheet" href="css/menu.css" />
    <script src="js/vendor/modernizr.js"></script>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation/foundation.js"></script>
    <link rel="stylesheet" href="font-awesome-4.0.3/css/font-awesome.min.css">

     <script src="js/jquery-migrate-1.1.1.js"></script>
     <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-48998352-1', 'zeneron.com');
  ga('send', 'pageview');

</script>

 <style>
    .google-maps {
        position: relative;
        padding-bottom: 75%; // This is the aspect ratio
        height: 0;
        overflow: hidden;
        margin: 0 0 30px;
    
    }
    .google-maps iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100% !important;
        height: 100% !important;
    }
</style>
   
  
  </head>

  <body>
    <!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-TMHTQB"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TMHTQB');</script>
<!-- End Google Tag Manager -->
   
<header>
  
           

                    <nav class="hide-for-small">
                      <div class="row">
                        <div class="large-4 medium-4 columns">
                      <h1>
                            <a href="home.html"><img src="img/logo1.png" title="ZENERON" alt="ZENERON" width="260px"/>
                            </a>
                          </h1>
                        </div>
                        <div class="large-8  medium-8 columns">
                        <ul class="menu right">
                              
                            <li><a href="home.html">Product</a></li>
                            <li><a href="Instruction.html">Instruction</a></li>
                            <li><a href="About.html">About Zeneron</a></li>
                            <li><a class="active" href="Contact.html">Support</a></li>
                        </ul>
                        </div> 
                      </div>
                    </nav>
   

       

              
      <!-- Navigation -->
  <div class="contain-to-grid">
  <nav class="top-bar show-for-small" data-topbar>
    <ul class="title-area">
      <!-- Title Area -->
      <li class="name">
        <h1>
          <a href="home.html"><img src="img/logo1.png" title="Zeneron" alt="Zeneron" width="160px"/>
          </a>
        </h1>
      </li>
      <li class="toggle-topbar menu-icon"><a href="#"></a></li>
    </ul>
 
    <section class="top-bar-section">
      <!-- Right Nav Section -->
     


      <ul class="right">
        <li class="divider"></li>
        <li> <a href="home.html">Product</a></li>
        <li class="divider"></li>
        <li><a  href="Instruction.html">Instruction</a></li>
        <li class="divider"></li>
        <li><a href="About.html">About Zeneron</a></li>
        <li class="divider"></li>
         <li><a class="active" href="Contact.html">Support</a></li>
      </ul>
    </section>
  </nav>
</div>
 
  <!-- End Top Bar -->

            
    
      
    </header>
 <!-- End Top Bar -->

 <div class="row search">
    <div class="large-6 columns">
      <h3 style="color:#fff;  font-family: 'Kannada MN';">The Map</h3>
      <div class="google-maps">
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25231.231811960806!2d-122.42318873823389!3d37.76884967044639!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808f7e1e624c6b5b%3A0x6b1c0118959b3e39!2s235+Church+St!5e0!3m2!1sen!2sus!4v1394369426920" width="600" height="450" frameborder="0" style="border:double"></iframe>
      </div>

    </div>



 <div class="large-6 columns">
   <h3 style="color:#fff;  font-family: 'Kannada MN'; ">Contact Form</h3>
      <br>

<?php 
$action=$_REQUEST['action']; 
if ($action=="")    /* display the contact form */ 
    { 
    ?> 
    <form  action="" method="POST" enctype="multipart/form-data"> 
    <input type="hidden" name="action" value="submit"> 
    Your name:<br> 
    <input name="name" type="text" value="" size="30"/><br> 
    Your email:<br> 
    <input name="email" type="text" value="" size="30"/><br> 
    Your message:<br> 
    <textarea name="message" rows="7" cols="30"></textarea><br> 
    <input type="submit" value="Send email"/> 
    </form> 
    <?php 
    }  
else                /* send the submitted data */ 
    { 
    $name=$_REQUEST['name']; 
    $email=$_REQUEST['email']; 
    $message=$_REQUEST['message']; 
    if (($name=="")||($email=="")||($message=="")) 
        { 
        echo "All fields are required, please fill the form again."; 
        }
    else{         
        $from="From: $email"; 
        $subject="Message sent using your contact form"; 
        mail("n.oreshkin@gmail.com", $subject, $message, $from); 
        echo "Email sent!"; 
        } 
    }   
?> 





   <!--    
       <form action="sendmail.php" method="get" id="fname">
            <input class="search__input" type="text" title="Enter Your Name:" placeholder="&nbsp; Enter Your Name:" tabindex="1" name="fname"/>
             <input class="search__input" type="text" title="Enter Your Email:" placeholder="&nbsp; Enter Your Email:" tabindex="1" name="email"/>
            <textarea class="search__input" type="text" title="Enter Your Message:"  placeholder="Enter your message here:" name="message" id="ftext"></textarea> <br> 
             <div class="clear"></div>
                <div class="buttons">
                    <a class="button-1" href="#" onClick="document.getElementById('fname').reset()">Clear</a>
                    <a class="button-1" onClick="document.getElementById('fname').submit()">Send</a>
                </div> 
        </form> -->
      </div>   
     </div>





    <!-- Footer -->
 

    <footer class="footer">
  
       <div class="row">
        <div class="large-12 columns"><br>
            <div class="row ">
 
              <div class="large-4 medium-4 columns">
            

 
      <ul class="box1">

                <h4>Working Hours</h4>    
            <li>Monday to Friday - 9am to 7pm</li>
             <li>Saturday - 10am to 6pm</li>
             <li>Sunday - 10am to 5am</li>
        
</ul>   
  
               
              </div>
 
              <div class="large-4 medium-4 columns">
           
                  <ul class="box1">
                     <h4 >Location</h4> 
                        <li> 235 Church St.</li>
                        <li class="locality">San Francisco, CA, 94114</li>
              
                           <li> Tel.: (415) 7676 111</li>
             
                   
                  </ul>   
              </div>
                 
               <div class="large-4 medium-4 columns">
              
                 
    <ul class="box1">
                         <h4>Contacts</h4> 
                  
                          <li> Tel.: (415) 7676 111</li>
                          <li class="email"><a href="mailto:zeneronlabs@gmail.com">zeneronlabs@gmail.com</a></li>
                          <li class="email"><a href="mailto:zeneronlabs@yahoo.com">zeneronlabs@yahoo.com</a></li>
                   
                  </ul>  
              </div>
               
 
            </div>
             <div class="socials">
                <a href="https://www.twitter.com/"><i class="fa fa-twitter"></i></a>
                <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                <a href="https://plus.google.com/"><i class="fa fa-google-plus"></i></a>
                <a href="https://www.pinterest.com/"><i class="fa fa-pinterest"></i></a>

    </div>
        </div>
       
</div>
      </footer>
 
    <!-- End Footer -->

 
  <script>
  document.write('<script src=js/vendor/' +
  ('__proto__' in {} ? 'zepto' : 'jquery') +
  '.js><\/script>')
  </script>
  <script src="js/foundation.min.js"></script>
  <script>
    $(document).foundation();
  </script>

  </body>
</html>
