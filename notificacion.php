<!DOCTYPE html>
<html>
<head>
<title>Trajes Eventuales</title>
 
<script type="text/javascript" src="WebNotifications.js"></script>
<script type="text/javascript">
    var n = 1;

    function showNotification() {
        var notif = showWebNotification('NOTIFICACION TRAJES EVENTUALES: ' + n, 'Reparacion R-0154 pra las 5:00pm\nEvento: ' + n, '/icon.png', null, 8000);
        //handle different events
        notif.addEventListener("show", Notification_OnEvent);
        notif.addEventListener("click", Notification_OnEvent);
        notif.addEventListener("close", Notification_OnEvent);
        n++;
    }

    function Notification_OnEvent(event) {
        //A reference to the Notification object
        var notif = event.currentTarget;
        document.getElementById("msgs").innerHTML += "<br>Notification <strong>'" + notif.title + "'</strong> received event '" + event.type + "' at " + new Date().toLocaleString();
    }
</script>
</head>
<body>
    <input type="button" value="Ask for permission to show notifications" onclick="askForWebNotificationPermissions();" />
    <br />
    <input type="button" value="show" onclick="showNotification();" />
    <div id="msgs" style="color:red;font-size:small;margin-top:20px;"></div>
</body>
</html>
