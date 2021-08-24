<?php
session_start();

if(!isset($_SESSION['username']))
{
	header("location:../index.php");
}




?>
<!DOCTYPE html>



<html>
<head><title>MyChat</title>
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">

<!--<link rel="stylesheet" type="text/css" href="menu1/mystyle1.css">-->

<script src="../JavaScript/Bootstrapjquery.js"></script>
<script src="../JavaScript/Bootstrapminjquery.js"></script>


<link rel="stylesheet" type="text/css" href="slide/xres/style.css" />

<link rel="stylesheet" type="text/css" href="css/mystyle1.css">

<!--[if IE 6]><style type="text/css"> * html img { behavior: url("xres/iepngfix.htc") }</style><![endif]-->
<script type="text/javascript" src="slide/xres/js/saslideshow.js"></script>
<script type="text/javascript" src="slide/xres/js/slideshow.js"></script>
 
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />


<script src="lib/jquery.js" type="text/javascript"></script>
<script src="src/facebox.js" type="text/javascript"></script>



  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <link href="../CSS/bootstra.mi.css" rel="stylesheet">
 <link href="../CSS/custom.css" rel="stylesheet">

    <link rel="icon" type="image/png" href="../img/email.jpg"/>












<style type="text/css">
h3{
background-color: white;
color: black;



 
}


a:hover
{
	color: green;
	text-decoration: none;


}






 #ryt {
float:bottom;

 border:3px solid rgba(0,0,0,0);
-webkit-border-radius:5px;
-moz-border-radius:5px;
 border-radius:5px;
-webkit-box-shadow:0 0 10px rgba(0,0,0,20.4);
-moz-box-shadow:0 0 18px rgba(0,0,0,20.4);
 box-shadow:0 0 18px rgba(0,0,0,20.4);

 font-size: 15px;
 height: 100%;
 margin-top:50px;
 }
 #sel {
float:top;

 border:3px solid rgba(0,0,0,0);
-webkit-border-radius:5px;
-moz-border-radius:5px;
 border-radius:5px;
-webkit-box-shadow:0 0 10px rgba(0,0,0,10.4);
-moz-box-shadow:0 0 18px rgba(0,0,0,10.4);
 box-shadow:0 0 18px rgba(0,0,0,10.4);
 margin-top:5%;
 font-size: 15px;


  height: 100%px;
 }




#background {
    width: 100%; 
    height: 100%; 
    position: fixed; 
    left: 0px; 
    top: 0px; 
    z-index: -1; /* Ensure div tag stays behind content; -999 might work, too. */
}

.stretch {
    width:100%;
    height:100%;
}


  .blog_item {
                    padding: 1px 0px;
                    background-color:#F2F2F2;
                    margin: 5px 0px 2px; 
                     border-bottom: 1px solid lightgray;

                }

                
  .blog_itemis {
                    padding: 1px 0px;
                    background-color:#F2F2F2;
                    margin: 5px 0px 2px; 
                     border-bottom: 1px solid lightgray;

                }
  .blog_itemis:hover {
                    padding: 1px 0px;
                    background-color:#ccc;
                    margin: 5px 0px 2px; 
                     border-bottom: 1px solid lightgray;

                }
  .newscontainer {
                    padding: 0.9% 0.9%;
                    background-color:#F2F2F2;
                    margin: 5px 0px 2px;
                    border-bottom: 1px solid lightgray;
                    border-left: 5px solid lightgray;
                  

                }

  .newscontainer:hover {
                    padding: 0.9% 0.9%;
                    background-color:#dcdcdc;
                     margin: 5px 0px 2px;
                    border-bottom: 0.7% solid gainsboro;
                    border-left: 5px solid gray;
                    -webkit-transform: scale(1.01);
                    -moz-transform: scale(1.01);
                    -ms-transform: scale(1.01);
                    -o-transform: scale(1.01);
                    transform: scale(1.01);
                    -webkit-transition: all .3s ease-in-out;
                    -moz-transition: all .3s ease-in-out;
                    -ms-transition: all .3s ease-in-out;
                    -o-transition: all .3s ease-in-out;
                    transition: all .3s ease-in-out;
                    
                   

                }
                  .newscontainer:hover #thumbo {
                   box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
                  }



                
                        
                .blog_item a {
                    text-decoration: none;
                    padding-bottom: 0px;
                    color: #0074a2;
                }
                

                  .blog_item a:hover {
                    text-decoration: none;
                    padding-bottom: 0px;
                    color: green;
                }



.blog_itemo {
                    padding: 1px 0px;
                    background-color:#F2F2F2;
                    margin: 5px 0px 2px;
                     border-bottom: 1px solid lightgray;
                }

 .blog_itemo a {
                    text-decoration: none;
                    padding-bottom: 0px;
                    color: #0074a2;
                }

                  .blog_itemo a:hover {
                    text-decoration: none;
                    padding-bottom: 0px;
                    color: green;
                }


   .show_more_containero {
                    margin: 1.5% 2.5%;
                }
                .show_moreo {
                    cursor: pointer;
                    display: block;
                    padding: 10px 0;
                    text-align: center;
                    font-weight:bold;
                }








                .show_more_container {
                    margin: 1.5% 2.5%;
                }
                .show_more {
                    cursor: pointer;
                    display: block;
                    padding: 10px 0;
                    text-align: center;
                    font-weight:bold;
                }


