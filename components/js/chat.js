$('.chat_list').click(function(){
	$('.chat_list').removeClass('active_chat');
	$(this).addClass('active_chat');

	$.ajax({
    url: 'chat/ajax',
    type: 'post',
    data: { 'id': $('.id', this).attr('id')},
    success: function(response) {
    	$('.msgs').html(response); }
	});
});

$('.write_msg').focus(function(){
	$(document).keyup(function(e){
		if (e.which == 13){
			$.ajax({
				url: 'chat/ajax',
				type: 'post',
				data: { 
					'id_to': $('.active_chat').find('.id').attr('id'),
					'message': $('.write_msg').val()
				},
			success: function(response) {
				$('.msgs').html(response);}
			});
		}
	});
});

window.setInterval(function(){
	if($('.active_chat').length > 0){
		$.ajax({
	    url: 'chat/ajax',
	    type: 'post',
	    data: { 'id': $('.active_chat').find('.id').attr('id')},
	    success: function(response) {
	    	$('.msgs').html(response); }
		});
	}
}, 2000);