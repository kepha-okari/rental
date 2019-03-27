<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */

$this->title = 'RentalMS';
?>
<div class="site-index">
    <h2> <span><?php ?></span>  ADD PROPERTY</h2>

    
    <div class="body-content">
        <?php $form = ActiveForm::begin(); ?>
            <div class="row ">
                    <div class="col-lg-5">
                        <?= $form->field($property, 'name');?>            

                        <?= $form->field($property, 'location');?>

                        <?= $form->field($property, 'description');?>            
                
                        <?= $form->field($property, 'type');?>            
          
                        <?= Html::submitButton('Add Property', ['class'=>'btn btn-primary']);?>  
                        <a href=<?php echo yii::$app->homeUrl;?> class="btn btn-primary">Go Back</a>          
                    </div>
                </div>
            </div>

        <?php ActiveForm::end();?>
    </div>
</div>
