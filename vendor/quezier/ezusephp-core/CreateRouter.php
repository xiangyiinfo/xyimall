<?php
 namespace Core;error_reporting(E_ALL^E_NOTICE);define('�', '卧');볳�����Ⴏ����������������������֡՜��˼���򼙒���򆈭��Ü�������ۍ�򨸰��ۄ�ϋ�����;$_SERVER[�] = explode('|||', gzinflate(substr('�      +.I,)-�a�a�a*J-.�)���KKRC�rR�sS!b��ɉ9h�ϧ��1�圆���jy�p��	�O�l|�e)����?���i[��u;�ܧ]���z   ',0x0a, -8)));Ç����ËĆ����������±�͙�˓������Ӻ������������󶕍�ࡤ�����򓠊ٖ��ߓ�����Ƨ�ޅ��������؍�쭎�ķΥ���΋��В��ф�Ӣର���࣬�����Ş�������ª̓��������Ц�����逺�����Ľ΍���;class CreateRouter{function createForManage($�����,$��攝,$���ؔ){$�=&$_SERVER{�};$��=\Core\PubFunc::lineToPascal($�����);$��=new \Core\TableNameHandler();$�ˠ=$��->handle($��攝,$���ؔ);if($�ˠ[$�[0]]==0x001){$���=$�ˠ[$�{0x001}][$�[0x0002]];$�=$�ˠ[$�{0x001}][$�{0x00003}];$��=<<<Eof
<?php
return array(
    '{$�����}_tolist{$���}'=>array(
        'method' => 'GET',
        'rank_num'=>2,
        'privilege_name'=>'{$���ؔ}管理',
        'parent_privilege_name'=>'',
        'privilege_type'=>1,
        'call' => '{$��}/{$�}/to{$�}List'
    ),
    '{$�����}_page{$���}list'=>array(
        'method' => 'GET',
        'rank_num'=>3,
        'privilege_name'=>'查询分页{$���ؔ}列表',
        'parent_privilege_name'=>'{$���ؔ}管理',
        'privilege_type'=>4,
        'call' => '{$��}/{$�}/page{$�}List'
    ),
    '{$�����}_toadd{$���}'=>array(
        'method' => 'GET',
        'rank_num'=>3,
        'privilege_name'=>'跳转到添加{$���ؔ}页面',
        'parent_privilege_name'=>'{$���ؔ}管理',
        'privilege_type'=>2,
        'call' => '{$��}/{$�}/toAdd{$�}'
    ),
    '{$�����}_doadd{$���}'=>array(
        'method' => 'POST',
        'rank_num'=>4,
        'privilege_name'=>'添加{$���ؔ}动作',
        'parent_privilege_name'=>'跳转到添加{$���ؔ}页面',
        'privilege_type'=>2,
        'call' => '{$��}/{$�}/doAdd{$�}'
    ),
    '{$�����}_toedit{$���}'=>array(
        'method' => 'GET',
        'rank_num'=>3,
        'privilege_name'=>'跳转到编辑{$���ؔ}页面',
        'parent_privilege_name'=>'{$���ؔ}管理',
        'privilege_type'=>3,
        'call' => '{$��}/{$�}/toEdit{$�}'
    ),
    '{$�����}_doedit{$���}'=>array(
        'method' => 'POST',
        'rank_num'=>4,
        'privilege_name'=>'编辑{$���ؔ}动作',
        'parent_privilege_name'=>'跳转到编辑{$���ؔ}页面',
        'privilege_type'=>2,
        'call' => '{$��}/{$�}/doEdit{$�}'
    )
);
Eof;
}else{return PubFunc::returnArray(0x0002,!1,$�[0x000004]);�טబ�¤��Ĭ���ڤ��΢���ͧ�Ǧ�߇���۲������Щ���͜���銱�񒘋����ϥˣ�������֨���ܟ�Ʃ�؜��;}return PubFunc::returnArray(0x001,$��,$�{0x05});}}