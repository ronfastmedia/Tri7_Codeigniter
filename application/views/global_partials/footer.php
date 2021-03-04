	</div>
	<!-- .wrap -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script>
		(function($){
			$(document).ready(function(){
				$('.btn-cancel,.modal-overlay').click(function(e){
					e.preventDefault();
					$('.modal').hide();
				});
				$('.btn-delete').click(function(e){
					e.preventDefault();
					var data_id = $(this).data('id'),
						form_action = $(this).attr('href');
					$('.modal').fadeIn(100);
					$('.modal').find('form').attr('action', form_action);
				});
			});
		})(jQuery);
	</script>
</body>
</html>