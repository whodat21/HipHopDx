<!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <link rel="stylesheet" href="master.css">
     <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script>
      $(window).on('load', function(){
        $('.left').animate({left: '-50%'},"slow")
          $('.right').animate({right: '-50%'},"slow")
      })
       </script>
 </head>
<body>
      <div class="left"></div>
      <div class="right"></div>
        <div class="videoint">
        <div class="video">
          <video class="media" src="video/welcome.mp4" autoplay muted></video>
        </div>
        <form class="" action="checkAge.php" method="post">
        <div class="content">
          <div class="container2">
            <h1>Welcome to HIP-HOP NEWS</h1>
          </div>
          <div class="container">
              <br>
              <label for="checkbox" style="color: snow">I AM ALREADY 18 YEARS OLD</label>
                <input type="checkbox" class="checkmark" name="age" value=""><br>
              <button type="submit" name="button1" >Start</button><br>
          </div>
        </div>
        </form>
        </div>
  </body>

</html>

