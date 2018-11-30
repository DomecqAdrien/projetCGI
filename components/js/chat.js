$('.chat_list').click(function(){
	$('.chat_list').removeClass('active_chat');
	$(this).addClass('active_chat');

	$.ajax({
    url: 'chat/ajax',
    type: 'post',
    data: { 'id': $('.id', this).attr('id')},
    success: function(response) {
    	$('.msgs').html(response);
    	$('.msg_history').scrollTop($('.msg_history')[0].scrollHeight)
    	}
	});
});

$('.msg_send_btn').click(function(e){
	e.preventDefault();
	if ($(document).find('.active_chat')){
		if ($('.write_msg').val() != ''){
			$.ajax({
				url: 'chat/ajax',
				type: 'post',
				data: { 
					'id_to': $('.active_chat').find('.id').attr('id'),
					'message': $('.write_msg').val()
				},
				success: function(response) {
					$('.write_msg').val('');
					$('.msgs').html(response);
					$('.msg_history').scrollTop($('.msg_history')[0].scrollHeight)
				}
			});
		}
	}
});

$(document).keyup(function(e){
	e.preventDefault(); 
	if ($(document).find('.active_chat')){
		if ($('.write_msg').val() != ''){
			if (e.which == 13){
				$.ajax({
					url: 'chat/ajax',
					type: 'post',
					data: { 
						'id_to': $('.active_chat').find('.id').attr('id'),
						'message': $('.write_msg').val()
					},
					success: function(response) {
						$('.write_msg').val('');
						$('.msgs').html(response);
						$('.msg_history').scrollTop($('.msg_history')[0].scrollHeight)
					}
				});
			}
		}
	}
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