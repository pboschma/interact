/**
 * Created by PhpStorm.
 * user: Jonas Kruse
 */
$(document).ready(function(){
	setInterval(function(){
		updateUserChat();
	}, 5000);
});

function sendMessage(to_user_id) {
	message = $(".PLACEHOLDER input").val();
	$('.PLACEHOLDER input').val('');
	if($.trim(message) == '') {
		return false;
	}
	$.ajax({
		url:"chat_action.php",
		method:"POST",
		data:{to_user_id:to_user_id, chat_message:message, action:'insert_chat'},
		dataType: "json",
		success:function(response) {
			var resp = $.parseJSON(response);			
			$('#conversation').html(resp.conversation);				
		}
	});	
}
function updateUserChat() {
	$('li.PLACEHOLDER').each(function(){
		var to_user_id = $(this).attr('data-touserid');
		$.ajax({
			url:"chat_action.php",
			method:"POST",
			data:{to_user_id:to_user_id, action:'update_user_chat'},
			dataType: "json",
			success:function(response){				
				$('#conversation').html(response.conversation);			
			}
		});
	});
}

