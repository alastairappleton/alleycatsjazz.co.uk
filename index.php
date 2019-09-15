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
  <link href="fonts/fontawesome/css/all.min.css" rel="stylesheet" />

</head>

<body>

  <div id="background-container">
    <div id="stars"></div>
    <div id="clouds"></div>
  </div> <!-- end background container -->

  <div class="container">
    <nav id="navigation" class="row">
      <div class="column">
        <a href="#" onclick="toggle('home')"> Home </a>
      </div>
      <div class="column">
        <a href="#" onclick="toggle('about')"> About </a>
      </div>
      <div class="column">
        <a href="#" onclick="toggle('band')"> Band </a>
      </div>
      <div class="column">
        <a href="#" onclick="toggle('gigs')"> Gigs </a>
      </div>
      <div class="column">
        <a href="#" onclick="toggle('media')"> Media </a>
      </div>
      <div class="column">
        <a href="#" onclick="toggle('contact')"> Contact </a>
      </div>
    </nav> <!-- end row -->

    <div id="content" class="row">


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

        <section id="about" class="invisible">

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

        <section id="band" class="invisible">
          <h2>Meet the band</h2>

          <div class="card">

            <div id="vicki" class="card-photo-left">
              <a href="images/profiles/vicki.jpg" data-fancybox="people" data-caption="Vicki Kenny"><img
                  src="images/profiles/vicki.jpg" alt="Vicki Kenny" /></a>
              <div class="photo-credit">Trevor Lee Photography</div>
            </div>

            <div class="card-text">
              <h3>Vicki Kenny &mdash; piano</h3>
              <p>Vicki is a registered music therapist, jazz pianist and educator. She is band leader for The Alley
                Cats, a project set up to bring jazz to people of all ages. Vicki performs jazz regularly in and around
                Cambridge. She is the pianist for Brazilian jazz group <em><a
                    href="https://coresdosamba.wixsite.com/brazil">Cores do Samba</a></em>, and plays regularly at
                The Ivy Restaurant with the <em>Cores do Samba</em> trio and at The Gonville Hotel as a duo for
                <em><a href="https://www.repmusic.co.uk/">repmusic</a></em>. </p>
              <p><a href="www.vickikenny.co.uk/">www.vickikenny.co.uk</a></p>
            </div>

          </div> <!-- end card -->

          <div class="divider"><img src="images/dividers/divider.png" alt="" /></div>

          <div class="card">

            <div id="alastair" class="card-photo-left">
              <a href="images/profiles/alastair.jpg" data-fancybox="people" data-caption="Alastair Appleton"> <img
                  src="images/profiles/alastair.jpg" alt="Alastair Appleton" /> </a>
              <div class="photo-credit">Trevor Lee Photography</div>
            </div>

            <div class="card-text">
              <h3>Alastair Appleton &mdash; saxophone</h3>
              <p>Alastair works for the University as a software developer, and is a keen jazz saxophonist in his spare
                time.</p>
              <p>Alongside the Alley Cats, Alastair performs with <em><a
                    href="https://www.irokoband.co.uk">Iroko</a></em>
                &mdash;
                a
                drum-led fusion group playing classic Afrobeat music, original compositions, and reinterpretations of
                jazz
                standards superimposed on rhythms from around Africa and South America.</p>
              <p>He is a member of <em><a href="http://www.betterthantv.co.uk/">Better Than TV</a></em>, a modern jazz
                group
                which
                draws on a wide range of styles and influences, and explores eclectic and novel instrumentation.</p>
              <p>Alastair also does occasional ad-hoc work in various small groups, performing at weddings and corporate
                functions, and he can often be found down one of the local jazz jam sessions.</p>
              <a href="https://www.alastairappleton.com">www.alastairappleton.com</a>
            </div>

          </div> <!-- end card -->


          <div class="divider"><img src="images/dividers/divider2.png" alt="" /></div>


          <div class="card">

            <div id="simon" class="card-photo-left">
              <a href="images/profiles/simon.jpg" data-fancybox="people" data-caption="Simon Fothergill"><img
                  src="images/profiles/simon.jpg" alt="Simon Fothergill" /></a>
              <div class="photo-credit">Trevor Lee Photography</div>
            </div>

            <div class="card-text">
              <h3>Simon Fothergill &mdash; trombone</h3>

              <p>
                Simon loves to add to the beauty of the world, through music. He plays trombone in
                Cambridgeshire, Suffolk and London, as well as piano, ukulele, recorder and occasionally didgeridoo! He
                has eclectic tastes, but loves all sorts of jazz and especially dixieland, as well as folk music and of
                course Disney! He also composes, arranges and leads community rehearsals.
              </p>

              <p>
                He is privileged to play alongside some wonderful and incredible musicians, in serendipitous ensembles
                and
                jam sessions, as well as in a number of regular groups besides the Alley Cats: <em>
                  <a href="http://www.harmonyinharlem.co.uk/">Harmony in Harlem</a>
                </em>
                play Michael Kilpatrick's erudite transcriptions of Duke Ellington's big band
                repertoire; <em><a href="http://www.betterthantv.co.uk/">Better Than TV</a></em>, led by Sergio
                Contrino, has to
                be heard to fully appreciate is unique blend of
                Latin, classical and funk and is <a
                  href="https://open.spotify.com/artist/5ADQWx1XOm5YwENg7ioBWO">available on Spotify</a>! Martin Kemp's
                <em>Mingusology</em> and <em>Organised Chaos</em> play
                beautiful jazz arrangements; Malcolm Talbot's <em>Big Brass</em> &mdash; a community big band &mdash;
                tells the
                story of jazz
                from the 1880s to the 1980s; and Simon's <em>Punting Players</em> is a community Christmas busking group
                who
                perform annually
                whilst punting down the Cam for charity.
              </p>

            </div>

          </div> <!-- end card -->

          <div class="divider"><img src="images/dividers/divider5.png" alt="" /></div>

          <div class="card">

            <div id="jane" class="card-photo-left">
              <a href="images/profiles/jane.jpg" data-fancybox="people" data-caption="Jane Hollingworth"><img
                  src="images/profiles/jane.jpg" alt="Jane Hollingworth" /></a>
              <div class="photo-credit">Trevor Lee Photography</div>
            </div>

            <div class="card-text">
              <h3>Jane Hollingworth &mdash; percussion</h3>
              <p>Jane Hollingworth learned to play drums from the age of 38 and has been playing ever since. She has led
                Brazilian and
                Haitian drum workshops since 1994 and plays congas, jazz drum kit and lately, trombone.</p>

              <p>Besides the Alley Cats, Jane plays drums in her afrobeat band, <a
                  href="https://www.irokoband.co.uk">Iroko</a>, and for several other jazz bands in Cambridge and
                Colchester, including
                <em>Blue Town</em>, <em>Jazz Galore</em>, <em>Brass Rose</em> and <em>Cambridge 251</em>. She plays
                trombone for the Norwich-based <em> Vibe City Street Brass </em> and for a big band in Cambridge, but
                her first love has always been congas. She loves Brazilian music &mdash; all
                Brazilian music &mdash; but particularly the ritual rhythms of the African diaspora. She has spent at
                least a month every year
                in Brazil for the past decade, sometimes working with music teachers in schools in the poorer areas of
                Rio Grande do Sul.</p>
            </div>

          </div> <!-- end card -->

          <div class="divider"><img src="images/dividers/divider.png" alt="" /></div>



          <div class="card">


            <div id="giulio" class="card-photo-left">
              <a href="images/profiles/giulio.jpg" data-fancybox="people" data-caption="Giulio Lampronti"><img
                  src="images/profiles/giulio.jpg" alt="Giulio Lampronti" /></a>
              <div class="photo-credit">Dominikas &Zcaron;alys</div>
            </div>

            <div class="card-text">
              <h3>Giulio Lampronti &mdash; bass</h3>
              <p>Upright and electric bassist and guitarist, Giulio Isacco Lampronti received a degree in jazz with full
                marks at the
                Conservatory "G.B. Martini" of Bologna (Italy) and also holds a PhD in Mineralogy. He's currently a
                research technician at the
                Department of Earth Sciences, University of Cambridge, but you'll also see him regularly play at many
                venues in Cambridge
                with <em><a href="https://coresdosamba.wixsite.com/brazil">Cores do Samba</a></em>, <em>The Andy Bowie
                  Quartet</em>, David Ellingham’s <em>Fromage &agrave;
                  Trois</em>, and <em>Rcubed</em>.</p>
            </div>

          </div> <!-- end card -->

          <div class="divider"><img src="images/dividers/divider2.png" alt="" /></div>

          <div class="card">

            <div id="ros" class="card-photo-left">
              <a href="images/profiles/ros.jpg" data-fancybox="people" data-caption="Ros Russell"><img
                  src="images/profiles/ros.jpg" alt="Ros Russell" /></a>
              <div class="photo-credit">Alison Kenny</div>
            </div>

            <div class="card-text">
              <h3>Ros Russell &mdash; vocals</h3>
              <p>Inspired by her dad's music collection and skiffle past (he played the washboard for <em>Les
                  Hobeaux</em> at the 2i's Coffee Bar in
                1950s Soho), Ros's love of jazz started in her early teens, listening to Ella Fitzgerald, Louis
                Armstrong, Fats
                Domino and Miles Davis amongst others.</p>

              <p>She regularly performs in many Cambridge venues with a wide range of jazz musicians. She has fronted
                her own project
                <em>Rcubed</em> and has performed in groups ranging from duos to full big bands. She is co-founder and
                director of the Cambridge International Jazz Festival, which is now approaching its 5th year.</p>

              <p>Ros holds a PhD in Molecular &amp; Computational Biology and has worked in several areas including
                immunology and cancer biology with various
                biotech companies.</p>
            </div>

          </div> <!-- end card -->

          <div class="divider"><img src="images/dividers/divider5.png" alt="" /></div>

          <div class="card">

            <div id="paul" class="card-photo-left">
              <a href="images/profiles/paul.jpg" data-fancybox="people" data-caption="Paul Stubbs"><img
                  src="images/profiles/paul.jpg" alt="Paul Stubbs" /></a>
              <div class="photo-credit">Trevor Lee Photography</div>
            </div>

            <div class="card-text">
              <h3>Paul Stubbs &mdash; trumpet</h3>
              <p>Paul was fourteen when he had his first professional engagement &mdash; a
                dance band performance at (what is now known as) Watford Colosseum.
                It was a long gig; it finished when he was fifteen, just after midnight!
                Since then, he has survived a three-decade career of small-group jazz,
                big bands, shows and pop functions.</p>
              <p>Notably, he made a live TV appearance on Channel 4's '<em>The Big Breakfast</em>'
                (on the day Jeffrey Archer was imprisoned for perjury!)
                A fluent improviser, his influences include Freddie Hubbard, Miles Davis
                and Willy Wonka&hellip; all of whom he thinks of as 'pure imagination'.</p>
            </div>

          </div> <!-- end card -->


        </section>

        <section id="gigs" class="invisible">
          <h2>Gigs</h2>
          <p>
            We perform in and around Cambridge, at a number of family events, local festivals and jazz venues. We also
            do community-based and charitable work with groups including the East Anglia Children's Hospice. Here are
            details of some of our upcoming and
            previous performances.
          </p>

          <h3>Upcoming gigs</h3>
          <table>
            <tbody>
              <tr>
                <td>16 November 2019</td>
                <td>
                  The Alley Cats <strong>with special guest Dennis Rollins</strong> at <a
                    href="https://www.cambridgejazzfestival.info/the-alley-cats"><em>
                      Cambridge International Jazz
                      Festival</em></a>. Storey's Field Centre, Cambridge.<br />
                  Live painting workshop with Gina Southgate at <em><a
                      href="https://www.facebook.com/events/399743357341209">Cambridge International Jazz
                      Festival</a></em>. Storey's Field Centre, Cambridge.
                </td>
              </tr>
            </tbody>
          </table>

          <div class="divider"><img src="images/dividers/divider.png" alt="" /></div>

          <h3>Previous gigs</h3>
          <table>
            <tbody>
              <tr>
                <td>August 2019</td>
                <td><a href="https://www.cambridgelive.org.uk/city-events/events/mayors-day-out-0"><em>
                      Cambridge City Council Mayor's Day
                      Out
                    </em></a>, Great Yarmouth.</td>
              </tr>
              <tr>
                <td>August 2019</td>
                <td>Private function. Wissington, Suffolk. </td>
              </tr>
              <tr>
                <td>June 2019</td>
                <td>Hot Numbers caf&eacute;, Cambridge.</td>
              </tr>
              <tr>
                <td>June 2019</td>
                <td>The <em>Wild Wood Rumpus</em> family festival, Linton.</td>
              </tr>
              <tr>
                <td>November 2018</td>
                <td><em>Cambridge International Jazz Festival</em>. Storey's Field Centre, Cambridge.</td>
              </tr>
              <tr>
                <td>September 2018</td>
                <td>The Alley Cats with special guest Alan Barnes. <em>Jazz and Brass in the Parks</em>, Cambridge.</td>
              </tr>
              <tr>
                <td>June 2018</td>
                <td><em>F&ecirc;te de la Musique</em>, Saffron Walden.</td>
              </tr>
              <tr>
                <td>April 2018</td>
                <td>Hot Numbers caf&eacute;, Cambridge.</td>
              </tr>
              <tr>
                <td>September 2017</td>
                <td>Charity fire walk and fundraising event for East Anglia Children's Hospice, Milton.</td>
              </tr>
              <tr>
                <td>September 2017</td>
                <td>Private function. Cambridge.</td>
              </tr>
              <tr>
                <td>August 2017</td>
                <td><em>EACHFEST</em>, East Anglia Children’s Hospice, Milton.</td>
              </tr>
              <tr>
                <td>July 2017</td>
                <td><em>WillowFest</em> family festival. The Willow Tree, Bourn.</td>
              </tr>
              <tr>
                <td>May 2017</td>
                <td>The Willow Tree, Bourn.</td>
              </tr>
              <tr>
                <td>March 2017</td>
                <td>Fundraising event for East Anglia Children's Hospice. Hot Numbers caf&eacute;, Cambridge.</td>
              </tr>
              <tr>
                <td>August 2016</td>
                <td><em>EACHFEST</em>, East Anglia Children’s Hospice, Milton.</td>
              </tr>


            </tbody>
          </table>

        </section>

        <section id="media" class="invisible">
          <h2>Media</h2>
          <h3>Watch</h3>
          <p>We recently recorded a new video at <a href="http://saltwellstudio.co.uk/">Saltwell Studio</a>, showcasing
            some of our best material. Check it out below, and give us a "like" on YouTube!</p>

          <div id="showreel">
            <iframe width="100%" height="400" src="https://www.youtube.com/embed/YhxU9_Cjo2Y" frameborder="0"
              allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>

          <div class="divider"><img src="images/dividers/divider.png" alt="" /></div>

          <h3>Listen</h3>
          <div class="row soundcloud">
            <div id="i-wanna-be-like-you" class="column">
              <iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay"
                src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/661309070&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
            </div>

            <div id="under-the-sea" class="column">
              <iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay"
                src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/661308227&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
            </div>

            <div id="when-i-see-an-elephant-fly" class="column">
              <iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay"
                src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/661310891&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
            </div>
          </div>

          <div class="divider"><img src="images/dividers/divider2.png" alt="" /></div>

          <h3>Gallery</h3>

          <div class="gallery">

            <a href="images/gallery/gallery001.jpg" data-fancybox="gallery"
              data-caption="(Credit: Dominikas &Zcaron;alys)">
              <img src="images/gallery/thumb001.jpg" alt="Mask and feathers" />
            </a>

            <a href="images/gallery/gallery003.jpg" data-fancybox="gallery"
              data-caption="Ros Russell (Credit: Dominikas &Zcaron;alys)">
              <img src="images/gallery/thumb003.jpg" alt="Ros Russell" />
            </a>

            <a href="images/gallery/gallery004.jpg" data-fancybox="gallery"
              data-caption="The Alley Cats at Hot Numbers (Credit: Dominikas &Zcaron;alys)">
              <img src="images/gallery/thumb004.jpg" alt="The Alley Cats at Hot Numbers" />
            </a>

            <div class="gallery-item">
              <a href="images/gallery/gallery005.jpg" data-fancybox="gallery"
                data-caption="(Credit: Dominikas &Zcaron;alys)">
                <img src="images/gallery/thumb005.jpg" alt="Playing drums at Hot Numbers" />
              </a>
            </div>

            <a href="images/gallery/gallery006.jpg" data-fancybox="gallery"
              data-caption="(Credit: Dominikas &Zcaron;alys)">
              <img src="images/gallery/thumb006.jpg" alt="Alley Cats sign and balloon" />
            </a>

            <a href="images/gallery/gallery008.jpg" data-fancybox="gallery"
              data-caption="(Credit: Dominikas &Zcaron;alys)">
              <img src="images/gallery/thumb008.jpg" alt="Colouring in" />
            </a>

            <a href="images/gallery/gallery009.jpg" data-fancybox="gallery" data-caption="">
              <img src="images/gallery/thumb009.jpg" alt="Stripy socks and shoes with red bows" />
            </a>

            <a href="images/gallery/gallery010.jpg" data-fancybox="gallery"
              data-caption="Paul Stubbs (Credit: Trevor Lee)">
              <img src="images/gallery/thumb010.jpg" alt="Paul Stubbs playing trumpet" />
            </a>

            <a href="images/gallery/gallery011.jpg" data-fancybox="gallery"
              data-caption="Ros Russell (Credit: Trevor Lee)">
              <img src="images/gallery/thumb011.jpg" alt="Ros Russell singing" />
            </a>

            <a href="images/gallery/gallery012.jpg" data-fancybox="gallery" data-caption="The King of the Swingers">
              <img src="images/gallery/thumb012.jpg" alt="Stripy monkey toy" />
            </a>

            <a href="images/gallery/gallery013.jpg" data-fancybox="gallery"
              data-caption="Giulio Lampronti at Saltwell Studio">
              <img src="images/gallery/thumb013.jpg" alt="Giulio Lampronti playing bass" />
            </a>

            <a href="images/gallery/gallery014.jpg" data-fancybox="gallery"
              data-caption="Joe Taylor at Saltwell Studio">
              <img src="images/gallery/thumb014.jpg" alt="Joe Taylor playing drums" />
            </a>

            <a href="images/gallery/gallery015.jpg" data-fancybox="gallery"
              data-caption="The Alley Cats at Saltwell Studio">
              <img src="images/gallery/thumb015.jpg" alt="The Alley Cats at Saltwell Studio" />
            </a>

            <a href="images/gallery/gallery016.jpg" data-fancybox="gallery"
              data-caption="Simon Fothergill at Saltwell Studio">
              <img src="images/gallery/thumb016.jpg" alt="Simon Fothergill at Saltwell Studio" />
            </a>

            <a href="images/gallery/gallery017.jpg" data-fancybox="gallery" data-caption="The Wild Wood Rumps">
              <img src="images/gallery/thumb017.jpg" alt="Chalk board sign at the Wild Wood Rumpus" />
            </a>

            <a href="images/gallery/gallery018.jpg" data-fancybox="gallery" data-caption="Jane Hollingworth">
              <img src="images/gallery/thumb018.jpg" alt="Jane Hollingworth at the Britannia Theatre" />
            </a>

            <a href="images/gallery/gallery019.jpg" data-fancybox="gallery"
              data-caption="Britannia Theatre, Great Yarmouth">
              <img src="images/gallery/thumb019.jpg" alt="The stage at the Britannia Theatre" />
            </a>

          </div>
        </section>

        <section id="contact" class="invisible">


          <div class="card">



            <div class="card-text">

              <h2>Contact</h2>
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
      <!--end content panel-->
    </div>
    <!--end row (for content panel)-->

    <footer id="footer">
      <div class="footer-item">
        <a href="https://www.facebook.com/alleycatsjazz" aria-label="The Alley Cats Facebook page"><i
            class="fab fa-facebook-f"></i></a>
      </div>
      <div class="footer-item">
        <a href="https://www.soundcloud.com/alleycatsjazz" aria-label="The Alley Cats SoundCloud page"><i
            class="fab fa-soundcloud"></i></a>
      </div>
      <div class="footer-item">
        <a href="https://www.instagram.com/alleycatsjazz/" aria-label="The Alley Cats Instagram feed"><i
            class="fab fa-instagram"></i></a>
      </div>
      <div class="footer-item">
        <a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#118;&#105;&#99;&#107;&#105;&#95;&#107;&#101;&#110;&#110;&#121;&#64;&#104;&#111;&#116;&#109;&#97;&#105;&#108;&#46;&#99;&#111;&#109;"
          aria-label="Email the Alley Cats"><i class="fas fa-envelope"></i></a>
      </div>
    </footer>
    <!-- end footer -->
  </div>
  <!--end container (was wrapper)-->

  <script src="alleycats.js" type="text/javascript"></script>
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
      require_once('/public/home/awa21/public_html/alleycats/owa/owa_php.php');
      $owa = new owa_php();
      $owa->setSiteId('b7a9cffaec5fcd59b41880c3be77209d');
      $owa->setPageTitle('Home');
      $owa->trackPageView();
    ?>


</body>

</html>