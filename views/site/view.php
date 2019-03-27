<?php
use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'Property';
?>
<div class="site-index">
    <h1>View Property</h1>
    <div class="body-content">
        <ul class="list-group">
        <li class="list-group-item d-flex justify-content-between align-items-center">
                    <?php echo $property->name?>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                    <?php echo $property->location?>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                    <?php echo $property->description?>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                    <?php echo $property->type?>
            </li>
         
        </ul>
        <a href=<?php echo yii::$app->homeUrl;?> class="btn btn-primary">Go Back</a>          

    </div>

    
       
</div>
