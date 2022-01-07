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
                            <h4>Ajouter un livre</h4>
                            <!--<span class="ml-1">Ajouter un livre</span>-->
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
                                            <select class="form-control" name="categorie" onchange="categorieControl(this.value)" id="sel2">
                                                <option value="Ecriture"> Ecriture </option>
                                                <option value="Audio"> Audio </option>
                                                <option value="Ecriture + Audio"> Ecriture + Audio </option>
                                            </select>
                                        </div>

                                        <div class="input-group mb-4 mt-4">
                                            <input type="text" class="form-control"  name="prix" placeholder="Prix de vente">
                                            <div class="input-group-append">
                                                <span class="input-group-text">.Gnf</span>
                                                <!--<span class="input-group-text">0.00</span>-->
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <textarea class="form-control" name="resume_livre" rows="4" id="comment" placeholder="Resumer du livre"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <textarea class="form-control" rows="4" name="biographie_auteur" id="comment" placeholder="Biographie de l'auteur"></textarea>
                                        </div>

                                        <!--
                                        <div class="form-group">
                                            <input type="text" class="form-control input-default " name="prix" placeholder="prix">
                                        </div>
                                        -->

                                        <div class="input-group mb-3 mt-4">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Couverture</span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" name="image" class="custom-file-input">
                                                <label class="custom-file-label">Selectionner un fichier</label>
                                            </div>
                                        </div>

                                        <label>Contenue du livre</label>

                                        <div class="input-group mb-3 pdf">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Contenue PDF</span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" name="page" class="custom-file-input">
                                                <label class="custom-file-label">Selectionner un fichier</label>
                                            </div>
                                        </div>

                                        <div class="input-group mb-3 mp3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Contenue Audio</span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" name="audio" class="custom-file-input">
                                                <label class="custom-file-label">Selectionner un fichier</label>
                                            </div>
                                        </div>

                                        <div class="form-group text-center">
                                            <button type="submit" class="btn btn-primary btn-lg btn-block mt-4 mb-2">Enregistrer</button>
                                            <!--<input type="submit" class="btn btn-primary form-control " value="Enregistrer">-->
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
        <script type="text/javascript">

            //display select content
            var pdf = document.querySelector('.pdf');
            var mp3 = document.querySelector('.mp3');
            var sel2 = document.getElementById('sel2');

            if(sel2.value == "Ecriture"){
                pdf.style.display = "";
                mp3.style.display = "none";
            } else if (sel2.value == "Audio") {
                pdf.style.display = "none";
                mp3.style.display = "";
            } else if (sel2.value == "Ecriture + Audio") {
                pdf.style.display = "";
                mp3.style.display = "";
            } else {
                pdf.style.display = "none";
                mp3.style.display = "none";
            }

            function categorieControl(categorie){
                //alert(categorie);
                var pdf = document.querySelector('.pdf');
                var mp3 = document.querySelector('.mp3');
                //var categorie = document.getElementById('sel2');
                if(categorie == "Ecriture"){
                    pdf.style.display = "";
                    mp3.style.display = "none";
                } else if (categorie == "Audio") {
                    pdf.style.display = "none";
                    mp3.style.display = "";
                } else if (categorie == "Ecriture + Audio") {
                    pdf.style.display = "";
                    mp3.style.display = "";
                } else {
                    pdf.style.display = "none";
                    mp3.style.display = "none";
                }
            }
        </script>

@endsection