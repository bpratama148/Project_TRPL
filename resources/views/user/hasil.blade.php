@extends('Layout/user')

@section('container')




			
<section class="banner_area area-padding-bottom">
      <div class="banner_inner d-flex align-items-center">
        <div class="container">
          <div
            class="banner_content d-md-flex justify-content-between align-items-center"
          >
            <div class="mb-3 mb-md-0">
              <h2>Diabete Analyze</h2>
              <p>Hasil</p>
            </div>
            <div class="page_link">
              <a href="/pengguna">Home</a>
              <a href="/pengguna-dstart">Diabete Analyze</a>
            </div>
          </div>
        </div>
      </div>
    </section>





 @foreach($hasil as $hasil) 
 <section class=" hotline-area text-center area-padding">
            <div class="container">
                <div class="row">
                  
                    <div class="col-lg-12">
                    


                        <h2>Result of the Analyze</h2>
                        <h1 class="mb-20">
                      
                                @if ($hasil->total == 110)
                                Anda Terdiagnosa " Diabetes Mellitus Type I "
                        
                           
                                     
                                 @elseif ($hasil->total == 126)
                               Anda Terdiagnosa " Diabetes Mellitus Type 2  "
                      

                                @elseif ($hasil->total == 191)
                              Anda Terdiagnosa " Neuropati Diabetes  "


                                @elseif ($hasil->total == 116)
                               Anda Terdiagnosa " Retinopati Diabates "

                                @elseif ($hasil->total == 198)
                              Anda Terdiagnosa " Nefropati Diabetes "
                           
                               @elseif ($hasil->total == 163)
                              Anda Terdiagnosa " Ketoasidosis Diabetes  "
                           
                                @elseif ($hasil->total == 171)
                              Anda Terdiagnosa " Gestasional Diabetes  "
                           
                             
                               
                               
                             
                           
                            @else
                               Masih Belum ada Hasil Diagnosa yg Sesuai
                            
                            @endif

                        </h1>

                      
                        
                        <p class="pt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>

                          <a href="/hasil/{{$hasil->hasil_id}}/delete" class="main_btn2">Okay</a>
                    </div>
                    
                     
                </div>
            </div>
               
        </section>

        <section class="brands-area background_one">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        
                       

                    </div>
                </div>
            </div>
        </section>
      

@endforeach  


@endsection


                           