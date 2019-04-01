<?php
use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'Unit';
?>
<div class="site-index">
    <h1>View Unit</h1>
    <div class="body-content">
        <ul class="list-group">
        <li class="list-group-item d-flex justify-content-between align-items-center">
                    <?php echo $unit->unit_description?>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                    <?php echo $unit->unit_type?>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                    <?php echo $unit->monthly_rent?>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                    <?php echo $unit->is_occupied?>
            </li>
         
        </ul>
        <a href=<?php echo yii::$app->homeUrl;?> class="btn btn-primary">Go Back</a>          

    </div>

    
       
</div>
