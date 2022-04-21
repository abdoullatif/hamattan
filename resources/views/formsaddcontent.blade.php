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
                            <h4>Ajouter du contenue a un livre</h4>
                            <!--<span class="ml-1">ajout</span>-->
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Catalogue</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Livre</a></li>
                        </ol>
                    </div>
                </div>
                <!-- end -->

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
                                <h4 class="card-title">Ajoue de contenue</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="{{ route('livres.store.content') }}" method="post" enctype="multipart/form-data" >
                                        @csrf
                                        <!--
                                        <div class="form-group">
                                            <input type="text" name="theme" class="form-control input-default " placeholder="Theme">
                                        </div>
                                        -->
                                        <div class="form-group">
                                            <label>Selection le livre</label>
                                            <select class="form-control" id="sel1" name="livre_id">
                                                @foreach($livres as $livre)
                                                <option value="{{ $livre->id }}">{{ $livre->titre }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>type de contenue</label>
                                            <select class="form-control" name="categorie" onchange="categorieControl(this.value)" id="sel2">
                                                <option value="Ecriture"> Ecriture </option>
                                                <option value="Audio"> Audio </option>
                                                <option value="Ecriture + Audio"> Ecriture + Audio </option>
                                            </select>
                                        </div>
                                        
                                        <div class="input-group mb-3 pdf">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Livre</span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" name="page" class="custom-file-input">
                                                <label class="custom-file-label">Selectionner un fichier pdf</label>
                                            </div>
                                        </div>

                                        <div class="mp3">
                                            <div class="form-group">
                                                <label>Langue Audio</label>
                                                <select class="form-control" name="langue">
                                                    @foreach($langues as $langue)
                                                    <option value="{{ $langue->id }}">{{ $langue->langue }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Audio</span>
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" name="audio" class="custom-file-input">
                                                    <label class="custom-file-label">Selectionner un fichier mpeg/mpga/mp3/wav</label>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-lg btn-block mt-4 mb-2">Ajouter</button>
                                            <!--<input type="submit" class="form-control input-default " value="Enregistrer">-->
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