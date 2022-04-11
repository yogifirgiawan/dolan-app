<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Collapsible sidebar using Bootstrap 4</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
          integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/contoh.css') }}">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
            integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ"
            crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
            integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY"
            crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <meta name="csrf_token" content="{{csrf_token()}}">
</head>

<body>
<!-- Sidebar Holder -->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3" id="nav">
            <nav id="sidebar">
                <div class="sidebar-header">
                    <a href="#"><img src="{{ asset('image/dplan.png') }}" alt=""></a>
                </div>
                <button type="button" id="sidebarCollapse" class="navbar-btn">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <ul class="list-unstyled components">
                    <li class="act">
                        <div class="hov">
                            <i class='bx bxs-dashboard'></i>
                            <a href="#">Dashboard</a>
                        </div>
                    </li>
                    <li>
                        <div class="hov">
                            <i class='bx bx-book-content'></i>
                            <a href="#">Konten</a>
                        </div>
                    </li>
                    <li>
                        <div class="hov">
                            <i class='bx bxs-user-account'></i>
                            <a href="#">Akun</a>
                        </div>
                    </li>
                    <li>
                        <div class="hov">
                            <i class='bx bx-cart'></i>
                            <a href="#">Transaksi</a>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="col-lg-9" id="banner">
            <h1 class="judul mt-3 mb-5 font-weight-bold">Daftar Konten</h1>
            <h4 class="sub-jdl mt-3 ml-4 font-weight-bold">Banner Halaman Utama</h4>
            <hr class="ml-4" style="border-color: blue;">
            <div class="wrapper">
                <div class="drop-file">
                    <span class="btn-file">Browse File</span>
                    <span class="name-file">or drag and drop files(png)</span>
                    <input type="file" id="file1" name="file" class="input-text" multiple>
                </div>
                <div class="drop-file">
                    <span class="btn-file">Browse File</span>
                    <span class="name-file">or drag and drop files(png)</span>
                    <input type="file" id="1" class="input-text" multiple>
                </div>
                <div class="drop-file">
                    <span class="btn-file">Browse File</span>
                    <span class="name-file">or drag and drop files(png)</span>
                    <input type="file" id="1" class="input-text" multiple>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h4 class="sub-jdl mt-3 ml-4 font-weight-bold">Banner Iklan Wisata</h4>
                    <hr class="ml-4" style="border-color: blue;">
                    <div class="wrapper">
                        <div class="drop-file">
                            <span class="btn-file">Browse File</span>
                            <span class="name-file">or drag and drop files(png)</span>
                            <input type="file" id="1" class="input-text" multiple>
                        </div>
                        <div class="drop-file">
                            <span class="btn-file">Browse File</span>
                            <span class="name-file">or drag and drop files(png)</span>
                            <input type="file" id="1" class="input-text" multiple>
                        </div>
                        <div class="drop-file">
                            <span class="btn-file">Browse File</span>
                            <span class="name-file">or drag and drop files(png)</span>
                            <input type="file" id="1" class="input-text" multiple>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Content Holder -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script type="text/javascript">
    $(document).ready(function () {
        let navbarState = true;
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
            $(this).toggleClass('active');
            if (navbarState) {
                $('#nav').removeClass('col-md-3').addClass('col-md-2')
                $('#banner').removeClass('col-lg-9').addClass('col-lg-10')
                navbarState = false;
            } else {
                $('#nav').removeClass('col-md-2').addClass('col-md-3')
                $('#banner').removeClass('col-lg-10').addClass('col-lg-9')
                navbarState = true;
            }
            // $('#banner').removeClass('col-lg-9').addClass('col-lg-')
        });
        $('li').on('click', function () {
            $(this).siblings().removeClass('act')
            $(this).addClass('act')
        });
        $('.input-text').on('change', function () {
            var countfile = $(this)[0].files.length;
            var textgambar = $(this).prev();

            if (countfile === 1) {
                var filename = $(this).val().split('\\').pop();
                textgambar.text(filename);
            } else {
                textgambar.text(countfile + ' File yang dipilih')
            }
        });
        $(window).on('resize', function () {
            if ($(window).width() < 768) {
                $('#sidebar').addClass('active');
            } else {
                $('#sidebar').removeClass('active')
            }
        });

        $('#file1').change(function () {
            var postData = new FormData();
            postData.append('file', this.files[0]);

            var url = "{{url('content')}}";

            $.ajax({
                headers: {'X-CSRF-Token': $('meta[name=csrf_token]').attr('content')},
                async: true,
                type: "post",
                contentType: false,
                url: url,
                data: postData,
                processData: false,
                success: function () {
                    console.log("success");
                }
            });
            var reader = new FileReader();
            reader.onload = function (ev) {

            }
            reader.readAsDataURL(this.files[0]);
        })
    });
</script>
</body>

</html>