#nexto
{
  color: white;
}
#nexto:hover {
    background-color: #ddd;
    color: black;
}


.previousa {
    background-color: #f1f1f1;
    color: black;
}

.nexta {
    background-color: #4CAF50;
    color: white;
}

.rounda {
    border-radius: 50%;
}

#thumb
{
  max-height: 60px;
}

.containere {
  position: relative;
  max-width: 400px;
  margin: 0 auto;

}

.containere .contente {
  position: absolute; /* Position the background text */
  bottom: 0; /* At the bottom. Use top:0 to append it to the top */
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1; /* Grey text */
  width: 97%; /* Full width */
  padding: 5px;
   margin-left: 5px;
   margin-bottom: 4px;
}

#thumbo {
    border: 1px solid #ddd;
    border-radius: 4px;
    padding: 5px;
    
    margin-right: 5px;
   
}
#thumbo:hover {
    box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
}




* {
    box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.columno {
    float: left;
    width: 50%;
    padding: 10px;
 

  
}

/* Clear floats after the columns */
.rowo:after {
    content: "";
    display: table;
    clear: both;
}
/* Style the buttons */
.btno {
    border: none;
    outline: none;
    padding: 12px 16px;
    background-color: #f1f1f1;
    cursor: pointer;
}

.btno:hover {
    background-color: #ddd;
}

.btno.active {
    background-color: #666;
    color: white;
}


.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}



body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the 
page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  height:45px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: relative;

  width: 120px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;

  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container 
input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: rgba(0, 80, 255, 0.8);
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid transparent;
  background-color: #f1f1f1;
    
}



/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: 2px  solid #ccc;
  border-bottom: none;
  border-radius: 8px 8px 0px 0px;
  cursor: pointer;
 height: 35px;
  transition: 0.3s;
  font-size: 17px;
  width: 50%; 
  margin-bottom: 0px;
  
   
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
   
  background-color: #ccc;
  border-top-color: dodgerblue;
  color: dodgerblue;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 1px 1px;
  border: 1px solid #ccc;
  border-top: none;
}
#tablemanager input{
    margin-bottom: 20px;
}

.notification {
  background-color: transparent;
  color: white;
  text-decoration: none;
  padding: 15px 26px;
  position: relative;
  display: inline-block;
  border-radius: 2px;
}

.notification:hover {
  background: red;
}

.notification .badge {
  position: absolute;
  top: -5px;
  right: -5px;
  padding: 5px 10px;
  border-radius: 50%;
  background-color: red;
  color: white;
}


.containeri {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 20px;
  padding: 10px;
  margin: 10px 0;
}
.containeris {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 20px;
  padding: 10px;
  margin: 10px 0;
    width: 50%;
  margin-right: 45%;
  margin-left: 5%;
}
.darker {
  border-color: #ccc;
  background-color: rgba(0, 100, 255, 0.5);
  color:white;
  border-radius: 20px;
  width: 50%;
  margin-left: 45%;
  margin-right: 5%;
}

.containeri::after {
  content: "";
  clear: both;
  display: table;
}

.containeri img {
  float: left;
  max-width: 60px;
  width: 100%;
  margin-right: 20px;
  border-radius: 50%;
}

.nametag {


  color: black;
  font-weight: bold;
 
 
}
.nametagFrnd
{
   color: black;
  font-weight: bold; 
}
.containeri img.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

.containeris::after {
  content: "";
  clear: both;
  display: table;
}

.containeris img {
  float: left;
  max-width: 60px;
  width: 100%;
  margin-right: 20px;
  border-radius: 50%;
}

.containeris img.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

.time-right {
  float: right;
  color: rgba(0,100,100,0.8);
}

.time-left {
  float: left;
  color: white;
}



.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

.open-buttonis {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: relative;

  width: 100px;

}

/* The popup form - hidden by default */
.form-popupis {
  display: none;
  position: fixed;

  border: 3px solid #f1f1f1;
  z-index: 9;
  
  

}

/* Add styles to the form container */
.form-containeris {
  max-width: 300px;
  min-height: 80px;
  padding: 10px;
  background-color: white;
  border: appworkspace 2px solid;
 

}
/* Style the buttons inside the tab */
.form-popupis1 {
 display: none;
 

  border: 3px solid #f1f1f1;

}

/* Add styles to the form container */
.form-containeris1 {
 max-width: 300px;
  min-height: 10px;
padding: 5px;

  background-color: white;
  border: appworkspace 2px solid;
  float: right;
  margin-top: -15px;    

}

.form-popupis2 {
  display: none;
  position: fixed;

  border: 3px solid #f1f1f1;
  z-index: 9;
  
  

}

/* Add styles to the form container */
.form-containeris2 {
  max-width: 300px;
  min-height: 80px;
  min-width: 150px;
 
  background-color: white;
  border: appworkspace 2px solid;
 
 

}
.form-containeris2 span
{
  padding-bottom: 10px; 
   padding-left: 15px;
  
}

.checko
{
  display: none;  
}

</style>

 
<script>
function openFormis(id)
{
    $("#myFormis"+id).show(300, "linear");
}
function closeFormis(id) {
     $("#myFormis"+id).hide(300, "linear");
}

