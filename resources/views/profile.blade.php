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
                            <h4>Profile</h4>
                            <span class="ml-1">utilisateur</span>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Utilisateur</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Profile</a></li>
                        </ol>
                    </div>
                </div>
                <!-- end breadcrump -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="profile">
                            <div class="profile-head">
                                <div class="photo-content">
                                    <div class="cover-photo"></div>
                                    <div class="profile-photo">
                                        <img src="{{ asset('uploads/utilisateur/'.$user[0]->avatar.'') }}" class="img-fluid rounded-circle" alt="">
                                    </div>
                                </div>
                                <div class="profile-info">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-8">
                                            <div class="row">
                                                <div class="col-xl-4 col-sm-4 border-right-1 prf-col">
                                                    <div class="profile-name">
                                                        <h4 class="text-primary">{{ strtoupper($user[0]->nom) }} {{ strtoupper($user[0]->prenom) }}</h4>
                                                        <p>{{ $user[0]->role }}</p>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-sm-4 border-right-1 prf-col">
                                                    <div class="profile-email">
                                                        <h4 class="text-muted">{{ $user[0]->email }}</h4>
                                                        <p>Email</p>
                                                    </div>
                                                </div>
                                                <!-- <div class="col-xl-4 col-sm-4 prf-col">
                                                    <div class="profile-call">
                                                        <h4 class="text-muted">(+1) 321-837-1030</h4>
                                                        <p>Phone No.</p>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end profile header -->

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
                                <h4 class="card-title text-center">Mes informations</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="{{ route('register.add') }}" method="post" enctype="multipart/form-data" >
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" name="nom" class="form-control input-default " value="{{ $user[0]->nom }}" placeholder="nom">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="prenom" class="form-control input-default " value="{{ $user[0]->prenom }}" placeholder="prenom">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control input-default " value="{{ $user[0]->email }}" placeholder="email">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control input-default " value="{{ $user[0]->password }}" placeholder="Mot de passe">
                                        </div>
                                        @if(Auth::user()->role == "admin")
                                        <div class="form-group">
                                            <label>Privillege</label>
                                            <select class="form-control" name="role" id="sel1">
                                                <option value="admin" <?php if($user[0]->role == "admin") echo "selected" ?> >Administrateur</option>
                                                <option value="user" <?php if($user[0]->role == "user") echo "selected" ?> >Utilisateur</option>
                                            </select>
                                        </div>
                                        @endif
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
                                            <button type="submit" class="btn btn-primary btn-lg btn-block mt-4 mb-2">Mettre a jour</button>
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