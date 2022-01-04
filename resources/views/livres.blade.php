@extends('layouts.apps')

@section('content')

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                <!-- breadcrump -->
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Thematique</h4>
                            <span class="ml-1">Livres</span>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Catalogue</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Livres</a></li>
                        </ol>
                    </div>
                </div>
                <!-- end breadcrump -->


                <!-- card thematique -->
                  <div class="py-2">
                    <div class="row hidden-md-up">
                      <div class="col-md-4">
                        <div class="card">
                          <div class="card-header">
                            <h5 class="card-title">Thematique</h5>
                          </div>
                          <div class="card-body">
                            <img src="{{ asset('uploads/themes/9782343226934b.jpg') }}" alt="" width="100%" height="" />
                          </div>
                          <div class="card-footer">
                            <p class="card-text d-inline">Voir</p>
                            <a href="javascript:void()" class="card-link float-right">Modifier</a>
                          </div>
                          <!--
                          <div class="card-block">
                            <h4 class="card-title">Thematique</h4>
                            <h6 class="card-subtitle text-muted">Support card subtitle</h6>
                            <p class="card-text p-y-1">Some quick example text to build on the card title .</p>
                            <img src="{{ asset('uploads/themes/9782343226934b.jpg') }}" alt="" width="100%" height="" /></br>
                            <a href="#" class="card-link">link</a>
                            <a href="#" class="card-link">Second link</a>
                          </div>
                          -->
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="card">
                          <div class="card-header">
                            <h5 class="card-title">Thematique</h5>
                          </div>
                          <div class="card-body">
                            <img src="{{ asset('uploads/themes/9782343227382b.jpg') }}" alt="" width="100%" height="" />
                          </div>
                          <div class="card-footer">
                            <p class="card-text d-inline">Voir</p>
                            <a href="javascript:void()" class="card-link float-right">Modifier</a>
                          </div>
                          <!--
                          <div class="card-block">
                            <h4 class="card-title">Thematique</h4>
                            <h6 class="card-subtitle text-muted">Support card subtitle</h6>
                            <p class="card-text p-y-1">Some quick example text to build on the card title .</p>
                            <img src="{{ asset('uploads/themes/9782343226934b.jpg') }}" alt="" width="100%" height="" /></br>
                            <a href="#" class="card-link">link</a>
                            <a href="#" class="card-link">Second link</a>
                          </div>
                          -->
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="card">
                          <div class="card-header">
                            <h5 class="card-title">Thematique</h5>
                          </div>
                          <div class="card-body">
                            <img src="{{ asset('uploads/themes/9782343228846b.jpg') }}" alt="" width="100%" height="" />
                          </div>
                          <div class="card-footer">
                            <p class="card-text d-inline">Voir</p>
                            <a href="javascript:void()" class="card-link float-right">Modifier</a>
                          </div>
                          <!--
                          <div class="card-block">
                            <h4 class="card-title">Thematique</h4>
                            <h6 class="card-subtitle text-muted">Support card subtitle</h6>
                            <p class="card-text p-y-1">Some quick example text to build on the card title .</p>
                            <img src="{{ asset('uploads/themes/9782343226934b.jpg') }}" alt="" width="100%" height="" /></br>
                            <a href="#" class="card-link">link</a>
                            <a href="#" class="card-link">Second link</a>
                          </div>
                          -->
                        </div>
                      </div>
                    </div>
                    <!--
                    <br>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="card">
                          <div class="card-block">
                            <h4 class="card-title">Card title</h4>
                            <h6 class="card-subtitle text-muted">Support card subtitle</h6>
                            <p class="card-text p-y-1">Some quick example text to build on the card title .</p>
                            <a href="#" class="card-link">link</a>
                            <a href="#" class="card-link">Second link</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="card">
                          <div class="card-block">
                            <h4 class="card-title">Card title</h4>
                            <h6 class="card-subtitle text-muted">Support card subtitle</h6>
                            <p class="card-text p-y-1">Some quick example text to build on the card title .</p>
                            <a href="#" class="card-link">link</a>
                            <a href="#" class="card-link">Second link</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="card">
                          <div class="card-block">
                            <h4 class="card-title">Card title</h4>
                            <h6 class="card-subtitle text-muted">Support card subtitle</h6>
                            <p class="card-text p-y-1">Some quick example text to build on the card title .</p>
                            <a href="#" class="card-link">link</a>
                            <a href="#" class="card-link">Second link</a>
                          </div>
                        </div>
                      </div>
                    </div>-->
                  </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

@endsection