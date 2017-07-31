<?php
/*
Template Name: Contact
*/
get_header(); ?>


<section id="contact">
  <div id="contactcontent">
    <h1>Stop By to See Us!</h1>
    <p>As your neighborhood pawn shop, we strive to offer unmatched service and value to the people of Naperville! Please get in touch with us by visting the shop, filling out the form below, or calling us today!</p>
  </div>
</section>



<section id="map">
  <div id="mapcontent">
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



<div id="contactform">
<h2>Shoot Us an Email!</h2>
<form action="/action_page.php">

  <label for="name" class="marginlabel">Name</label>
  <input type="text" id="name" name="name" placeholder="Enter name">

  <label for="phone">Phone</label>
  <input type="text" id="phone" name="phone" placeholder="Enter phone">

  <label for="Email">Email</label>
  <input type="text" id="email" name="email" placeholder="Email">

  </select>

  <label for="help">How Can We Help You?</label>
  <textarea id="help" name="help" placeholder="Message" style="height:200px"></textarea>

  <div id="wrapper">
    <input type="submit" class="submit2" value="Submit!">
  </div>

</form>
</div>


<?php get_footer(); ?>
