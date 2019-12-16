
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="x-ua-compatible" content="ie=edge">

<meta name="csrf-token" content="{{ csrf_token() }}">

<title>Share admin</title>

<link rel="stylesheet" href="/css/app.css">

</head>
<body class="hold-transition sidebar-mini">

<div class="wrapper" id="app">

<!-- Navbar -->
  @include('partials.nav')
<!-- /.navbar -->

<!-- Main Sidebar Container -->
  @include('partials.aside')

<!-- Content Wrapper. Contains page content -->


<div class="content-wrapper">
  <!-- Main content -->
  <div class="content">
     
     <router-view></router-view>
     <vue-progress-bar></vue-progress-bar>
     

  </div>
  <!-- /.content -->

</div>
<!-- /.content-wrapper -->

<!-- Main Footer -->
 @include('partials.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

@auth
<script>
window.user = @json(auth()->user())
</script> 
@endauth

<!-- jQuery -->
<script src="/js/app.js"></script>

</body>
</html>