function openFormis2(id)
{
    
         clearInterval(window.timer);
        $("#myFormis2"+id).show(300, "linear");
}
function closeFormis2(id) {
     $("#myFormis2"+id).hide(300, "linear");
}

function openFormis1()
{
    $("#myFormis1").show(300, "linear");
}
function closeFormis1() {
     $("#myFormis1").hide(300, "linear");
      
}
 function refreshThis()
{
   $.ajax({
 datatype:'text',
 method:'POST',
 url:'countpending.php',
 async:true,
 data:
  {
    key:'key'  
  }, success: function(response)
 {
   
   
       $("#notirefresh").html(response);
       
 }
    
});
        }

$(document).ready(function(){
   //$(".modal-body").css('display', 'none'); 
   //$(".panel-body").css('display', 'none');
   listMsgs();
  refreshThis();
window.scrollTo(0,document.getElementById('mfooter').scrollHeight);
});




function insertPrivate()
{
    var key = window.event.keyCode;

    // If the user has pressed enter
    if (key === 13) {
             var enteredMsg = $('#myText1').val();
        
        var repliedId = $("#repliedId").val();
                            var date = new Date();
                            $.ajax({
                               datatype: 'text',
                               url: 'insertprivately.php',
                               method: 'POST',
                               data: {
                                   user_id: <?=$_SESSION['username']?>, 
                                   msg: enteredMsg, 
                                   timo: date.getHours()+':'+date.getMinutes(),
                                   replyId: repliedId
                                    },
                                       success: function(response)
                                        {
                                            $('#myText1').val("");
                                           console.log(response);
                                           listPrivates();
                                          }
                            });
        return true;
    }
    else {
        return false;
    }
  
  
                         
}



        function listPrivates() {
            var idos = $("#repliedId").val();
            var senderId = <?= $_SESSION['username']?>;
            $.post("selectPrivates.php", 'repliedId=' +idos+ '&senderId=' +senderId,
                function (data) {
                    var data = JSON.parse(data);
                    
                    var comments = "";
                         var list = $("<div>");
                            var item = $("<div>").html(comments);

                  
                    for (var i = 0; (i < data.length); i++)
                    {
                        var userId = data[i]['user_id'];
                      var msgId = data[i]['id'];
                        var msg = data[i]['msg'];
                        var timo = data[i]['created_on'];
                         var pic = data[i]['user_profile'];  
                         var fname = data[i]['fname'];  
                         
                       var mySession = <?= $_SESSION['username']?>;
                       if(userId == mySession)
                       {
                           comments = '<div style="float: left; margin-top:25px; margin-left:5px"><input type="checkbox" value="'+ data[i]['id'] +'" class="checko checkbox'+data[i]['id']+'" name="check[]" onChange="showButtono1('+ data[i]['id'] +')"></div><div class="containeri darker" id="tbl'+ data[i]['id'] +'"><img src="./Thumbs/'+pic+'" alt="Avatar" class="right" style="width:100%; max-width: 50px; height: 50px"><span class="nametag">'+fname+'</span><span class="glyphicon glyphicon-option-vertical" onClick="return openFormis2('+msgId+')"  style="background-color:transparent; color: black; text-decoration: none; border: none; padding: 0px; margin-left: 2px; margin-right: 2px; cursor: pointer"></span><br><div class="form-popupis2" style="position: absolute; float: left;" id="myFormis2'+msgId+'"><form  class="form-containeris2"><img onclick="closeFormis2('+msgId+')" src="./thumbs/closelabel.png" id="closo" style="float: right; cursor:pointer; width:10%; margin-right:0px "><br><span style="cursor:pointer; color:rgba(0,100,255,0.8);  padding-bottom:10px" onClick="return updation('+msgId+')" ><span class="glyphicon glyphicon-edit"></span> Edit chat</span><br><span style="cursor:pointer; color:rgba(0,100,255,0.8); paddin-top:10px" onClick="return deleteSingle('+msgId+')" ><span class="glyphicon glyphicon-trash"></span> Delete</span></form></div><p style="padding-top:10px">'+msg+'</p> <span class="time-left">'+timo+'</span></div>';

                            var item = $("<div>").html(comments);
                                    list.append(item);
                                        
                                        $(".panel-body").html(list);
                                    }
                                    
                         else{
                       comments = '<div style="float: left; margin-top:25px; margin-left:5px"><input type="checkbox" value="'+ data[i]['id'] +'" class="checko checkbox'+data[i]['id']+'" name="check[]" onChange="showButtoni1('+ data[i]['id'] +')"></div><div class="containeris" id="tbl'+ data[i]['id'] +'"><img src="./Thumbs/'+pic+'" alt="Avatar" class="right" style="width:100%; max-width: 50px; height: 50px"><span class="nametag">'+fname+'</span><p style="padding-top:10px">'+msg+'</p> <span class="time-right">'+timo+'</span></div>';      
                       var item = $("<div>").html(comments);
                                    list.append(item);
                                        if(data == 'N')
                                        {
                                            $(".panel-body").html("No messages");
                                        }
                                        else
                                        {
                                            $(".panel-body").html(list);
                                        }
                                        
                         }
                                        }
                    
                    
                  
                });
        }



