@extends('admin.layouts.admin_base')

@section('content')
    

    <a href="#" class="btn btn-light btn-sm">&laquo; Go Back</a>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <br>
                <div class="card">

                    <div class="card-body">
                        <div class="card-title mb-4">
                            <div class="d-flex justify-content-start">
                                <div class="userData ml-3">
                                    <h2 class="d-block">Pendataan Wilayah</h2>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown">
                            <button class="btn btn-primary float-right dropdown-toggle" type="button" 
                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Action
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="">Edit</a>
                              <div class="dropdown-divider"></div>
                                
                            </div>
                          </div>

                        <div class="row">
                            <div class="col-12">
                                <ul class="nav nav-tabs nav-fill mb-4" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="fa fa-2x fa-list" href="DataWilayah.php"> Daftar Wilayah</a>
                                        <br><br>
                                    </li>
                                </ul>
                                <div class="tab-content ml-1" id="myTabContent">
                                    <div class="tab-pane fade show active" id="basicInfo" role="tabpanel" aria-labelledby="basicInfo-tab">
                                        <div class="form-group">
                                    <div class="row">
                                      <div class="col-md-5">
                                    <label class="control-label">Nama Desa / Kelurahan *</label>
                                    <input class="form-control" name="nama_desa" placeholder="Nama Desa / Kelurahan" type="text" required>
                                      </div>
                                    </div>
                                        
                                        <div class="row">
                                         <div class="col-md-5">
                                        <label class="control-label">Nama Kecamatan *</label>
                                         <select class="form-control" name="nama_kec" required>
                                            <option value="" disabled selected> Nama Kecamatan </option>
                                        </select>

                                      </div>
                          <br>
                         
                            <div class="col-md-6"> 
                                  <a class="btn btn-md btn-primary btn-sm" href="Kecamatan.php" style="margin-top: 33px;">Tambah Kecamatan</a>
                            </div>
                          </div>
                          </div>
                           <div class="row">
                                         <div class="col-md-5">
                                        <label class="control-label">Nama Kabupaten *</label>
                                         <select class="form-control" name="nama_kec" required>
                                            <option value="" disabled selected> Nama Kabupaten </option>
                                        </select>

                                      </div>
                          <br>
                         
                            <div class="col-md-6"> 
                                  <a class="btn btn-md btn-primary btn-sm" href="Kecamatan.php" style="margin-top: 33px;">Tambah Kabupaten</a>
                            </div>
                          </div>
                          </div>
                          <div class="row">
                                         <div class="col-md-5">
                                        <label class="control-label">Nama Provinsi *</label>
                                         <select class="form-control" name="nama_kec" required>
                                            <option value="" disabled selected> Nama Provinsi </option>
                                        </select>

                                      </div>
                          <br>
                         
                            <div class="col-md-6"> 
                                  <a class="btn btn-md btn-primary btn-sm" href="Kecamatan.php" style="margin-top: 33px;">Tambah Provinsi</a>
                            </div>
                          </div>
                          </div>
                          
                                        
                          
                            
                                  <a class="btn btn-md btn-success" href="Kecamatan.php" style="margin-top: 20px;">Simpan</a>
                            
                          
                          </div>



                                       
                                </div>
                            </div>
                        </div>
                    </div> {{-- CARD --}}

                </div>
            </div>
        </div>
    </div>

    
@endsection


