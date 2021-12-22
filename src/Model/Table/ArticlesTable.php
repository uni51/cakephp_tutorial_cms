<?php

namespace App\Model\Table;

use Cake\ORM\Table;
// Text クラス
use Cake\Utility\Text;
// EventInterface クラス
use Cake\Event\EventInterface;

class ArticlesTable extends Table
{
    public function initialize(array $config) : void
    {
        // created や modified カラムを自動的に更新する
        $this->addBehavior('Timestamp');
    }

    public function beforeSave(EventInterface $event, $entity, $options)
    {
        if ($entity->isNew() && !$entity->slug) {
            $sluggedTitle = Text::slug($entity->title);
            // スラグをスキーマで定義されている最大長に調整
            $entity->slug = substr($sluggedTitle, 0, 191);
        }
    }
}
