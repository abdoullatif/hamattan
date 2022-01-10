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
                            <h4>Inscription</h4>
                            <!--<span class="ml-1"></span>-->
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Utilisateur</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">inscription</a></li>
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

                <div class="container">
                    <div class="card">
                            <div class="card-header">
                                <h4 class="card-title text-center">Enregistrement</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="{{ route('register.add') }}" method="post" enctype="multipart/form-data" >
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" name="nom" class="form-control input-default " placeholder="nom">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="prenom" class="form-control input-default " placeholder="prenom">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control input-default " placeholder="email">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control input-default " placeholder="Mot de passe">
                                        </div>
                                        <div class="form-group">
                                            <label>Privillege</label>
                                            <select class="form-control" name="role" id="sel1">
                                                <option value="admin">Administrateur</option>
                                                <option value="user">Utilisateur</option>
                                            </select>
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Avatar</span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" name="avatar" class="custom-file-input">
                                                <label class="custom-file-label">Selectionner une image</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-lg btn-block mt-4 mb-2">Enregistrer</button>
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

@endsection