function setTimer(secz)
{
   window.timer = setInterval(function(){ 
      listPrivates();
}, secz);
return timer;
}
function privateMsg(userid)
{
setTimer(1000);

$('#privateStuffs').css('display', 'inline-block');
$("#privbtn").css('display', 'block');
$("#pubbtn").css('display', 'none');
$("#repliedId").val(userid);
$("#myText").css('display', 'none');
$("#myText1").css('display', 'block');
$("#subpriv").css('display', 'block');
$(".all").css('display', 'none');

   $.ajax({
       datatype: 'text',
       url: 'selectSing.php',
        method: 'POST',
        data: {
         user_id: userid
        },
         success: function(response)
        {
           $("#usernam").html(response);
                                          }
         });
    
  listPrivates();

}


function viewMsg(userid, fname, profile)
{
    $('#privateStuffs').css('display', 'inline-block');
   $("#topthumb").attr("src", "Thumbs/"+profile);
    $(".frndThumb").attr("src", "Thumbs/"+profile);
    $("#usernam").html(fname);
   $(".panel-body").html('');
   
   $(".nametagFrnd").html(fname);
   $(".outputo").html('');
}




</script>
	<script type="text/javascript">
		jQuery(function($){
			// Websocket
			var websocket_server = new WebSocket("ws://localhost:8080/");
			websocket_server.onopen = function(e) {
				websocket_server.send(
					JSON.stringify({
						'type': 'socket',
						'user_id': <?=$_SESSION['jina']?>,
					})
				);
			};
			websocket_server.onerror = function(e) {
				// Errorhandling
			}
			websocket_server.onmessage = function(e) {
				var json = JSON.parse(e.data);
				switch(json.type) {
					case 'chat':
                                            
                                             //$(".modal-body").css('display', 'block');
						$('.outputo').append(json.msg);
                                                console.log(json);
						break;
				}
			}
                        
                        function saveToDB()
                        {
                            var enteredMsg = $('#myText').val();
                            var date = new Date();
                            $.ajax({
                               datatype: 'text',
                               url: 'insertmsg.php',
                               method: 'POST',
                               data: {
                                   user_id: <?=$_SESSION['username']?>, 
                                   msg: enteredMsg, 
                                   timo: date.getHours()+':'+date.getMinutes()
                                    },
                                       success: function(response)
                                        {
                                           console.log(response);
                                          }
                            });
                        }
			// Events
			$('#myText').on('keyup',function(e){
                            
				if(e.keyCode==13 && !e.shiftKey) {
                                     $(".modal-body").css('display', 'block');
                                     var date = new Date();
                                      var repliedId = $("#repliedId").val();
                                    
					var chat_msg = $(this).val();
					websocket_server.send(
						JSON.stringify({
							'type': 'chat',
                                                         'profile': '<?=$_SESSION['pic']?>',
							'user_id': '<?=$_SESSION['jina']?>',
							'chat_msg': chat_msg,
                                                        'replied': repliedId,
                                                        'realId': <?=$_SESSION['username']?>,
                                                        'timeStamp': date.getHours()+':'+date.getMinutes()
						})
					);
                              
                                            saveToDB();  
                              
                                   
                                          refreshThis();
                                         listMsgs();
                                        
					$(this).val('');
                                       
                                        
				}
                                
			});
		});
                
