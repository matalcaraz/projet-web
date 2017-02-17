<!-- Footer -->
<footer>
    <div class="row">
        <div class="col-lg-12">
            <p>Copyright &copy; MasterClass 2017 - ALCARAZ Mathieu </p>
        </div>
    </div>
</footer>

</div>
<!-- /.container -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="fancy/jquery.fancybox.pack.js"></script>
<!-- Script to Activate the Carousel -->
<script>
$('.carousel').carousel({
interval: 5000 //changes the speed
})
</script>

<script type="text/javascript">
	$(document).ready(function() {
    $(".fancybox").fancybox({
  		openEffect	: 'none',
  		closeEffect	: 'none'
  	});
	});


$(document).ready(function() {
	$(".various").fancybox({
    afterShow: function() {
      $('.fancybox-skin').css("background-image", "url(images/fond.jpg)");
    },
		maxWidth	: 800,
		maxHeight	: 600,
		fitToView	: false,
		width		: '70%',
		height		: '70%',
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none'
	});
});
</script>

</body>

</html>
