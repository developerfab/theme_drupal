function efecto_cambio(tag_id, nombre_img){
	var ruta = "<?php print base_path() . path_to_theme(); ?>"+nombre_img;
	document.getElementById(tag_id).src=ruta;
}