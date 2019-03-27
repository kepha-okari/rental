<?php
use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'RentalMS';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>
    </div>

    <div class="body-content">

        <div class="row">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Tenant</th>
                    <th scope="col">Rental Unit</th>
                    <th scope="col">Location</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr class="table-active">
                    <th scope="row">Active</th>
                    <td>Column content</td>
                    <td>Column content</td>
                    <td>Column content</td>
                    <td>
                        <span><?=Html::a('View')?></span>
                        <span><?=Html::a('Edit')?></span>
                        <span><?=Html::a('Delete')?></span>
                    </td>
                </tr>
            
            </tbody>
        </table>
        </div>

    </div>
</div>
