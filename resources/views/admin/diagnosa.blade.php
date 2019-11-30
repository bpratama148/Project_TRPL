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
                                            
                                            <li >
                                                <a href="/admin-gejala" >
                                                     Data Kuisioner
                                                </a>
                                            </li>
                                            <li class="nav-active">
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
                        <h2>Data Diagnosa</h2>
                    
                       
                    </header>

                   
                    <section class="panel">
                            <header class="panel-heading">
                                <div class="panel-actions">
                                    <a href="#" class="fa fa-caret-down"></a>
                                    <a href="#" class="fa fa-times"></a>
                                </div>
                        
                                <h2 class="panel-title">Data Diagnosa</h2>
                            </header>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-md" >
                                            <a  class="popup-with-form btn btn-primary" href="/diagnosa/create" >Tambah <i class="fa fa-plus"></i></a>
                                            </div>
                                           <table class="table table-bordered table-striped mb-none" id="datatable-editable">
                                    <thead>
                                    
                                    
                                        <tr>
                                            <th>Id Diagnosa</th>
                                            <th>Diagnosa</th>
                                            <th>value</th>
                                         
                                          
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach( $diagnosa as $diagnosa)     
                                        <tr class="gradeX">
                                            <td>{{ $diagnosa->id }} </td>
                                            <td>{{ $diagnosa->nama }}</td>
                                            <td>{{ $diagnosa->value }}</td>
                                           
                                         
                                            <td class="actions">
                                                  <a href="/diagnosa/{{$diagnosa->id}}/edit" method="GET" ><i class="fa fa-pencil"></i></a>        
                                                 <a href="/diagnosa/{{$diagnosa->id}}/delete" ><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </section>
                        </section>

                        @endsection