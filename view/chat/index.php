<link rel="stylesheet" href="<?=Router::components('css/chat.css');?>">
<br>
<?php $title = "Chat" ?>
  <div class="container">
    <div class="messaging">
      <div class="inbox_msg">
        <div class="inbox_people">
          <div class="headind_srch">
            <div class="recent_heading">
              <h4>Friends</h4>
            </div>
            <div class="srch_bar">
              <div class="stylish-input-group">
                <input type="text" class="search-bar"  placeholder="Search" >
                <span class="input-group-addon">
                <button type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                </span>
              </div>
            </div>
          </div>
          <div class="inbox_chat">
            <?php foreach($users as $user) : ?>
            <div class="chat_list">
              <div class="chat_people">
                <div class="chat_img">
                  <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil">
                </div>
                <div class="chat_ib">
                  <h5><?php echo $user->nom." ".$user->prenom; ?><span class="chat_date">Date last msg</span></h5>
                </div>
                <div class='id' id='<?= $user->id ?>'></div>
              </div>
            </div>
            <?php endforeach ?>
          </div>
        </div>
        <div class="mesgs">
          <div class="msg_history">
            <div class="incoming_msg">
              <div class="msgs">
              </div>  
            </div>
          </div>
          <div class="type_msg">
            <div class="input_msg_write">
              <input type="text" class="write_msg" placeholder="Type a message" />
              <button class="msg_send_btn" type="button"><i class="far fa-envelope"></i></button>
            </div>
          </div>
        </div>      
      </div>
    </div>
  </div>