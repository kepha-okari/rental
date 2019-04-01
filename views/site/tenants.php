<?php
use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'Tenants';

?>
<div class="site-index">


    <div class="jumbotron">
        <h2> <span><?php echo count($tenants);?></span> YOUR TENANTS</h2>
    </div>


    <div class="body-content">
        <div>
            <span style="margin-right:40px;"> <?= Html::a('Add Tenants', ['/site/tenant'],['class'=>'btn btn-primary'])?> </span> 
        </div>

        <div class="row">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">TENANT NAME</th>
                        <th scope="col">ID NUMBER</th>
                        <th scope="col">HAS ARREARS</th>
                        <th scope="col">BALANCE</th>
                        <th scope="col">ACTION</th>
                    </tr>
                </thead>
                <tbody>
                <?php $counter = 1;?>
                <?php if(count($tenants) > 0):?>
                
                    <?php foreach ($tenants as $tenant):?>
                        <tr class="table-active">
                            <th><?php echo $counter;?></th>
                            <th scope="row"><?php echo $tenant->tenant_name;?></th>
                            <td><?php echo $tenant->id_number;?></td>
                            <td>
                                <?php
                                 if($tenant->has_balance === 0)
                                 {
                                     echo "NO";
                                 }
                                 else {
                                     echo "YES"; 
                                 }
                             
                                ?>
                            </td>
                            <td><?php echo $tenant->balance;?></td>
                            <td>
                                <span><?= Html::a('View', ['viewtenant', 'id'=>$tenant->tenant_id], ['class'=>'btn btn-primary']) ?></span>
                                <span><?= Html::a('Update', ['tenantupdate', 'id'=>$tenant->tenant_id], ['class'=>'btn btn-default']) ?></span>
                                <span><?= Html::a('Delete', ['removetenant', 'id'=>$tenant->tenant_id], ['class'=>'btn btn-danger']) ?></span>
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
