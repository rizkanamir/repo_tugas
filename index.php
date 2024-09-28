<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Navbar</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" href="index.php?halaman=welcome">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?halaman=hari1">hari1</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?halaman=hari2">hari2</a>
                                </li>
                                    <li class="nav-item">
                                    <a class="nav-link" href="index.php?halaman=hari3">hari3</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?halaman=hari ke empat">hari4</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?halaman=hari ke lima">hari5</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?halaman=hari ke enam">hari6</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?halaman=hari ke tujuh">hari7</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php/?halaman=hari ke delapan">hari8</a>
                                </li>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

    <?php 
    
        if(isset($_GET['halaman'])){
            switch ($_GET['halaman']){
                case "welcome":
                    include "welcome.php";
                    break;
                case "hari1":
                    include "hari pertama/index.php";                   
                    break;
                    case "hari2":
                    include "hari kedua/index.php";
                    break;
                case "hari3":
                    include "hari ketiga/index.php";
                    break;
                case "hari ke empat":
                    include "hari ke empat/index.php";
                    break;
                case "hari ke lima":
                    include "hari ke lima/index.php";
                    break;
                case "hari ke enam":
                    include "hari ke enam/index.php";
                    break;
                case "hari ke tujuh":
                    include "hari ke tujuh/index.php";
                    break;
                case "hari ke delapan":
                    include "hari ke delapan/index.php";     
                    break;
                case "link1":
                    include "hari ke delapan/link1.php";    
                    break;                   
                case "link2":
                    include "hari ke delapan/link2.php";     
                    break;                                                 
            }
        }else{
            include "welcome.php";
        }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>