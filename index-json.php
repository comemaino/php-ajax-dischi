<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
    <!-- Axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- VueJs -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <!-- srtyle -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<main id="root">

<div class="container">

<div class="wrapper" v-for="disc in discs">
  <img :src="disc.poster" alt="">
  <h3>{{ disc.title }}</h3>
  <h5>{{ disc.author }}</h5>
  <h5>{{ disc.year }}</h5>
</div>
</div>
</main>

<script src="js/script.js"></script>
</body>
</html>