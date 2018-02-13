{{--
  Template Name: Contact Page
--}}
@extends('layouts.app')
@section('content')
@while(have_posts()) @php(the_post())
<h1 class="title is-size-2 has-text-light has-text-weight-light is-uppercase">Contact Us</h1>
                    <p class="content is-medium has-text-light has-text-weight-light">If you have any queries or just want to discuss project details for your business then get in touch right away by entering your details below.</p>
            </div>
        </div>
</div>
</section>
<section class="features1">
<div class="container">
	<div class="columns">
      <div class="column is-12 has-text-centered">
           <h1 class="title is-size-2 has-text-weight-light has-text-grey-dark">Get In Touch</h1> 
	        <hr >
	   </div>
   </div>
<div class="columns">
      <div class="column is-8 form">
           <h1 class="title is-spaced has-text-weight-light has-text-grey-dark">Get A Call About Your Project</h1> 
           <h3 class="subtitle has-text-weight-light has-text-grey-dark">Just enter your details below with your enquiry and we will get straight back to you</h3>	       
 <form id="contact" name="contactForm" method="POST" role="form" action="contact.php">
  <div class="field">
  <label class="label">Name</label>
  <div class="control has-icons-left">
    <input class="input" name="name" type="text" placeholder="Name">
     <span class="icon is-medium is-left">
      <i class="fa fa-user"></i>
    </span> 
  </div>
</div>
 <div class="field">
  <label class="label">Phone</label>
  <div class="control has-icons-left">
    <input class="input" name="phone" type="text" placeholder="Phone">
     <span class="icon is-medium is-left">
      <i class="fa fa-phone"></i>
    </span> 
  </div>
</div>
<div class="field">
<label class="label">Your Budget</label>
  <div class="control">
    <div class="select">
      <select name="budget" form="contact">
        <option value="Standard Package">Standard Package</option>
		<option value="&pound;1000 - &pound;10000">&pound;1000 - &pound;10000</option>
		<option value="Over &pound;10000">Over &pound;10000</option>
		<option value="Over &pound;20000">Over &pound;20000</option>
      </select>
    </div>
  </div>
</div>
<div class="field">
  <label class="label">Website Or Mobile App</label>
  <div class="control">
    <div class="select">
      <select name="appchoice" form="contact">
        <option value="Mobile App">Mobile App</option>
		<option value="Website">Website</option>
      </select>
    </div>
  </div>
</div>
<div class="field">
  <label class="label">Email</label>
  <div class="control has-icons-left">
    <input class="input" name="email" type="email" placeholder="Email">
    <span class="icon is-small is-left">
      <i class="fa fa-envelope"></i>
    </span>
  </div>
</div>
<div class="field">
  <label class="label">Message Or Project Details</label>
  <div class="control">
    <textarea class="textarea" name="message" placeholder="Textarea"></textarea>
  </div>
</div>
<div class="field is-grouped">
<div class="control">
<button class="button is-medium submit btn-custom" name="submit">Send Message</button>
</div>
</div>
</form>
</div>
<div class="column is-4 is-offset-1 contact">
 <h1 class="title has-text-weight-light has-text-grey-dark">Contact Us</h1> 
 <div>
<h3 class="subtitle has-text-weight-light">Contact Details</h3>
<h4 class="subtitle has-text-weight-light">Email</h4>
<p><a href="mailto:sales@webmobapps.com?Subject=Enquiry" target="_top">sales@webmobapps.com</a></p>
 <h4 class="subtitle has-text-weight-light">Phone</h4>
<p><a href="tel:+44 1302 459640">+44 1302 459640</a></p>
<address>
<h4 class="subtitle has-text-weight-light">Address</h4>
<p>Unit 10729<br />
Chynoweth House<br />
Trevissome Park<br />
Truro<br />
TR4 8UN<br />
UK </p></address>
</div>
</div> 
</div>
</div>
</section>
<div class="page-bottom"></div>
@endwhile
@endsection