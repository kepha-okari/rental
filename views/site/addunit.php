<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */

$this->title = 'Add Unit';
?>
<div class="site-index">
    <h2> <span><?php ?></span>  ADD unit</h2>

    
    <div class="body-content">
        <?php $form = ActiveForm::begin(); ?>
            <div class="row ">
                    <div class="col-lg-5">
                        <?= $form->field($unit, 'unit_description');?>            

                        <?= $form->field($unit, 'unit_type');?>

                        <?= $form->field($unit, 'monthly_rent');?>            
                
                        <?= $form->field($unit, 'is_occupied');?>            
          
                        <?= Html::submitButton('Add unit', ['class'=>'btn btn-primary']);?>  
                        <a href=<?php echo yii::$app->homeUrl;?> class="btn btn-primary">Go Back</a>          
                    </div>
                </div>
            </div>

        <?php ActiveForm::end();?>
    </div>
</div>