function showCheckboxes()
{
    
   clearInterval(window.timer);
   
    
    $('.checko').css('display', 'block');
    $('.form-popupis1').css('display', 'none');
}
                
               function showButtono(studentid)
{
     $("#pubbtn").css('display', 'block');
     if($('.checkbox'+ studentid+':checked').length < 1)
   {
     
    $("#tbl" + studentid).css({"background-color":"rgba(0, 100, 255, 0.5)", "font-weight" : "normal"});
  
    if($('.checko:checked').length < 1)
     {
         $("#hiddenField").hide(300, "linear"); 
     }
  
    }
   
 
  else
  {

 $("#hiddenField").show(300, "linear");
    $("#tbl" + studentid).css({"background-color":"rgba(255, 0, 10, 0.4)", "font-weight" : "bold"});
  
   
    
  }
  
  
 
} 

               function showButtono1(studentid)
{
     
     if($('.checkbox'+ studentid+':checked').length < 1)
   {
     
    $("#tbl" + studentid).css({"background-color":"rgba(0, 100, 255, 0.5)", "font-weight" : "normal"});
  
    if($('.checko:checked').length < 1)
     {
         $("#hiddenField").hide(300, "linear"); 
     }
  
    }
   
 
  else
  {

 $("#hiddenField").show(300, "linear");
    $("#tbl" + studentid).css({"background-color":"rgba(255, 0, 10, 0.4)", "font-weight" : "bold"});
  
   
    
  }
  
  
 
}

               function showButtoni(studentid)
{
     $("#pubbtn").css('display', 'block');
   if($('.checkbox'+ studentid+':checked').length < 1)
   {
     
    $("#tbl" + studentid).css({"background-color":"#f1f1f1", "font-weight" : "normal", "color" : "gray"});
  
    if($('.checko:checked').length < 1)
     {
         $("#hiddenField").hide(300, "linear"); 
     }
  
    }
   
 
  else
  {

 $("#hiddenField").show(300, "linear");
    $("#tbl" + studentid).css({"background-color":"rgba(255, 0, 10, 0.4)", "font-weight" : "bold", "color" : "white"});
  
   
    
  }
  
  
 
} 
   
   
function showButtoni1(studentid)
{
     //$("#pubbtn").css('display', 'none');
   if($('.checkbox'+ studentid+':checked').length < 1)
   {
     
    $("#tbl" + studentid).css({"background-color":"#f1f1f1", "font-weight" : "normal", "color" : "gray"});
  
    if($('.checko:checked').length < 1)
     {
         $("#hiddenField").hide(300, "linear"); 
     }
  
    }
   
 
  else
  {

 $("#hiddenField").show(300, "linear");
    $("#tbl" + studentid).css({"background-color":"rgba(255, 0, 10, 0.4)", "font-weight" : "bold", "color" : "white"});
  
   
    
  }
  
  
 
} 
     function delete_confirm(){
         
if($('.checko:checked').length > 0){
var result = confirm("Are you sure to delete selected messages?");
if(result){
   
     var id = [];
     $('.checko:checked').each(function(i){
         id[i] = $(this).val();
      
      $.ajax({
    url:"delete.php",
    method: "POST",
    datatype: "text",
    data:{
     check : id
    },
    success: function(response)
    {
      
       listMsgs();
       refreshThis();
        $("#hiddenField").hide(300, "linear");
        
    }
  });
      
      
     });
   
return true;
}

  else{
return false;
}
}else{
alert('Select at least 1 message to delete.');
return false;
}
}


     function delete_confirm1(){
         
if($('.checko:checked').length > 0){
var result = confirm("Are you sure to delete selected messages?");
if(result){
   
     var id = [];
     $('.checko:checked').each(function(i){
         id[i] = $(this).val();
      
      $.ajax({
    url:"delete.php",
    method: "POST",
    datatype: "text",
    data:{
     check : id
    },
    success: function(response)
    {
      
       listPrivates();
       refreshThis();
        $("#hiddenField").hide(300, "linear");
        
    }
  });
      
      
     });
   
return true;
}

  else{
return false;
}
}else{
alert('Select at least 1 message to delete.');
return false;
}
}
function updation(msgId)
{
    $('#updato').modal('show');
    $('#msgid').val(msgId);
    $('.form-popupis2').css('display', 'none');
    
       $.post("seleupdate.php", 'msgid=' +msgId,
                function (data) {
               var data = JSON.parse(data);
             
                  for (var i = 0; (i < data.length); i++)
                    {
                        //var mid = data[i]['id'];
                        var msg = data[i]['msg'];
                     
                        
                       
                    }
    $('#msgUpda').val(msg);
       });
    
    
   
}
function closeModal()
{
    $('#updato').modal('hide'); 
}


 function updating (updatos, modes)
 {
    var sidos =  $("#msgid").val(); 
    var msg =  $("#msgUpda").val(); 
  

    $.ajax({
            url: 'seleupdate.php',
            method: 'POST',
            datatype: 'text',
            data: {
             sido : sidos,
             numsg : msg,            
             key : updatos
            },
            success: function(response){
                alert("Message editted successfully");
                
                var modis = $("#usernam").text();
                if(modis === "Chat with Group")
                {
                  listMsgs();  
                    
                }
                else
                {
                 listPrivates();   
                }
                  
                   $('#updato').modal('hide');   
            }
    });
 }
 
 
  function deleteSingle(msgid)
{var conf = confirm("Are you sure you want to delete the message?");
    if(conf)
    {
   $.ajax({
 datatype:'text',
 method:'POST',
 url:'deletesingle.php',
 async:true,
 data:
  {
    id:msgid  
  }, success: function(response)
 {
   
   
       var modis = $("#usernam").text();
                if(modis === "Chat with Group")
                {
                  listMsgs();  
                    
                }
                else
                {
                 listPrivates();   
                }
       
 }
    
});
    }
        }



                function listMsgs() {
            
            $.post("select.php",
                function (data) {
                    var data = JSON.parse(data);

                    var comments = "";
                         var list = $("<div>");
                            var item = $("<div>").html(comments);

                  
                    for (var i = 0; (i < data.length); i++)
                    {
                        var userId = data[i]['user_id'];
                      var msgId = data[i]['id'];
                        var msg = data[i]['msg'];
                        var timo = data[i]['created_on'];
                         var pic = data[i]['user_profile'];  
                         var fname = data[i]['fname'];  
                         
                       var mySession = <?= $_SESSION['username']?>;
                       if(userId == mySession)
                       {
                           comments = '<div style="float: left; margin-top:25px; margin-left:5px"><input type="checkbox" value="'+ data[i]['id'] +'" class="checko checkbox'+data[i]['id']+'" name="check[]" onChange="showButtono('+ data[i]['id'] +')"></div><div class="containeri darker all" id="tbl'+ data[i]['id'] +'"><img src="./Thumbs/'+pic+'" alt="Avatar" class="right" style="width:100%; max-width: 50px; height: 50px"><span class="nametag">'+fname+'</span><span class="glyphicon glyphicon-option-vertical" onClick="return openFormis2('+msgId+')"  style="background-color:transparent; color: black; text-decoration: none; border: none; padding: 0px; margin-left: 2px; margin-right: 2px; cursor: pointer"></span><br><div class="form-popupis2" style="position: absolute; float: left;" id="myFormis2'+msgId+'"><form  class="form-containeris2"><img onclick="closeFormis2('+msgId+')" src="./thumbs/closelabel.png" id="closo" style="float: right; cursor:pointer; width:10%; margin-right:0px "><br><span style="cursor:pointer; color:rgba(0,100,255,0.8);  padding-bottom:10px" onClick="return updation('+msgId+')" ><span class="glyphicon glyphicon-edit"></span> Edit chat</span><br><span style="cursor:pointer; color:rgba(0,100,255,0.8); paddin-top:10px" onClick="return deleteSingle('+msgId+')" ><span class="glyphicon glyphicon-trash"></span> Delete</span></form></div><p style="padding-top:10px">'+msg+'</p> <span class="time-left">'+timo+'</span></div>';

                            var item = $("<div>").html(comments);
                                    list.append(item);
                                        
                                        $(".panel-body").html(list);
                                    }
                                    
                         else{
                       comments = '<div style="float: left; margin-top:25px; margin-left:5px"><input type="checkbox" value="'+ data[i]['id'] +'" class="checko checkbox'+data[i]['id']+'" name="check[]" onChange="showButtoni('+ data[i]['id'] +')"></div><div class="containeris all" id="tbl'+ data[i]['id'] +'"><img src="./Thumbs/'+pic+'" alt="Avatar" class="right" style="width:100%; max-width: 50px; height: 50px"><span class="nametag">'+fname+'</span><span class="glyphicon glyphicon-option-vertical" onClick="return openFormis('+msgId+')"  style="background-color:transparent; color: black; text-decoration: none; border: none; padding: 0px; margin-left: 2px; margin-right: 2px; cursor: pointer"></span><br><div class="form-popupis" style="position: absolute; float: left;" id="myFormis'+msgId+'"><form  class="form-containeris"><img onclick="closeFormis('+msgId+')" src="./thumbs/closelabel.png" id="closo" style="float: right; cursor:pointer; width:10%; margin-right:0px "><br><a href="#" onClick="return privateMsg('+userId+')" ><span class="glyphicon glyphicon-envelope"></span> Chat privately</a></form></div><p style="padding-top:10px">'+msg+'</p> <span class="time-right">'+timo+'</span></div>';      
                       var item = $("<div>").html(comments);
                                    list.append(item);
                                        
                                        $(".panel-body").html(list);
                         }
                                        }
                    
                    
                  
                });
        }
		</script>            
            





