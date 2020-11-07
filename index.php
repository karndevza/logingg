<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="google-site-verification" content="aPKgi0y75-X6emJLgH7SHtHJ5AgkH4uxJs9COM-XOsc" />
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title>login</title>

    <link rel="canonical" href="">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
  
    <meta name="google-signin-client_id" content="693739184619-nvg72e274lgcmj2buhinbus5hdqtnqh2.apps.googleusercontent.com">

</head>
<body>
<div class="g-signin2" data-onsuccess="onSignIn"></div>


<script>
function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
  console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
  console.log('Name: ' + profile.getName());
  console.log('Image URL: ' + profile.getImageUrl());
  console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
}
</script>
</body>

</html>