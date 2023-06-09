var socket = io.connect();

function generate_message(msg, type) {
  var INDEX = 0;
  INDEX++;
  var str = "";
  str += "<div id='cm-msg-" + INDEX + "' class=\"chat-msg " + type + '">';
  str += '          <span class="msg-avatar">';
  str +=
    '            <img src="https://bootdey.com/img/Content/avatar/avatar1.png">';
  str += "          </span>";
  str += '          <div class="cm-msg-text">';
  str += msg;
  str += "          </div>";
  str += "        </div>";
  $("#box-chat").append(str);
  $("#cm-msg-" + INDEX)
    .hide()
    .fadeIn(300);
  if (type == "self") {
    $("#chat-input").val("");
  }
  $("#box-chat")
    .stop()
    .animate({ scrollTop: $("#box-chat")[0].scrollHeight }, 1000);
}

socket.on("serve-feedback-chat-client", function (data) {
  generate_message(data, "self");
});

socket.on("user-online", function (data) {});
socket.on("user-offline", function (data) {
  alert(data);
});
$("#chat-submit").click(function (e) {
  e.preventDefault();
  var msg = $("#chat-input").val();
  socket.emit("client-chat", msg);

  //   if (msg.trim() == "") {
  //     return false;
  //   }
  //   generate_message(msg, "self");
  //   var buttons = [
  //     {
  //       name: "Existing User",
  //       value: "existing",
  //     },
  //     {
  //       name: "New User",
  //       value: "new",
  //     },
  //   ];
  //   setTimeout(function () {
  //     generate_message(msg, "user");
  //   }, 1000);
});
