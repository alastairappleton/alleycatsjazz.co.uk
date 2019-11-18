<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>The Alley Cats: Contact us</title>
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
  <link href="fonts/fontawesome/css/all.min.css" rel="stylesheet" />

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
        
     <section id="contact">


          <div class="card">



            <div class="card-text">

              <h2>Contact us</h2>
              <p>We are based in Cambridge, and can travel within the south-east of England to play at your event.</p>

              <p>To learn more about the Alley Cats, or to book us, please <a
                  href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#118;&#105;&#99;&#107;&#105;&#95;&#107;&#101;&#110;&#110;&#121;&#64;&#104;&#111;&#116;&#109;&#97;&#105;&#108;&#46;&#99;&#111;&#109;">email
                  Vicki Kenny</a></p>

              <p></p>We look forward to hearing from you!</p>

            </div>

            <div id="contact" class="card-photo-right">
              <img src="images/contact.jpg" alt="Keyboard and headphones" />
            </div>

          </div> <!-- end card -->

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
     // $owa->setPageTitle('Contact');
     // $owa->trackPageView();
    ?>

  <script src="https://cdn.jsdelivr.net/npm/pjax@latest/pjax.min.js"></script>  
  <script src="alleycats-pjax.js"></script>

</body>

</html>