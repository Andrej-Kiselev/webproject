<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="windows-1251">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Кафедра "Информационные системы"</title>

  <link href="/bootstrap/css/bootstrap.css" rel="stylesheet">
  <link href="/css/style.css" rel="stylesheet">
  <link  href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
  <style type="text/css">
    @font-face {
      font-family: MyriadPro;
      src:url('/fonts/MyriadPro-BoldCond.otf');
    }
  </style>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
</head>

<body>
  <div class="navbar-header navbar-fixed-top container">
    <header class="row">
        <div class="col-md-6">
            <a href="http://www.sevsu.ru"><img src="images/SevSU_logo_white.png" style="height: 70px; width: auto; padding: 10px 10px 10px 0px;float: left"></a>
        </div>
        <div class="col-md-6">
        <h2 class="text-right" Style="padding-top: 5px; font-size: 20px; font: MyriadPro-BoldCond;">Кафедра «Информационные системы»</h2>
        </div>
    </header>

    <nav class="row navbar-default" style="margin-bottom: 20px;">
            <div class="collapse navbar-collapse ">
                <ul class="nav navbar-nav">
                    <li><a href="main">ГЛАВНАЯ</a></li>
                    <li><a href="education">ОБРАЗОВАТЕЛЬНАЯ ДЕЯТЕЛЬНОСТЬ</a></li>
                    <li><a href="science">НАУЧНАЯ И ПРОЕКТНАЯ ДЕЯТЕЛЬНОСТЬ</a></li>
                    <li><a href="contacts">КОНТАКТЫ</a></li>
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                ЛИЧНЫЙ КАБИНЕТ<span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                 <li><a href="authorization">Войти</a></li>
                            </ul>
                        </li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('account') }}">
                                            Перейти в личный кабинет
                                        </a>
                                    </li>

 -                                    @if ((Auth::check()) && (Auth::user()->HasRole(Auth::user()->role) == true))
 -                                        <li>
 -                                            <a href="admin">
 -                                                Перейти панель администратора
 -                                            </a>
 -                                        </li>
 -                                    @endif
                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Выйти
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            @endguest
                    </ul>
                </ul>
            </div>
    </nav>
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
</body>
</html>
