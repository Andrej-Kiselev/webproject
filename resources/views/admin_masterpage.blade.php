<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="windows-1251">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Кафедра "Информационные системы"</title>

  <link href="/bootstrap/css/bootstrap.css" rel="stylesheet">
  <link href="/css/style.css" rel="stylesheet">
  <style type="text/css">
    @font-face {
      font-family: MyriadPro;
      src:url('/fonts/MyriadPro-BoldCond.otf');
    }
  </style>
</head>

<body>
  <div id="main_content">
  <div class="navbar-header navbar-fixed-top container">
    <header class="row">
        <div class="col-md-6">
            <a href="http://www.sevsu.ru"><img src="images/SevSU_logo_white.png" style="height: 70px; width: auto; padding: 10px 10px 10px 0px;float: left"></a>
        </div>
        <div class="col-md-6">
        <h2 class="text-right" Style="padding-top: 5px; font-size: 20px; font: MyriadPro-BoldCond;">Кафедра «Информационные системы»</h2>
        </div>
    </header>
  </div>

  <section class="container section_addon">
    <div>
      @yield('content')
    </div>

  </section>


  <footer class="navbar-fixed-bottom row-fluid">
    <div class="navbar-inner container">
        Copyright &copy; 2017
    </div>
  </footer>
</div>
</body>
</html>
