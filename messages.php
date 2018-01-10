<?php
	include 'connect.php';
	include 'header_ipsmc.php';
?>
<html>
<head>
<style>

.uName{
	color:#00F;
	font-weight: bold;
	font-size: 15px;
	font-family: Verdana, Geneva, sans-serif;
}

.msg{

	color: #390;
	font-size: 15px;
	font-family: Georgia, "Times New Roman", Times, serif;
}

.button{

	text-align: center;
	background-color: #00F;
	border-width: 2px;
	border-style: solid;
	border-color: #00F;
	color: #FFF;
	padding-left: 10px;
	padding-right: 10px;
	text-decoration: none; 

}

label {
  /* To make sure that all labels have the same size and are properly aligned */
  display: inline-block;
  width: 90px;
  text-align: right;

}

input, textarea {
  /* To make sure that all text fields have the same font settings
     By default, textareas have a monospace font */
  font: 1em sans-serif;

  /* To give the same size to all text fields */
  width: 250px;
  box-sizing: border-box;

  /* To harmonize the look & feel of text field border */
  border: 1px solid #999;
}

input:focus, textarea:focus {
  /* To give a little highlight on active elements */
  border-color: #000;
}

textarea {
  /* To properly align multiline text fields with their labels */
  vertical-align: top;

  /* To give enough room to type some text */
  height: 10em;
}

.a {
  /* To position the buttons to the same position of the text fields */
  padding-left: 90px; /* same size as the label elements */
}



.chat {
    width: 200px;
}

.bubble{
	min-height: 40px;
    border-radius: 5px;
    box-shadow: 0 0 6px #B2B2B2;
    display: inline-block;
    padding: 10px 18px;
    position: relative;
    vertical-align: top;
}

.bubble::before {
    content: "\00a0";
    display: block;
    height: 16px;
    position: absolute;
    top: 11px;
    transform:             rotate( 29deg ) skew( -35deg );
        -moz-transform:    rotate( 29deg ) skew( -35deg );
        -ms-transform:     rotate( 29deg ) skew( -35deg );
        -o-transform:      rotate( 29deg ) skew( -35deg );
        -webkit-transform: rotate( 29deg ) skew( -35deg );
    width:  20px;
}

.you {
	color:#ffffff;
	background-color: #008000;
    float: left;   
    margin: 5px 45px 5px 20px;         
}

.you::before {
	color: #ffffff;
	background-color: #008000;
    box-shadow: -2px 2px 2px 0 rgba( 178, 178, 178, .4 );
    left: -9px;           
}

.me {
	color:#ffffff;
	background-color: #ff0000;
    float: right;    
    margin: 5px 20px 5px 45px;         
}

