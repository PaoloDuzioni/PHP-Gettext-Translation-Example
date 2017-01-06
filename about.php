<?php //Include translations
require_once("includes/translate.php");
?>

<!DOCTYPE html>
<html lang="<?php if(CURRENT_LANG == "en_EN"){ echo 'en'; }else{ echo 'it'; } ?>">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Paolo Demo About</title>
  <link rel="stylesheet" href="styles/style.css" />
</head>


<body>

  <header>
    <h1><?php echo __("About Me"); ?></h1>
    <p><?php echo __("Web Developer - JavaScript Addicted"); ?></p>
    <div id="lan_selector">
      <h4><?php echo __("Select language"); ?></h4>
      <ul>
        <?php $thisuri = preg_replace('/\?.*$/', '', $_SERVER["REQUEST_URI"]); ?>
        <li>
          <?php if(CURRENT_LANG !== 'en_EN') : ?>
            <a href="http://localhost:8888<?php echo $thisuri; ?>?lang=en_EN">
          <?php endif; ?>
          <?php echo __("English"); ?>
          <?php if(CURRENT_LANG !== 'en_EN') : ?>
            </a>
          <?php endif; ?>
        </li>
        <li>
          <?php if(CURRENT_LANG !== 'it_IT') : ?>
              <a href="http://localhost:8888<?php echo $thisuri; ?>?lang=it_IT">
          <?php endif; ?>
          <?php echo __("Italian"); ?>
          <?php if(CURRENT_LANG !== 'it_IT') : ?>
            </a>
          <?php endif; ?>
        </li>
      </ul>
    </div>
  </header>
</body>
</html>
