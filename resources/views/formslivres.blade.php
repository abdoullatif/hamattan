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
                            <h4>Livre</h4>
                            <span class="ml-1">livre</span>
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

                <div class="col-xl-6 col-xxl-12">
                    <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Enregistrement d'un livre</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form>
                                        <div class="form-group">
                                            <input type="text" class="form-control input-default " placeholder="Titre">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Theme</label>
                                            <select class="form-control" id="sel1">
                                                <option>Arts et spectacle</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Categories</label>
                                            <select class="form-control" id="sel1">
                                                <option>Ecrit</option>
                                                <option>Audio</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <textarea class="form-control" rows="4" id="comment" placeholder="Resumer du livre"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <textarea class="form-control" rows="4" id="comment" placeholder="Biographie de l'auteur"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control input-default " placeholder="prix">
                                        </div>

                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Selectionner une couverture</span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input">
                                                <label class="custom-file-label">Choose file</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="form-control input-default " value="Enregistrer">
                                        </div>
                                    </form>
                                </div>
                            </div>
                    </div>
                </div>

            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

@endsection