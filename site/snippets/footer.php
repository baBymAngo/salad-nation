<footer id="footer">
	<span class="footer-msg">Crafted authentically and with care from Greensboro, NC</span>
	<div class="social-media">
		<a href="#"><i class="fa fa-instagram"></i></a>
		<a href="#"><i class="fa fa-pinterest"></i></a>
		<a href="#"><i class="fa fa-twitter"></i></a>
		<a href="#"><i class="fa fa-facebook"></i></a>
		<a href="#"><i class="fa fa-google-plus-square"></i></a>
	</div>
</footer>

<script>
(function($){
	var $form = $('form#search');
	$form.find('i').on('click', function(){
		$form.toggleClass('clicked');
		$('#main-menu').toggleClass('clicked');
		$('.social-media').toggleClass('clicked');
	});
})(jQuery);
</script>
</body>
</html>