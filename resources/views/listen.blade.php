<!DOCTYPE html>

<head>
  <title>Pusher Test</title>
  <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
  <script>
    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('6ab8fd3c8bcf7d405457', {
      cluster: 'ap2'
    });

    var channel = pusher.subscribe('notification');
    channel.bind('MessageNotification', function(data) {
      // alert(JSON.stringify(data));

      console.log(data);
    });
  </script>
</head>

<body>
  <h1>Pusher Test</h1>
  <p>
    Try publishing an event to channel <code>my-channel</code>
    with event name <code>my-event</code>.
  </p>
</body>