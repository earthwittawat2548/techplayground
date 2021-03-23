<?php
session_start();
if ($_SESSION['id'] == "") {
    header("location: signin.php");
} else {
    include_once('functions.php');
    $userdata = new DB_con();
    if (isset($_POST['one'])) {
?>
        <script>
            success();
        </script>
    <?php
        $choose = $_POST['one'];
        $sql = $userdata->choosenum($_SESSION['uname'], $choose);
    }
    if (isset($_POST['two'])) {
        $choose = $_POST['two'];
        $sql = $userdata->choosenum($_SESSION['uname'], $choose);
    }
    if (isset($_POST['three'])) {
        $choose = $_POST['three'];
        $sql = $userdata->choosenum($_SESSION['uname'], $choose);
    }
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>TechPlayground</title>
        <meta charset="utf-8">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="favicon.ico">
        <link href='https://fonts.googleapis.com/css?family=Kanit:400,300&subset=thai,latin' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <style>
            h1 {
                color: black;
            }

            h2 {
                color: #1E8449;
            }

            body {
                margin: 0;
                width: 100vw;
                height: 100vh;
                padding: 0;
                font-family: 'Kanit', sans-serif;
                background-size: cover;
            }

            .footer {
                position: fixed;
                left: 0;
                bottom: 0;
                width: 100%;
                background-color: white;
                color: black;
                text-align: center;
            }
        </style>
    </head>

    <body>
        </style>
        <title>Covid Realtime</title>
        </head>

        <body>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="http://techplayground.space/">TechPlayground</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">หน้าหลัก <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">เกี่ยวกับ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">Update..</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">Hi, <?php echo $_SESSION['fname']; ?> <span class="sr-only">(current)</span></a>
                        </li>
                    </ul>
                </div>
            </nav>
            </br>
            </br>
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="card text-white bg-danger mb-5" style="max-width: 18rem;">
                            <div class="card-header">เบอร์ 1</div>
                            <div class="card-body">
                                <h5 class="card-title" style="padding: 30px; text-align: center;" id="getscoreone"><?php $userdata->getscoreone(); ?></h5>
                                <p class="card-text"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                            <div class="card-header">เบอร์ 2</div>
                            <div class="card-body">
                                <h5 class="card-title" style="padding: 30px; text-align: center;"id="getscoretwo"><?php $userdata->getscoretwo(); ?></h5>
                                <p class="card-text"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                            <div class="card-header">เบอร์ 3</div>
                            <div class="card-body">
                                <h5 class="card-title" style="padding: 30px; text-align: center;"id="getscorethree"><?php $userdata->getscorethree(); ?></h5>
                                <p class="card-text"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <form method="post">
                    <h1 class="mt-5">Welcome, <?php echo $_SESSION['fname']; ?></h1>
                    <hr>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Facilis harum aperiam temporibus quasi esse eos soluta ducimus, dignissimos perferendis necessitatibus natus cumque fuga,
                        distinctio ut animi. Fugit quos provident officiis saepe accusantium eos quibusdam cum enim fuga, quisquam,
                        voluptatibus doloremque ipsa porro veniam, harum nihil illo error deserunt eveniet illum libero. Earum quaerat ad saepe,
                        fuga consequuntur ea nisi ex rerum sequi sed mollitia quidem quibusdam dolorem itaque eaque eos inventore iusto? Nisi,
                        sint quo. Ipsum repellendus fugiat quibusdam temporibus culpa fuga quos aut quaerat ab beatae eveniet enim porro,
                        mollitia accusamus architecto incidunt quae. Natus accusamus saepe atque alias magnam id molestiae iste porro voluptas laborum,
                        dicta consequuntur animi libero, quos possimus neque veritatis itaque similique, expedita esse sit voluptates quam officia?
                        Non ad aut quaerat aliquid! Porro sed iusto, exercitationem ducimus ea odio,
                        magnam optio eius consequuntur fugit vitae voluptate veniam facilis quod eaque nemo ipsa nihil soluta assumenda saepe consectetur!
                        Ullam alias cupiditate dolor tempore distinctio quis, dolorem incidunt temporibus. Cum recusandae nemo accusantium possimus a eaque dolor,
                        sapiente debitis quasi fugit perspiciatis distinctio in ducimus ut deleniti blanditiis error illum repudiandae maiores praesentium corrupti doloremque officia suscipit.
                        Doloremque natus tempore vel dignissimos recusandae voluptatibus necessitatibus laudantium!
                    </p>
                    <hr>
                    <button type="submit" name="one" id="one" class="btn btn-success" value='1'>1</button>
                    <hr>
                    <button type="submit" name="two" id="two" class="btn btn-success" value="2">2</button>
                    <hr>
                    <button type="submit" name="three" id="three" class="btn btn-success" value="3">3</button>
                    <hr>
                    <a href="logout.php" class="btn btn-outline-danger">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-square-fill" viewBox="0 0 16 16">
                            <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm3.354 4.646L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708z"></path>
                        </svg> ออกจากระบบ </a>
                </form>
            </div>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
            <script src="sweetalert2.all.min.js"></script>
            <script>
                function success() {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Your work has been saved',
                        showConfirmButton: false,
                        timer: 1500
                    })
                }
            </script>            
            <script>
                $(function() {
                    setInterval(function() { 
                        var getDataone = $.ajax({
                            type: 'POST',
                            url: "updatedata.php",
                            data: 'vote='+1,
                            success: function(getData) {
                                $("#getscoreone").html(getData); 
                            }
                        })
                        var getDatatwo = $.ajax({
                            type: 'POST',
                            url: "updatedata.php",
                            data: 'vote='+2,
                            success: function(getData) {
                                $("#getscoretwo").html(getData); 
                            }
                        })
                        var getDatathree = $.ajax({
                            type: 'POST',
                            url: "updatedata.php",
                            data: 'vote='+3,
                            success: function(getData) {
                                $("#getscorethree").html(getData); 
                            }
                        })
                        .responseText;
                    }, 3000);
                });
            </script>
            <script src="//cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>


        </body>

    </html>
<?php

}
?>