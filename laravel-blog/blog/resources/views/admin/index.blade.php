<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>KARACA</title>

    <!-- Custom fonts for this template-->
    <link href="{{('css/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">

    <!-- Page level plugin CSS-->
    <link href="{{('css/vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{('css/sb-admin.css')}}" rel="stylesheet">

</head>

<body id="page-top">

<a style="float:right;" href="{{URL::to('/logout')}}"><i class="icon-signout"></i>Çıkış</a>
<nav class="navbar navbar-expand navbar-dark bg-dark static-top">
    <a class="navbar-brand mr-1" style="text-transform:capitalize;" href="/">{{Session::get('login_isim')}}</a>
</nav>

<button type="button" class="btn btn-primary btn-sm" style="margin:15px;" 
    data-toggle="modal" data-target="#exampleModal">Ürün Ekle</button>

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
        <form action="/urun_ekle" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="modal-body">
            <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Kategori</span>
                </div>
                <select class="form-control" name="urun_kategori">
                    <option selected> Masaüstü </option>
                    <option> Dizüstü </option>
                </select>
            </div>

            <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Marka</span>
                </div>
                <input type="text" class="form-control" name="urun_marka">
            </div>

            <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">İşlemci</span>
                </div>
                <input type="text" class="form-control" name="urun_islemci">
            </div>

            <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">RAM</span>
                </div>
                <input type="text" class="form-control" name="urun_ram">
            </div>

            <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Sabit Disk</span>
                </div>
                <input type="text" class="form-control" name="urun_disk">
            </div>

            <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Ekran Kartı</span>
                </div>
                <input type="text" class="form-control" name="urun_ekran">
            </div>

            <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Garanti</span>
                </div>
                <select class="form-control" name="urun_garanti">
                    <option selected> Var </option>
                    <option> Yok </option>
                </select>
            </div>

            <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Durumu</span>
                </div>
                <select class="form-control" name="urun_durum">
                    <option selected> Sıfır </option>
                    <option> İkinci El </option>
                </select>
            </div>

            <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Kimden</span>
                </div>
                <input type="text" class="form-control" name="urun_kimden">
            </div>

            <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Adres</span>
                </div>
                <input type="text" class="form-control" name="urun_adres">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupFileAddon01">Resim</span>
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="urun_resim">
                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                </div>
            </div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">İptal</button>
            <button type="submit" class="btn btn-success">Kaydet</button>
        </div>
        </form>
        </div>
    </div>
</div>

<div class="container-fluid">
<!-- DataTables Example -->
    <div class="card mb-3">
        <div class="card-header">
        <i class="fas fa-table"></i>
        Data Table Example
        </div>
        <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
                </tr>  
            </tbody>
            </table>
        </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->


<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>

<!-- Bootstrap core JavaScript-->
<script src="{{('css/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{('css/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{('css/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Page level plugin JavaScript-->
<script src="{{('css/vendor/chart.js/Chart.min.js')}}"></script>
<script src="{{('css/vendor/datatables/jquery.dataTables.js')}}"></script>
<script src="{{('css/vendor/datatables/dataTables.bootstrap4.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{('js/sb-admin.min.js')}}"></script>

<!-- Demo scripts for this page-->
<script src="{{('js/demo/datatables-demo.js')}}"></script>
<script src="{{('js/demo/chart-area-demo.js')}}"></script>

</body>

</html>
