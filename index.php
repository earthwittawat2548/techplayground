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
  <title>Techplayground</title>
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="welcome.php">TechPlayground</a>
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
            <a class="nav-link " href="signin.php">เข้าสู่ระบบ</a>
          </li>
        </ul>
      </div>
    </nav>
    </br>
    </br>
    <div class="container">
      <a class="btn btn-primary" data-toggle="modal" data-target="#sms-scheduling-modal" href="#" disabled="<%= @checkvar ? 'disabled' : '' %>" onclick="warning();"> ทดสอบระบบโหวต</a>
    </div>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="sweetalert2.all.min.js"></script>
    <script>
    function warning(){
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'กรุณาเข้าสู่ระบบก่อนเข้าใช้งาน',
        footer: '<a href="signin.php">เข้าสู่ระบบ</a>'
      })
    }
    </script>
  </body>

</html>