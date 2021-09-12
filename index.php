<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LazyTTS</title>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/squares.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

  <div class="area">
    <ul class="circles">
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
    </ul>
  </div>

  <main class="form-webhook">
  <?php include('./webhook.php'); ?>
    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">

    <h1 class="h3 mb-3 fw-normal">Send message to Discord Webhook</h1>

    <div class="form-floating">
      <input type="text" class="form-control" id="webhook" name="webhook" placeholder="https://">
      <label for="webhook">Webhook URL</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="username" name="username" placeholder="Username">
      <label for="username">Username</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="message" name="message" placeholder="Message">
      <label for="message">Message</label>
    </div>
    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" id="tts" name="tts"> Text-To-Speech
      </label>
    </div>

      <button class="w-100 btn btn-lg btn-primary" type="submit">Submit</button>

    </form>
  </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>