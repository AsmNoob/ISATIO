<html>
<header>
	<link rel="stylesheet" href="css/blueimp-gallery.min.css">
</header>
<body>
	<div id="blueimp-gallery-carousel" class="blueimp-gallery blueimp-gallery-carousel">
    <div class="slides"></div>
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
</div>

<div id="links">
    <a href="img/banana.jpg" title="Banana" >
        <!-- <img src="img/thumbnails/banana.jpg" alt="Banana" style="width:50px"> -->
    </a>
    <a href="img/apple.jpg" title="Apple">
        <!-- <img src="img/thumbnails/apple.jpg" alt="Apple" style="width:50px"> -->
    </a>
    <a href="img/orange.jpg" title="Orange">
        <!-- <img src="img/thumbnails/orange.jpg" alt="Orange" style="width:50px"> -->
    </a>
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