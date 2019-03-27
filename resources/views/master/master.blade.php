<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="./style.css">
  <title>Document</title>
</head>

<body>
  <!-- header-nav -->
  <header class="container-fluid header">
    <div class="row">
      <ul class="nav justify-content-end">
        <li class="nav-item">
          <a class="nav-link active " href="#">登入
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link " href="#">註冊</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">登出</a>
        </li>
      </ul>
    </div>
  </header>

  <!-- body -->
  <div class="container-fluid body-transferblock">
    <div class="container">
        <div class="row">
          <div class="col-sm-2"></div>
          <div class="col-sm-8">
            @yield('body_main')
          </div>
          <div class="col-sm-2"></div>
        </div>
      </div>
  </div>
  <div class="container-fluid body-introduce">
    <div class="container">
        <div class="row">
          <div class="col-sm-2"></div>
          <div class="col-sm-8">
            @yield('body_introduce')
          </div>
          <div class="col-sm-2"></div>
        </div>
      </div>
  </div>
  <div class="container-fluid footer">

  </div>

 

  <!-- d3.js -->
  <script src="https://d3js.org/d3.v5.min.js"></script>
  <script src="./d3model.js"></script>
  <!-- boostrapt -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>