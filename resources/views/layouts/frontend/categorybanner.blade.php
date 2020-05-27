  <!-- catg header banner section -->
  <section id="aa-catg-head-banner">
    <img src="{{ asset('frontend') }}/img/fashion/fashion-header-bg-8.jpg" alt="fashion img">
    <div class="aa-catg-head-banner-area">
      <div class="container">
       <div class="aa-catg-head-banner-content">
         <h2>{{$pagename}}</h2>
         <ol class="breadcrumb">
           <li><a href="{{route('welcome')}}">Home</a></li>         
           <li class="active">{{$pagename}}</li>
         </ol>
       </div>
      </div>
    </div>
   </section>
   <!-- / catg header banner section -->