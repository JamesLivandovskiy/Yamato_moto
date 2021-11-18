<?php
return array (
    'mark/([A-Z]+[a-z]+)'=>'mark/view/$1',
    'mark/model/(([A-Z]+[a-z]+)/([0-9]+))'=>'model/view/$1/$2',
    ''=>'site/index',
);
