<html lang="tr">
    <head>
        <meta charset="utf-8">
        <title>KARACA</title>
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="stylesheet" href=" {{('css/bootstrap/bootstrap.min.css')}}">
        <link rel="stylesheet" href=" {{('css/heroic-features.css')}}">
        
    </head>
    <body>
        @yield('content')
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
            <a class="navbar-brand" href="/">TWİNS SOFTWARE</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">                     
                        <a class="nav-link"  
                            data-toggle="modal" data-target="#exampleModal"
                            href="/">Giriş Yap 
                            <span class="sr-only">(current)</span>
                        </a>
                    </li> 
                    <li class="nav-item active">                     
                            <a class="nav-link"  
                                data-toggle="modal" data-target="#exampleModal2"
                                href="/">Üye Ol
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>           
                </ul>
            </div>
            </div>
        </nav>

        <!-- giriş yap modal -->
        <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Giriş Ekranı</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form action="{{url('/giris')}}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                        <input type="text"  class="form-control" name="login_email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                        <input type="password" class="form-control" name="login_sifre">
                        </div>
                    </div>           
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">İptal</button>
                    <button type="submit" class="btn btn-primary">Giriş</button>
                </div>
                </form>
                </div>
            </div>
        </div>

        <!-- üye ol modal -->
        <div class="modal fade bd-example-modal-lg" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Üye Ol Ekranı</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form action="{{url('/kayit')}}" method="POST">
                    {{ csrf_field() }} 
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">İsim</label>
                        <div class="col-sm-10">
                        <input type="text"  class="form-control" name="login_isim">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                        <input type="text"  class="form-control" name="login_email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                        <input type="password" class="form-control" name="login_sifre">
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
    </body>

    <!-- Bootstrap core JavaScript -->
    <script src="{{('js/jquery/jquery.min.js')}}"></script>
    <script src="{{('js/bootstrap/bootstrap.bundle.min.js')}}"></script>

</html>