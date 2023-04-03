<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Smarthr - Bootstrap Admin Template">
    <meta name="keywords"
        content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
    <meta name="author" content="Dreamguys - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>Employees - HRMS admin template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('../assets/css/bootstrap.min.css') }}">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('../assets/css/font-awesome.min.css') }}">

    <!-- Lineawesome CSS -->
    <link rel="stylesheet" href="{{ asset('../assets/css/line-awesome.min.css') }}">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ asset('../assets/css/select2.min.css') }}">

    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="{{ asset('../assets/css/bootstrap-datetimepicker.min.css') }}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('../assets/css/style.css') }}">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
   <script src="assets/js/html5shiv.min.js"></script>
   <script src="assets/js/respond.min.js"></script>
  <![endif]-->
</head>

<body>
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="Smarthr - Bootstrap Admin Template">
    <meta name="keywords"
        content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
    <meta name="author" content="Dreamguys - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>Employees - HRMS admin template</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('../assets/css/bootstrap.min.css') }}">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('../assets/css/font-awesome.min.css') }}">

    <!-- Lineawesome CSS -->
    <link rel="stylesheet" href="{{ asset('../assets/css/line-awesome.min.css') }}">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ asset('../assets/css/select2.min.css') }}">

    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="{{ asset('../assets/css/bootstrap-datetimepicker.min.css') }}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('../assets/css/style.css') }}">

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
				
        <!-- Page Content -->
        <div class="content container-fluid">
        
            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">{{ $objectif->titre }}</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Objectif</li>
                        </ul>
                    </div>
                    <div class="col-auto float-right ml-auto">
                       

                        <form  action="{{route('delete.objectif',$objectif->id)}}" method="POST">
                            <a href="{{ route('admin.objectifUpdate',$objectif->id) }}" class="btn add-btn" ><i class="fa fa-plus"></i> Modifier l'objectif</a>
                            @csrf
                            @method('DELETE')
                            <a class="btn btn-warning" type="submit"><i class="fa fa-trash-o m-r-5"></i> Supprimer </a>
                        </form>
                        

                    </div>
                </div>
            </div>
            <!-- /Page Header -->
            
            <div class="row">
                <div class="col-lg-8 col-xl-9">
                    <div class="card">
                        <div class="card-body">
                            <div class="project-title">
                                <h5 class="card-title">{{ $objectif->titre }}</h5>
                                <small class="block text-ellipsis m-b-15"><span class="text-xs">2</span> <span class="text-muted">Taches ouvertes, </span><span class="text-xs">5</span> <span class="text-muted">tasks completed</span></small>
                            </div>
                            {{ $objectif->description }}
                        </div>
                    </div>
                   
                
                    <div class="project-task">
                        <ul class="nav nav-tabs nav-tabs-top nav-justified mb-0">
                            <li class="nav-item"><a class="nav-link active" href="#all_tasks" data-toggle="tab" aria-expanded="true">Toutes les taches</a></li>
                            <li class="nav-item"><a class="nav-link" href="#pending_tasks" data-toggle="tab" aria-expanded="false">Taches en attente </a></li>
                            <li class="nav-item"><a class="nav-link" href="#completed_tasks" data-toggle="tab" aria-expanded="false">Taches terminé</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane show active" id="all_tasks">
                                <div class="task-wrapper">
                                    <div class="task-list-container">
                                        <div class="task-list-body">
                                            <ul id="task-list">
                                                @foreach ($tache_all as $tache_alls) 
                                                <li class="task">
                                                    <div class="task-container">
                                                        
                                                        <span class="task-label" contenteditable="true"> {{ $tache_alls->libele }}</span>
                                                        <span class="task-label" contenteditable="true">{{ $tache_alls->date_fin }}</span>
                                                        

                                                        
                                                    </div>
                                                </li>
                                                @endforeach 
                                            </ul>
                                        </div>
                                        <div class="task-list-footer">
                                            <div class="new-task-wrapper">
                                                <textarea  id="new-task" placeholder="Enter new task here. . ."></textarea>
                                                <span class="error-message hidden">You need to enter a task first</span>
                                                <span class="add-new-task-btn btn" id="add-task">Add Task</span>
                                                <span class="btn" id="close-task-panel">Close</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="pending_tasks">

                                <div class="task-wrapper">
                                    <div class="task-list-container">
                                        <div class="task-list-body">
                                            <ul id="task-list">
                                                @foreach ($pending_tasks as $pending_task) 
                                                <li class="task">
                                                    <div class="task-container">
                                                        
                                                        <span class="task-label" contenteditable="true"> {{ $pending_task->libele }}</span>
                                                        <span class="task-label" contenteditable="true">Deadline: {{ $pending_task->date_fin }}</span>
                                                        
                                                        <form action="" method="post">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" name='status' {{ $pending_task->status }}>
                                                           
                                                            </div>
                                                        </form>
                                                    </div>
                                                </li>
                                                @endforeach 
                                            </ul>
                                        </div>
                                        <div class="task-list-footer">
                                            <div class="new-task-wrapper">
                                                <textarea  id="new-task" placeholder="Enter new task here. . ."></textarea>
                                                <span class="error-message hidden">You need to enter a task first</span>
                                                <span class="add-new-task-btn btn" id="add-task">Add Task</span>
                                                <span class="btn" id="close-task-panel">Close</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="completed_tasks">
                                <div class="task-wrapper">
                                    <div class="task-list-container">
                                        <div class="task-list-body">
                                            <ul id="task-list">
                                                @foreach ($completed_tasks as $completed_task) 
                                                <li class="task">
                                                    <div class="task-container">
                                                        
                                                        <span class="task-label" contenteditable="true"> {{ $completed_task->libele }}</span>
                                                        <span class="task-label" contenteditable="true">Deadline: {{ $completed_task->date_fin }}</span>
                                                        

                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckCheckedDisabled" {{ $completed_task->date_fin }} >

                                                           
                                                          </div>
                                                    </div>
                                                </li>
                                                @endforeach 
                                            </ul>
                                        </div>
                                        <div class="task-list-footer">
                                            <div class="new-task-wrapper">
                                                <textarea  id="new-task" placeholder="Enter new task here. . ."></textarea>
                                                <span class="error-message hidden">You need to enter a task first</span>
                                                <span class="add-new-task-btn btn" id="add-task">Add Task</span>
                                                <span class="btn" id="close-task-panel">Close</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title m-b-15">Detail de l'Objectif</h6>
                            <table class="table table-striped table-border">
                                <tbody>
                                    
                                   
                                    <tr>
                                        <td>Debut:</td>
                                        <td class="text-right">{{ $objectif->date_debut }}</td>
                                    </tr>
                                    <tr>
                                        <td>fin:</td>
                                        <td class="text-right">{{ $objectif->date_fin }}</td>
                                    </tr>
                                    <tr>
                                        <td>Statut:</td>
                                        <td class="text-right">
                                            <div class="btn-group">
                                                <a href="#" class="badge badge-danger " >{{ $objectif->status }}</a>
                                                
                                            </div>
                                        </td>
                                    </tr>
                                   
                                    
                                </tbody>
                            </table>
                            <p class="m-b-5">Progression <span class="text-success float-right">{{ $objectif->progression}}%</span></p>
                            <div class="progress progress-xs mb-0">
                                <div class="progress-bar bg-success" role="progressbar" data-toggle="tooltip" title="{{ $objectif->progression }}%" style="width: {{ $objectif->progression }}%"></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card project-user">
                        <div class="card-body">
                            <h6 class="card-title m-b-20">
                                Utilisateur Assignés 
                                <button type="button" class="float-right btn btn-primary btn-sm" data-toggle="modal" data-target="#assigner_user"><i class="fa fa-plus"></i> Add</button>
                            </h6>
                            <ul class="list-box">
                                
                                @foreach ($user_obj as $user_objs)
                                <li>
                                    <a href="profile.html">
                                        <div class="list-item">
                                            <div class="list-left">
                                               <a href=""><span class="avatar"><img alt="" src="{{ $user_objs->avatar }}"></span></a> 
                                            </div>
                                            <div class="list-body">
                                                
                                                    
                                               
                                                <span class="message-author">{{ $user_objs->prenom }}</span>
                                                <div class="clearfix"></div>
                                                <span class="message-content">{{$user_objs->poste}}</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                @endforeach
                             
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Content -->
        
       
        
        <!-- Assign User Modal -->
        <div id="assigner_user" class="modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Assigner des utilisateur a l'Objectif</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="input-group m-b-30">
                            <input placeholder="Search a user to assign" class="form-control search-input" type="text">
                            <span class="input-group-append">
                                <button class="btn btn-primary">Search</button>
                            </span>
                        </div>
                        <div>
                            
                            <ul class="chat-user-list">
                                @foreach ($liste_user as $liste_users)
                                    
                                
                                <li>
                                    <a href="#">
                                        <div class="media">
                                            <span class="avatar">
                                                <img alt="{{ route('admin.objectifViewAssigner',$liste_users->id)}}" src="{{ $liste_users->avatar }} ">
                                            </span>
                                            <div class="media-body align-self-center text-nowrap">
                                                <div class="user-name"><a href="{{route('admin.objectifView',$liste_users->id)}}">{{ $liste_users->name }} {{ $liste_users->prenom }}</a>    </div>
                                                <span class="designation">{{ $liste_users->poste }}</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary submit-btn">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Assign User Modal -->
        
        <!-- Edit Project Modal -->
        <div id="edit_project" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Project</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Titre de l'objectif</label>
                                        <input class="form-control" value="Project Management" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Client</label>
                                        <select class="select">
                                            <option>Global Technologies</option>
                                            <option>Delta Infotech</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Start Date</label>
                                        <div class="cal-icon">
                                            <input class="form-control datetimepicker" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>End Date</label>
                                        <div class="cal-icon">
                                            <input class="form-control datetimepicker" type="text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Rate</label>
                                        <input placeholder="$50" class="form-control" value="$5000" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>&nbsp;</label>
                                        <select class="select">
                                            <option>Hourly</option>
                                            <option selected>Fixed</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Priority</label>
                                        <select class="select">
                                            <option selected>High</option>
                                            <option>Medium</option>
                                            <option>Low</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Add Project Leader</label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Team Leader</label>
                                        <div class="project-members">
                                            <a class="avatar" href="#" data-toggle="tooltip" title="Jeffery Lalor">
                                                <img alt="" src="assets/img/profiles/avatar-16.jpg">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Add Team</label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Team Members</label>
                                        <div class="project-members">
                                            <a class="avatar" href="#" data-toggle="tooltip" title="John Doe">
                                                <img alt="" src="assets/img/profiles/avatar-02.jpg">
                                            </a>
                                            <a class="avatar" href="#" data-toggle="tooltip" title="Richard Miles">
                                                <img alt="" src="assets/img/profiles/avatar-09.jpg">
                                            </a>
                                            <a class="avatar" href="#" data-toggle="tooltip" title="John Smith">
                                                <img alt="" src="assets/img/profiles/avatar-10.jpg">
                                            </a>
                                            <a class="avatar" href="#" data-toggle="tooltip" title="Mike Litorus">
                                                <img alt="" src="assets/img/profiles/avatar-05.jpg">
                                            </a>
                                            <span class="all-team">+2</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea rows="4" class="form-control" placeholder="Enter your message here"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Upload Files</label>
                                <input class="form-control" type="file">
                            </div>
                            <div class="submit-section">
                                <button class="btn btn-primary submit-btn">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Edit Project Modal -->
        
    </div>
    <!-- /Page Wrapper -->

    </div>
    <!-- /Main Wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('../assets/js/jquery-3.5.1.min.js') }}"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ asset('../assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('../assets/js/bootstrap.min.js') }}"></script>

    <!-- Slimscroll JS -->
    <script src="{{ asset('../assets/js/jquery.slimscroll.min.js') }}"></script>

    <!-- Select2 JS -->
    <script src="{{ asset('../assets/js/select2.min.js') }}"></script>

    <!-- Datetimepicker JS -->
    <script src="{{ asset('../assets/js/moment.min.js') }}"></script>
    <script src="{{ asset('../assets/js/bootstrap-datetimepicker.min.js') }}"></script>

    <!-- Custom JS -->
    <script src="{{ asset('../assets/js/app.js') }}"></script>

</body>

</html>


