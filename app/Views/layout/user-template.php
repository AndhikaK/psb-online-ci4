<!doctype html>
<html lang="en">

<head>
    <title>PSB Online | <?= $title ?></title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- google icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="icon" href="/assets/images/tut-wuri.png">

    <link rel="stylesheet" href="/assets/css/user-style.css">
    <link rel="stylesheet" href="/assets/css/my-style.css">

</head>

<body>

    <div class="wrapper d-flex align-items-stretch">
        <!-- side bar -->
        <nav id="sidebar">
            <div class="p-4 pt-5">
                <?php if ($data['foto'] == '') : ?>
                    <a href="#" class="img logo rounded-circle mb-5" style="background-image: url(../../assets/images/tut-wuri.png);"></a>
                <?php endif ?>
                <?php if ($data['foto'] != '') : ?>
                    <a href="#" class="img logo rounded-circle mb-5" style="background-image: url(../../foto/<?= $data['foto'] ?>);"></a>
                <?php endif ?>

                <ul class="list-unstyled components mb-5">
                    <li>
                        <a href="<?= base_url('/user/home') ?>">Home</a>
                    </li>

                    <li>
                        <a href="<?= base_url('/user/pendaftaran') ?>">Pendaftaran</a>
                    </li>
                </ul>
                <!-- side bar footer -->
                <div class="footer">
                    <p>
                    </p>
                </div>

            </div>
        </nav>
        <!-- end of sidebar -->

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5">

            <!-- navbar -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-primary">
                        <i class="fa fa-bars"></i>
                        <span class="sr-only">Toggle Menu</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="<?= base_url('/user/home') ?>">PSB Online</a>
                            </li>
                            <li class="nav-item">
                                <form action="<?= base_url("/authcontroller/logout") ?>" method="post">
                                    <button name="logout" class="link-logout nav-link">Log out</button>
                                </form>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
            <!-- end of nabbar -->

            <!-- ========================== ADD content here ================================ -->

            <?= $this->include('layout/alert') ?>

            <?= $this->renderSection('content') ?>



            <!-- ========================== END CONTENT ===================================== -->
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- script js -->
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/popper.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/user-main.js"></script>
</body>

</html>