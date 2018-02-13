{{--
  Template Name: About Page
--}}
@extends('layouts.app')
@section('content')
@while(have_posts()) @php(the_post())
<h1 class="title is-size-2 has-text-light has-text-weight-light is-uppercase">About Us</h1>
             <p class="content is-medium has-text-light has-text-weight-light">A Short Summary of Us.</p>
           </div>
        </div>
</div>
</section>
<section class="features1">
<div class="container">
	<div class="columns">
      <div class="column is-12 has-text-centered">
           <h1 class="title is-size-2 has-text-weight-light has-text-grey-dark">A Bit More About Us</h1> 
	        <hr >
		  <p class="content is-medium">Our Custom Built Mobile Web Application for small businesses who want to improve their search ranking, features and facilties for mobile customers at low cost. We can include completely free many services which usually entail substantial extra costs, all for a one off, fully inclusive low price which is the best in the industry! It is ideal for small businesses who are on a budget, with or without a website as it enables your company to appear well in search returns from mobile devices which are at around 80% now!</p>
<div class="container is-fluid">		  
 <figure class="image">
 <img class="img" width="1200px" height="635px" src="@asset('images/devices.jpg')" alt="Mobile Devices">
</figure>
</div>
</div>
</div>
</div>
</section>
<section class="features">
<div class="container">	
<div class="columns">
<div class="column jumbotron is-12 has-text-centered">	
<h1 class="title is-size-2 has-text-weight-light has-text-grey-dark">Paying for SEO and Web Facilities for Your Business?</h1>
			<hr> 
            <p class="content is-medium">There is no need, you can have a Mobile App built which is listed in both App stores, so your business ranks highly for mobile searches, removing the necessity to pay for expensive SEO costs and website maintainance.</p>
			 <p class="content is-medium">Smartphones are replacing laptops and PC's and apps are replacing many websites. We can custom build a Progressive Web Application for your business which is made available in both app stores for your customers to download.
	         It has a huge list of features including free unlimited Push Notifications, free Booking Software, free Merchant Service Integration, Web Based back-office for management and much more!</p>
	         <p class="content is-medium">
	         Progressive Web Apps are the next generation for Mobile Web and our turkey app has been developed over a 3 year period with this in mind. It is built specifically for small businesses on a budget and enables them to compete online without having to incur heavy costs!
	        </p>
	        <p class="content is-medium">
	        Many businesses pay ongoing fees for services such as SEO, Web Site Maintainance, Booking Software, Text Messaging and other services. Our application can include all these completely free in addition to many other features, all for a small one-off payment, with no monthly fees, no third party advertising or other hidden costs!
	       </p>
	       <p class="content is-medium">
	       Silent Salesman is a Progressive Web Application for small businesses based on Web 3.0 technologies. Offline and Online modes with a Web Based CMS for input management. Approved by Apple and Google for App store listing with other download methods available. Windows Phone functionality also.</p>
	       <p class="content is-medium">A Huge range of features and benefits ensures that your business in ranked well for mobile device searches online. A 3 -4 week build time with no painful testing or development failures. A personal developer is assigned to the build process with a top quality control system in place.</p>
	       <p class="content is-medium">
	       	Below are a few of the features of our Progressive Web App.
	       </p>
	</div>
	</div>
<div class="columns">
<div class="column map is-12 has-text-centered">	
@php echo do_shortcode("[ank_google_map]"); ?>
</div>
</div>	
</div>
</section>
<div class="page-bottom"></div>
@endwhile
@endsection