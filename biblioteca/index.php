<?
require '../bin/connect_sql.php';
?>
<!DOCTYPE html>
<html lang="es-ES" xmlns:fb="http://ogp.me/ns/fb#" xmlns:addthis="http://www.addthis.com/help/api-spec" >
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Listado de libros | Open Library</title>

  <link rel="stylesheet" type="text/css" media="all" href="../wp-content/themes/etnassoft/style.css" />
  <link rel="stylesheet" href="../wp-content/themes/etnassoft/bookstore-final.css" />
  <script type="text/javascript" src="../js/cargarLibros.js"></script>


</head>
<body class="page page-id-566 page-parent page-template page-template-books-page-php biblioteca gecko">

  <div id="header">
    <div id="header-topnav">
      <a title="Dise&ntilde;o y programaci&oacute;n Web. Ingenier&iacute;a Javascript." href="../index.php">
        <img id="logo" src="../wp-content/themes/etnassoft/images/headers/logo_white.png" />
      </a>
      <div id="access" role="navigation">

        <div class="bookstore_top_menu">
          <ul class="menu" id="menu-menu-navegacion">
            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-807" id="menu-item-807"><a href="../index.php">Inicio</a></li>
            <li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-566 current_page_item menu-item-808" id="menu-item-808"><a href="index.php">Biblioteca</a></li>
          </ul>
        </div>

        <div id="bookstore_search_form">
          <form method="get" id="searchform" action="http://www.etnassoft.com/" >
	<div>
		<label class="screen-reader-text" for="s">Search for:</label>
		<input type="text" value="" name="s" id="s" />
		<input type="submit" id="searchsubmit" value="" class="hidden" />
	</div>
</form>        </div>
      </div><!-- #access -->
    </div>
    <h1 class="image_central">Diseño y Proagramación Web Madrid. Front-end Developer Madrid. Arquitecto Javascript Madrid - EtnasSoft </h1>
	</div><!-- #header -->

  <div id="bookstore_promobar"></div>

  <div id="bookstore_info_bar">
    <div class="inner">
      <div class="title_section">
        <h1 class="books_title"><a title="OpenLibra. La biblioteca libre online" href="index.html">OpenLibra</a></h1>
        <h2 class="books_subtitle">"La Biblioteca Libre online que estabas esperando"</h2>
      </div>
      <div class="intro_section">
        <a class="main_rss_follow" href="../selector-rss/index.html">RSS</a>
        <a class="main_twitter_follow" href="http://twitter.com/etnassoft/">Twitter</a>
      </div>
    </div>

  </div>



<div id="wrapper" class="hfeed">

	<div id="main">



<div id="subDepartment">

    <div class="tab"></div>

    <h1>
      CAT&Aacute;LOGO GENERAL: NOVEDADES    </h1>

    <ul id="crumbs">
      <li class="hoError al conectar a la base de datosme_crumb"><a href="../index.html">Inicio</a><span class="separator">-</span></li>
      <li class="bookstore_crumb"><a href="index.html">Biblioteca</a><span class="separator">-</span></li>
      <li>CAT&Aacute;LOGO GENERAL    </ul>

    <input type="hidden" name="actual_url" id="actual_url" value="http://www.etnassoft.com/biblioteca/" />
    <form action="http://www.etnassoft.com/biblioteca/" method="get" id="filters">
      <fieldset>

          <div class="search_area">
            <input type="text" class="filter" placeholder="Comience a escribir..." name="search_term" id="search_books_input" value="" />

              <select name="books_category" id="categories_for_books">
                <option value="all">Todas las categor&iacute;as</option>
                <option value="ajedrez" >Ajedrez</option>
                <option value="arte-bellas-artes" >Arte - Bellas Artes</option>            
              </select>

              <button class="standard_submit_btn" type="submit">
                <span class="inner">Buscar!</span>
              </button>
          </div>

          <h3 id="show_filters"><a href="#">Filtrado</a></h3>

          <div id="filters_layers" class="hidden">

             <div class="area">
              <label for="books_criteria">Ordenar: </label>
              <select name="books_criteria" id="books_criteria">
                <option value="post_title_ASC" >T&iacute;tulo A-Z</option>
                <option value="post_title_DESC" >T&iacute;lo Z-A</option>
                <option value="post_date_DESC" selected="selected" >M&aacute;s nuevo</option>
                <option value="post_date_ASC" >M&aacute;s antiguo</option>

              </select>
            </div>

            <div class="area">
              <label for="language">Idioma: </label>
              <select name="lang" id="language">
                <option value="all" selected="selected">Todos</option>
                <option value="spanish" >Espa&ntilde;ol</option>
                <option value="english" >Ingl&eacute;s</option>
              </select>
            </div>

            <div class="area" id="since_date">
              <label for="since">Subido desde: </label>
              <select name="since" id="since">
                <option value="all" selected="selected">Cualquier fecha</option>
                <option value="today" >Hoy</option>
                <option value="last_week" >Semana pasada</option>
                <option value="last_month" >Mes pasado</option>
                <option value="last_year" >A&ntilde;o pasado</option>
              </select>
            </div>
          </div>

      </fieldset>
    </form>

    <div id="results_content">

      <div class="pagination">
