<?php 

    namespace app\models;

    use yii\db\ActiveRecord;
    use Yii;
    use yii\base\Model;

    class Properties extends ActiveRecord
    {   
        private $name;
        private $location;
        private $description;
        private $type;

        public function rules()
        {
            return[
                [['name', 'location', 'description', 'type'], 'required']
            ];   
        }
            
    }
?>