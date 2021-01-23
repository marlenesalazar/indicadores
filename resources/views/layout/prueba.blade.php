<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Indicadores | www.indicadores.com</title>
    <!-- Tell the browser to be responsive to screen width -- 
Dile al navegador que responda al ancho de la pantalla -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-combined.min.css')}}">
    <!-- Font Awesome -- Fuente Increíble -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
    <!-- Theme style -- Estilo del tema-->
    <link rel="stylesheet" href="{{asset('css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. AdminLTE Skins. Elige un skin de css / skins
         carpeta en lugar de descargarlos todos para reducir la carga -->
    <link rel="stylesheet" href="{{asset('css/_all-skins.min.css')}}">
    <link rel="apple-touch-icon" href="{{asset('img/apple-touch-icon.png')}}">
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}">
    <link rel="stylesheet" href="{{asset('css/AdminLTE.css')}}">

  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a href="index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -- para barra lateral mini 50x50 píxeles-->
          <span class="logo-mini"><b>INDIC</b>V</span>
          <!-- logo for regular state and mobile devices -- logotipo para dispositivos móviles y estado normal -->
          <span class="logo-lg"><b>INDICADORES</b></span>
        </a>

        <!-- Header Navbar: style can be found in header.less -- Barra de navegación de encabezado: el estilo se puede encontrar en header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button -- Botón de alternar barra lateral-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Navegación</span>
          </a>
          <!-- Navbar Right Menu --Menú derecho de la barra de navegación -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-- Mensajes: el estilo se puede encontrar en dropdown.less-->
              
              <!-- User Account: style can be found in dropdown.less-- Cuenta de usuario: el estilo se puede encontrar en dropdown.less -->
               <!--<li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <small class="bg-red">Online</small>
                  <span class="hidden-xs">Juan Carlos Arcila Díaz</span>
                </a>-->
                 <!--<ul class="dropdown-menu">-->
                  <!-- User image -- Imagen del usuario -->
                  <!--<li class="user-header">
                    
                    <p>
                      www.incanatoit.com - Desarrollando Software
                      <small>www.youtube.com/jcarlosad7</small>
                    </p>
                  </li>-->
                  
                  <!-- Menu Footer-- Pie de página del menú-->
                  <!--<li class="user-footer">
                    
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Cerrar</a>
                    </div>
                  </li>-->
                </ul>
              </li> 
              
            </ul>
          </div>

        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar-- Columna lateral izquierda. contiene el logo y la barra lateral -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less-- barra lateral: el estilo se puede encontrar en sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel-- Panel de usuario de barra lateral -->
                    
          <!-- sidebar menu: : style can be found in sidebar.less-- menú de la barra lateral:: el estilo se puede encontrar en sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header "></li>
            
            <li class="treeview">
              <a href="#">
                <!--<i class="fa fa-laptop"></i>-->
                <span>Personal</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
             
              <ul class="treeview-menu">
                <li><a href="almacen/articulo"><i class="fa fa-circle-o"></i> Personal Docente Por Categoría, Dedicación Según Carga Horaria y Sexo</a></li>
                <li><a href="almacen/categoria"><i class="fa fa-circle-o"></i>Personal Docente Según Facultad Y Sexo</a></li>
                <li><a href="almacen/categoria"><i class="fa fa-circle-o"></i>Personal Docente Por Sexo, Según Carreras</a></li>
                <li><a href="almacen/categoria"><i class="fa fa-circle-o"></i>Personal Docente Por Categoría Y Dedicación, Según Carreras</a></li>
                <li><a href="almacen/categoria"><i class="fa fa-circle-o"></i>Personal Docente Por Sexo Y Grado Académico Alcanzado</a></li>
                <li><a href="almacen/categoria"><i class="fa fa-circle-o"></i>Personal Docente Por Categoría Y Dedicación, Según Carreras</a></li>
                <li><a href="almacen/categoria"><i class="fa fa-circle-o"></i>Personal Administrativo Por Sexo Y Tipo De Contrato</a></li>
                <li><a href="almacen/categoria"><i class="fa fa-circle-o"></i>Personal Administrativo Por Sexo, Según Actividad</a></li>
                <li><a href="almacen/categoria"><i class="fa fa-circle-o"></i>Personal Administrativo Por Sexo Según Actividad</a></li>
                <li><a href="almacen/categoria"><i class="fa fa-circle-o"></i>Personal Administrativo Por Sexo Y Ocupación</a></li>
                <li><a href="almacen/categoria"><i class="fa fa-circle-o"></i>Personal Administrativo Según Formación Alcanzada Y Tipo De Contrato</a></li>
                <li><a href="almacen/categoria"><i class="fa fa-circle-o"></i>Personal Administrativo Según Formación Alcanzada Y Actividad Realizada</a></li>
                <li><a href="almacen/categoria"><i class="fa fa-circle-o"></i>Personal Administrativo Por Sexo Según Su Formación Alcanzada, Por Repartición Y Actividad Que Realizan</a></li>
                <li><a href="almacen/categoria"><i class="fa fa-circle-o"></i>Personal Administrativo, Por Sexo Según Su Formación Alcanzada, Por Repartición  Y Actividad Que Realizan </a></li>
                <li><a href="almacen/categoria"><i class="fa fa-circle-o"></i>Personal Administrativo, Según Su Formación Por Tipo De Profesión</a></li>
              </ul>
            </li>
            
            <li class="treeview">
              <a href="#">
                <!--<i class="fa fa-th"></i>-->
                <span>Departamento de Titulos</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="compras/ingreso"><i class="fa fa-circle-o"></i> Profesionales Titulados, Según Facultades</a></li>
                <li><a href="compras/proveedor"><i class="fa fa-circle-o"></i> Profesionales Titulados Por 
                Nivel Académico, Según Facultades</a></li>
                <li><a href="compras/proveedor"><i class="fa fa-circle-o"></i> Profesionales Titulados Por Sexo, Según Carreras</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <!--<i class="fa fa-shopping-cart"></i>-->
                <span>Data Center</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="ventas/venta"><i class="fa fa-circle-o"></i>Matricula Cursos Preuniversitarios, Por Sexo, Según Facultad</a></li>
                <li><a href="ventas/cliente"><i class="fa fa-circle-o"></i>Matricula Cursos Preuniversitarios Por Sexo, Según Carreras</a></li>
                <li><a href="ventas/venta"><i class="fa fa-circle-o"></i>Matricula Cursos Preuniversitario Por Carreras, Según Lugar Departamental De Nacimiento</a></li>
                <li><a href="ventas/cliente"><i class="fa fa-circle-o"></i>Cursos Preuniversitario Por Tipo De Colegio, Según Carreras y Procedencias</a></li>
                <li><a href="ventas/venta"><i class="fa fa-circle-o"></i>Matricula Preuniversitario, Según Composición De Edad, Por Facultad</a></li>
                <li><a href="ventas/cliente"><i class="fa fa-circle-o"></i>Matricula P.S.A. Por Sexo, Según Facultades</a></li>
                <li><a href="ventas/venta"><i class="fa fa-circle-o"></i>Matricula P.S.A. Por Sexo, Según Carreras</a></li>
                <li><a href="ventas/cliente"><i class="fa fa-circle-o"></i>Matricula P.S.A. Por Lugar De Nacimiento Departamental, Según Carreras</a></li>
                <li><a href="ventas/venta"><i class="fa fa-circle-o"></i>Estudiantes Nuevos Según Facultades Y Sexo</a></li>
                <li><a href="ventas/cliente"><i class="fa fa-circle-o"></i>Estudiantes Nuevos Por Sexo, Según Carreras</a></li>
                <li><a href="ventas/venta"><i class="fa fa-circle-o"></i>Estudiantes Nuevos Por Sexo Y Según Lugar De Nacimiento  Deparatmental</a></li>
                <li><a href="ventas/cliente"><i class="fa fa-circle-o"></i>Estudiantes Nuevos Según Administración De La Educación Nacional Y Sexo</a></li>
                <li><a href="ventas/venta"><i class="fa fa-circle-o"></i>Estudiantes Nuevos Según Horario De Funcionamiento Y Sexo</a></li>
                <li><a href="ventas/cliente"><i class="fa fa-circle-o"></i>Estudiantes Nuevos Según  Composición De Edad Y Sexo</a></li>
                <li><a href="ventas/venta"><i class="fa fa-circle-o"></i>Población Estudiantil, Por Sexo Según Facultad Y Sexo</a></li>
                <li><a href="ventas/cliente"><i class="fa fa-circle-o"></i>Población Estudiantil, Por Sexo Según Carrera Y Sexo</a></li>
                <li><a href="ventas/venta"><i class="fa fa-circle-o"></i>Población Estudiantil Por Tipo De Colegio Y Sexo</a></li>
                <li><a href="ventas/cliente"><i class="fa fa-circle-o"></i>Población Estudiantil Según Procedencia Educativa Y Sexo</a></li>
                <li><a href="ventas/venta"><i class="fa fa-circle-o"></i>Población Estudiantil Según Horario Y Sexo</a></li>
                <li><a href="ventas/cliente"><i class="fa fa-circle-o"></i>Población Estudiantil Según Horario De Funcionamiento Y Sexo</a></li>
                <li><a href="ventas/venta"><i class="fa fa-circle-o"></i>Población Estudiantil, Según  Lugar De Nacimiento Y Sexo</a></li>
                <li><a href="ventas/cliente"><i class="fa fa-circle-o"></i>Población Estudiantil, Según Composición De Edad Y Sexo</a></li>
                <li><a href="ventas/venta"><i class="fa fa-circle-o"></i>Población Estudiantil Según Lugar De Nacimiento A Nivel Departamental, Por Carreras</a></li>
                <li><a href="ventas/cliente"><i class="fa fa-circle-o"></i>Población Estudiantil Por Tipo De Colegio De Egreso, Según Carreras</a></li>
                <li><a href="ventas/venta"><i class="fa fa-circle-o"></i>Población Estudiantil Por Provincias Del Dpto. De Potosí, Según Carreras</a></li>
                <li><a href="ventas/cliente"><i class="fa fa-circle-o"></i>Población Estudiantil Por Facultades, Según Composición De Edad</a></li>
                <li><a href="ventas/venta"><i class="fa fa-circle-o"></i>Población Estudiantil Por Tipo De Colegio De Egreso, Según Carreras Y Provincias</a></li>
              </ul>
            </li>

             <li class="treeview">
              <a href="#">
                <!--<i class="fa fa-shopping-cart"></i>-->
                <span>Bienestar Universitario</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="ventas/venta"><i class="fa fa-circle-o"></i>Resumen Total De Becas Alimentacion E Internado Universitario</a></li>
                <li><a href="ventas/cliente"><i class="fa fa-circle-o"></i>Beca Alimentación Por Género, Según Facultades</a></li>
                 <li><a href="ventas/venta"><i class="fa fa-circle-o"></i>Beneficiarios Con Beca Alimentación, Según Tipo De Beca Por Sexo Y Facultad</a></li>
                <li><a href="ventas/cliente"><i class="fa fa-circle-o"></i>Tasa De Crecimiento De Beca Alimentación</a></li>
                 <li><a href="ventas/venta"><i class="fa fa-circle-o"></i>Beneficiarios Con Beca Alimentación Por Tipo De Beca, Según Sexo Y Carreras</a></li>
                <li><a href="ventas/cliente"><i class="fa fa-circle-o"></i>Beneficiarios Con Beca Internado Universitario, Por Tipo De Beca, Según Facultades</a></li>
                 <li><a href="ventas/venta"><i class="fa fa-circle-o"></i>Beneficiarios Con Beca Internado Universitario, Por Tipo De Beca, Según Carreras</a></li>
                <li><a href="ventas/cliente"><i class="fa fa-circle-o"></i>Tasa De Crecimiento De Beca Internado</a></li>
                 <li><a href="ventas/venta"><i class="fa fa-circle-o"></i>Auxiliares De Docencia Según Facultad Y Sexo</a></li>
                <li><a href="ventas/cliente"><i class="fa fa-circle-o"></i>Auxiliares De Docencia Según Carreras Y Tipo De Beca</a></li>
                 <li><a href="ventas/venta"><i class="fa fa-circle-o"></i>Variación Semestral De Auxiliares De Docencia Según Carreras</a></li>
                <li><a href="ventas/cliente"><i class="fa fa-circle-o"></i>Permanencia De Los Auxiliares De Docencia Según Carreras</a></li>
                 <li><a href="ventas/venta"><i class="fa fa-circle-o"></i>Tasa De Crecimiento De Beca Auxiliares De Docencia</a></li>
                <li><a href="ventas/cliente"><i class="fa fa-circle-o"></i>Auxiliares De Investigación  Según Género Y Carreras</a></li>
                 <li><a href="ventas/venta"><i class="fa fa-circle-o"></i>Variación Semestral De Auxiliares De Investigación Según Carreras</a></li>
                <li><a href="ventas/cliente"><i class="fa fa-circle-o"></i>Tasa De Crecimiento De Beca Auxiliares De Investigación</a></li>
                 <li><a href="ventas/venta"><i class="fa fa-circle-o"></i>Beca Trabajo  Según Género Y Carreras</a></li>
                <li><a href="ventas/cliente"><i class="fa fa-circle-o"></i>Variación Semestral De Beca Trabajo Según Carreras</a></li>
                 <li><a href="ventas/venta"><i class="fa fa-circle-o"></i>Tasa De Crecimiento De Beca Trabajo</a></li>
              </ul>
            </li>

             <li class="treeview">
              <a href="#">
                <!--<i class="fa fa-shopping-cart"></i>-->
                <span>Biblioteca</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="ventas/venta"><i class="fa fa-circle-o"></i>Potencial Del Acervo Bibliografico, Según Bibliotecas Especializadas</a></li>
                <div class="dropdown-divider"></div>
                <h6 class="dropdown-header">OBRAS CONSULTADAS SEGÚN BIBLIOTECAS ESPECIALIZADAS</h6>
                <li><a href="ventas/cliente"><i class="fa fa-circle-o"></i>Central</a></li>
                <li><a href="ventas/venta"><i class="fa fa-circle-o"></i>Derecho</a></li>
                <li><a href="ventas/cliente"><i class="fa fa-circle-o"></i>Ingenieria</a></li>
                <li><a href="ventas/venta"><i class="fa fa-circle-o"></i>Sociales</a></li>
                <li><a href="ventas/cliente"><i class="fa fa-circle-o"></i>EE.FF. y AA.</a></li>
                <li><a href="ventas/venta"><i class="fa fa-circle-o"></i>Agricolas</a></li>
                <li><a href="ventas/cliente"><i class="fa fa-circle-o"></i>Geologicas</a></li>
                <li><a href="ventas/venta"><i class="fa fa-circle-o"></i>Total</a></li>
                <div class="dropdown-divider"></div>
                <h6 class="dropdown-header">OBRAS CONSULTADAS SEGÚN USUARIOS</h6>
                <li><a href="ventas/cliente"><i class="fa fa-circle-o"></i>EE.FF. Y AA.</a></li>
                <li><a href="ventas/venta"><i class="fa fa-circle-o"></i>Ingenieria</a></li>
                <li><a href="ventas/cliente"><i class="fa fa-circle-o"></i>Mineria</a></li>
                <li><a href="ventas/venta"><i class="fa fa-circle-o"></i>Agrícolas</a></li>
                <li><a href="ventas/cliente"><i class="fa fa-circle-o"></i>Artes</a></li>
                <li><a href="ventas/venta"><i class="fa fa-circle-o"></i>Tecnica</a></li>
                <li><a href="ventas/cliente"><i class="fa fa-circle-o"></i>Trabajadores "U"</a></li>
                <li><a href="ventas/venta"><i class="fa fa-circle-o"></i>Particulares</a></li>
                <li><a href="ventas/cliente"><i class="fa fa-circle-o"></i>Derecho</a></li>
                <li><a href="ventas/venta"><i class="fa fa-circle-o"></i>Geologicas</a></li>
                <li><a href="ventas/cliente"><i class="fa fa-circle-o"></i>Ciencias Puras</a></li>
                <li><a href="ventas/venta"><i class="fa fa-circle-o"></i>Sociales</a></li>
                <li><a href="ventas/cliente"><i class="fa fa-circle-o"></i>Salud</a></li>
              </ul>
            </li>

             <li class="treeview">
              <a href="#">
                <!--<i class="fa fa-shopping-cart"></i>-->
                <span>Postgrado</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="ventas/venta"><i class="fa fa-circle-o"></i>Estudiantes Matriculados En Cursos De Postgrado, Periodo 2018-2019</a></li>
                <li><a href="ventas/cliente"><i class="fa fa-circle-o"></i>Unidades Académicas Que Ofertaron Cursos De Posgrado</a></li>
                <li><a href="ventas/venta"><i class="fa fa-circle-o"></i>Matricula Postgrado Por Nivel De Formación Y Sexo, Según Unidades Académicas</a></li>
                <li><a href="ventas/cliente"><i class="fa fa-circle-o"></i>Programas Postgrado</a></li>
              </ul>
            </li>

             <li class="treeview">
              <a href="#">
                <!--<i class="fa fa-shopping-cart"></i>-->
                <span>Registro e Inscripciones</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="ventas/venta"><i class="fa fa-circle-o"></i>Cambios De Carrera Por Sexo Según Carreras</a></li>
                <li><a href="ventas/cliente"><i class="fa fa-circle-o"></i>Readmición De Estudiantes Según Sexo Y Carreras</a></li>
                <li><a href="ventas/venta"><i class="fa fa-circle-o"></i>Suspención Voluntaria De Estudiantes Por Sexo, Según Carreras</a></li>
                <li><a href="ventas/cliente"><i class="fa fa-circle-o"></i>Traspaso De Estudiantes Al Interior De Las Universidades Del Sistema Del Pais, Por Sexo, Según Carreras</a></li>
                <li><a href="ventas/venta"><i class="fa fa-circle-o"></i>Carreras Paralelas Por Sexo Según Carreras</a></li>
                <li><a href="ventas/cliente"><i class="fa fa-circle-o"></i>Carreras Paralelas Por Origen De Carrera Según Facultades</a></li>
              </ul>
            </li>

             <li class="treeview">
              <a href="#">
                <!--<i class="fa fa-shopping-cart"></i>-->
                <span>DICYT</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="ventas/venta"><i class="fa fa-circle-o"></i>Institutos De Investigación (Especializados) Según Facultades, Carreras Y Tipo De Investigación</a></li>
                <li><a href="ventas/cliente"><i class="fa fa-circle-o"></i>Sociedades Cientificas Estudiantiles Por Tipo De Investigación Y Carrera</a></li>
                <li><a href="ventas/venta"><i class="fa fa-circle-o"></i>Proyectos De Investigación Ejecutados Con Cooperación Internacional</a></li>
                <li><a href="ventas/cliente"><i class="fa fa-circle-o"></i>Proyectos De Investigación Ejecutados Con Empresas Privadas</a></li>
                <li><a href="ventas/venta"><i class="fa fa-circle-o"></i>Proyectos De Investigación Ejecutados Con Entidades Públicas</a></li>
                <li><a href="ventas/cliente"><i class="fa fa-circle-o"></i>Investigadores Que Participan En Eventos Científicos Nacionales</a></li>
                <li><a href="ventas/venta"><i class="fa fa-circle-o"></i>Investigadores Que Publican Articulos En Revistas Indexadas</a></li>
                <li><a href="ventas/cliente"><i class="fa fa-circle-o"></i>Investigadores Que Participan En Ferias</a></li>
              </ul>
            </li>

             <li class="treeview">
              <a href="#">
                <!--<i class="fa fa-shopping-cart"></i>-->
                <span>Infraestructura</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="ventas/venta"><i class="fa fa-circle-o"></i>Obras Concluidas Y En Servicio</a></li>
                <li><a href="ventas/cliente"><i class="fa fa-circle-o"></i>Obras Concluidas Entre Las Gestiones 2018 - 2019</a></li>
                <li><a href="ventas/venta"><i class="fa fa-circle-o"></i>Obras En Ejecución</a></li>
                <li><a href="ventas/cliente"><i class="fa fa-circle-o"></i>Obras En Proceso De Recontratación Por Resolución De Contrato</a></li>
              </ul>
            </li>

             <li class="treeview">
              <a href="#">
                <!--<i class="fa fa-shopping-cart"></i>-->
                <span>DAF</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                  <h6 class="dropdown-header">FUENTES DE FINANCIAMIENTO</h6>
                <li><a href="ventas/venta"><i class="fa fa-circle-o"></i>Ingresos</a></li>
                <li><a href="ventas/cliente"><i class="fa fa-circle-o"></i>Egresos</a></li>
                <li><a href="ventas/venta"><i class="fa fa-circle-o"></i>Indice de Ejecución Presupuestaria (IEP)</a></li>
                <li><a href="ventas/cliente"><i class="fa fa-circle-o"></i>Indice Sueldos/Gasto Total (ISGT)</a></li>
                <li><a href="ventas/venta"><i class="fa fa-circle-o"></i>Indice Construcciones/Gasto Total (ICGT)</a></li>
                <li><a href="ventas/cliente"><i class="fa fa-circle-o"></i>Indice Equipamiento/Gasto Total (IEGT)</a></li>
                <li><a href="ventas/venta"><i class="fa fa-circle-o"></i>Indice Capacitación de Personal/Gasto Total (IEGT)</a></li>
                <li><a href="ventas/cliente"><i class="fa fa-circle-o"></i>Indice de Gasto en Interacción Social (IGIS)</a></li>
                <li><a href="ventas/venta"><i class="fa fa-circle-o"></i>Indice Becas/Gasto Total (IBGT)</a></li>
              </ul>
            </li>

             <li class="treeview">
              <a href="#">
                <!--<i class="fa fa-shopping-cart"></i>-->
                <span>Museo Universitario</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="ventas/venta"><i class="fa fa-circle-o"></i>Visitantes Al Museo Universitario Según Sexo, Origen Y Edad</a></li>
                <li><a href="ventas/cliente"><i class="fa fa-circle-o"></i>Visitantes Al Museo Universitario Según Carreras, Sexo</a></li>
              </ul>
            </li>

             <li class="treeview">
              <a href="#">
                <!--<i class="fa fa-shopping-cart"></i>-->
                <span>Extensión</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="ventas/venta"><i class="fa fa-circle-o"></i>Centros De Extensión (Especializados) Según Facultades, Carreras</a></li>
                <li><a href="ventas/cliente"><i class="fa fa-circle-o"></i>Actividades De Extensión Por Tipo De Extensión Y Carrera</a></li>
                <li><a href="ventas/venta"><i class="fa fa-circle-o"></i>Proyectos De Extensión Ejecutados Con Cooperación Internacional</a></li>
                <li><a href="ventas/cliente"><i class="fa fa-circle-o"></i>Transferencia De Proyectos Ejecutados Con Empresas Privadas</a></li>
                <li><a href="ventas/venta"><i class="fa fa-circle-o"></i>Proyectos De Transferencia Ejecutados Con Entidades Públicas</a></li>
                <li><a href="ventas/cliente"><i class="fa fa-circle-o"></i>Extensionistas Que Participan En Eventos Nacionales</a></li>
                <li><a href="ventas/venta"><i class="fa fa-circle-o"></i>Proyectos De Extensión Que Participan En Ferias</a></li>
              </ul>
            </li>

             <li class="treeview">
              <a href="#">
                <!--<i class="fa fa-shopping-cart"></i>-->
                <span>Decanaturas</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="ventas/venta"><i class="fa fa-circle-o"></i>Aprobados, Reprobados, Abandonos</a></li>
                <li><a href="ventas/cliente"><i class="fa fa-circle-o"></i>Análisis De Titulados</a></li>
                <li><a href="ventas/cliente"><i class="fa fa-circle-o"></i>Tiempo De Titulación</a></li>
              </ul>
            </li>

             <li class="treeview">
              <a href="#">
                <!--<i class="fa fa-shopping-cart"></i>-->
                <span>DSA</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="ventas/venta"><i class="fa fa-circle-o"></i>Aprobados, Reprobados, Abandonos</a></li>
                <li><a href="ventas/cliente"><i class="fa fa-circle-o"></i>Análisis De Titulados</a></li>
                <li><a href="ventas/cliente"><i class="fa fa-circle-o"></i>Tiempo De Titulación</a></li>
              </ul>
            </li>

             <li class="treeview">
              <a href="#">
                <!--<i class="fa fa-shopping-cart"></i>-->
                <span>Evaluacion Acreditacion</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="ventas/venta"><i class="fa fa-circle-o"></i>Indice de Carreras Acreditadas (ICA)</a></li>
                <li><a href="ventas/cliente"><i class="fa fa-circle-o"></i>Indice de Carreras Evaluadas (ICE)</a></li>
                <li><a href="ventas/cliente"><i class="fa fa-circle-o"></i>Indice de Carreras con Evaluación de Desempeño Docente (IEDD)</a></li>
              </ul>
            </li>

             <li class="treeview">
              <a href="#">
                <!--<i class="fa fa-shopping-cart"></i>-->
                <span>Dir. Relaciones Internacionales</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="ventas/venta"><i class="fa fa-circle-o"></i>Indice de Convenios Internacionales (ICI)</a></li>
                <li><a href="ventas/cliente"><i class="fa fa-circle-o"></i>Indice de Intercambio Docente Internacionales (IDI)</a></li>
                <li><a href="ventas/venta"><i class="fa fa-circle-o"></i>Indice de Intercambio Estudiantil Internacionales (IEI)</a></li>
                <li><a href="ventas/cliente"><i class="fa fa-circle-o"></i>Indice de Internacionalización de Unidades Académicas (IUA)</a></li>
                <li><a href="ventas/venta"><i class="fa fa-circle-o"></i>Indice de Internacionalización de Laboratorios Científicos (ILC)</a></li>
              </ul>
            </li>

             <li class="treeview">
              <a href="#">
                <!--<i class="fa fa-shopping-cart"></i>-->
                <span>Editorial Imprenta Universitaria</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="ventas/venta"><i class="fa fa-circle-o"></i>Indice de Produccion de Textos y Libros Según Carreras y Año</a></li>
                <li><a href="ventas/cliente"><i class="fa fa-circle-o"></i>Indice de Libros Publicados (ILP)</a></li>
                <li><a href="ventas/venta"><i class="fa fa-circle-o"></i>Indice de Textos didácticos Publicados (ITP)</a></li>
                <li><a href="ventas/cliente"><i class="fa fa-circle-o"></i>Indice de Textos didácticos Estudiantiles Publicados (ITEP)</a></li>
              </ul>
            </li>
                       
            <li class="treeview">
              <a href="#">
                <i class="fa fa-folder"></i> <span>Acceso</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="configuracion/usuario"><i class="fa fa-circle-o"></i> Usuarios</a></li>
                
              </ul>
            </li>
             <li>
              <a href="#">
                <i class="fa fa-plus-square"></i> <span>Ayuda</span>
                <small class="label pull-right bg-red">PDF</small>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-info-circle"></i> <span>Acerca De...</span>
                <small class="label pull-right bg-yellow">IT</small>
              </a>
                        
            </li>
          </ul>
        </section>
        <!-- /.sidebar -- barra lateral -->
      </aside>





       <!--Contenido-->
      <!-- Content Wrapper. Contains page content-- Contenedor de contenido. Contiene contenido de la página -->
      <div class="content-wrapper">
        
        <!-- Main content-- Contenido principal -->
        <section class="content">
          
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Sistema de Indicadores</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <!-- /.box-header -- encabezado de caja -->
                <div class="box-body">
                  	<div class="row">
	                  	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		                          <!--Contenido-->
                              <!--@yield('contenido')-->
		                          <!--Fin Contenido-->
                           </div>
                        </div>
		                    
                  		</div>
                  	</div><!-- /.row -- fila-->
                </div><!-- /.box-body--cuerpo de caja -->
              </div><!-- /.box -- caja-->
            </div><!-- /.col -- columna-->
          </div><!-- /.row -- fila-->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -- contenedor de contenido-->
      <!--Fin-Contenido-->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.0
        </div>
        <strong>Copyright &copy; 2015-2020 <a href="www.incanatoit.com">IncanatoIT</a>.</strong> All rights reserved.
      </footer>

      
    <!-- jQuery 2.1.4 -->
    <script src="{{asset('js/jQuery-2.1.4.min.js')}}"></script>
    @stack('scripts')
    <!-- Bootstrap 3.3.5 -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-select.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('js/app.min.js')}}"></script>
    
  </body>
</html>
