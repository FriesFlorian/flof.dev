<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
  body {
    text-align: center;
  }
  h1 {
    font-size: 40px;
  }
  span {
    display: block;
    font-size: 26px;
    font-weight: bold;
  }
  iframe {
    max-width: 100%;
  }
  a {
    color: #039b9b!important;
  }
  </style>
</head>

<body>
  <h1>Is <a href="https://twitter.com/FriesFlorian">Flof</a> currently programming?</h1>
  <?php
  if(getenv("IS_DEV") == "yes")
  {
  ?>
  <iframe src="https://giphy.com/embed/5hs7uUwQbPyC82TcUq" width="480" height="270" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>
  <span>YES HE IS!</span>
  <?php
  }
  else
  {
  ?>
  <iframe src="https://giphy.com/embed/5n9ssJDhhgVCVxXS5b" width="480" height="270" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>
  <span>Nope, probably napping.</span>
  <?php
  }
  ?>
</body>

</html>
