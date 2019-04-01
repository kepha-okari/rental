<?php
use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'tenant';
?>
<div class="site-index">
    <h1>View Tenant</h1>
    <div class="body-content">
        <ul class="list-group">
        <li class="list-group-item d-flex justify-content-between align-items-center">
                    <?php echo $tenant->tenant_name?>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                    <?php echo $tenant->id_number?>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                    <?php echo $tenant->has_balance?>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                    <?php echo $tenant->balance?>
            </li>
         
        </ul>
        <a href=<?php echo yii::$app->homeUrl;?> class="btn btn-primary">Go Back</a>          

    </div>

    
       
</div>
