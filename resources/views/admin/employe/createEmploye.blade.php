<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <meta name="robots" content="noindex, nofollow">
        <title>Employees - HRMS admin template</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('../assets/img/favicon.png')}}">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('../assets/css/bootstrap.min.css')}}">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="{{asset('../assets/css/font-awesome.min.css')}}">
		
		<!-- Lineawesome CSS -->
        <link rel="stylesheet" href="{{asset('../assets/css/line-awesome.min.css')}}">
		
		<!-- Select2 CSS -->
		<link rel="stylesheet" href="{{asset('../assets/css/select2.min.css')}}">
		
		<!-- Datetimepicker CSS -->
		<link rel="stylesheet" href="{{asset('../assets/css/bootstrap-datetimepicker.min.css')}}">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="{{asset('../assets/css/style.css')}}">
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body>
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
            <!-- Header -->
           @include('partials/header')
            <!-- /Header -->
            
            <!-- Sidebar -->
           @include('partials.sidebar')
            <!-- /Sidebar -->

			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Employé</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item active">Nouveau utilisateur</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<!-- Row -->
					<div class="row">
						<div class="col-sm-12">
						
							<!-- Custom Boostrap Validation -->
							<div class="card">
								
								<div class="card-body">
                                    <div class="alert-alert-danger">
                                        @if (session()->has('success'))
                                        {{session()->get('success')}}
                                    @endif
                                    </div>
									<div class="row">
                                        <div class="col-md-10">
                                            <div class="card mb-0">
                                                <div class="card-header">
                                                    <h4 class="card-title mb-0">Ajouter un nouveau utilisateur</h4>
                                                </div>
                                                <div class="card-body">
                                                   

                                                    @if ($errors->any())
                                                        <div class="alert-alert-danger">
                                                            <ul>
                                                                @foreach ($errors->all() as $error)
                                                                <li>{{$error}}</li>
                                                                @endforeach
                                                                
                                                            </ul>
                                                        </div>
                                                    @endif
                                                   
                                                    <form action="{{route('create.employe')}}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="profile-img-wrap edit-img ">
                                                                <img class="inline-block" src="assets/img/profiles/avatar-02.jpg" alt="user">
                                                                <div class="fileupload btn">
                                                                    <span class="btn-text">Avatar</span>
                                                                    <input class="upload" type="file" name="avatar">
                                                                </div>
                                                                <label class="col-form-label">Avatar <span class="text-danger"></span></label>
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="col-form-label">Matricule <span class="text-danger">*</span></label>
                                                                    <input class="form-control" name="matricule" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="col-form-label">Nom <span class="text-danger">*</span></label>
                                                                    <input class="form-control" name="nom" type="text" value="">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="col-form-label">prenom</label>
                                                                    <input class="form-control" name="prenom" type="text" value="">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="col-form-label">contact <span class="text-danger">*</span></label>
                                                                    <input class="form-control" name="contact" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="col-form-label">Adresse <span class="text-danger">*</span></label>
                                                                    <input class="form-control" name="adresse" type="text">
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="col-form-label">Email <span class="text-danger">*</span></label>
                                                                    <input class="form-control"name="email" type="email" >
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="col-form-label">Password</label>
                                                                    <input class="form-control" name="password" type="password">
                                                                </div>
                                                            </div>
                                                            
                                                            
                                                            <div class="col-sm-6">  
                                                                <div class="form-group">
                                                                    <label class="col-form-label">Date de Naissance <span class="text-danger">*</span></label>
                                                                    <div class="cal-icon"><input class="form-control datetimepicker" type="text" name='date_naissance'> </div>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="col-form-label" >Poste</label>
                                                                    <select class="select" name="poste">
                                                                        <option value="developpeur">developpeur</option>
                                                                        <option value="analyste">analyste</option>
                                                                        <option value="1">analyste</option>
                                                                        <option value="1">analyste</option>
                                                                        <option value="1">analyste</option>
                                                                    </select>
                                                                </div>
                                                                
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Role <span class="text-danger" >*</span></label>
                                                                    <select class="select" name="is_admin">
                                                                        <option>Select Role</option>
                                                                        <option value="1">Administrateur</option>
                                                                        <option value="2">Employe</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="col-form-label" >sexe</label>
                                                                    <select class="select" name="sexe">
                                                                        <option value="feminin">feminin</option>
                                                                        <option value="masculin">masculin</option>
                                                                       
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="submit-section">
                                                            <button class="btn btn-primary submit-btn" type="submit">valider</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
								</div>
							</div>
							<!-- /Custom Boostrap Validation -->
						</div>
					</div>
					<!-- /Row -->
				
				</div>			
			</div>
			
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="{{asset('../assets/js/jquery-3.5.1.min.js')}}"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="{{asset('../assets/js/popper.min.js')}}"></script>
        <script src="{{asset('../assets/js/bootstrap.min.js')}}"></script>
		
		<!-- Slimscroll JS -->
		<script src="{{asset('../assets/js/jquery.slimscroll.min.js')}}"></script>
		
		<!-- Select2 JS -->
		<script src="{{asset('../assets/js/select2.min.js')}}"></script>
		
		<!-- Datetimepicker JS -->
		<script src="{{asset('../assets/js/moment.min.js')}}"></script>
		<script src="{{asset('../assets/js/bootstrap-datetimepicker.min.js')}}"></script>
		
		<!-- Custom JS -->
		<script src="{{asset('../assets/js/app.js')}}"></script>
		
    </body>
</html>