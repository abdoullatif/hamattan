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
                            <h4>Editer un livre</h4>
                            <!--<span class="ml-1">Theme</span>-->
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Catalogue</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Livre</a></li>
                        </ol>
                    </div>
                </div>
                <!-- end breadcrump -->

                <div class="row">
                    <div class="col-xl-6 col-xxl-12">
                        <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Modifier le livre</h4>
                                </div>
                                <div class="card-body">
                                    <div class="basic-form">
                                        <form action="{{ route('livres.update') }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <input type="text" name="titre" class="form-control input-default " value="{{ $livre[0]->titre }}" placeholder="Titre">
                                            </div>
                                            
                                            <div class="form-group">
                                                <label>Theme</label>
                                                <select class="form-control" name="theme_id" id="sel1">
                                                    @foreach($themes as $theme)
                                                    <option value="{{ $theme->id }}" <?php if($livre[0]->theme_id == $theme->id) echo "selected" ?>>{{ $theme->nom_theme }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Categories</label>
                                                <select class="form-control" name="categorie" onchange="categorieControl(this.value)" id="sel2">
                                                    <option value="Ecriture" <?php if($livre[0]->categorie == "Ecriture") echo "selected" ?> > Ecriture </option>
                                                    <option value="Audio" <?php if($livre[0]->categorie == "Audio") echo "selected" ?> > Audio </option>
                                                    <option value="Ecriture + Audio" <?php if($livre[0]->categorie == "Ecriture + Audio") echo "selected" ?> > Ecriture + Audio </option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label>Type de vente</label>
                                                <select class="form-control" name="type_vente">
                                                    <option value="Standard" <?php if($livre[0]->type_vente == "Standard") echo "selected" ?> > Standard  </option>
                                                    <option value="Promo" <?php if($livre[0]->type_vente == "Promo") echo "selected" ?> > Promo </option>
                                                </select>
                                            </div>

                                            <div class="input-group mb-4 mt-4">
                                                <input type="text" class="form-control" name="prix" value="{{ $livre[0]->prix }}" placeholder="Prix de vente">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">.Gnf</span>
                                                    <!--<span class="input-group-text">0.00</span>-->
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <textarea class="form-control" name="resume_livre" rows="4" id="comment" placeholder="Resumer du livre">{{ $livre[0]->resume_livre }}</textarea>
                                            </div>

                                            <div class="form-group">
                                                <textarea class="form-control" rows="4" name="biographie_auteur" id="comment" placeholder="Biographie de l'auteur">{{ $livre[0]->biographie_auteur }}</textarea>
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

                                            <div class="input-group mb-3 mt-4">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Extraire du livre</span>
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" name="extraire" class="custom-file-input">
                                                    <label class="custom-file-label">Selectionner un fichier pdf</label>
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
                                                <button type="submit" class="btn btn-primary btn-lg btn-block mt-4 mb-2">Mettre a jour</button>
                                                <!--<input type="submit" class="btn btn-primary form-control " value="Enregistrer">-->
                                            </div>
                                        </form>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-xxl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Ressource</h4>
                            </div>
                            <div class="card-body">
                            <div class="table-responsive">
                                    <table class="table table-bordered table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th>Categorie</th>
                                                <th>fichier</th>
                                                <!--<th>Status</th>
                                                <th>Date</th>-->
                                                <!--<th>Price</th>-->
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>Extraire</th>
                                                <td>{{ $livre[0]->extraire }}</td>
                                                <!--<td><span class="badge badge-primary">Sale</span>
                                                </td>
                                                <td>January 22</td>-->
                                                <!--<td class="color-primary">$21.56</td>-->
                                                <td>
                                                    <span>
                                                        <!--<a href="javascript:void()" class="mr-4" data-toggle="tooltip"
                                                            data-placement="top" title="Edit"><i
                                                                class="fa fa-pencil color-muted"></i> </a>-->
                                                        <a href="javascript:void()" data-toggle="tooltip"
                                                            data-placement="top" title="Close"><i
                                                                class="fa fa-close color-danger"></i></a>
                                                    </span>
                                                </td>
                                            </tr>
                                            @if($page->isNotEmpty())
                                            <tr>
                                                <th>Livre Ecrit</th>
                                                <td>{{ $page[0]->page_livre }}</td>
                                                <!--<td><span class="badge badge-primary">Sale</span>
                                                </td>
                                                <td>January 22</td>-->
                                                <!--<td class="color-primary">$21.56</td>-->
                                                <td>
                                                    <span>
                                                        <!--<a href="javascript:void()" class="mr-4" data-toggle="tooltip"
                                                            data-placement="top" title="Edit"><i
                                                                class="fa fa-pencil color-muted"></i> </a>-->
                                                        <a href="javascript:void()" data-toggle="tooltip"
                                                            data-placement="top" title="Close"><i
                                                                class="fa fa-close color-danger"></i></a>
                                                    </span>
                                                </td>
                                            </tr>
                                            @endif
                                            @if($audio->isNotEmpty())
                                            <tr>
                                                <th>Audio</th>
                                                <td>{{ $audio[0]->contenue_audio }}</td>
                                                <!--<td><span class="badge badge-primary">Sale</span>
                                                </td>
                                                <td>January 22</td>-->
                                                <!--<td class="color-primary">$21.56</td>-->
                                                <td>
                                                    <span>
                                                        <!--<a href="javascript:void()" class="mr-4" data-toggle="tooltip"
                                                            data-placement="top" title="Edit"><i
                                                                class="fa fa-pencil color-muted"></i> </a>-->
                                                        <a href="javascript:void()" data-toggle="tooltip"
                                                            data-placement="top" title="Close"><i
                                                                class="fa fa-close color-danger"></i></a>
                                                    </span>
                                                </td>
                                            </tr>
                                            @endif
                                            <!--
                                            <tr>
                                                <th>2</th>
                                                <td>Kolor Tea Shirt For Women</td>
                                                <td><span class="badge badge-success">Tax</span>
                                                </td>
                                                <td>January 30</td>
                                                <td class="color-success">$55.32</td>
                                            </tr>
                                            <tr>
                                                <th>3</th>
                                                <td>Blue Backpack For Baby</td>
                                                <td><span class="badge badge-danger">Extended</span>
                                                </td>
                                                <td>January 25</td>
                                                <td class="color-danger">$14.85</td>
                                            </tr>
                                            -->
                                        </tbody>
                                    </table>
                                </div>
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