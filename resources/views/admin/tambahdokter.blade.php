@extends('Layout/admin')

@section('container')
<div class="nano">
                        <div class="nano-content">
                            <nav id="menu" class="nav-main" role="navigation">
                                <ul class="nav nav-main">
                                    
                                    <li  >
                                        <a href="/admin">
                                            <i class="fa fa-language" aria-hidden="true"></i>
                                            <span>Data Artikel</span>
                                        </a>
                                    </li>
                                     <li >
                                        <a href="/forum-admin">
                                            <i class="fa fa-share-alt" aria-hidden="true"></i>
                                            <span>Data Forum</span>
                                        </a>
                                    </li>
                                    <li class="nav-active">
                                        <a href="/admin-dokter">
                                            
                                            <i class="fa fa-stethoscope" aria-hidden="true"></i>
                                            <span>Data Dokter</span>
                                        </a>
                                    </li>
                                    <li >
                                        <a href="/admin-pengguna">
                                            <i class="fa fa-group" aria-hidden="true"></i>
                                            <span>Data Pengguna</span>
                                        </a>
                                            
                                    </li>
                                    <li  class="nav-parent">
                                        <a>
                                            <i class="fa fa-plus-square" aria-hidden="true"></i>
                                            <span>Data Analisa Diabetes </span>
                                        </a>
                                        <ul class="nav nav-children">
                                            
                                            <li>
                                               <a href="/admin-gejala">
                                                     Data Kuisioner
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/admin-diagnosa">
                                                     Data Diagnosa
                                                </a>
                                            </li>
                                                                                   
                                        </ul>
                                    </li>
                                    
                                    <li  >
                                        <a href="">
                                            <i class="fa fa-table" aria-hidden="true"></i>
                                            <span>Data Program Diet dan Fitness</span>
                                        </a>
                                        
                                    </li>
                                    <li  >
                                        <a href="/web">
                                            <i class="fa fa-home" aria-hidden="true"></i>
                                            <span>Web Utama</span>
                                        </a>
                                    </li>
                                    
                                    
                                    
                                </ul>
                            </nav>
                
                            
                
                </aside>

                 <section role="main" class="content-body">
                    <header class="page-header">
                        <h2>Data Dokter</h2>
                    
                       
                    </header>

                    <section class="panel">
                            
                            <header class="page-header">
                        <h2>Tambah</h2>
                    
                        
                    </header>
     

         
                     <div class="row">
                            <div class="col-lg-12">
                                
                                <div class="panel-body">
                      <section class="panel">
                            <header class="panel-heading">
                                <div class="panel-actions">
                                 
                                </div>

                                    
                                        <h2 class="panel-title">Tambah Data Dokter</h2>
                                    </header>
                                    </header>

                            <div class="panel-body">
                                
                                    
                                     <form class="form-horizontal form-bordered"  method="POST" action="/dokter" enctype="multipart/form-data">
                                        @csrf
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="name" >Nama  Dokter</label>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control"  id="name"   
                                                     name="name" >
                                                    
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label" >Profesi</label>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" id="profesi"
                                                      name="profesi">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" >Bidang</label>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" id="bidang"
                                                     name="bidang"  >
                                                </div>
                                           </div>
                                           <div class="form-group">
                                                <label class="col-md-3 control-label" >No Telepon</label>
                                                <div class="col-md-6">
                                                  <input type="text" class="form-control" id="kontak"
                                                     name="kontak"  >  
                                                </div>
                                            </div>
                                           <div class="form-group">
                                                <label class="col-md-3 control-label" >Alamat</label>
                                                <div class="col-md-6">
                                                  <input type="text" class="form-control" id="alamat"
                                                     name="alamat"  >  
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" >foto</label>
                                                <div class="col-md-6">
                                                  <input type="file" class="form-control" id="foto"
                                                     name="foto"  >  
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" >Email</label>
                                                <div class="col-md-6">
                                                  <input type="text" class="form-control" id="email"
                                                     name="email"  >  
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" >Password</label>
                                                <div class="col-md-6">
                                                  <input type="password" class="form-control" id="password"
                                                     name="password"  >  
                                                </div>
                                            </div>
                                          
                                           
                                            

                                                <div class="form-group">
                                                <footer class="col-md-9 control-label">
                                        <button class="btn btn-primary">Submit </button>
                                        <button type="reset" class="btn btn-default">Reset</button>
                                    </footer>
                                     </div>
                                    
                                </form>
                                </div>
                                </section>
                        </section>
                 @endsection