</head>
<body>




    <nav class="navbar navbar-inverse navbar-static-top navbar-fixed-top container " role="navigation" style="margin-top:0px; margin-bottom: 0px;  border: 3px white solid">

<div id="menu">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo $_SERVER['SCRIPT_NAME']; ?>"><span class="glyphicon glyphicon-envelope"></span> MyChat</a>
            </div>
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav">
                  
                  
                    <li>
                        <a href="index.php" class="notification"><span class="glyphicon glyphicon-envelope"></span> Inbox<span class="badge" id="notirefresh">0</span></a>
                    </li>
                   
					<li class="dropdown">
						<a href="newsform.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-cog"></span> Settings <span class="caret"></span></a>
						<ul  aria-labelledby="about-us">
							<li><a href="#">Edit profile</a></li>
							
							
						</ul>

					</li>    
<div style=" float:left; position:relative;">

                         
<div class="form-popup" id="myForm">
  <form class="form-container">

                           <?php
                           include"../db_config.php";
                           $profi=$con->query("SELECT * FROM chat_user_table where user_id='$_SESSION[username]'");
                           while ($lino=$profi->fetch_array()) {
                            $fname=$lino['fname'];
                            $lname=$lino['lname'];
                            $commenta = $fname."&nbsp;".$lname;
                           $substro = substr($commenta, 0, - strlen($commenta)+18);
                         
                          ?>


<center><a href="profile.php?id=<?php echo $_SESSION['username']; ?>"><img style="border: solid 2px blue;" class="img-circle" src="Thumbs/<?php echo $lino['user_profile'];?>" height="29%" width="20%"></a><br>
    <a title="<?php echo $fname."&nbsp;".$lname; ?>" href="profile.php?id=<?php echo $_SESSION['username']; ?>"><?php  echo'<span id="dots">'.$commenta; ?> </a></center>

   <a href="session.php" class="btn"><span class="glyphicon glyphicon-log-out"></span>  Sign Out</a>
    <button type="button" class="btn cancel" 
onclick="closeForm()"><span class="glyphicon glyphicon-off"></span> Close</button>
  </form>
</div>

<script>
function openForm() {
    document.getElementById("myForm").style.display = "block";
}

function closeForm() {
    document.getElementById("myForm").style.display = "none";
}
</script>
  


 </div>



                </ul>

                <a onClick="openForm()" href="#" style="color:white; justify-content: space-between"><img style="margin-left: 5px; border: solid 2px white; min-height: 50px; max-height: 50px; min-width: 50px; max-width: 50px;" class="img-circle " src="Thumbs/<?php echo $lino['user_profile'];?>" height="10%" width="5%"><span class="caret"></span></a>
<a title="<?php echo $fname."&nbsp;".$lname; ?>" style="color: white;" href="profile.php?id=<?php echo $_SESSION['username']; ?>"><?php if(strlen($commenta)<=18){echo $commenta;} else{ echo'<span id="dots"><b>'.$substro;}   ?> </b><span style="display: <?php if(strlen($commenta)<=18){echo 'none';} ?>">...</span> </span></a>

  <?php

  }
  ?>
				<!-- Search -->
	

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


