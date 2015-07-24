<!--
 ______   ______   ______  ______       __    __   __  __   
/\  ___\ /\  __ \ /\  ___\/\  __ \     /\ "-./  \ /\_\_\_\  
\ \ \__ \\ \  __ \\ \  __\\ \  __ \    \ \ \-./\ \\/_/\_\/_ 
 \ \_____\\ \_\ \_\\ \_\   \ \_\ \_\    \ \_\ \ \_\ /\_\/\_\
  \/_____/ \/_/\/_/ \/_/    \/_/\/_/     \/_/  \/_/ \/_/\/_/
 
 Desarrollado por: gafa.mx
-->
<?php
/* CODIGO PARA WP-CONFIG
if( $_SERVER['HTTP_HOST'] == 'localhost' || strpos( $_SERVER['HTTP_HOST'] ,'192.168') !== false || strpos( $_SERVER['HTTP_HOST'] ,'.ngrok.io') !== false ){
	define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'].'/siclo.com');
	define('WP_HOME',    WP_SITEURL);
	define('DESARROLLO', true);
	define('DB_HOST', '192.168.100.5');
	//define('DB_HOST', 'localhost');
}else{
	define('WP_SITEURL', 'https://siclo.com');
	define('WP_HOME',    WP_SITEURL);
	define('DESARROLLO', false);
	define('DB_HOST', 'localhost');
};*/
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <title>::FAN::</title>
    <link rel="icon" href=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Meta SEO -->
    <!-- Meta Facebook -->
    <?php etiquetas_og();?>
    <?php 
        require_once('css/style.php');
        require_once('css/responsive.php');
    ?>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <?php require_once('js/js.php');?>
    <!-- Comienza WP Head -->
    <?php wp_head();?>
    <!-- Google Analytics -->
    
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/styles/font-awesome.css"><!--fontawesome-->

</head>
<!--<body <?php body_class("normal color_negro");?>>-->

<body>

    
    <header>
            
        <div class="fleft side" style="position:relative;">
            <!--texto izq. vertical -->
        </div>

        <!--parallax-menu block-->
        <div class="fleft center">

            <div class="parallax-section-1">

                <div class="menu_logo"></div> <!-- menu logo -->
                
                <!-- botones derecha -->
                <div class="fright">
                    <div class="menu_trigger item"></div>
                    <div class="menu_donar item"></div>
                    <div class="menu_email item"></div>
                </div>
                <div class="clear"></div>
                
                <!--texto header-->
                <div class="heading">
                    <h1 align="center">TU ERES TU <strong>ROCA</strong></h1>
                    <p align="center" class="fnt-size-11 pad-top-10">JUNTOS, SIEMPRE JUNTOS POR LA <strong>SALUD MENTAL</strong> Y LA PREVENSÍÓN DEL <strong>SUICIDIO</strong></p>
                </div>

            </div>

        </div>

        <div class="fleft side">
            <!--texto der. vertical -->
        </div>
        <div class="clear"></div>
    
    </header>