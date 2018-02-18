<section class="hero front">
<div class="wrapper">
      <header>
       <a class="brand" href="{{ home_url('/') }}"><img src="@asset('images/logo.png')"></a>
       <a class="hamburger hamburger--vortex"><span class="hamburger-box">
        <span class="hamburger-inner"></span>
        </span></i></a>
       </header>
      <nav class="primary_nav" id="primary_nav">
         @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav><!--end primary_nav-->
</div><!--end wrapper-->      
<div class="container cover1">
  <div class="columns">
      <div class="column intro is-6 has-text-centered">
          <h1 class="title is-size-2 has-text-light has-text-weight-light is-uppercase">Custom Built Mobile Web Technology</h1>
                    <p class="content is-medium has-text-light has-text-weight-light">Well designed multiuser mobile applications and web properties for small businesses using the latest high tech solutions and applications.</p>
                    <p><a class="button is-light is-large is-outlined btn-custom" href="http://vhost4.com/wordpress/index.php/contact/"><i class="fa fa-lg fa-phone"></i> Request A Call</a></p>
          </div>
    <div class="column phone center is-6 has-text-centered"><img width="310px" height="480px" src="@asset('images/phone.png')" alt=""></div>
</div>
</div>
</section>

        





 
     


    
