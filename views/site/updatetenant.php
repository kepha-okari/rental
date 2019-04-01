<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Units;
use app\models\Tenants;
use app\models\Properties;
/* @var $this yii\web\View */

$this->title = 'Add Unit';
?>
<div class="site-index">
    <h2> <span><?php ?></span>  Update Tenant</h2>
    <div class="body-content">
        <?php $form = ActiveForm::begin(); ?>
            <div class="row ">
                    <div class="col-lg-5">
                        <?= $form->field($tenant, 'tenant_name');?>            

                        <?= $form->field($tenant, 'id_number');?>

                        <?= $form->field($tenant, 'has_balance');?>

                        <?= $form->field($tenant, 'balance');?>            
                
                        <?= $form->field($tenant, 'unit_unit_id')->dropDownList(
                                        ArrayHelper::map(Units::find()->all(),'unit_id','unit_description'),
                                        ['prompt'=>'Select Unit'])?> 
                                    
          
                        <?= Html::submitButton('Submit', ['class'=>'btn btn-primary']);?>  
                        <a href=<?php echo yii::$app->homeUrl;?> class="btn btn-primary">Go Back</a>          
                    </div>
                </div>
            </div>
        <?php ActiveForm::end();?>
    </div>
</div>

