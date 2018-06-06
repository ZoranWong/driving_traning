<?php
//学车单位时
define('DRIVING_TIME_UNIT', 15);
//班型最大人数
define('KH_MAX_STUDENT_NUM', 8);

return [
    'KH' => [
        'max_numbers' => KH_MAX_STUDENT_NUM,
        'time' => DRIVING_TIME_UNIT * KH_MAX_STUDENT_NUM
    ]
];