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

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> Il y a eu des problèmes avec votre entrée.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif

                <div class="col-xl-6 col-xxl-12">
                    <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Enregistrement d'un livre</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="{{ route('livres.add') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" name="titre" class="form-control input-default " placeholder="Titre">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Theme</label>
                                            <select class="form-control" name="theme_id" id="sel1">
                                                @foreach($themes as $theme)
                                                <option value="{{ $theme->id }}">{{ $theme->nom_theme }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Categories</label>
                                            <select class="form-control" name="categorie_id" id="sel1">
                                                @foreach($categories as $categorie)
                                                <option value="{{ $categorie->id }}">{{ $categorie->categorie }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <textarea class="form-control" name="resume_livre" rows="4" id="comment" placeholder="Resumer du livre"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <textarea class="form-control" rows="4" name="biographie_auteur" id="comment" placeholder="Biographie de l'auteur"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control input-default " name="prix" placeholder="prix">
                                        </div>

                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Selectionner une couverture</span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" name="image" class="custom-file-input">
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