<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="admin_assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="admin_assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="/admin">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>



        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small"
                                placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>



                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Kendaraan -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Daftar Kendaraan</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Model</th>
                                            <th>Type</th>
                                            <th>cc</th>
                                            <th>Warna</th>
                                            <th>Kapasitas Penumpang</th>
                                            <th>Plat Nomor</th>
                                            <th>Deskripsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($vehicles as $vehicle)
                                            <tr>
                                                <td>{{ $vehicle->id }}</td>
                                                <td>{{ $vehicle->model }}</td>
                                                <td>{{ $vehicle->type }}</td>
                                                <td>{{ $vehicle->cc }}</td>
                                                <td>{{ $vehicle->color }}</td>
                                                <td>{{ $vehicle->seating_capacity }}</td>
                                                <td>{{ $vehicle->license_plate }}</td>
                                                <td>{{ $vehicle->description }}</td>
                                            </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Travel -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Pemesanan Travel</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Telepon</th>
                                            <th>Waktu Keberangkatan</th>
                                            <th>Kendaraan</th>
                                            <th>Rute</th>
                                            <th>Lokasi Pick up</th>
                                            <th>Lokasi Drop off</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($travelBookings as $index => $booking)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $booking->name }}</td>
                                                <td>{{ $booking->phone }}</td>
                                                <td>{{ $booking->departure_time }}</td>
                                                <td>{{ $booking->vehicle_model }}</td>
                                                <td>{{ $booking->route_id }}</td>
                                                <td>{{ $booking->pickup_location }}</td>
                                                <td>{{ $booking->dropoff_location }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                    <!-- Rental -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Pemesanan Rental</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Telepon</th>
                                            <th>Opsi PickUp</th>
                                            <th>Alamat PickUp</th>
                                            <th>Opsi Driver</th>
                                            <th>Tanggal Mulai</th>
                                            <th>Tanggal Pengembalian</th>
                                            <th>Kendaraan</th>
                                            <th>Catatan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($rentalBookings as $index => $rbooking)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $rbooking->name }}</td>
                                                <td>{{ $rbooking->phone }}</td>
                                                <td>{{ $rbooking->pickup_option }}</td>
                                                <td>{{ $rbooking->pickup_address }}</td>
                                                <td>{{ $rbooking->driver_option }}</td>
                                                <td>{{ $rbooking->pickup_date }}</td>
                                                <td>{{ $rbooking->return_date }}</td>
                                                <td>{{ $rbooking->vehicle_model }}</td>
                                                <td>{{ $rbooking->catatan }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                    <!-- Mitra -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Kendaraan Mitra</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Telepon</th>
                                            <th>Email</th>
                                            <th>Alamat</th>
                                            <th>No Identitas</th>
                                            <th>Jenis Kendaraan</th>
                                            <th>Merk Model</th>
                                            <th>Tahun Pembuatan</th>
                                            <th>Nomor Polisi</th>
                                            <th>Warna</th>
                                            <th>Kapasitas</th>
                                            <th>Kondisi Fisik</th>
                                            <th>Kapasitas Bagasi</th>
                                            <th>Jarak Tempuh</th>
                                            <th>Dokumen Lengkap</th>
                                            <th>Asuransi</th>
                                            <th>Nomor Asuransi</th>
                                            <th>Masa Berlaku Asuransi</th>
                                            <th>Fitur Keamanan</th>
                                            <th>Ketersediaan Waktu</th>
                                            <th>Rute Disetujui</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($mitraArmadas as $index => $mitra)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $mitra->nama }}</td>
                                                <td>{{ $mitra->telepon }}</td>
                                                <td>{{ $mitra->email }}</td>
                                                <td>{{ $mitra->alamat }}</td>
                                                <td>{{ $mitra->identitas }}</td>
                                                <td>{{ $mitra->jenis_kendaraan }}</td>
                                                <td>{{ $mitra->merk_model }}</td>
                                                <td>{{ $mitra->tahun_pembuatan }}</td>
                                                <td>{{ $mitra->nomor_polisi }}</td>
                                                <td>{{ $mitra->warna_kendaraan }}</td>
                                                <td>{{ $mitra->kapasitas_penumpang }}</td>
                                                <td>{{ $mitra->kondisi_fisik }}</td>
                                                <td>{{ $mitra->kapasitas_bagasi }}</td>
                                                <td>{{ $mitra->jarak_tempuh }}</td>
                                                <td>{{ $mitra->dokumen_lengkap }}</td>
                                                <td>{{ $mitra->jenis_asuransi }}</td>
                                                <td>{{ $mitra->nomor_polis }}</td>
                                                <td>{{ $mitra->masa_berlaku_asuransi }}</td>
                                                <td>{{ $mitra->fitur_keamanan }}</td>
                                                <td>{{ $mitra->ketersediaan_waktu }}</td>
                                                <td>{{ $mitra->rute_disetujui }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>

                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="admin_assets/vendor/jquery/jquery.min.js"></script>
    <script src="admin_assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="admin_assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="admin_assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="admin_assets/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="admin_assets/js/demo/chart-area-demo.js"></script>
    <script src="admin_assets/js/demo/chart-pie-demo.js"></script>

</body>

</html>
