	@extends('Layout/user')

@section('container')


<section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="container">
          <div
            class="banner_content d-md-flex justify-content-between align-items-center"
          >
            <div class="mb-3 mb-md-0">
              <h2>Diabete Analyze</h2>
              <p>Question</p>
            </div>
            <div class="page_link">
              <a href="/pengguna">Home</a>
              <a href="/pengguna-dstart">Diabete Analyze</a>
            </div>
          </div>
        </div>
      </div>
    </section>


    
   

     
        <section class="appointment-area area-padding">
        <div class="container">

            <div class="appointment-inner">
                <div class="row">
                    <div class="col-sm-12 col-lg-9 offset-lg-1">
                        <h3>Pilihlah Gejala yang Anda Alami</h3>
                        <div class="accordion" id="accordionExample">

                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        
                                    </h5>
                                </div>
                             

                             <form class="form-group" method="post" action="/gejala">
                               @csrf

                            <div class="card">
                                @foreach ($g1 as $g1)
                                <div class="card-header" id="headingTwo">
                                    
                                        <div class="checkbox">
                                        <label>
                                        <input name="g1" type="checkbox" value="{{$g1->value}}">
                                        {{$g1->nama}}
                                        </label>
                                       </div>
                               @endforeach

                           
                           
                             <p></p>
                                @foreach ($g2 as $g2)
                                <div class="card-header" id="headingTwo">
                                    
                                        <div class="checkbox">
                                        <label>
                                        <input name="g2" type="checkbox" value="{{$g2->value}}">
                                        {{$g2->nama}}
                                        </label>
                                       </div>
                               @endforeach

                           
                            

                              <p></p>
                                @foreach ($g3 as $g3)
                                <div class="card-header" id="headingTwo">
                                    
                                        <div class="checkbox">
                                        <label>
                                        <input name="g3" type="checkbox" value="{{$g3->value}}">
                                        {{$g3->nama}}
                                        </label>
                                       </div>
                               @endforeach

                           
                           

                              <p></p>
                                @foreach ($g4 as $g4)
                                <div class="card-header" id="headingTwo">
                                    
                                        <div class="checkbox">
                                        <label>
                                        <input name="g4" type="checkbox" value="{{$g4->value}}">
                                        {{$g4->nama}}
                                        </label>
                                       </div>
                               @endforeach

                           
                           

                             <p></p>
                                @foreach ($g5 as $g5)
                                <div class="card-header" id="headingTwo">
                                    
                                        <div class="checkbox">
                                        <label>
                                        <input name="g5" type="checkbox" value="{{$g5->value}}">
                                        {{$g5->nama}}
                                        </label>
                                       </div>
                               @endforeach

                           
                           

                              <p></p>
                                @foreach ($g6 as $g6)
                                <div class="card-header" id="headingTwo">
                                    
                                        <div class="checkbox">
                                        <label>
                                        <input name="g6" type="checkbox" value="{{$g6->value}}">
                                        {{$g6->nama}}
                                        </label>
                                       </div>
                               @endforeach

                           
                           

                              <p></p>
                                @foreach ($g7 as $g7)
                                <div class="card-header" id="headingTwo">
                                    
                                        <div class="checkbox">
                                        <label>
                                        <input name="g7" type="checkbox" value="{{$g7->value}}">
                                        {{$g7->nama}}
                                        </label>
                                       </div>
                               @endforeach

                           
                           

                            <p></p>
                                @foreach ($g8 as $g8)
                                <div class="card-header" id="headingTwo">
                                    
                                        <div class="checkbox">
                                        <label>
                                        <input name="g8" type="checkbox" value="{{$g8->value}}">
                                        {{$g8->nama}}
                                        </label>
                                       </div>
                               @endforeach

                           
                          


                              <p></p>
                                @foreach ($g9 as $g9)
                                <div class="card-header" id="headingTwo">
                                    
                                        <div class="checkbox">
                                        <label>
                                        <input name="g9" type="checkbox" value="{{$g9->value}}">
                                        {{$g9->nama}}
                                        </label>
                                       </div>
                               @endforeach

                           
                            


                              <p></p>
                                @foreach ($g10 as $g10)
                                <div class="card-header" id="headingTwo">
                                    
                                        <div class="checkbox">
                                        <label>
                                        <input name="g10" type="checkbox" value="{{$g10->value}}">
                                        {{$g10->nama}}
                                        </label>
                                       </div>
                               @endforeach

                           
                            

                              <p></p>
                                @foreach ($g11 as $g11)
                                <div class="card-header" id="headingTwo">
                                    
                                        <div class="checkbox">
                                        <label>
                                        <input name="g11" type="checkbox" value="{{$g11->value}}">
                                        {{$g11->nama}}
                                        </label>
                                       </div>
                               @endforeach

                           
                            


                              <p></p>
                                @foreach ($g12 as $g12)
                                <div class="card-header" id="headingTwo">
                                    
                                        <div class="checkbox">
                                        <label>
                                        <input name="g12" type="checkbox" value="{{$g12->value}}">
                                        {{$g12->nama}}
                                        </label>
                                       </div>
                               @endforeach

                           
                            

  <p></p>
                                @foreach ($g13 as $g13)
                                <div class="card-header" id="headingTwo">
                                    
                                        <div class="checkbox">
                                        <label>
                                        <input name="g13" type="checkbox" value="{{$g13->value}}">
                                        {{$g13->nama}}
                                        </label>
                                       </div>
                               @endforeach

                           

                              <p></p>
                                @foreach ($g14 as $g14)
                                <div class="card-header" id="headingTwo">
                                    
                                        <div class="checkbox">
                                        <label>
                                        <input name="g14" type="checkbox" value="{{$g14->value}}">
                                        {{$g14->nama}}
                                        </label>
                                       </div>
                               @endforeach

                           
                           

                              <p></p>
                                @foreach ($g15 as $g15)
                                <div class="card-header" id="headingTwo">
                                    
                                        <div class="checkbox">
                                        <label>
                                        <input name="g15" type="checkbox" value="{{$g15->value}}">
                                        {{$g15->nama}}
                                        </label>
                                       </div>
                               @endforeach

                           
                            


                              <p></p>
                                @foreach ($g16 as $g16)
                                <div class="card-header" id="headingTwo">
                                    
                                        <div class="checkbox">
                                        <label>
                                        <input name="g16" type="checkbox" value="{{$g16->value}}">
                                        {{$g16->nama}}
                                        </label>
                                       </div>
                               @endforeach

                           
                           

                              <p></p>
                                @foreach ($g17 as $g17)
                                <div class="card-header" id="headingTwo">
                                    
                                        <div class="checkbox">
                                        <label>
                                        <input name="g17" type="checkbox" value="{{$g17->value}}">
                                        {{$g17->nama}}
                                        </label>
                                       </div>
                               @endforeach

                           
                           


                             <p></p>
                                @foreach ($g18 as $g18)
                                <div class="card-header" id="headingTwo">
                                    
                                        <div class="checkbox">
                                        <label>
                                        <input name="g18" type="checkbox" value="{{$g18->value}}">
                                        {{$g18->nama}}
                                        </label>
                                       </div>
                               @endforeach

                           
                           


                              <p></p>
                                @foreach ($g19 as $g19)
                                <div class="card-header" id="headingTwo">
                                    
                                        <div class="checkbox">
                                        <label>
                                        <input name="g19" type="checkbox" value="{{$g19->value}}">
                                        {{$g19->nama}}
                                        </label>
                                       </div>
                               @endforeach

                           
                           
                               <p></p>
                            
                                @foreach ($g20 as $g20)
                                <div class="card-header " id="headingTwo">
                                    
                                        <div class="checkbox">
                                        <label>
                                        <input name="g20" type="checkbox" value="{{$g20->value}}">
                                        {{$g20->nama}}
                                        </label>
                                       </div>
                               @endforeach

                           
                            

                               <p></p>
                                @foreach ($g21 as $g21)
                                <div class="card-header" id="headingTwo">
                                    
                                        <div class="checkbox">
                                        <label>
                                        <input name="g21" type="checkbox" value="{{$g21->value}}">
                                        {{$g21->nama}}
                                        </label>
                                       </div>
                               @endforeach

                           
                           





</div>


                        </div>
                    </div>
                 
                                
                        <button type="submit" class="main_btn1 float-right ">Submit</button>     
                </div>

            </div>


        </div>
    </section>
   



@endsection


