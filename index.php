<?php
   // include_once 'aulas/public/index.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bobby Aulas - Cursos</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/beyond.min.css" media="screen" rel="stylesheet" type="text/css">
    <link id="beyond-link" href="css/beyond.min.css" rel="stylesheet">
    
    <link rel="shortcut icon" href="img/icone.png" type="image/x-icon">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
   
</head>

<body>
    <div id="fb-root"></div>
    
    <style>
        
/* entire container, keeps perspective */
.flip-container {
	perspective: 1000;
}
	/* flip the pane when hovered */
	.flip-container:hover .flipper, .flip-container.hover .flipper {
		transform: rotateY(180deg);
	}

.flip-container, .front, .back {
	width: 240px;
	height: 200px;
}

/* flip speed goes here */
.flipper {
	transition: 0.6s;
	transform-style: preserve-3d;

	position: relative;
}

/* hide back of pane during swap */
.front, .back {
	backface-visibility: hidden;

	position: absolute;
	top: 0;
	left: 0;
}

/* front pane, placed above back */
.front {
	z-index: 2;
	/* for firefox 31 */
	transform: rotateY(0deg);
}

/* back, initially hidden pane */
.back {
	transform: rotateY(180deg);
}
    </style>

    <!-- Navigation -->
<!--    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="#top"  onclick = $("#menu-close").click(); >Start Bootstrap</a>
            </li>
            <li>
                <a href="#top" onclick = $("#menu-close").click(); >Home</a>
            </li>
            <li>
                <a href="#about" onclick = $("#menu-close").click(); >About</a>
            </li>
            <li>
                <a href="#services" onclick = $("#menu-close").click(); >Services</a>
            </li>
            <li>
                <a href="#portfolio" onclick = $("#menu-close").click(); >Portfolio</a>
            </li>
            <li>
                <a href="#contact" onclick = $("#menu-close").click(); >Contact</a>
            </li>
        </ul>
    </nav>-->

    <!-- Header -->
    <header id="top" class="header">
        <div class="text-vertical-center" style="vertical-align:top !important; padding-top: 60px;">
            
            
            <div class="row">
                        <div class="col-xs-12 col-md-7" style="padding-top:100px;">
                                  <h1>Bobby Aulas</h1>
            <h3>é hora de aprender...</h3>
            <br>
