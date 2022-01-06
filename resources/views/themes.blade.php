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
                            <span class="ml-1">Theme</span>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Catalogue</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Thematique</a></li>
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

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Thematique</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>couverture</th>
                                                <th>Thematique</th>
                                                <!--<th>Status</th>
                                                <th>Date</th>-->
                                                <!--<th>Price</th>-->
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($themes as $theme)
                                            <tr>
                                                <th>1</th>
                                                <td><img src="{{ asset('uploads/themes/'.$theme->couverture_theme.'') }}" alt="Thematique" width="100" height="" /></td>
                                                <td>{{ $theme->nom_theme }}</td>
                                                <!--<td><span class="badge badge-primary">Sale</span>
                                                </td>
                                                <td>January 22</td>-->
                                                <!--<td class="color-primary">$21.56</td>-->
                                                <td>
                                                    <span>
                                                        <a href="javascript:void()" class="mr-4" data-toggle="tooltip"
                                                            data-placement="top" title="Edit"><i
                                                                class="fa fa-pencil color-muted"></i> </a>
                                                        <a href="javascript:void()" data-toggle="tooltip"
                                                            data-placement="top" title="Close"><i
                                                                class="fa fa-close color-danger"></i></a>
                                                    </span>
                                                </td>
                                            </tr>
                                            @endforeach
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
        <!--**********************************
            Content body end
        ***********************************-->

@endsection