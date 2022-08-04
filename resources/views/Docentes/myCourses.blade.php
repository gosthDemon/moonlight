<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{URL::asset('css/moonlight.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/fontAwesome.css')}}">
    <title>Mis Cursos</title>
</head>
<body>
    <section class="menu-lateral" id="menu_lateral">
        <nav class="nav">
            <ul class="list">
                <li class="list__item">
                    <div class="list__button">
                        <img src="{{URL::asset('img/iconos/dashboard.svg')}}" class="list__img">
                        <a href="#" class="nav__link">Inicio</a>
                    </div>
                </li>
    
                <li class="list__item list__item--click">
                    <div class="list__button list__button--click">
                        <img src="{{URL::asset('img/iconos/docs.svg')}}" class="list__img">
                        <a href="#" class="nav__link">Servicios</a>
                        <img src="{{URL::asset('img/iconos/arrow.svg')}}" class="list__arrow">
                    </div>
    
                    <ul class="list__show">
                        <li class="list__inside">
                            <a href="#" class="nav__link nav__link--inside">Estoy dentro</a>
                        </li>
    
                        <li class="list__inside">
                            <a href="#" class="nav__link nav__link--inside">Estoy dentro</a>
                        </li>
                    </ul>
    
                </li>
    
    
                <li class="list__item">
                    <div class="list__button">
                        <img src="{{URL::asset('img/iconos/stats.svg')}}" class="list__img">
                        <a href="#" class="nav__link">Estadisticas</a>
                    </div>
                </li>
    
                <li class="list__item list__item--click">
                    <div class="list__button list__button--click">
                        <img src="{{URL::asset('img/iconos/bell.svg')}}" class="list__img">
                        <a href="#" class="nav__link">Notificaciones</a>
                        <img src="{{URL::asset('img/iconos/arrow.svg')}}" class="list__arrow">
                    </div>
    
                    <ul class="list__show">
                        <li class="list__inside">
                            <a href="#" class="nav__link nav__link--inside">Estoy dentro</a>
                        </li>
    
                        <li class="list__inside">
                            <a href="#" class="nav__link nav__link--inside">Estoy dentro</a>
                        </li>
    
                        <li class="list__inside">
                            <a href="#" class="nav__link nav__link--inside">Estoy dentro</a>
                        </li>
                    </ul>
    
                </li>
    
    
                <li class="list__item">
                    <div class="list__button">
                        <img src="{{URL::asset('img/iconos/message.svg')}}" class="list__img">
                        <a href="#" class="nav__link">Contacto</a>
                    </div>
                </li>
    
            </ul>
        </nav>
    </section>
    <section class="container-body" id="container_body">
        <div class="header">
            <a href="#" onclick="open_menu()" class="open-menu-icon">
                <i class="fal fa-bars"></i>
            </a>
            <div class="search-input-container">
                <a href="#"><i class="far fa-search"></i></a>
                <input type="text" class="search-input" placeholder="Search here...">
            </div>
            <div class="header-icons">
                <a class="close-session icon-1 notify-icon">
                    <i class="fal fa-envelope"></i>
                </a>
                <a class="close-session icon-2 notify-icon">
                    <i class="fal fa-bell "></i>
                </a>
                <div class="img-perfil">
                    <a href="#">
                        <img src="img/perfil-1.png" alt="">
                    </a> 
                </div>
            </div>
        </div>
        <div class="body">
            <div class="content">
                <div class="frontPage-header">
                    <div class="tittle">
                        <h1>Dashboard</h1>
                        <ul>
                            <li>Moonlight</li>
                            <li>> Docente </li>
                            <li>> Dashboard </li>
                        </ul>
                    </div>
                    <div class="button">
                        <a href="#" class="button-report">Create Report</a>
                    </div>
                </div>
                <div class="frontPage-body">

                </div>
            </div>
        </div>
    </section>






    <script src="{{URL::asset('js/moonlight.js')}}"></script>
    <script>
        function hola(){
            console.log(this.element());
        }
    </script>
</body>
</html>