<?php require_once("header.tpl.php"); ?>
<script type="text/javascript">
function efecto_cambio(tag_id, nombre_img){
  var ruta = "<?php print base_path() . path_to_theme(); ?>/images/"+nombre_img;
  document.getElementById(tag_id).src=ruta;
}
</script>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<div class="container contenedor">
    <nav class="col-md-offset-2 col-md-10">
      <div class="logo"><img alt="" src="<?php print $logo; ?>"></div>
      <div class="menu"><a href="." onMouseOut="efecto_cambio('Image1','Homa-.jpg');" onMouseOver="efecto_cambio('Image1','Home+.jpg');"><img alt="" src="<?php print base_path() . path_to_theme(); ?>/images/Homa-.jpg" id="Image1"></a></div>
      <div class="menu"><a href="." onMouseOut="efecto_cambio('Image2','About-.jpg');" onMouseOver="efecto_cambio('Image2','Aboutus+.jpg');"><img alt="" src="http://localhost/internet/themes/fotocopiadora/images/About-.jpg" id="Image2"></a></div>
      <div class="menu"><a href="." onMouseOut="efecto_cambio('Image3','Services-.jpg');" onMouseOver="efecto_cambio('Image3','Services+.jpg');"><img alt="" src="http://localhost/internet/themes/fotocopiadora/images/Services-.jpg" id="Image3"></a></div>
      <div class="menu"><a href="." onMouseOut="efecto_cambio('Image4','Contact-.jpg');" onMouseOver="efecto_cambio('Image4','Contact+.jpg');"><img alt="" src="http://localhost/internet/themes/fotocopiadora/images/Contact-.jpg" id="Image4"></a></div>
    </nav>
    <div class="col-md-offset-2">
      <div class="col-der">
        <ul>
          <li><img alt="" src="<?php print base_path() . path_to_theme(); ?>/images/Ourproducts.jpg" width="171" height="30" style="margin-right:12px "></li>
        </ul>
        <ul>
          <?php print render( $page['col_left'] ); ?>
        </ul>
        <ul>
          <li><img alt="" src="<?php print base_path() . path_to_theme(); ?>/images/Ourtechnologies.jpg" width="171" height="30"></li>
        </ul>
      </div>
      <div class="col-contenido"><p><?php print render( $page['content'] ); ?></p></div>
    </div>
  </div>
<?php require_once("footer.tpl.php"); ?>