<div class="layout_mode">
  <a class="layout_query grid_view" title="Vista en Rejilla" href="#">Vista Rejilla</a>
  <a class="layout_query table_view" title="Vista en Filas" href="#">Vista Tabla</a>
</div>


<div class="pagination_selector">
  <span class="prev disabled">&lt; anterior</span>
  <span class="current">1</span>
  <a href="page/2/indexaa09.html?new_layout=grid">2</a>
  <a href="page/3/indexaa09.html?new_layout=grid">3</a>
  <a class="next" href="page/2/indexaa09.html?new_layout=grid">siguiente &gt;</a>
</div>
<dl class="settings"><dt>Coincidencias:</dt><dd>2689 </dd></dl></div>
<!-- ================================================================ -->
<!-- ================================================================ -->
<!-- ================================================================ -->
<!-- ================================================================ -->
<ul class="books" id="cargarLibros">    
</ul>
<!-- ================================================================ -->
<!-- ================================================================ -->
<!-- ================================================================ -->
<!-- ================================================================ -->
<!-- ================================================================ -->
<div class="pagination">

<div class="layout_mode">
  <a class="layout_query grid_view" title="Vista en Rejilla" href="#">Vista Rejilla</a>
  <a class="layout_query table_view" title="Vista en Filas" href="#">Vista Tabla</a>
</div>


<div class="pagination_selector">
  <span class="prev disabled">&lt; anterior</span>
  <span class="current">1</span>
  <a href="page/2/indexaa09.html?new_layout=grid">2</a>
  <a href="page/3/indexaa09.html?new_layout=grid">3</a>
  <a class="next" href="page/2/indexaa09.html?new_layout=grid">siguiente &gt;</a>
</div>
</div>    </div>

</div><!-- subDepartment -->

<div id="categories">
  <h2>Categor&iacute;as</h2>

  <ul class="products single">
<?
$sql = mysql_query("SELECT id, nombre FROM categoria");
while ($row = mysql_fetch_array($sql)) {
    echo '<li class="folded"><a href="javascript: cargarLibrosAjax('.$row['id'].');">'.$row['nombre'].'</a></li>';
}
?>
    
  </ul>

</div><!-- Categories -->
</div><!-- #main -->

</div><!-- #wrapper -->

<div id="wrapper_closer"></div>
<div id="footer_books">
  <div id="footer_books_content">

    <div id="footer_brand">
      <a href="index.php" class="footer_logo">OpenLibra</a>
      <p>
        <span class="design_by">OpenLibra Girl by <a href="http://saisan-disseny.blogspot.com/" title="Saisan Disseny">Saisan Disseny</a></span>
        <span class="twitter_link"><a href="http://twitter.com/SaisanDisseny/" title="@SaisanDisseny">@SaisanDisseny</a></span>
      </p>
      <p>
        <span class="design_by">OpenLibra Logo by <a href="http://about.me/vaneloana" title="Vanessa Reyes">Vanessa Reyes</a></span>
        <span class="twitter_link"><a href="http://twitter.com/vaneloana" title="@vaneloana">@vaneloana</a></span>
      </p>
    </div>

    <div id="footer_books_nav">

      <ul>

        <li class="first-item">
          <h2>OpenLibra</h2>
          <ul>
            <li><a href="../biblioteca-footer/el-proyecto/index.html" title="Proyecto">Proyecto</a></li>
            <li><a href="../biblioteca-footer/sobre-las-licencias/index.html" title="Sobre las licencias">Sobre las licencias</a></li>
            <li><a href="../biblioteca-footer/opensearch-y-openlibra/index.html" title="Open Search en OpenLibra">OpenSearch y OpenLibra</a></li>
            <li><a href="../api-documentacion/index.html" title="API P&uacute;blica">API P&uacute;blica</a></li>
            <li><a href="../biblioteca-footer/faqs/index.html" title="Preguntas Frecuentes">FAQs</a></li>
          </ul>
        </li>

        <li>
          <h2>Participa</h2>
          <ul>
            <li><a href="../subir-libro/index.html" title="Sugerir un libro">Sugerir un Libro</a></li>
            <li><a href="../biblioteca-footer/promocione-su-obra/index.html" title="Promocione su obra">Promocione su obra</a></li>
            <li><a class="new_feature" href="../trabajar-en-openlibra/index.html" title="Trabajar en OpenLibra">Trabajar en OpenLibra</a></li>
            <li><a class="new_feature" href="../biblioteca-footer/donaciones/index.html" title="Realizar una donaci&oacute;n">Hacer una donaci&oacute;n</a></li>
          </ul>
        </li>

        <li>
          <h2>Contactar</h2>
          <ul>
            <li><a href="http://twitter.com/etnassoft" title="Twitter">S&iacute;guenos en Twitter</a></li>
            <li><a href="../contactar/index.html" title="Abusos">Reportar abuso</a></li>
            <li><a href="../contactar/index.html" title="Contactar">Enviar mail</a></li>
          </ul>
        </li>

      </ul>

    </div><!-- #footer_books_nav -->

  </div><!-- footer_books_content -->

  <div id="books_colophon">
    <p>&copy;2011 OpenLibra is licensed under a 
      <a href="http://creativecommons.org/licenses/by/3.0/">Creative Commons Attribution 3.0</a>
       | Development by <a href="../index.html">EtnasSoft</a> | Follow me on Twitter: 
       <a href="http://twitter.com/etnassoft">@etnassoft</a></p>
  </div>

