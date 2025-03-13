importScripts("https://js.pusher.com/beams/service-worker.js");
  const beamsClient = new PusherPushNotifications.Client({
    instanceId: '217a010e-92be-44d2-b70c-4d2daa265c3c',
  });

  beamsClient.start()
    .then(() => beamsClient.addDeviceInterest('hello'))
    .then(() => console.log('Successfully registered and subscribed!'))
    .catch(console.error);