<div class="container">






<div id="background">
    <img src="../img/back2.jpg" class="stretch" alt="" />
	</div>





<h3>





<div id="ryt" style="width: 50%px; height: 100%px; overflow-y: hidden; overflow-x: hidden;">


 







   <div id="sel" style="width: 80%px; height: 50%px; overflow-y: hidden; margin-top: 0px;">

       




    
      

     

    

	  </div><!--/Right Column -->

	</div><!--/container-fluid-->
	
	
	
    <!-- jQuery -->




     	
     




	  <small>




 
 <center>
    <div class="row" style="text-align: left">
      <div>
            <article class="col-md-7 article-intro" style="text-align: left;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px; margin-left:1.5%; margin-right: 1.5%; background-color: transparent; min-height: 300px ">
                <div class="blog_item" style="margin-top: 10px;">



                    
                    
                    <div id="tablemanager">
          
            
                        <div class="modal-header" style="padding-bottom:35px; max-height: 35px;">  <h4> <div style="display: none; float: left; margin-top:-15px" id="privateStuffs"> <span onclick="window.location.href='index.php'" style="cursor:pointer" class="glyphicon glyphicon-arrow-left"> </span> <img id="topthumb" class="img-thumbnail img-circle" src="Thumbs/male.png" style="width:35px; height:35px;"></div> <span style="float:left; margin-left: 5px; margin-top:-8px" id="usernam"> Chat with Group</span></h4>
                        

                            <div id="hiddenField" id="hiddenField" style="display:none; float: left; margin-left:20%">
                                 <button id="pubbtn" style="display: none; margin-top: -15px;"  name="bulk_delete_submit" class="btn btn-danger" onClick="return delete_confirm()"><span class="glyphicon glyphicon-trash"></span></button>
                                 <button id="privbtn" style=" margin-top: -15px; display: none; margin-left:90px"  name="delete_submit" class="btn btn-danger" onClick="return delete_confirm1()"><span class="glyphicon glyphicon-trash"></span>Delete</button>
                            </div>
     
                       
                            <span style="float:right; cursor: pointer; margin-bottom: 0px;" class="glyphicon glyphicon-option-vertical" onClick="return openFormis1()"></span>
                            <div class="form-popupis1" id="myFormis1">
  <form  class="form-containeris1">
 <img onclick="closeFormis1()" src="./thumbs/closelabel.png" id="closo" style="float: right; cursor:pointer; width:7%; margin-right:0px "><br>
 <div onclick="return showCheckboxes()" style="padding:0px; color:rgba(0,100,255,0.8); cursor: pointer"><span class="glyphicon glyphicon-check"></span> Select messages</div>
  </form>
</div>

                            
                        </div>

                        <div class="panel-body">
                            
No messages


                        </div> 
                        <div class="modal-body"> 
                            


                             <div class="outputo"></div>
                         </div>
                        <div class="modal-footer"  id="mfooter">
                            <input type="hidden" id="repliedId" name="repliedId" value="0" class="form-control">
                 <textarea name="msg" id="myText"   rows="2"  cols="80" style="float:left; max-width: 100%;  border-radius: 30px; padding-left: 10px;"> </textarea>      
                 <textarea onkeypress="insertPrivate();" name="msg1" id="myText1"   rows="2"  cols="80" style="float:left; max-width: 100%; display: none; border-radius: 30px; padding-left: 10px;"> </textarea> 
                                 
                             </div>
                        
                            
                        
                         
                    
                     
            
                 
        
             
         </div>
                
                </div>
     
     <div id="updato" class="modal fade">
         <div class="modal-dialog">
         <div class="modal-content">
             
                <div class="modal-header"> 
                    <h4 class="modal-tile">Edit Message</h4>  <span onclick="return closeModal()" class="glyphicon glyphicon-remove" style="float: right; margin-top: -38px; cursor:pointer; "></span>
                     </div>
                         <div class="modal-body"> 
                            <input type="hidden" value="0" name="msgid" id="msgid">
                               
                            <label>Message</label> <textarea name="msgUpda" id="msgUpda"   rows="2"  cols="75" style="padding-left: 10px; border-radius: 30px; max-width: 100%"> </textarea>
                         </div>
             <div class="modal-footer"><button name="updatos" id="updatos" onclick="updating('updatos', 'group')" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span> Edit </button></div>
                 
             </div>
         </div>
         
     </div>
     

</article></div>






<article class="col-md-4 article-intro navbar-right " style="text-align: left;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
 
  background-color: transparent; margin-left: 1.3%; margin-right: 1.3%; ">

    
<div class="tab">
  <button id="defaultOpen" class="tablinks" onclick="openCity(event, 'London')">Recent chats</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Group members</button>
  
</div>

