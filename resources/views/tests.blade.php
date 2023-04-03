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




  <div class="card">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
      Launch demo modal
    </button>
    
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
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
                                    <img alt="" src="{{ $liste_users->avatar }} ">
                                </span>
                                <div class="media-body align-self-center text-nowrap">
                                    <div class="user-name"><a href="{{route('view',$liste_users->id)}}" name='id'>{{ $liste_users->name }} {{ $liste_users->prenom }}</a>    </div>
                                    <span class="designation">{{ $liste_users->poste }}</span>
                                </div>
                            </div>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
           
        </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
  </div>
 
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


