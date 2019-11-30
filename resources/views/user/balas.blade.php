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
        <li><a href="#"><i class="far fa-user"></i> Medical </a></li>
        
     
    </ul>





</div>
</div>
</div>                                                                  
</div>
</div>
<section class="single-post-area area-padding">
<div class="container">
    <div class="col-lg-10 mb-5 mb-lg-0 posts-list">
<div class="row">
<img class="card-img rounded-0" src="{{url('images/'.$forum->gambar) }}" alt="">
                    </div>

<div class="blog_details">
  
    <p class="excert">
       {{$forum->deskripsi}}
    </p>
    


    </div>
</div>
</div>

@forelse($forum->comments as $komen)
<div class="comments-area">
 <!--    <h4>05 Comments</h4> -->
    <div class="comment-list">
        <div class="single-comment justify-content-between d-flex">
            <div class="user justify-content-between d-flex">
                <div class="thumb">
                    <img src="{{url('aa/img/blog/c1.png')}}" alt="">
                </div>
                <div class="desc">
                    <p class="comment">
                        {{$komen->komen}}
                    </p>

                    <div class="d-flex justify-content-between">
                        <div class="d-flex align-items-center">
                            <h5>
                                <a href="#">{{$komen->nama}}</a>
                            </h5>
                            <!-- <p class="date">December 4, 2017 at 3:12 pm </p> -->
                        </div>

                        <!-- <div class="reply-btn">
                            <a href="#" class="btn-reply text-uppercase">reply</a>
                        </div> -->
                    </div>

                </div>
            </div>
        </div>
    </div>
@empty

<p>NO COMMENT </p>
    @endforelse





             <div class="comment-form">
    <h4>Leave a Reply</h4>
    <form class="form-contact comment_form" action="{{route('addComment',$forum->id)}}" method="post" >
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <textarea class="form-control w-100" name="komen" id="komen" cols="30" rows="9" placeholder="Write Comment"></textarea>
                </div>
            </div>
            
        <div  div class="col-sm-6" class="form-group">
            <button type="submit" class="button button-contactForm">Send Reply</button>
        </div>
    </form>
</div>
</div>  

 
 


</div>
</div>
</div>
</div>
</section>
</section>
</section>

@endsection


























    

    


