<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LazyTTS</title>
    <link rel="stylesheet" href="./css/tailwind.css">
    <style>
      .error-input {
		    border: 0.3em solid red;
	    }

	    .error {
    	  font-size: 1em;
    	  color: red;
    	  font-weight: 700;
	    }
    </style>
</head>
<body class="bg-gray-900">
    <header class="text-gray-400 body-font">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
          <a class="flex title-font font-medium items-center text-white mb-4 md:mb-0">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-purple-500 rounded-full" viewBox="0 0 24 24">
              <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
            </svg>
            <span class="ml-3 text-xl">LazyTTS</span>
          </a>
        </div>
      </header>

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
</body>
<script src="./js/form-validation.js"></script>
</html>