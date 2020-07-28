<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>The Alley Cats: About the band</title>
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
        
        <section id="about">

          <img src="images/about.jpg" class="banner-photo" alt="The Alley Cats at Storey's Field Centre" />
          <div class="photo-credit right">Trevor Lee Photography</div>

          <h2>About the band</h2>

          <h3>A nostalgic musical treat for all ages!</h3>

          <p>The Alley Cats are a seven-piece jazz band based in Cambridge.
            We play fun, original arrangements of well-known tunes from classic children's films, TV themes, Disney,
            nursery rhymes and more.
            From swing to salsa to samba, funk, ska and reggae!</p>

          <p>Our music is appealing to all ages and we can adapt our set and our band to suit the occasion.
            Get ready to tap your feet to songs from <em>The Jungle Book</em> and <em>Mary Poppins</em>, cartoons such
            as <em>Popeye</em> and <em>Top Cat</em>,
            and retro TV themes including <em>Bewitched</em> and <em>I Dream of Jeannie</em>.
            Other favourites include songs from childhood films like <em>Willy Wonka and the Chocolate Factory</em>,
            <em>Dumbo</em>, <em>Aladdin</em> and <em>The Wizard of Oz</em> to name just a few!
            We usually have colouring in activities on-hand and a dressing up box to for our younger audience members.
          </p>

          <p>We can play as a full band for larger events or scale back to a smaller band with percussion for smaller
            venues. </p>



          <div class="divider"><img src="images/dividers/divider.png" alt="" /></div>



          <div class="card">

            <div id="history" class="card-photo-left">
              <img src="images/history.jpg" alt="Wolf head on double bass" /> </a>
              <div class="photo-credit">Dominikas &Zcaron;alys</div>
            </div>

            <div class="card-text">
              <h3>History</h3>
              <p>
                The Alley Cats grew out of a band that was put together to play at the East Anglia Children’s Hospice in
                Milton.
                It was a great success, and so the idea for a family-friendly band playing much-loved songs from films
                and TV was born.
                We are proud to continue supporting EACH when we can.
              </p>


              <p>
                The band is led by Vicki Kenny, who is a music therapist, educator and jazz musician. She has worked for
                many years with children teaching jazz and improvisation. Her passion is music and performing,and
                introducing jazz to a younger audience.
              </p>


              <p>
                We have performed in and around Cambridge, at a number of family events, festivals and jazz venues.
                Highlights include the 2019 Cambridge International Jazz Festival, Cambridge City Council's annual
                Mayor's Day Out, and the Cambridge Jazz and Brass in the Parks programme with special guest and BBC
                multi award-winning Saxophonist, Alan Barnes.
              </p>


              <p>
                With an eye to the future, the band are excited to be able to work with top trombonist Dennis Rollins
                MBE at this year's 2019 Cambridge International Jazz Festival.
              </p>


            </div>

          </div> <!-- end card -->

          <div class="divider"><img src="images/dividers/divider2.png" alt="" /></div>


          <div class="card">



            <div class="card-text">
              <h3>Testimonials</h3>
              <blockquote>
                <p><em>The wonderful Alley Cats performed at my family birthday celebration and were a fantastic
                    success!
                    They are a musically talented and professional group who will make any party go with a swing!
                    The great tunes were appreciated by young and old alike. Thank you Alley Cats!</em></p>
                <p class="testimonial-credit">&mdash; Jo Tomlinson</p>
              </blockquote>
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
     // $owa->setPageTitle('About');
     // $owa->trackPageView();
    ?>

  <script src="https://cdn.jsdelivr.net/npm/pjax@latest/pjax.min.js"></script>  
  <script src="alleycats-pjax.js"></script>


</body>

</html>