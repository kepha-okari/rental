<?php 

    namespace app\models;

    use yii\db\ActiveRecord;
    use Yii;
    use yii\base\Model;

    class Units extends ActiveRecord
    {   
        private $unit_description;
        private $unit_type;
        private $monthly_rent;
        private $is_occupied;

        public function rules()
        {
            return[
                [['unit_description', 'unit_type', 'monthly_rent', 'is_occupied'], 'required']
            ];   
        }
            
    }
?>