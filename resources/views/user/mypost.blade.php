  @extends('Layout/user')

@section('container')

 <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="container">
          <div class="banner_content d-md-flex justify-content-between align-items-center">
            <div class="mb-3 mb-md-0">
              <h2>My Post</h2>
              
            </div>
            <div class="page_link">
              <a href="/pengguna">Home</a>
              <a href="{{route('mypost',Auth::user()->name) }}">My Post</a>
            </div>

          </div>
        </div>
      </div>
 </section>


<section class="single-post-area area-padding-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 posts-list">
           
         
       
   
    
@forelse($forum as $forum)
<div class="single-post">
 <div class="feature-img">
  <div class="blog_details">
    <div class="blog-author">
    <div class="media align-items-center">
        <img src="{{url('aa/img/blog/author.png')}}" alt="">
        <div class="media-body">
            <a>
                <h4>{{$forum->nama}}</h4>
            </a>
            <p>{{$forum->thread}}</p>
            <ul class="blog-info-link mt-3 mb-4">
        <li><a href="#"><i class="far fa-user"></i> Travel, Lifestyle</a></li>
        <li><a href="#"><i class="far fa-comments"></i> 03 Comments</a></li>
          <li><a href="/forumpengguna/{{$forum->id}}/delete"><i ></i> DELETE</a></li>
        <div class="reply-btn">
                            <a href="/mypost/{{$forum->id}}/edit" class="btn-reply text-uppercase">Edit</a>


                        </div>

                          
    </ul>

</div>
</div>
</div>                                                                  
</div>
</div>
@empty
no post
@endforelse

</div>
</div>
</div>
</div>
</section>


</section>
@endsection


























    

    

