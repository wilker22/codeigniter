<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?echo $titulo; ?></title>
        <link href="<? echo base_url();?>assets/css/estilos.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <header>
            <section class="contenedor">
                <h1>Curso de CodeIgniter</h1>
                <p>Plantilla de ejemplo para el curso de CodeIgniter</p>
            </section>
        </header>
        <nav>
            <section class="contenedor">
                <ul>
                    <li><a href="<?  echo base_url().'indice/';?>">Inicio</a></li>
                    <li><a href="<?  echo base_url().'indice/calendario';?>">Calendario</a></li>
                    <li><a href="<?  echo base_url().'productos';?>">Productos</a></li>
                    <li><a href="#">Contacto</a></li>
    
                </ul>
            </section>
        </nav>
        <section class="contenedor">