.me::before {
	color: #ffffff;
	background-color: #ff0000;
    box-shadow: 2px -2px 2px 0 rgba( 178, 178, 178, .4 );
    right: -9px;    
}
#leftdiv{
	width: calc(100% - 350px);
	min-height: 320px;
	height: calc(100% - 75px);
	display:inline-block;
	position:absolute;
	left:0px;
	overflow-x:hidden;
	overflow-y:scroll;
}
#rightdiv{
	width: 350px;
	min-height: 320px;
	height: calc(100% - 75px);
	display:inline-block;
	position: absolute;
	right:0px
}
</style>
<?php
$fullname="Guest";
$user_id = "0";
if(isset($_SESSION['user_id'])){
$user_name=$_SESSION['login_username'];
$user_id=$_SESSION['user_id'];
$fullname=$_SESSION['fullname'];
    $checkloginsql = "SELECT * FROM `users` WHERE username='".$user_name."' AND userid ='".$user_id."'";
    $checklogin = mysqli_query($con, $checkloginsql);
    $checklogin_count = mysqli_num_rows($checklogin);
    while($checklogin_list = mysqli_fetch_array($checklogin)){
        $user_type = $checklogin_list['usertype'];
    }
    if($checklogin_count == "1"){
    //if user is properly login what to do
    
    }
    else{
    //if not properly login
    
    
    }
}
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready( function() {
	
	$( "#leftdiv" ).on( "click", ".remove_chat", function() {
		var data_id = $(this).attr('data_id');
		$("#chatbox"+data_id).remove();
	});
	
	$(".chat_users").click(function(){
		var data_value = $(this).attr('data_value');
		var name = $('#getchatname'+data_value).html();
		var checkifondisplay =$('#chatbox'+data_value).length;
		$('#unreadcounter'+data_value).hide();
		$('#unreadcounter'+data_value).val("");
		if(checkifondisplay == 0){
		$("#leftdiv").append('<button class="loadme loadme'+data_value+'" data_id="'+data_value+'">Load Me</button><button class="reloadme reloadme'+data_value+'" data_id="'+data_value+'">Reload Me</button><div class="chatbox" id="chatbox'+data_value+'" data_id="'+data_value+'"><div style="background-color:#1a8cff; font-weight:bold;"><div>'+name+' <button class="remove_chat glyphicon glyphicon-remove" data_id="'+data_value+'" style="float:right; border-width:1px;"></button></div><div class="chathistory chatbox'+data_value+'"></div></div><div class="chatboxinputdiv"><form method="POST" name="form'+data_value+'" action="messages.php"><input type="text" name="msg" id="msg'+data_value+'" data_id="'+data_value+'" class="form-control mymsg" style="width:calc(100% - 60px); display:inline; margin-top:9px;"><button type="submit" name="submit" class="btn glyphicon glyphicon-send" value=">" style="width:50px; float:right; margin-top:9px;"></button></form></div></div>');
		setTimeout(function(){ 
			$('.loadme'+data_value).click();
		}, 300);
		}
	});
	$( "#leftdiv" ).on( "focus", ".mymsg", function() {
	var focused_id = $(this).attr('id');
		$('#focused').val(focused_id);
	});
	
	$( "#leftdiv" ).on( "submit", "form", function(e) {
		e.preventDefault();
		var uname = $("#uname").val();
		var getfocus = $('#focused').val();
		var msg = $("#"+getfocus).val();
		var sendto = $("#"+getfocus).attr('data_id');
		$("#"+getfocus).val("");
		$.post("insert.php",
			{
				uname: uname,
				msg: msg,
				sendto: sendto
			},
			function(data, status){
				$('.reloadme'+sendto).click();
			});
	});
	
	$( "#leftdiv" ).on( "click", ".loadme", function() {
		var data_id = $(this).attr('data_id');
		var uname = $("#uname").val();
		setTimeout(function(){ 
			$.post("logs.php?sendto="+data_id,
			{
				uname: uname,
				my_action: "loadme"
			},
			function(data, status){
				$('.chatbox'+data_id).html(data);
				$('.chatbox'+data_id).scrollTop($('.chatbox'+data_id)[0].scrollHeight);
			});
		}, 100);
	});
	$( "#leftdiv" ).on( "click", ".reloadme", function() {
		var uname = $("#uname").val();
		var data_id = $(this).attr('data_id');
		var last_id = $(".chatbox"+data_id+" .divmsgajax:last").attr('last_id');
		$.post("logs.php?sendto="+data_id,
			{
				uname: uname,
				last_id: last_id,
				my_action: "reloadme"
			},
			function(data, status){
				$(".chatlist"+data_id).append(data);
			});
	});
	
	setInterval(function(){
		$(".reloadme").each(function(){
			$(this).click();
		});
		
		$(".unreadcounter").each(function(){
		var data_id = $(this).attr('data_id');
		$.post("unreadcounter.php",
			{
				from: data_id
			},
			function(data, status){
				$("#unreadcounter"+data_id).html(data);
				if(data == 0){
					$("#unreadcounter"+data_id).hide();
				}
				else{
					$("#unreadcounter"+data_id).show();
				}
			});
		});
	}, 1500);
	
});
</script>
</head>
<body>
<style>
.chatbox{
	border:1px solid grey;
	width:300px;
	height:50%;
	min-height: 300px;
	float:left;
	overflow:hidden;
}

.chathistory{
	position:absolute;
	height: calc(50% - 50px);
	min-height: 210px;
	width:298px;
	overflow-y:scroll;
	overflow-x:hidden;
}
.chatboxinputdiv{
position: absolute; 
width:298px;
margin-top: calc(25% - 15px);
}
.loadme, .reloadme{
	display:none;
}
.unreadcounter{
width:50px; height:25px; border:1px solid #f3b3b3; border-radius:40%; font-weight:bold; background-color:#f3b3b3; text-align:center; margin:0px; padding-top:1px;
}
.unreadcounter0{
	display:none;
}
</style>
<div id="ajaxmsg"></div>
<input type="hidden" id="focused" value="0">
<div class="content-panel">
	<div id="leftdiv">
	</div>
	<div id="rightdiv">
		<div>
			<label for="uname">Name: </label> <?php echo $fullname; ?>
			<input type="text" id="uname" name="uname" value="<?php echo $fullname; ?>" disabled style="display:none">
		</div>
		<div><h3 style="margin:0px;">Contacts</h3></div>
		<div style="border:1px solid black;    height: 300px; overflow-y: scroll; overflow-x: hidden; position:absolute; height: calc(100% - 55px); width:100%;">
			<?php
			$where = "";
			if($user_type == "admin" || $user_type == "Admin"){
				$where = "";
				$where = "WHERE `userid`!='".$user_id."'";
			}
			else{
				$where = "WHERE `usertype`='admin' AND `userid`!='".$user_id."'";
			}
			$get_adminsql = mysqli_query($con,"SELECT * FROM `users` ".$where);
			while($get_userlist = mysqli_fetch_array($get_adminsql)){
				$get_user_id = $get_userlist['userid'];
				$get_user_name = $get_userlist['fullname'];
				$get_unreadcount = mysqli_query($con,"SELECT * FROM `messages` WHERE `sender_id`='".$get_user_id."' AND `receiver_id`='".$user_id."' AND `seen`='0'");
				$unreadcount0 = mysqli_num_rows($get_unreadcount);
				$unreadcount = $unreadcount0;
				if($unreadcount == "0"){
					$unreadcount = "";
				}
				echo "<div data_value='".$get_user_id."' class='btn btn-default chat_users' style='width:100%;'><b id='getchatname".$get_user_id."'>".$get_user_name."</b> <label id='unreadcounter".$get_user_id."' data_id='".$get_user_id."' class='unreadcounter unreadcounter".$unreadcount0."' style=''>".$unreadcount."</label></div>"; 
			}
			?>
		</div>
	</div>
</div>