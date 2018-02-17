<section class="hero page">
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
<div class="container cover2">
  <div class="columns">
<div class="column intro is-12 has-text-centered">


   
  	 	
