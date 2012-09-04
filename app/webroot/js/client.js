var trigger = "updateContent";
host = "push.notification.com:8000";
conn = new WebSocket("ws://"+host+"/");
conn.onmessage = function(evt) {
// Make an Ajax call to the server to update the content
    if (evt.data == "update"){
// Call the callback function when there is an update
        window[trigger]();
    }
};

conn.onerror = function() {
};

conn.onclose = function() {
    conn = false;
};

conn.onopen = function() {
//        alert("You are connected");
    postMessage("You are connected");
};
function updateContent()
{
    $.ajax({
        type: "POST",
        url: "/phpserver/pages/get",
        data: [],
        error: function(qXHR, textStatus, errorThrown){
            postMessage("There is an error while sending");
        },
        success: function(data){
            if (data.res == "true"){
                postMessage(data.data);
            }

            postMessage("Update new message");
        }
    });
}