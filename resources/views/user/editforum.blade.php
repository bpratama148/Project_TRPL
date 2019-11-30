  @extends('Layout/user')

@section('container')

 <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="container">
          <div class="banner_content d-md-flex justify-content-between align-items-center">
            <div class="mb-3 mb-md-0">
              <h2>Edit Post</h2>
              
            </div>
            <div class="page_link">
              <a href="/pengguna">Home</a>
              <a href="{{route('mypost',Auth::user()->name) }}">My Post</a>
            </div>

          </div>
        </div>
      </div>
 </section>






<section class="blog_area single-post-area ">
    <div class="container">
        <div class="comment-form">
    <h4>Edit Post</h4>
    <form class="form-contact comment_form" action="/mypost/{{$forum->id}}/update" id="commentForm" method="post" enctype="multipart/form-data">
        <div class="row">
            @csrf
            <div class="col-12">
                <div class="form-group">
                    <input class="form-control" name="thread" id="thread" type="text" placeholder="{{$forum->thread}}">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <textarea class="form-control w-100" name="deskripsi" id="deskripsi" cols="30" rows="9" placeholder="{{$forum->deskripsi}} "></textarea>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <input class="form-control" name="gambar" id="gambar" type="file" >
                </div>
            </div>
            
        <div class="col-sm-6">
            <button type="submit" class="button button-contactForm">Edit</button>
        </div>
        
            
    </form>
</div>
</div>
</section>



























    

    @endsection