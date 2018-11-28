$('.chat_list').click(function(){
	$('.chat_list').removeClass('active_chat');
	$(this).addClass('active_chat');

	$.ajax({
    url: 'chat/ajax',
    type: 'post',
    data: { "test": "1"},
    success: function(response) { alert(response); }
	});
});