<!--            <a href="#about" class="btn btn-dark btn-lg">Find Out More</a>      -->

                        </div>
                
                 <div class="col-xs-12 col-md-3">
                                            <div class="widget flat radius-bordered" id="divCadastro" >
                                                <div class="">
                                                    <span class=""><h2>Cadastre-se</h2></span>
                                                </div>
                                                <div class="">
                                                    <div id="registration-form">
                                                        <form role="form" action="../aulas/public/auth/signup" method="post">
                                                            <div class="form-title">
                                                                e confira nossos cursos...
                                                            </div>
                                                            <div class="form-group">
                                                                <span class="input-icon icon-right">
                                                                    <input type="text" class="form-control" id="ST_USUARIO_USU" name="ST_USUARIO_USU" placeholder="Usuario" style="height:40px">
                                                                    <i id="ST_USUARIO_USU_icone" class="glyphicon glyphicon-user circular"></i>
                                                                    <i id="ST_USUARIO_USU_times" class="fa fa-times danger circular"  style="display:none;"></i>
                                                                    <i id="ST_USUARIO_USU_check" class="fa fa-check-circle success circular" style="display:none;"></i>
                                                                </span>
                                                            </div>
                                                            <div class="form-group">
                                                                <span class="input-icon icon-right">
                                                                    <input type="text" class="form-control" id="ST_EMAIL_USU" name="ST_EMAIL_USU" placeholder="E-mail" style="height:40px">
                                                                     <i id="ST_EMAIL_USU_icone" class="fa fa-envelope-o circular"></i>
                                                                     <i id="ST_EMAIL_USU_times" class="fa fa-times danger circular"  style="display:none;"></i>
                                                                     <i id="ST_EMAIL_USU_check" class="fa fa-check-circle success circular"  style="display:none;"></i>
                                                                </span>
                                                            </div>
                                                            <div class="form-group">
                                                                <span class="input-icon icon-right">
                                                                    <input type="password" class="form-control" id="ST_SENHA_USU" name="ST_SENHA_USU" placeholder="Senha" style="height:40px">
                                                                    <i id="ST_SENHA_USU_icone" class="fa fa-lock circular"></i>
                                                                    <i id="ST_SENHA_USU_check" class="fa fa-check-circle success circular"  style="display:none;"></i>
                                                                    <i id="ST_SENHA_USU_times" class="fa fa-times danger circular"  style="display:none;"></i>
                                                                </span>
                                                            </div>
                                                            <div class="form-group">
                                                                
                                                                <span class="input-icon icon-right">
                                                                    <input type="password" class="form-control" id="confirmPasswordInput" placeholder="Confirmacao" style="height:40px;">
                                                                    <i id="confirmPasswordInput_icone" class="fa fa-lock circular" ></i>
                                                                    <i id="confirmPasswordInput_times" class="fa fa-times danger circular"  style="display:none;"></i>
                                                                    <i id="confirmPasswordInput_check" class="fa fa-check-circle success circular"  style="display:none;"></i>
                                                                </span>
                                                                
                                                            </div>
                                                            
                                                            <hr class="wide">
                                                            <button id="btnCadastro" type="submit" class="btn btn-blue">Enviar</button>
                                                            <a class="btn btn-success" style="margin-left: 15px" href="../aulas/public" class="">Já sou usuário...</a> <br><br>
                                                            <div id="btnLogFacebook" onlogin="testAPI();" class="fb-login-button" data-max-rows="1" data-size="large" data-show-faces="false" data-auto-logout-link="false"></div>
                                                            
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                <div id="divWelcome" style="display:none;">
                                  <div class="lock-container animated fadeInDown" style="padding-top:50px;">
                                  <a href="../aulas/public"><div class="lock-box text-align-center">
                                    <div class="lock-username"><span id="logedUser">Logged</span></div>
                                    <img src="img/perfil.jpg" alt="divyia avatar">
                                    <div class="lock-password">
                                    <form role="form" class="form-inline" action="index.html">
                                    <div class="form-group">
                                       <span class="input-icon icon-right">
                                       </span>
                                    </div>
                                    </form>
                                  </div>

                                  </div>
                                </a>
                                <div class="signinbox">
                                <a href="javascript:void(0)" id="lnkSair">Sair</a>
                                </div>
                                  </div>
                                
                                </div>
                                </div></div>
                                        </div>
                
                
                
                
                
                
                
                