<div id="London" class="tabcontent">

    
       <div class="blog_listo">


                <?php
                //get rows query
                $query=$con->query("SELECT distinct chatrooms.user_id, chat_user_table.user_profile, chat_user_table.lname, chat_user_table.fname, chatrooms.msg, chatrooms.created_on FROM chat_user_table, chatrooms WHERE chat_user_table.user_id = chatrooms.user_id AND chatrooms.replied_user_id = '$_SESSION[username]' ORDER BY chatrooms.id DESC ");
                $numRows = $query->num_rows;
                
   if($numRows > 0){ 

?>

   
<?php
   while($row = $query->fetch_assoc()){ 
  $fname=$row['fname'];
  $userid=$row['user_id'];
  $lname=$row['lname'];
  $profile=$row['user_profile'];
  $msg=$row['msg'];
  $timo=$row['created_on'];

                  

  ?>

                                   <a  onClick="return privateMsg(<?php echo $userid?>)" href="#">


  <div class="blog_itemis"><h5>


                                 <table border="0" width="100%" >

       
     
      <?php

 
   echo"<tr>";
 
   echo"<td width='100px'>";
  ?> 
     
         <a  onClick="return viewMsg(<?php echo $userid?>, '<?php echo $fname?>', '<?php echo $profile?>')" href="#"><img class="img-thumbnail img-circle" src="Thumbs/<?php echo $row['user_profile'];?>" id="thumb" height="100%" width="80%">


</a>


   </td>
  <td> <a onClick="return viewMsg(<?php echo $userid?>, '<?php echo $fname?>', '<?php echo $profile?>')" href="#"><font face="arial" size="2.5px"><?php echo $row['fname'].'&nbsp'.$lname.'<small>';?><br></a></font>&nbsp;<span class="glyphicon glyphicon-time"></span> <?php 




?>

      <?php echo $timo?><br>
      <b> <?php echo $msg?></b> 
 </b></font>
 


  
  </small>




 


</td>


</tr>
 
  
     </table>
                                




                            </h5></a></div></a>
                    <?php } ?>
                    <div class="show_more_containero" id="show_more_containero<?php echo $userid; ?>">
                        <a style="width: 100px; height:48px; margin-left: auto; margin-right: auto; " rel="<?php echo $userid; ?>" class="show_moreo" title="Reba izindi videwo"><p><button class="btn btn-default"><font size="2px">Load more</font> <span class="caret"></span> </button></p></a>

                        <span class="loading" id="loading" style="display: none;" ><span id="loading" class="loading_txt"><center><img src="src/loading.gif" id="loading"> Loading</center></span></span>

                    </div>
                <?php } 
else{
    echo 'No messages';
}
             



                ?>

</div>
    
    
</div>

<div id="Paris" class="tabcontent">

    
       <div class="blog_listo">


                <?php
                //get rows query
                $query=$con->query("SELECT * FROM chat_user_table WHERE user_id != $_SESSION[username] ORDER BY user_id DESC");
                $numRows = $query->num_rows;
                
   if($numRows > 0){ 

?>

   
<?php
   while($row = $query->fetch_assoc()){ 
  $fname=$row['fname'];
  $userid=$row['user_id'];
  $lname=$row['lname'];
  $profile=$row['user_profile'];

                  

  ?>

                                   <a  onClick="return privateMsg(<?php echo $userid?>)" href="#">


  <div class="blog_itemis"><h5>


                                 <table border="0" width="100%" >

       
     
      <?php

 
   echo"<tr>";
 
   echo"<td width='100px'>";
  ?> 
     
         <a  onClick="return viewMsg(<?php echo $userid?>, '<?php echo $fname?>', '<?php echo $profile?>')" href="#"><img class="img-thumbnail" src="Thumbs/<?php echo $row['user_profile'];?>" id="thumb" height="100%" width="80%">


</a>


   </td>
  <td> <a onClick="return viewMsg(<?php echo $userid?>, '<?php echo $fname?>', '<?php echo $profile?>')" href="#"><font face="arial" size="2.5px"><?php echo $row['fname'].'&nbsp'.$lname.'<small>';?><br></a></font><?php 




?>

     
 </b></font>
 


  
  </small>




 


</td>


</tr>
 
  
     </table>
                                




                            </h5></a></div></a>
                    <?php } ?>
                    <div class="show_more_containero" id="show_more_containero<?php echo $userid; ?>">
                        <a style="width: 100px; height:48px; margin-left: auto; margin-right: auto; " rel="<?php echo $userid; ?>" class="show_moreo" title="Reba izindi videwo"><p><button class="btn btn-default"><font size="2px">Load more</font> <span class="caret"></span> </button></p></a>

                        <span class="loading" id="loading" style="display: none;" ><span id="loading" class="loading_txt"><center><img src="src/loading.gif" id="loading"> Loading</center></span></span>

                    </div>
                <?php } 

             



                ?>

</div>
    
</div>



<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
document.getElementById("defaultOpen").click();
</script>

</article>
</div></center>
     


        

</h3>
    



	</body>
	
	
	
	
	
	
	
	
	
	
	
	
<br>






</h3>


</blockquote>

<footer style="margin-bottom:40px">
 <div class="small-print" style="background-color: #F2F2F2">
          
            
          
            <p><span class="glyphicon glyphicon-copyright-mark"></span> MyChat 2021-<?php echo date("Y");?>. All rights reserved</p>
            
            

             <script>

</script>


            
          </div>
        
  </footer>




</div></div></div></div></div></div></table></h5></a></div></div></small></div></h3></div>




</body></body></html>