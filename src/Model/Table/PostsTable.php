<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class PostsTable extends Table{
    public function validationDefault(Validator $validator)
    {
        $validator->requirePresence(['vardas', 'pavarde', 'amzius', 'adresas']);
        $validator->regex('vardas', '([a-zA-Z]+)', 'Tik raidės');
        $validator->regex('pavarde', '([a-zA-Z]+)', 'Tik raidės');
        $validator->alphaNumeric('adresas', 'Blogas formatas - Žodžius ir skaičius skirti tarpais');
        $validator->greaterThan('amzius', 0,'Tik skaičiai didesni už 0');
        return $validator;
    }
}