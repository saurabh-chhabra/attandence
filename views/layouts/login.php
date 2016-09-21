<?php
/**
 * Created by PhpStorm.
 * User: akhilesh
 * Date: 25/8/16
 * Time: 3:24 PM
 */
use yii\helpers\Html;
use app\assets\AppAsset;
AppAsset::register($this);
$baseUrl = Yii::$app->request->BaseUrl . "/web";
$this->registerCssFile(Yii::$app->request->baseUrl . "/web/css/application.min.css");
$this->registerCssFile(Yii::$app->request->baseUrl . "/web/css/application-part2.min.css");
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link href="<?php echo $baseUrl ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <?php $this->head() ?>
</head>
<body class="login-page">
<?php $this->beginBody() ?>
<div class="container">
    <?= $content; ?>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

