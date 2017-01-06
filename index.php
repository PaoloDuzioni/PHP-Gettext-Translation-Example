<?php //Include translations
require_once("includes/translate.php");
?>

<!DOCTYPE html>
<html lang="<?php if(CURRENT_LANG == "en_EN"){ echo 'en'; }else{ echo 'it'; } ?>">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Paolo Demo Words</title>
  <link rel="stylesheet" href="styles/style.css" />
</head>


<body>

  <header>
    <h1><?php echo __("Hello Internationaization"); ?></h1>
    <p><?php _e("This is translation with no plugin, just PHP"); ?></p>
    <div id="lan_selector">
      <h4><?php echo __("Select language"); ?></h4>
      <ul>
        <li>
          <?php if(CURRENT_LANG !== 'en_EN') : ?>
            <a href="./?lang=en_EN">
          <?php endif; ?>
          <?php echo __("English"); ?>
          <?php if(CURRENT_LANG !== 'en_EN') : ?>
            </a>
          <?php endif; ?>
        </li>
        <li>
          <?php if(CURRENT_LANG !== 'it_IT') : ?>
            <a href="./?lang=it_IT">
          <?php endif; ?>
          <?php echo __("Italian"); ?>
          <?php if(CURRENT_LANG !== 'it_IT') : ?>
            </a>
          <?php endif; ?>
        </li>
      </ul>
    </div>
  </header>


  <p> <?php _e('EN Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, accusamus inventore explicabo veniam quis ipsum rerum illo corrupti ad debitis impedit eveniet nesciunt voluptates aspernatur a! Nostrum maxime possimus facere!'); ?></p>



</body>
</html>
