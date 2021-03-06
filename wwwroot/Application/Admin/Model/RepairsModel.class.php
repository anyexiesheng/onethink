<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 2017/8/10
 * Time: 15:18
 */

namespace Admin\Model;


use Think\Model;

class RepairsModel extends Model
{

    protected $_validate = array(
        array('name', 'require', '姓名不能为空', self::MUST_VALIDATE , 'regex', self::MODEL_BOTH),
        array('tel', 'require', '手机号不能为空', self::MUST_VALIDATE , 'regex', self::MODEL_BOTH),
    );

    protected $_auto = array(
        array('create_time', NOW_TIME, self::MODEL_INSERT),
        array('update_time', NOW_TIME, self::MODEL_BOTH),
        array('status', '3', self::MODEL_INSERT),
    );
}