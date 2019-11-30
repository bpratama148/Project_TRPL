@extends('Layout/admin')

@section('container')
<div class="nano">
                        <div class="nano-content">
                            <nav id="menu" class="nav-main" role="navigation">
                                <ul class="nav nav-main">
                                    
                                    <li >
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
                                    <li>
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
                                            
                                            <li class="nav-active">
                                                <a href="/admin-gejala" >
                                                     Data Kuisioner
                                                </a>
                                            </li>
                                            <li >
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
                        <h2>Data Kuisioner</h2>
                    
                       
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

                                    
                                        <h2 class="panel-title">Tambah Data Kuisioner</h2>
                                    </header>
                                    </header>

                            <div class="panel-body">
                                
                                    
                                     <form class="form-horizontal form-bordered"  method="POST" action="/gejalacrud" enctype="multipart/form-data">
                                        @csrf


                                         <div class="form-group">
                                                <label class="col-md-3 control-label" for="kode" >Kode Gejala</label>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control"  id="kode"   
                                                     name="kode" >
                                                    
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="nama" >Gejala</label>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control"  id="nama"   
                                                     name="nama" >
                                                    
                                                </div>
                                            </div>


                                         
                                          
                                              <div class="form-group">
                                                <label class="col-md-3 control-label" >Value</label>
                                                <div class="col-md-6">
                                                  <input type="text" class="form-control" id="value"
                                                     name="value"  > 
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