$.ajax({
	url: '/authName',
	type: 'GET',
	success: function(response){
		$('#auth-name').html(response);
    }
})
