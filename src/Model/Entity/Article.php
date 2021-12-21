<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Class Article
 * @package App\Model\Entity
 *
 * エンティティーは、 データベースの１つのレコードを表し、データに対して行レベルの振る舞いを提供します。
 */
class Article extends Entity
{
    // どのようにプロパティーを変更できるかを制御する
    protected $_accessible = [
        '*' => true,
        'id' => false,
        'slug' => false,
    ];
}
