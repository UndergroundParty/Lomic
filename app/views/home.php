<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php echo $title ?></title>
  <link rel="stylesheet" href="css/prism.css">
  <script src="js/prism.js"></script>
  <script>hljs.initHighlightingOnLoad();</script>
</head>
<body>
<div class="article">
    <h1><?php echo $article['title'] ?></h1>
    <div class="content">
        <?php echo Md::parsemd($article['content']) ?>
    </div>
</div>
<ul class="fuckme">
    <li>Test Me !</li>
    <li>
        <?php echo $ok ?>
    </li>
</ul>
</body>
</html>