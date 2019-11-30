  @extends('Layout/user')

@section('container')


    <!--================Home Banner Area =================-->
 <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="container">
          <div
            class="banner_content d-md-flex justify-content-between align-items-center"
          >
            <div class="mb-3 mb-md-0">
              <h2>Article</h2>
              <p>{{ $artikel->judul }}</p>
            </div>
            <div class="page_link">
              <a href="/pengguna">Home</a>
              <a href="/pengguna-artikel">Article</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--================End Home Banner Area =================-->


    <!--================ Feature section start =================-->      
    
    
    <!-- ================ testimonial section end ================= -->    

    <!-- ================ Hotline Area Starts ================= -->  
    
    <!-- ================ Hotline Area End ================= -->  
   <section class="blog_area single-post-area area-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mb-5 mb-lg-0 posts-list">
                <div class="single-post">
                    <div class="feature-img">
                        <img class="card-img rounded-0" src="{{url('images/'.$artikel->gambar) }}" alt="">
                    </div>

<div class="blog_details">
    <h2>{{ $artikel->judul}}</h2>
 
    <p class="excert">
       {{$artikel->konten}}
    </p>
    


    
</div>
</div>

               
              </section>



    
    <!--================ End Brands Area =================-->

    <!-- start footer Area -->
    @endsection