<!--                        <div class="col-xs-12 col-md-4">
                             <div class="registerbox">
                <form method="post" action="/aulas/public/auth/signup">
                    <h2> Cadastro </h2>
                    <h3> É gratis </h3>
                <div class="registerbox-textbox">
                    <input type="text" class="form-control" name="ST_USUARIO_USU" placeholder="Usuario" style="width:220px">
                </div>
                <div class="registerbox-textbox" style="padding-top:15px;">
                    <input type="password" class="form-control" name="ST_SENHA_USU" placeholder="Senha" style="width:100px; float:left">
                </div>
                <div class="registerbox-textbox" style="margin-left :120px;">
                    <input type="password" class="form-control" name="Confirmacao" placeholder="Confirmar" style="width:100px;">
                </div>

                <div class="registerbox-textbox" style="padding-top:15px">
                    <input type="text" class="form-control" name="ST_EMAIL_USU" placeholder="E-mail" style="width:220px">
                </div>



                <div class="registerbox-submit"><a href="javascript:void(0)" id="lnkLogin">Login</a>
                    <input type="submit" class="btn btn-primary pull-right" value="SUBMIT">
                </div>
                    </form>
            </div>
                        </div>-->
                    </div>
            
            
           
            
            

        </div>
    </header>

    <!-- About -->
    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>O conhecimento abre portas,</h2>
                    <p class="lead">oferece mais oportunidades e enriquece as comunidades...</p>
                </div>
            </div>     
           <div class="row">     
                <div class="col-lg-3 text-center">
                    <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                        <a href="#">
                            <div class="flipper">
                                    <div class="front" style="background:#f8f8f8;">
                                        <img data-src="holder.js/240x200" alt="100%x200" src="/aulas/public/../application/uploads/descarga.jpg" data-holder-rendered="true" style="height: 200px; width: 240px; display: block;">
                                    </div>
                                    <div class="back" style="background:#FFFFE0;">
                                            <!-- back content -->
                                    </div>
                            </div>
                        </a>
                    </div>
                </div>
               <div class="col-lg-3 text-center">
                    <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                        <a href="#">
                            <div class="flipper">
                                    <div class="front" style="background:#f8f8f8;">
                                        <img data-src="holder.js/100%x200" alt="100%x200" src="/aulas/public/../application/uploads/images.jpg" data-holder-rendered="true" style="height: 200px; width: 240px; display: block;">
                                    </div>
                                    <div class="back" style="background:#FFFFE0;">
                                           <div class="">
                                               <br><br><br><br>
                                               <h4><b>Pronomes em inglés</b></h4>                         
                                           </div>
                                    </div>
                            </div>
                        </a>
                    </div>                    
                </div>
               <div class="col-lg-3 text-center">
                    <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                        <a href="#">
                                <div class="flipper">
                                        <div class="front" style="background:#f8f8f8;">
                                            <img data-src="holder.js/100%x200" alt="100%x200" src="/aulas/public/../application/uploads/images (1).jpg" data-holder-rendered="true" style="height: 200px; width: 240px; display: block;">
                                        </div>
                                        <div class="back" style="background:#FFFFE0;">
                                            <br><br><br><br>
                                            <div>

                                                <h4><b>Curso:</b> Verb To Be</h4><br>                                  
                                            </div>
                                        </div>
                                </div>
                         </a>
                    </div>                    
                </div>
               <div class="col-lg-3 text-center">
                    <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
                        <a href="#">
                        <div class="flipper">
                                <div class="front" style="background:#f8f8f8;">
                                    <img data-src="holder.js/100%x200" alt="100%x200" src="/aulas/public/../application/uploads/images (2).jpg" data-holder-rendered="true" style="height: 200px; width: 240px; display: block;">
                                </div>
                                <div class="back" style="background:#FFFFE0;">
                                    <div>
                                        <h4><b>Curso:</b> Wh-Questions</h4>
                                        1 - <b>Who</b> [quem]<br>
                                        2 - <b>Where</b> [onde]<br>
                                        3 - <b>Why</b> [por quê]<br>
                                        4 - <b>What</b> [o quê, qual]<br>
                                        5 - <b>Which</b> [[o quê, qual]<br>
                                        6 - <b>When</b>[quando]<br> 
                                        7 - <b>How</b> [como]<br>
                                        8 - <b> Exercicios </b>
                                    </div>
                                </div>
                        </div>
                            </a>
                    </div>                    
                </div>               
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Services -->
    <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
    <section id="services" class="services bg-primary">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <h2>Nossos serviços</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-cloud fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Cursos</strong>
                                </h4>
                                <p>Cursos com o mais atualizado conteúdo.</p>
<!--                                <a href="#" class="btn btn-light">Learn More</a>-->
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-compass fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Professores</strong>
                                </h4>
                                <p>Você não está sozinho. Tire suas dúvidas quando quiser.</p>
<!--                                <a href="#" class="btn btn-light">Learn More</a>-->
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-flask fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Assinaturas</strong>
                                </h4>
                                <p>Receba conhecimento e faça cursos com assinatura.</p>
<!--                                <a href="#" class="btn btn-light">Learn More</a>-->
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-shield fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Compartilhe conhecimento</strong>
                                </h4>
                                <p>Faça seu próprio curso.</p>
<!--                                <a href="#" class="btn btn-light">Learn More</a>-->
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Callout -->
    <aside class="callout">
        <div class="text-vertical-center">
            <h1>Estude com a gente...</h1>
        </div>
    </aside>

    <!-- Portfolio -->
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h2>Alguns cursos!!</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="img/portfolio-1.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="img/portfolio-2.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="img/portfolio-3.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="img/portfolio-4.jpg">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                    <a href="#" class="btn btn-dark">View More Items</a>
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Call to Action -->
    <aside class="call-to-action bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3>The buttons below are impossible to resist.</h3>
                    <a href="#" class="btn btn-lg btn-light">Click Me!</a>
                    <a href="#" class="btn btn-lg btn-dark">Look at Me!</a>
                </div>
            </div>
        </div>
    </aside>

    <!-- Map -->
    <section id="contact" class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d235231.64761594174!2d-47.03026080000002!3d-22.895124900000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c8c8f6a2552649%3A0x7475001c58043536!2sCampinas%2C+SP!5e0!3m2!1spt-BR!2sbr!4v1429380577204" width="100%" height="100%" frameborder="0" style="border:0"></iframe>
        <!--<iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe>-->
        <br />
        <small>
            <a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a>
        </small>
        </iframe>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h4><strong>Bobby Aulas</strong>
                    </h4>
                    <p>Campinas, Sao Paulo, Brasil.</p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-phone fa-fw"></i></li>
                        <li><i class="fa fa-envelope-o fa-fw"></i>  <a href="mailto:info@bobbyaulas.com">info@bobbyaulas.com</a>
                        </li>
                    </ul>
                    <br>
                    <ul class="list-inline">
                        <li>
                            <a href="https://www.facebook.com/bobbyaulas" TARGET="_blank"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                        </li>
<!--                        <li>
                            <a href="#"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-dribbble fa-fw fa-3x"></i></a>
                        </li>-->
                    </ul>
                    <hr class="small">
                    <p class="text-muted">Copyright &copy; Your Website 2015</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    
    $(function() {
        $('#lnkAlreadyLogged').bind('click', function() {
           alert('entrar'); 
        });
        
        $('#lnkSair').bind('click', function(){
           FB.logout();             
           $.post('aulas/public/auth/logout',function(){
               window.location.reload();
           }); 
        });
        
        $.post('aulas/public/auth/islogged', function(response) {
            if (response) {
                $('#divCadastro').hide();
                $('#divWelcome').show();
                $('#logedUser').html('<b>Bem vindo: </b>' + response.ST_USUARIO_USU);    
                console.log(response);
            } else {
//                $('#divCadastro').attr('style',"display:block;");
//                $('#divCadastro').attr('style',"display:inline;");
//                $('#divCadastro').show();
                console.log('ACA');
            }
        });
    });
    
    </script>

</body>

</html>

<script type="text/javascript"> 

    function usuario(exists) {
         $('#ST_USUARIO_USU_icone').css('display','none');
            var usuario = $('#ST_USUARIO_USU').val();
            if(exists || usuario === "") {
               $('#ST_USUARIO_USU').css('border-color','red');
               $('#ST_USUARIO_USU_times').css('display','inline');
               $('#ST_USUARIO_USU_check').css('display','none');
               return false;
           } else {
               $('#ST_USUARIO_USU').css('border-color','green');
               $('#ST_USUARIO_USU_check').css('display','inline');  
               $('#ST_USUARIO_USU_times').css('display','none'); 
               return true;
           }       
    };
    
    function senha() {
        var senha = $('#ST_SENHA_USU').val();
           $('#ST_SENHA_USU_icone').css('display','none');
           if (senha !== "" ) {
               $('#ST_SENHA_USU').css('border-color','green');
               $('#ST_SENHA_USU_times').css('display','none');
               $('#ST_SENHA_USU_check').css('display','inline');
               return true;
           }else {
               $('#ST_SENHA_USU').css('border-color','red');
               $('#ST_SENHA_USU_times').css('display','inline');
               $('#ST_SENHA_USU_check').css('display','none');
               return false;
               
           }
    };
    
    function email(exists) {
        var email = $('#ST_EMAIL_USU').val();
           var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
           var res = pattern.test(email);
           $('#ST_EMAIL_USU_icone').css('display','none');
           if ((!exists) && (res)) {
                $('#ST_EMAIL_USU').css('border-color','green');
                $('#ST_EMAIL_USU_check').css('display','inline'); 
                $('#ST_EMAIL_USU_times').css('display','none'); 
                return true;
           }else {
               $('#ST_EMAIL_USU').css('border-color','red');
               $('#ST_EMAIL_USU_times').css('display','inline');     
               $('#ST_EMAIL_USU_check').css('display','none');
               return false;
           }
    };
    
    function conf() {
         var senha = $('#ST_SENHA_USU').val();
           var conf = $('#confirmPasswordInput').val();
           $('#confirmPasswordInput_icone').css('display','none');
           if (senha == "" || senha != conf) {
               $('#confirmPasswordInput').css('border-color','red');
               $('#confirmPasswordInput_times').css('display','inline');
               $('#confirmPasswordInput_check').css('display','none');
               return false;
           } else { 
               $('#confirmPasswordInput').css('border-color','green');
               $('#confirmPasswordInput_times').css('display','none');
               $('#confirmPasswordInput_check').css('display','inline');    
               return true;
           }
    };
    
    function checkusuario() {
        var exists;
        $.ajax({
          type: 'POST',
          url: "../aulas/public/auth/checkusuario",
          data: {usuario : $('#ST_USUARIO_USU').val()},
          success: function(result) {
            exists = result;
          },
          dataType: 'json',
          async:false
        });     
        return exists;
    }
    
    function checkemail() {
        var exists;
        $.ajax({
          type: 'POST',
          url: "../aulas/public/auth/checkemail",
          data: {email : $('#ST_EMAIL_USU').val()},
          success: function(result) {
            exists = result;
          },
          dataType: 'json',
          async:false
        });        
        return exists;
    }

    $(function() {
        
        $('#btnCadastro').bind('click', function(event) {
            var u = usuario();
            var e = email();
            var p = senha();
            var c = conf();
            var cu = checkusuario();
            var ce = checkemail();
            
            if (!u || !e || !p || !c || cu || ce) {
                event.preventDefault(); 
                event.stopPropagation();
            }

        });

        $('#ST_USUARIO_USU').focusout(function() {
            var exists = checkusuario();
            usuario(exists);
        });
        
        $('#ST_EMAIL_USU').focusout(function() {  
           var exists = checkemail();  
           email(exists);
        });
        
        $('#ST_SENHA_USU').focusout(function() {
           senha();
           
        });
        
        $('#confirmPasswordInput').focusout(function() {
          conf();
        });
    });

</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-62612806-1', 'auto');
  ga('send', 'pageview');

</script>


<script>
  // This is called with the results from from FB.getLoginStatus().
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      //testAPI();
    } else if (response.status === 'not_authorized') {
      // The person is logged into Facebook, but not your app.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this app.';
    } else {
      // The person is not logged into Facebook, so we're not sure if
      // they are logged into this app or not.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into Facebook.';
    }
  }

  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  window.fbAsyncInit = function() {
  FB.init({
    appId      : '1004500626241844',
    cookie     : true,  // enable cookies to allow the server to access 
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.2' // use version 2.2
  });

  // Now that we've initialized the JavaScript SDK, we call 
  // FB.getLoginStatus().  This function gets the state of the
  // person visiting this page and can return one of three states to
  // the callback you provide.  They can be:
  //
  // 1. Logged into your app ('connected')
  // 2. Logged into Facebook, but not your app ('not_authorized')
  // 3. Not logged into Facebook and can't tell if they are logged into
  //    your app or not.
  //
  // These three cases are handled in the callback function.

  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });

  };

  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));


    $(function() {
       $('#btnLogFacebook').bind('click', function() {
           alert('clic');
          testAPI(); 
       });
    });

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
        $('#divCadastro').hide();
        $('#divWelcome').show();
        $('#logedUser').html(response.name);
        console.log(response);
        $.post('aulas/public/auth/loginfacebook', {id: response.id, name: response.name, email: response.email},function(data) {
            console.log(data);
        });
//        
//        FB.logout(function(response) {
//            console.log(response);        // Person is now logged out
//        });

    });
  }
</script>

<!--
  Below we include the Login Button social plugin. This button uses
  the JavaScript SDK to present a graphical Login button that triggers
  the FB.login() function when clicked.
-->

<!--<fb:login-button scope="public_profile,email" onlogin="testAPI();">
</fb:login-button>-->

<div id="status">
</div>