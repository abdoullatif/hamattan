@extends('layouts.apps')

@section('content')

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                <!-- bread -->
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Ajouter une thematique</h4>
                            <span class="ml-1">ajout</span>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Catalogue</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Theme</a></li>
                        </ol>
                    </div>
                </div>
                <!-- end -->

                <div class="col-xl-6 col-xxl-12">
                    <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Enregistrement de theme</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form>
                                        <div class="form-group">
                                            <input type="text" class="form-control input-default " placeholder="Theme">
                                        </div>
                                        <!--
                                        <div class="form-group">
                                            <label>Selection une categories</label>
                                            <select class="form-control" id="sel1">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                        </div>
                                        -->
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