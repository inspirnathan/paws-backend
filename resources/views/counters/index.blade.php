<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Stuff</title>
    <link rel="stylesheet" href="/css/counter.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>

    <div id="app">
  <div>
    <score category="Cats" :score-value="cats"></score>
    <a v-on:click="cats++" class="upvote-container" href="#">
      <span class="upvote"><i class="fa fa-paw"></i></span>
    </a>
  </div>

  <div>
    <score category="Dogs" :score-value="dogs"></score>
    <a v-on:click="dogs++" class="upvote-container" href="#"><span class="upvote"><i class="fa fa-paw"></i></span></a>
  </div>
</div>

<script src="/js/vue.js"></script>
<script src="/js/counter.js"></script>

  </body>
</html>
