<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LazyTTS</title>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/squares.css">
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
    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
      <h1 class="h3 mb-3 fw-normal">Send message to Discord Webhook</h1>
      <div class="form-floating">
      <input type="text" class="form-control" id="floatingWebhook" placeholder="https://">
      <label for="floatingWebhook">Webhook URL</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingUsername" placeholder="Username">
      <label for="floatingUsername">Username</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingMessage" placeholder="Message">
      <label for="floatingMessage">Message</label>
    </div>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" id="tts" name="tts"> Enable Text-To-Speech
        </label>
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Submit</button>
    </form>
  </main>

  <!--
    <section class="text-gray-400 body-font">
        <div class="container px-5 py-24 mx-auto flex flex-wrap items-center">
          <div class="lg:w-2/6 md:w-1/2 bg-gray-800 bg-opacity-50 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 m-auto">
            <h2 class="text-white text-lg font-medium title-font mb-5 m-auto">Send message through Discord Webhook</h2>
            <?php include('./webhook.php'); ?>
            <form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
              <div class="relative mb-4">
                <label for="webhook" class="leading-7 text-sm text-gray-400">Webhook URL</label>
                <input type="text" id="webhook" name="webhook" class="w-full bg-gray-600 bg-opacity-20 focus:bg-transparent focus:ring-2 focus:ring-purple-900 rounded border border-gray-600 focus:border-purple-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
								<div class="error"></div>
              </div>
              <div class="relative mb-4">
                <label for="username" class="leading-7 text-sm text-gray-400">Username</label>
                <input type="text" id="username" name="username" class="w-full bg-gray-600 bg-opacity-20 focus:bg-transparent focus:ring-2 focus:ring-purple-900 rounded border border-gray-600 focus:border-purple-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                <div class="error"></div>
              </div>
              <div class="relative mb-4">
                <label for="message" class="leading-7 text-sm text-gray-400">Message</label>
                <input type="message" id="message" name="message" class="w-full bg-gray-600 bg-opacity-20 focus:bg-transparent focus:ring-2 focus:ring-purple-900 rounded border border-gray-600 focus:border-purple-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                <div class="error"></div>
              </div>
              <div class="mb-2">
                <input type="checkbox" id="tts" name="tts">
                <label class="text-white text-sm" for="tts">TTS?</label>
              </div>
              <button id="submit" type="submit" class="text-white bg-purple-500 border-0 py-2 px-8 focus:outline-none hover:bg-purple-600 rounded text-lg w-full" name="submit">Submit</button>
            </form>
          </div>
        </div>
      </section>
      -->
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>