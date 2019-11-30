  @extends('Layout/user')

@section('container')


 <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="container">
          <div
            class="banner_content d-md-flex justify-content-between align-items-center"
          >
            <div class="mb-3 mb-md-0">
              <h2>Article</h2>
              <p>Semester 5 , Wayahe Wayahe Wayahe </p>
            </div>
            <div class="page_link">
              <a href="/pengguna">Home</a>
              <a href="/pengguna-artikel">Article</a>
            </div>
          </div>
        </div>
      </div>
    </section>

  
   <section class="blog_area area-padding">  
  
      <div class="container">
          <div class="row">

              <div class="col-lg-10 mb-5 mb-lg-0">
                  <div class="blog_left_sidebar"> 
                    @foreach( $artikel as $artikel)  
                        <article class="blog_item">
                        <div class="blog_item_img"> 
                                                   
                        <img class="card-img rounded-0" src="{{url('images/'.$artikel->gambar) }}" alt=""></div>
                          <div class="blog_details">
                            <a class="d-inline-block" href="/pengguna-artikelmore/{{$artikel->id}}">
                                <h2>{{ $artikel->judul }}</h2>
                            </a>
                            <p>{{$artikel->deskripsi}}</p>
                            
                          </div>
                      </article>
                      @endforeach
                       <nav class="blog-pagination justify-content-center d-flex">
                          <ul class="pagination">
                              <li class="page-item">
                                  <a href="#" class="page-link" aria-label="Previous">
                                      <i class="ti-angle-left"></i>
                                  </a>
                              </li>
                              <li class="page-item">
                                  <a href="#" class="page-link">1</a>
                              </li>
                              <li class="page-item active">
                                  <a href="#" class="page-link">2</a>
                              </li>
                              <li class="page-item">
                                  <a href="#" class="page-link" aria-label="Next">
                                      <i class="ti-angle-right"></i>
                                  </a>
                              </li>
                          </ul>
                      </nav>
                      
                      </div>
                      </div>
                  

              </section>


   
    
@endsection