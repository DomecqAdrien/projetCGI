<?php foreach($msgs_user as $msg):
if ($msg->id_user_from == $_SESSION['id']){
?>
<div class=""></div>
<div class="incoming_msg">
	<div class="received_msg">
        <div class="received_withd_msg">
			<p><?= $msg->message ?></p>
            <span class="time_date"><?= $msg->datetime ?></span>
       	</div>
    </div>
</div>
<?php } else { ?>
<div class="outgoing_msg">
	<div class="sent_msg">
	    <p><?= $msg->message ?></p>
        <span class="time_date"><?= $msg->datetime ?></span> 
    </div>
</div>
<?php } endforeach;
die(); ?>