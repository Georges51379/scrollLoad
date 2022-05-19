<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Content Load on Scroll</title>
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body>

    <section>
      <h1>first section</h1>
    </section>

    <section>
      <div class="container reveal">
        <h2>Gaming banners</h2>
        <div class="cards">
          <img src="img/onlinead.png"/>
        </div><!--END CARD-->
      </div>
    </section>

    <section>
      <div class="container reveal">
        <h2>player unknown battleGround</h2>
        <div class="cards">
          <img src="img/pubg.png"/>
        </div>
      </div>
    </section>

    <section>
      <div class="container reveal">
        <h2>another gaming banner</h2>
        <div class="cards">
          <img src="img/akon.png"/>
        </div>
      </div>
    </section>

    <script type="text/javascript">
    window.addEventListener('scroll', reveal);

    function reveal(){
      var reveals = document.querySelectorAll('.reveal');

      for(var i = 0; i < reveals.length; i++){

        var windowheight = window.innerHeight;
        var revealtop = reveals[i].getBoundingClientRect().top;
        var revealpoint = 150;

        if(revealtop < windowheight - revealpoint){
          reveals[i].classList.add('active');
        }
        else{
          reveals[i].classList.remove('active');
        }
      }
    }
    </script>

  </body>
</html>
