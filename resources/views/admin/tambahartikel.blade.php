@extends('Layout/admin')

@section('container')
<div class="nano">
                        <div class="nano-content">
                            <nav id="menu" class="nav-main" role="navigation">
                                <ul class="nav nav-main">
                                    
                                    <li class="nav-active" >
                                        <a href="/admin-artikel">
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
                        <h2>Data Artikel</h2>
                    
                       
                    </header>

                    <section class="panel">
                            
                            <header class="page-header">
                        <h2>Add</h2>
                    
                        <div class="right-wrapper pull-right">
                            <ol class="breadcrumbs">
                                <li>
                                    <a href="index.html">
                                        <i class="fa fa-home"></i>
                                    </a>
                                </li>
                                <li><span>Forms</span></li>
                                <li><span>Basic</span></li>
                            </ol>
                    
                            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
                        </div>
                    </header>
     

         
                     <div class="row">
                            <div class="col-lg-12">
                                
                                <div class="panel-body">
                      <section class="panel">
                            <header class="panel-heading">
                                <div class="panel-actions">
                                 
                                </div>

                                    
                                        <h2 class="panel-title">Tambah Artikel</h2>
                                    </header>
                                    </header>

                            <div class="panel-body">
                                
                                    
                                        <form class="form-horizontal form-bordered"  method="POST" action="/artikel" enctype="multipart/form-data">
                                        @csrf
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="judul" >Judul Artikel</label>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control"  id="judul" placeholder="Fill the Title" 
                                                     name="judul" >
                                                    
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" >Gambar</label>
                                                <div class="col-md-6">
                                                    <input type="file" class="form-control" id="gambar"
                                                    placeholder="Fill the Product Amount"  name="gambar" class="form-control" >
                                                </div>
                                                </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" >Deskripsi</label>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" id="deskripsi"
                                                    placeholder="Fill the Product Price" name="deskripsi" >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" >Konten</label>
                                                <div class="col-md-6">
                                                    <textarea  name="konten" id="konten" cols="35" wrap="soft"></textarea>
                                                </div>
                                            </div> 
                                                <div class="form-group">
                                                <footer class="col-md-9 control-label">
                                        <button class="btn btn-primary">Submit </button>
                                        <button type="reset" class="btn btn-default">Reset</button>
                                    </footer>
                                </form>
                                </div>
                                </section>
                        </section>
                        
                        


                    @endsection