<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
{{-- <link rel="stylesheet" href="{{ asset('scss/adminsScss/MDBootstrap.scss') }}"> --}}


{{-- user_profile --}}
<link rel="stylesheet" href="{{ asset('css/adminCss/user_profile.css') }}">


{{-- data-table   --}}
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">


<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css"
  rel="stylesheet"
/>


<link rel="stylesheet" href="{{ asset('css/adminCss/MDBootstrap.css') }}">

<link rel="stylesheet" href="{{ asset('css/adminCss/classes.css') }}">

    <title>Admin Panel</title>
</head>

<style>
    body {
    background-color: #fbfbfb;
  }
  @media (min-width: 991.98px) {
    main {
      padding-left: 240px;
    }
  }
  
  /* Sidebar */
  .sidebar {
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    padding: 58px 0 0; /* Height of navbar */
    box-shadow: 0 2px 5px 0 rgb(0 0 0 / 5%), 0 2px 10px 0 rgb(0 0 0 / 5%);
    width: 240px;
    z-index: 600;
  }
  
  @media (max-width: 991.98px) {
    .sidebar {
      width: 100%;
    }
  }
  .sidebar .active {
    border-radius: 5px;
    box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
  }
  
  .sidebar-sticky {
    position: relative;
    top: 0;
    height: calc(100vh - 48px);
    padding-top: 0.5rem;
    overflow-x: hidden;
    overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
  }
</style>  

  {{-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet"> --}}
  <livewire:styles />

<body>
    <header>
     @include('layouts.inc.admin_nav')
     @include('layouts.inc.adminsidebar')
    </header>


    <main style="margin-top: 58px">


        @yield('content')

        <!--Section: Statistics with subtitles-->
    
    
    </main>
    <!--Main layout-->


<livewire:scripts />





{{-- <script src="{{asset('js/AdminJs/MDBootstrap.js')}}"></script> --}}
<script src="{{asset('js/AdminJs/bootstrap.js')}}"></script>

<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>

<!-- DATA-TABLE -->

    
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>

{{-- QJUERY --}}

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>


<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"
></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script>

window.addEventListener('show-form', event => {
  $('#form').modal('show');
})

window.addEventListener('hide-form', event => {
  $('#form').modal('hide');
})


window.addEventListener('confirm-delete-model', event => {
  $('#confirmModal').modal('show');
})

window.addEventListener('hide-delete-form', event => {
  $('#confirmModal').modal('hide');
})



// class models 

window.addEventListener('show-class-form', event => {
  $('#clasForm').modal('show');
})

window.addEventListener('hide-class-form', event => {
  $('#classForm').modal('hide');
})


window.addEventListener('confirm-class-delete-model', event => {
  $('#confirmClassModal').modal('show');
})

window.addEventListener('hide-class-delete-form', event => {
  $('#confirmClassModal').modal('hide');
})






</script>

</body>
</html>