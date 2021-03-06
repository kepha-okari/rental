<?php
use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'tenant';
?>
<div class="site-index">
    <h1>View tenant</h1>
    <div class="body-content">
        <ul class="list-group">
        <li class="list-group-item d-flex justify-content-between align-items-center">
                    <?php echo $tenant->tenant_description?>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                    <?php echo $tenant->tenant_type?>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                    <?php echo $tenant->monthly_rent?>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                    <?php echo $tenant->is_occupied?>
            </li>
         
        </ul>
        <a href=<?php echo yii::$app->homeUrl;?> class="btn btn-primary">Go Back</a>          

    </div>

    
       
</div>
