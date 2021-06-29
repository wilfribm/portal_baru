
@extends('petani.layouts.admin_base')
@section('content')

<div class="col">
    <div class="row">
      <div class="col mb-3">
        <div class="card">
          <div class="card-body">
            <div class="e-profile">
              <div class="row">
                <div class="col-12 col-sm-auto mb-3">
                  
                </div>
          <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                  <div class="text-center text-sm-left mb-2 mb-sm-0">
                    
                    
                   
                    <p class="mb-0">
                      </p>
                    <!-- <div class="text-muted"><small>Last seen 2 hours ago</small></div> -->
                    <div class="mt-2">
                      <!-- <button class="btn btn-primary" type="button">
                        <i class="fa fa-fw fa-camera"></i>
                        <span>Change Photo</span>
                      </button> -->
                    </div>
                  </div>
                  <div class="text-center text-sm-right">
                    <span class="badge badge-secondary">Lahan Petani</span>
                    <!-- <div class="text-muted"><small>Joined 09 Dec 2017</small></div> -->
                  </div>
                </div>
              </div>

              <ul class="nav nav-tabs">
                <li class="nav-item"><a href="" class="active nav-link">Lahan</a></li>

              </ul>
              <div class="tab-content pt-3">
                <div class="tab-pane active">
                  <form class="form" novalidate="">
                    <div class="row">
                      <div class="col">
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                              <label>Jumlah Lahan</label>
                              <input class="form-control" type="text" name="username" placeholder="Username" value="#" readonly>
                            </div>
                          </div>
                          <div class="col">
                            <div class="form-group">
                              <label>Jumlah Tenaga Kerja Musiman</label>
                              
                              
                            </div>
                          </div>
                          
                        </div>
                      
                        
                        
                        <div class="row">
                          
                        
                       
                        <div class="row">
                          <div class="col">
                            <div class="form-group">
                            
                          </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    </div>
                    <div class="row">
                      <div class="col d-flex justify-content-end">
                        <a href="#" class="btn btn-primary btn-lg" style="margin-left: 850px;" >Ubah Profile</a>
                      </div>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


@endsection