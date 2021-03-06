<?php
use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'RentalMS';

?>
<div class="site-index">


    <div class="jumbotron">
        <h2> <span><?php echo count($properties);?></span> PROPERTIES  TO LET</h2>
    </div>


    <div class="body-content">
        <div>
            <span style="margin-right:40px;"> <?= Html::a('Add Property', ['/site/create'],['class'=>'btn btn-primary'])?> </span> 
        </div>

        <div class="row">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">PROPERTY NAME</th>
                        <th scope="col">LOCATION</th>
                        <th scope="col">DESCRIPTION</th>
                        <th scope="col">TYPE</th>
                        <th scope="col">ACTION</th>
                    </tr>
                </thead>
                <tbody>
                <?php $counter = 1;?>
                <?php if(count($properties) > 0):?>
                
                    <?php foreach ($properties as $property):?>
                        <tr class="table-active">
                            <th><?php echo $counter;?></th>
                            <th scope="row"><?php echo $property->name;?></th>
                            <td><?php echo $property->location;?></td>
                            <td><?php echo $property->description;?></td>
                            <td><?php echo $property->type;?></td>
                            <td>
                                <span><?= Html::a('View', ['view', 'id'=>$property->id], ['class'=>'btn btn-primary']) ?></span>
                                <span><?= Html::a('Update', ['update', 'id'=>$property->id], ['class'=>'btn btn-default']) ?></span>
                                <span><?= Html::a('Delete', ['delete', 'id'=>$property->id], ['class'=>'btn btn-danger']) ?></span>
                            </td>
                        </tr>
                        <?php $counter += 1;?>
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
