<?php
use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */

$this->title = 'Units';
?>
<div class="site-index">


    <div class="jumbotron">
        <?php $projected_revenue = 0;
            foreach ($units as $unit) { 
                $projected_revenue += $unit->monthly_rent;
            }
        ?>
    <h2> <span class="pull-left"><?php echo count($units);?> UNITS</span>  <span class="pull-right">Projected Revenue KES <?php echo $projected_revenue;?></span></h2>
    
    </div>


    <div class="body-content">
        <div>
            
            <span style="margin-right:40px;"> <?= Html::a('Add Unit', ['/site/unit'],['class'=>'btn btn-primary'])?> </span> 

        </div>
        <div class="row">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">UNIT DESCRIPTION</th>
                    <th scope="col">TYPE</th>
                    <th scope="col">RENT</th>
                    <th scope="col">VACANT</th>
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
                        <td>
                            <?php
                                if ($unit->is_occupied === 0){
                                    echo "YES";
                                }
                                else {
                                    echo "NO"; 
                                }
                            ?>
                        </td>
                        <td>
                            <span><?= Html::a('View', ['unitics', 'id'=>$unit->unit_id], ['class'=>'btn btn-primary']) ?></span>
                            <span><?= Html::a('Update', ['updateunit', 'id'=>$unit->unit_id], ['class'=>'btn btn-default']) ?></span>
                            <span><?= Html::a('Delete', ['remove', 'id'=>$unit->unit_id], ['class'=>'btn btn-danger']) ?></span>
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
