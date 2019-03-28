<?php
use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'Tenants'
?>
<div class="site-index">


    <div class="jumbotron">
        <h2> <span><?php echo count($units);?></span> UNITS AVAILABLE</h2>
    </div>


    <div class="body-content">
        <div>
            
            <span style="margin-right:40px;"> <?= Html::a('Add Unit', ['/site/addunit'],['class'=>'btn btn-primary'])?> </span> 

        </div>
        <div class="row">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">UNIT DESCRIPTION</th>
                    <th scope="col">TYPE</th>
                    <th scope="col">RENT</th>
                    <th scope="col">AVAILABLE</th>
                    <th scope="col">ACTION</th>
                </tr>
            </thead>
            <tbody>
            <?php if(count($units) > 0):?>
                <?php $counter = 1; ?>
                <?php foreach ($units as $unit):?>
                    <tr class="table-active">
                    <td><?php echo $counter;?></td>
                    <th scope="row"><?php echo $unit->unit_description;?></th>
                        <td><?php echo $unit->unit_type;?></td>
                        <td>KES <?php echo $unit->monthly_rent;?> </td>
                        <td><?php echo $unit->is_occupied;?></td>
                        <td>
                            <span><?= Html::a('View', ['view', 'id'=>$unit->unit_id], ['class'=>'btn btn-primary']) ?></span>
                            <span><?= Html::a('Update', ['update', 'id'=>$unit->unit_id], ['class'=>'btn btn-default']) ?></span>
                            <span><?= Html::a('Delete', ['delete', 'id'=>$unit->unit_id], ['class'=>'btn btn-danger']) ?></span>
                        </td>
                    </tr>
                    <?php $counter+=1;?>
                <?php endforeach;?>
            <?php else:?>
                <tr>
                    <td>No Record Found</td>
                </tr>

            <?php endif;?>
            
            </tbody>
        </table>
        </div>

    </div>
</div>
