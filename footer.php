<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

</div> <!-- end .content -->
</div> <!-- end #dummy-content -->

<footer class="footer">
    <div class="footer-container">
		<div class="copyright">&copy;2018-<?php echo date('Y'); ?> By Ethson Liu</div>
		<div class="framework-info">
			Driven - <a href="http://www.typecho.org">Typecho</a> | Theme - <a href="https://github.com/EthsonLiu/typecho-theme-wab">Wab</a>
		</div>
    </div>
</footer>

<script type="text/x-mathjax-config">
  	MathJax.Hub.Config({
		tex2jax: {inlineMath: [['$','$'], ['\\(','\\)']]}
	});
</script>

<script type="text/javascript" src="https://cdn.staticfile.org/mathjax/2.7.7/MathJax.js?config=TeX-MML-AM_SVG"></script>
<script type="text/javascript" src="https://cdn.staticfile.org/highlight.js/9.18.1/highlight.min.js"></script>
<script> hljs.initHighlightingOnLoad(); </script>

<script>
window.onload = function() {
	var allImgs = document.getElementById("dummy-content").getElementsByTagName("img");
	console.log(allImgs);
	var len = allImgs.length;
	for (i = 0; i < len; ++i) { 
		var imgHalfHeight = allImgs[i].naturalHeight / 2;
		console.log(imgHalfHeight);
		if (imgHalfHeight < 25 * 16) {
			allImgs[i].style.maxHeight = String(imgHalfHeight) + "px";
		}
		else {
			allImgs[i].style.maxHeight = "25rem";
		}
 	}
}
</script>

</body>
</html>