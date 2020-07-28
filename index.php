<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>The Alley Cats</title>
  <link rel="icon" href="images/paw.svg" type="image/png" />
  <!-- Milligram and dependencies-->
  <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic|Miltonian" />
  <link rel="stylesheet" href="normalize.css" />
  <link rel="stylesheet" href="milligram.min.css" />
  <!-- Custom code-->
  <link rel="stylesheet" href="alleycats.css" />
  <!-- Fancybox -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
  <!--Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />

</head>

<body>

  <div id="background-container">
    <div id="stars"></div>
    <div id="clouds"></div>
  </div> <!-- end background container -->

  <div class="container">

    <?php include 'nav.php';?>

    <main id="content" class="row transition-fade">


      <div class="column ">
        <section id="home" class="row">
          <div id="home-left" class="column">
            <h1>The Alley Cats</h1>
            <div class="divider"><img src="images/dividers/divider.png" alt="" /></div>
            <p>
              Seven-piece modern jazz band performing fresh, fun and modern
              arrangements of well-known tunes from classic children's films,
              TV themes, Disney, nursery rhymes and more!
            </p>
          </div>
          <div id="home-right">
            <!-- This isn't a column, so the div just fits the image. It does NOT flex to take up spare space shared with left-hand side -->
            <img id="alley-cats" src="images/alley-cats-web.jpg" alt="The Alley Cats" />
          </div>
        </section>
      </div>
      <!--end column-->
    </main>
    <!--end content row-->

    <?php include 'footer.php';?>

  </div>
  <!--end container-->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

  <script>
    $('[data-fancybox]').fancybox({
      buttons: [
        "zoom",
        "close",
      ],
      loop: true,
    });
  </script>

  <?php
     // require_once('/public/home/awa21/public_html/alleycats/owa/owa_php.php');
     // $owa = new owa_php();
     // $owa->setSiteId('b7a9cffaec5fcd59b41880c3be77209d');
     // $owa->setPageTitle('Home');
     // $owa->trackPageView();
    ?>

  <script src="https://cdn.jsdelivr.net/npm/pjax@latest/pjax.min.js"></script>  
  <script src="alleycats-pjax.js"></script>



</body>

</html>