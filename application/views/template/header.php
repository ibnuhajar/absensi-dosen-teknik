<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?= $judul; ?></title>

	<!-- Bootstrap CDN -->
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" /> -->
	<!-- Font Awesome CDN -->
	<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" /> -->
	<!-- Bootstrap-Iconpicker -->
	<!-- <link rel="stylesheet" href="dist/css/bootstrap-iconpicker.min.css" /> -->

	<!-- favicon -->
	<link rel="apple-touch-icon" sizes="57x57" href="<?= base_url('asserts/favicon/apple-icon-57x57.png') ?>">
	<link rel="apple-touch-icon" sizes="60x60" href="<?= base_url('asserts/favicon/apple-icon-60x60.png') ?>">
	<link rel="apple-touch-icon" sizes="72x72" href="<?= base_url('asserts/favicon/apple-icon-72x72.png') ?>">
	<link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('asserts/favicon/apple-icon-76x76.png') ?>">
	<link rel="apple-touch-icon" sizes="114x114" href="<?= base_url('asserts/favicon/apple-icon-114x114.png') ?>">
	<link rel="apple-touch-icon" sizes="120x120" href="<?= base_url('asserts/favicon/apple-icon-120x120.png') ?>">
	<link rel="apple-touch-icon" sizes="144x144" href="<?= base_url('asserts/favicon/apple-icon-144x144.png') ?>">
	<link rel="apple-touch-icon" sizes="152x152" href="<?= base_url('asserts/favicon/apple-icon-152x152.png') ?>">
	<link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('asserts/favicon/apple-icon-180x180.png') ?>">
	<link rel="icon" type="image/png" sizes="192x192" href="<?= base_url('assets/favicon/android-icon-192x192.png') ?>">
	<link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('assets/favicon/favicon-32x32.png') ?>">
	<link rel="icon" type="image/png" sizes="96x96" href="<?= base_url('assets/favicon/favicon-96x96.png') ?>">
	<link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/favicon/favicon-16x16.png') ?>">

	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">


	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="<?= base_url('assets/adminLTE/'); ?>bower_components/bootstrap/dist/css/bootstrap.min.css">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?= base_url('assets/adminLTE/'); ?>bower_components/font-awesome/css/font-awesome.min.css">

	<!-- Ionicons -->
	<link rel="stylesheet" href="<?= base_url('assets/adminLTE/'); ?>bower_components/Ionicons/css/ionicons.min.css">

	<!-- Theme style -->
	<link rel="stylesheet" href="<?= base_url('assets/adminLTE/'); ?>dist/css/AdminLTE.min.css">

	<!-- DataTables -->
	<link rel="stylesheet" href="<?= base_url('assets/adminLTE/'); ?>bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css" />

	<!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="<?= base_url('assets/adminLTE/'); ?>dist/css/skins/_all-skins.min.css">

	<!-- Morris chart -->
	<link rel="stylesheet" href="<?= base_url('assets/adminLTE/'); ?>bower_components/morris.js/morris.css">

	<!-- jvectormap -->
	<link rel="stylesheet" href="<?= base_url('assets/adminLTE/'); ?>bower_components/jvectormap/jquery-jvectormap.css">

	<!-- Date Picker -->
	<link rel="stylesheet" href="<?= base_url('assets/adminLTE/'); ?>bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">

	<!-- Daterange picker -->
	<link rel="stylesheet" href="<?= base_url('assets/adminLTE/'); ?>bower_components/bootstrap-daterangepicker/daterangepicker.css">

	<!-- bootstrap wysihtml5 - text editor -->
	<link rel="stylesheet" href="<?= base_url('assets/adminLTE/'); ?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

	<!-- Google Font -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

	<style>
		.example-modal .modal {
			position: relative;
			top: auto;
			bottom: auto;
			right: auto;
			left: auto;
			display: block;
			z-index: 1;
		}

		.example-modal .modal {
			background: transparent !important;
		}
	</style>
</head>

<body class="hold-transition skin-blue sidebar-mini">
