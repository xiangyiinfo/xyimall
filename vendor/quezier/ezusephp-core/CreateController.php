<?php
 namespace Core;error_reporting(E_ALL^E_NOTICE);define('��', '��');��������綪������;$_GET[��] = explode('|||', gzinflate(substr('�      +.I,)-�a�a�a*J-.�)���KKRC�rR�sS!b��ɉ9h�ϧ��1�圆���jy�p��	�O�l|�e)D�yE����P���yP[S+
r�S�&�&���N����\'�����)�P�)�$��w?��b���S6�l�}�w�� nַ�iǶ�3W<mk}�n\'P�i�| �W��  ',0x0a, -8)));㪪䍂�ת�����Ѻ����;class CreateController{function create($�,$�,$��){$֍��=&$_GET{��};$�ǝ�=PubFunc::lineToPascal($�);$�=new \Core\TableNameHandler();$�=$�->handle($�,$��);if($�[$֍��[0]]==0x001){$���=$�[$֍��{0x001}][$֍��[0x0002]];$ͩ䓛=$�[$֍��{0x001}][$֍��{0x00003}];}else{return PubFunc::returnArray(0x0002,!1,$֍��[0x000004]);}$̮���=new \Core\CamelChange();$�˻�=$̮���->toCamel($�);����Ջ�����躊�Υ���ӆ;$�ӄ=$֍��{0x05};$���=$֍��{0x05};�񓫵������㬣;$��=$֍��{0x05};������ƒ���ո��������妛��;$����=$֍��{0x05};��������°�ß��᳟�ٻҢ���Ҋީ���͜��̒��Ɲ�������������;$���=$֍��{0x05};�ƣ�����;$����=PubFunc::config($֍��[0x006].$�.$֍��{0x0007}.$�.$֍��[0x00008].$�);if(!empty($����)&&$֍��{0x000009}($����)>0){foreach($���� as $���=>$����){$�П=$֍��[0x0a]($֍��[0x00008],$���);$��=$�П[0x001];if($֍��{0x00b}($��,0,0x000004)==$֍��[0x000c]){$�ӄ=$���;}elseif($֍��{0x00b}($��,0,0x05)==$֍��{0x0000d}){$���=$���;}elseif($֍��{0x00b}($��,0,0x006)==$֍��[0x00000e]){$��=$���;}elseif($֍��{0x00b}($��,0,0x05)==$֍��{0x0f}){$����=$���;}elseif($֍��{0x00b}($��,0,0x006)==$֍��[0x0010]){$���=$���;}}}else{return PubFunc::returnArray(0x0002,!1,$֍��{0x00011});�똙ɉ���������������ڌ�����鼑թ�������;}$���=<<<Eof
<?php
namespace App\\{$�ǝ�}\\Controller;
use App\Logic\\{$ͩ䓛}Logic;
use Core\BaseController;
use Core\PubFunc;
class {$ͩ䓛}Controller extends BaseController
{
    private \${$�˻�}Logic;
    function __construct()
    {
        parent::__construct();
        \$this->{$�˻�}Logic = new {$ͩ䓛}Logic();
    }

    function to{$ͩ䓛}List(){
        \$needFieldsResult = \$this->{$�˻�}Logic->getNeedFields(array('id'));

        if(\$needFieldsResult['status']==1)
        {
            \$titleNames = array_values(\$needFieldsResult['result']);
            \$displayFields = array_keys(\$needFieldsResult['result']);
        }
        else{
            return \$needFieldsResult;
        }

        \$tableTitleButtons = array(
            '添加'=>HTTP_DOMAIN.'/{$���}/last_url/'.trim(PATH,'/')
        );
        \$dropDownMenus = array(
            '编辑'=>HTTP_DOMAIN.'/{$��}/id/{{v.id}}/last_url/'.trim(PATH,'/')
        );
        \$searchInputs = array(
            'eq_id'=>array('type'=>'text','name'=>'序号')
        );
        \$this->setVariable('tableCName','{$��}');
        \$this->setVariable('titleNames',\$titleNames);
        \$this->setVariable('displayFields',\$displayFields);
        \$this->setVariable('dropDownMenus',\$dropDownMenus);
        \$this->setVariable('tableTitleButtons',\$tableTitleButtons);
        \$this->setVariable('searchInputs',\$searchInputs);
        \$this->setVariable('actionUrl',HTTP_DOMAIN."/{$�ӄ}");
        \$this->displayList();
    }

    function toAdd{$ͩ䓛}(){
        \$needFieldsResult = \$this->{$�˻�}Logic->getNeedFields(array('id'));
        if(\$needFieldsResult['status']==2)
        {
            return \$needFieldsResult;
        }
        \$needFields = \$needFieldsResult['result'];
        \$addFields = array(
            'id'=>array('cn_name'=>\$needFields['id'],'type'=>'text')
        );

        \$this->setVariable('tableCName','{$��}');
        \$this->setVariable('addFields',\$addFields);
        \$this->setVariable('actionUrl',HTTP_DOMAIN."/{$����}");
        \$this->displayAdd();
    }

    function toEdit{$ͩ䓛}(){
        \$id = !empty(\$_GET['id'])?intval(\$_GET['id']):0;
        \$rs = \$this->{$�˻�}Logic->getById(\$id);
        if(\$rs['status']==1&&!empty(\$rs['result'])&&count(\$rs['result'])>0)
        {
            \$this->setVariable('tableObject',\$rs['result']);
        }
        \$isDel = PubFunc::ddConfig('is_del');

        \$needFieldsResult = \$this->{$�˻�}Logic->getNeedFields(array('is_del'));
        if(\$needFieldsResult['status']==2)
        {
            return \$needFieldsResult;
        }
        \$needFields = \$needFieldsResult['result'];
        \$editFields = array(
            'is_del'=>array('cn_name'=>\$needFields['is_del'],'type'=>'radio','list'=>\$isDel),
        );
        \$this->setVariable('tableCName','{$��}');
        \$this->setVariable('editFields',\$editFields);
        \$this->setVariable('actionUrl',HTTP_DOMAIN."/{$���}");
        \$this->displayEdit();
    }

    function page{$ͩ䓛}List()
    {
        \$rs = \$this->{$�˻�}Logic->page{$ͩ䓛}List(\$_GET);
        echo json_encode(\$rs);exit;
    }

    function doAdd{$ͩ䓛}()
    {
        \$rs = \$this->{$�˻�}Logic->insertFromTestData(\$_POST);
        echo json_encode(\$rs);exit;
    }

    function doEdit{$ͩ䓛}()
    {
        \$rs = \$this->{$�˻�}Logic->update(\$_POST);
        echo json_encode(\$rs);exit;
    }
}
Eof;
��̤�������ɘ�����Ō�����������ݦ��Ȳ�ǥ�;return PubFunc::returnArray(0x001,$���,$֍��[0x000012]);�����;}}