<html>
<header>
	<link rel="stylesheet" href="css/blueimp-gallery.min.css">
</header>
<body>
	<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
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
        <img src="img/thumbnails/banana.jpg" alt="Banana" style="width:50px">
    </a>
    <a href="img/apple.jpg" title="Apple">
        <img src="img/thumbnails/apple.jpg" alt="Apple" style="width:50px">
    </a>
    <a href="img/orange.jpg" title="Orange">
        <img src="img/thumbnails/orange.jpg" alt="Orange" style="width:50px">
    </a>
</div>

<script src="js/blueimp-gallery.min.js"></script>

<script>
document.getElementById('links').onclick = function (event) {
    event = event || window.event;
    var target = event.target || event.srcElement,
        link = target.src ? target.parentNode : target,
        options = {index: link, event: event},
        links = this.getElementsByTagName('a');
    blueimp.Gallery(links, options);
};
</script>

</body>
</html>