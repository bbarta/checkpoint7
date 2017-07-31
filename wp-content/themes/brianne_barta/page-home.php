<?php
/*
Template Name: Home
*/
get_header(); ?>

<?php
// The Loop
  if (have_posts()) : while (have_posts()) : the_post();

endwhile; else:

endif;
   ?>

   <section id="banner">
     <div id="bannercontent" align="right">
       <div id="headline" class="stretchLeft"><p class="p1">NAPERVILLE'S</p> <p class="p2">NEIGHBORHOOD</p> <p class="p3">PAWN SHOP</p></div>
     </div>
   </section>

   <main>
     <div id="maincontent">
       <h1>Hello There!</h1>
       <p>Pebblewood Pawn Shop pays top dollar for all of your broken or unwanted gold and diamonds -- as well as electronics, instruments and much more -- in Naperville, IL and the surrounding areas. We give free professional appraisals to all of our customers. We also provide jewelry repairs, watch battery replacements as low as $5, and ring sizing. Visit us today!</p>
       <article id="circles" class="slideDown">
         <figure><img src="<?php bloginfo('template_directory'); ?>/img/hp-circle1.png" alt="service1"><figcaption>Cash Fast, When You Need It!</figcaption></figure>
         <figure><img src="<?php bloginfo('template_directory'); ?>/img/hp-circle-2.png" alt="service1"><figcaption>New & Used Jewelry</figcaption></figure>
         <figure><img src="<?php bloginfo('template_directory'); ?>/img/hp-circle-3.png" alt="service1"><figcaption>We Buy Gold & Silver for Top Dollar!</figcaption></figure>
         <figure><img src="<?php bloginfo('template_directory'); ?>/img/hp-circle-4.png" alt="service1"><figcaption>We Buy & Sell all Types of Electronics!</figcaption></figure>
       </article>
     </div>
   </main>

   <section id="new">
     <div id="newcontent">
       <h2>New at the Shop</h2>
       <p>At Pebblewood Pawn Shop, we have new inventory every day! To get a sneak peek at some of our latest treasures, browse our Instagram gallery below.</p>
       <iframe id="gallery" src="http://users.instush.com/sbs-v2/?both=true&user_id=8779255&username=bbarta&sid=-1&susername=-1&tag=-1&stype=mine&t=999999Bt7cGoHipECa3mkqkojgzjwebMZVvbMc30HYFzVwtBIAUGqNq0IGc_gjHLnJFZEYNzPmd-PSxU8" allowtransparency="true" frameborder="0" scrolling="no"  style="display:block;width:770px;height:345px;border:none;overflow:visible;" ></iframe>
     </div>
   </section>

   <section id="subscribe">
     <div id="subscribecontent">
       <h3>Be the First to Learn About New Items at Pebblewood!</h3>
       <form class="my-form" action="/subscribe" method="post">

     <input type="text" class="entry" placeholder="Enter your email address" />

     <input type="submit" class="submit" value="Join Our Mailing List!">
     <hr id="divider">

 </form>
     </div>
   </section>

   <section id="map">
     <div id="mapcontent">
       <h2>Come See Us!</h2>

       <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2974.496152022489!2d-88.20655088456147!3d41.79607107922876!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880ef8fcdf96de23%3A0xdb52f8a5aee802ec!2sPebblewood+Jewelry+and+Loan!5e0!3m2!1sen!2sus!4v1499212534280" width="500" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
       <h3>Address:</h3>
       <p>1550 N. Route 59, Suite 194</p>
       <p>Naperville, IL 60563</p>
       <h3>Phone:</h3>
       <p>630-848-1000</p>
       <h3>Hours:</h3>
       <p>Monday - Friday: 10:00am - 8:00pm</p>
       <p>Saturday: 10:00am - 4:00pm</p>

     </div>
   </section>


<?php get_footer(); ?>