</div><!-- #footer_books -->

<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="http://185.37.226.98/piwik/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', 1]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="http://185.37.226.98/piwik/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->

<script type="text/javascript">var SHRSB_Settings = [];</script>	<script type="text/javascript">
	  window.___gcfg = {lang: 'es'};
	
	  (function() {
	    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
	    po.src = 'https://apis.google.com/js/plusone.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
	  })();
	</script><script type="text/javascript">

var addthis_config = {"data_track_clickback":true,"data_track_addressbar":false,"data_track_textcopy":false,"ui_atversion":"300"};
var addthis_product = 'wpp-3.5.9';
</script><script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=My+Profile"></script><script type='text/javascript' src='../wp-content/plugins/contact-form-7/includes/js/jquery.form.mind03d.js?ver=3.51.0-2014.06.20'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var _wpcf7 = {"loaderUrl":"http:\/\/www.etnassoft.com\/wp-content\/plugins\/contact-form-7\/images\/ajax-loader.gif","sending":"Enviando...","cached":"1"};
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/contact-form-7/includes/js/scripts657a.js?ver=3.9.3'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var ratingsL10n = {"plugin_url":"http:\/\/www.etnassoft.com\/wp-content\/plugins\/wp-postratings","ajax_url":"http:\/\/www.etnassoft.com\/wp-admin\/admin-ajax.php","text_wait":"Please rate only 1 post at a time.","image":"stars","image_ext":"gif","max":"5","show_loading":"1","show_fading":"1","custom":"0"};
var ratings_mouseover_image=new Image();ratings_mouseover_image.src=ratingsL10n.plugin_url+"/images/"+ratingsL10n.image+"/rating_over."+ratingsL10n.image_ext;;
/* ]]> */
</script>
<script type='text/javascript' src='../wp-content/plugins/wp-postratings/postratings-jsd9b4.js?ver=1.79'></script>
<script type='text/javascript' src='http://dtym7iokkjlif.cloudfront.net/media/js/jquery.shareaholic-publishers-sb.min.js?ver=6.1.5.1'></script>
<!--wp_footer-->
<script type="text/javascript" src="../wp-content/themes/etnassoft/js/jquery.tipsy.min.js"></script>
<script type="text/javascript">
  jQuery( document ).ready( function () {
    jQuery( 'a.layout_query' ).click( function ( e ) {
      e.preventDefault();
      var layout_mode = ( jQuery( this ).hasClass( 'grid_view' ) ) ? 'grid' : 'row',
          url_to_jump = jQuery( '#actual_url' ).val();

      if ( url_to_jump.indexOf( 'new_layout' ) == -1 ) {
        var separator = ( url_to_jump.indexOf( '?' ) == -1 ) ? '?' : '&';
        url_to_jump += separator + 'new_layout=' + layout_mode;
      } else {
        url_to_jump = url_to_jump.replace( /new_layout=(.*)$/, 'new_layout=' + layout_mode );
      }

      location.href =  url_to_jump;
    } );

    jQuery( '#show_filters' ).click( function ( e ) {
      jQuery( '#filters_layers' ).slideToggle();
      e.preventDefault();
    } );

    jQuery( '.attachment-bookstore_thumb, .promoted_section_thumb' ).tipsy( {
      gravity: 's'
    } );

  } );
</script>

</body>

<!-- Mirrored from www.etnassoft.com/biblioteca/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Dec 2014 17:05:55 GMT -->
</html>
<!-- Dynamic page generated in 1.746 seconds. -->
<!-- Cached page generated by WP-Super-Cache on 2014-12-06 15:26:07 -->

<!-- super cache -->