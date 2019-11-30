  @extends('Layout/user')

@section('container')

 <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="container">
          <div class="banner_content d-md-flex justify-content-between align-items-center">
            <div class="mb-3 mb-md-0">
              <h2>Forum</h2>
              
            </div>
            <div class="page_link">
              <a href="/pengguna">Home</a>
              <a href="/pengguna-forum">Forum</a>
            </div>

          </div>
        </div>
      </div>
 </section>


<section class="single-post-area area-padding-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 posts-list">
           
         
       
    <div class="single-post">
 <div class="feature-img">
  <div class="blog_details">
    <div class="blog-author">
    <aside class="single_sidebar_widget newsletter_widget">
            
        <form class="form-contact comment_form" action="/forum"  method="POST" enctype="multipart/form-data">
        <div class="row">
            @csrf
            <div class="col-12">
                <div class="form-group">
                    <input class="form-control" name="thread" id="thread" type="text" placeholder="Thread">
                </div>
            </div>
             <div class="col-sm-6">
                <div class="form-group">
                    <input class="form-control" name="gambar" id="gambar" type="file" >
                </div>
            </div>
            
            <div class="col-12 ">
                <div class="form-group">
                    <textarea class="form-control w-100" name="deskripsi" id="deskripsi" cols="30" rows="9" placeholder="Write Description "></textarea>
                </div>
               </div>
               
            <div class="col-sm-6">
            <button type="submit" class="button button-contactForm">Post Topic</button>
        </div>
            
</div>

         

        
    </form>

</div>
</div>
</div>                                                                  
</div>
</div>
    
@foreach( $forum as $forum)
<div class="single-post">
    <div>
 <div class="feature-img">
  <div class="blog_details">
    <div class="blog-author">
    <div class="media align-items-center">
        <img src="{{url('aa/img/blog/author.png')}}" alt="">
        <div class="media-body">
            <a>
                <h4>{{$forum->nama}}</h4>
            </a>
            <p>{{$forum->thread}} </p>
            <ul class="blog-info-link mt-3 mb-4">
        <li><a href="#"><i class="far fa-user"></i> Travel, Lifestyle</a></li>
        <li><a href="#"><i class="far fa-comments"></i> 03 Comments</a></li>
        <div class="reply-btn">
                            <a href="/forum-balas/{{$forum->id}}" class="btn-reply text-uppercase">reply</a>
                        </div>
    </ul>

</div>
</div>
</div>                                                                  
</div>
</div>

@endforeach
</div>
</div>
</div>
</div>
</section>


</section>
@endsection



























    

    

