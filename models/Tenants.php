<?php 

    namespace app\models;

    use yii\db\ActiveRecord;
    use Yii;
    use yii\base\Model;

    class Tenants extends ActiveRecord
    {   
        private $tenant_name;
        private $id_number;
        private $has_balance;
        private $balance;
        private $unit;

        public function rules()
        {
            return[
                [['tenant_name', 'id_number', 'has_balance', 'balance', 'unit'], 'required']
            ];   
        }
            
    }
?>