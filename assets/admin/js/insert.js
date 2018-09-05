$('#register-form').submit(function(){
	return false;
});
$('#insert').click(function(){
	$.post(
		$('#register-form').attr('action'),
		$('#register-form :input').serializeArray(),
		function(result){
			$('#result').html(result);
		}
	);
});
