<?php

define('BASE_URI', str_replace('\\', '/', substr(__DIR__,strlen($_SERVER['DOCUMENT_ROOT']))));
require_once(implode(DIRECTORY_SEPARATOR, ['Core', 'autoload.php']));
$app = new Core\Core();
$app->run();

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <title>Title</title>
    <link rel="stylesheet" href="<?= BASE_URI . '/webroot/css/reset.css'; ?>" />
    <link rel="stylesheet" href="<?= BASE_URi . '/webroot/css/style.css'; ?>" />
</head>
<body>

<fieldset>
    <legend>$_GET</legend>
    <pre>
        <?php print_r($_GET); ?>
    </pre>
</fieldset>

<fieldset>
    <legend>$_POST</legend>
    <pre>
        <?php print_r($_POST); ?>
    </pre>
</fieldset>

<fieldset>
    <legend>$_SERVER</legend>
    <pre>
        <?php print_r($_SERVER); ?>
    </pre>
</fieldset>

</body>
</html>