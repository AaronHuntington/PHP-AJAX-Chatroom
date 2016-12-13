


function sendMessage() {
    var message = $("#message").val();
    var key = $("#chatKey").val();
    var name = $("#chatName").val();

    //This is to make the input field blank once the user sends a chat message.
    $("#chatroom_form_inputMessage").val("");

    $.ajax({
        url:'includes/process_chat.php',
        type:'POST',
        // data:'chat='+chatText,
        data:{message:message,name:name,key:key},
        success:function (response)
        {

        }
    });
}
