<!DOCTYPE html>
<html lang='en'>
<?php include("./includes/header.php"); ?>

<header>
	<link rel="stylesheet" href="./css/blueimp-gallery.min.css">
</header>



<body>

<?php include("./includes/logo.php");?>
<?php include("./includes/menus.php"); ?>


<h1 style="text-align:center">In Construction, Coming soon !!</h1>
<div id="blueimp-gallery-carousel" class="blueimp-gallery blueimp-gallery-carousel" style="width:60%">
    <div class="slides"></div>
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
</div>

<div id="links">
    <a href="img/dessus_veste.png"></a>
    <a href="img/chemise_legere.png"></a>
    <a href="img/echarpe1.png"></a>
    <a href="img/echarpe.png"></a>
    <a href="img/robe_courte.png"></a>
    <a href="img/veste.png"></a>
</div>

<script src="js/blueimp-gallery.min.js"></script>

<script>
blueimp.Gallery(
    document.getElementById('links').getElementsByTagName('a'),
    {
        container: '#blueimp-gallery-carousel',
        carousel: true
    }
);
</script>

</body>
</html>