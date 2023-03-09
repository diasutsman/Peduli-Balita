<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peduli Balita</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,700,900');

        body {
            /* width untuk lebar */
            /* vw = viewport width */
            width: 100vw;
            /* height untuk tinggi */
            height: 100vh;
            font-family: 'Poppins', sans-serif;
            /* overflow untuk scrool */
            overflow: hidden;
        }

        .card {
            border: none;
            border-radius: 20px;
            background: #2F5D62;
        }

        .panel-content {
            width: 70%;
            height: 600px;
            background-color: white;
            border-radius: 100px;
            box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.5);
        }

        .login {
            margin-top: 10px;
            background: #5E8B7E;
        }

        .login:hover {
            margin-top: 10px;
            background: #5E8B7E;
        }

        .bidan {
            position: absolute;
            width: 300px;
            left: 0;
            margin-left: 150px;
            bottom: 0;
            z-index: 99999999;
        }

        .imge {
            width: 50px;
            height: 50px;
            border-radius: 20px 20px 0px 0px;
        }

        .text {
            color: #DFEEEA
        }

        .texx {
            color: #83CFCA;
        }

        .texx:hover {
            color: #83CFCA;
        }

        .image-auth {
            height: 100%;
        }

        @media screen and (max-width: 767px) {
            .image-auth img {
                display: none;
            }
        }

        .bg-body {
            background: url('/img/ibu-bg.webp') no-repeat 5% bottom, url('/img/bg-img.webp') no-repeat bottom, linear-gradient(to bottom,#DFEEEA,#DFEEEA);
            background-size: 300px, contain;
        }
    </style>
</head>

<body class="d-flex justify-content-center align-items-center bg-body">
    {{-- <img src="/img/ibu-bg.webp" alt="" class="bidan" class="absolute"> --}}
    <div class="col-md-4">
        <div class="card">
            <div class="card-body d-flex pb-0 items-center">
                <img src="/img/logo.webp" alt="" class="image" width="60" height="60">
                <p class="text d-flex fs-5 text-bold">Peduli Balita</p>
            </div>
            <div class="card-body">
                @yield('content')
            </div>
        </div>
    </div>

</body>

</html>
