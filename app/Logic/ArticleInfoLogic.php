<?php
namespace App\Logic;
use App\Model\ArticleInfoModel;
use Core\PubFunc;
class ArticleInfoLogic
{
    private $articleInfoModel;
    function __construct()
    {
        $this->articleInfoModel = new ArticleInfoModel();
    }

    function getAllArticleInfo()
    {
        $rs = $this->articleInfoModel->selectAll('','WHERE is_del=1');
        unset($this->articleInfoModel);
        return $rs;
    }
    
    function getNeedFields( $needFields)
    {
        $fields = $this->articleInfoModel->fields;
        $tmpArray = array();
        if(!empty($fields)&&!empty($needFields)&&count($needFields)>0)
        {
            foreach ($needFields as $nfKey => $nfVal)
            {
                if(array_key_exists($nfVal,$fields))
                {
                    $tmpArray[$nfVal] = $fields[$nfVal];
                }
            }
            return PubFunc::returnArray(1,$tmpArray,'获取数组成功');
        }
        else{
            return PubFunc::returnArray(2,false,'缺少参数');
        }
    }

    function pageArticleInfoList( $param)
    {
        $p = 1;
        if (!empty($param['p'])) {
            $p = $param['p'];
        }
        unset($param['p']);
        $where = ' WHERE 1=1 ';
        $changeResult = $this->articleInfoModel->getWhereAndParamForPage($param);
        if($changeResult['status']==2)
        {
            return $changeResult;
        }
        $where.= $changeResult['result']['where'];
        $data = $changeResult['result']['param'];
        $where.=" ORDER BY id desc";
        $rs = $this->articleInfoModel->page($p, 0, '', $where,$data , $field = '*');
        return $rs;
    }

    /**
     * 插入记录
     * @param array $data
     * @return array
     */
    function insert( $data)
    {
        $rs = $this->articleInfoModel->insert($data);
        return $rs;
    }

    /**
     * 与测试数据合并生成插入数据，并插入,因为每个字段不能为空
     * @param array $data 要插入的数据
     * @return array
     */
    function insertFromTestData( $data)
    {
        $insertTestData = $this->getInsertData();
        $data = array_merge($insertTestData, $data);
        $data['pub_date'] = time();
        $rs = $this->insert($data);
        return $rs;
    }

    /**
     * 获取测试插入用的数据
     * @return array
     */
    function getInsertData()
    {
        $rs = $this->articleInfoModel->_testData;
        $rs['is_del']=1;
        return $rs;
    }

    /**
     * 根据主键id更新数据
     * @param array $data 要更新的数据集
     * @return array
     */
    function update( $data)
    {
        $rs = $this->articleInfoModel->updateAuto($data);
        return $rs;
    }

    /**
     * 根据id查询数据
     * @param int $id 主键id
     * @return array
     */
    function getById( $id)
    {
        if(empty($id)){return PubFunc::returnArray(2,false,'缺少参数');}
        $rs = $this->articleInfoModel->selectOne('','WHERE id=:id',array('id'=>$id),'*');
        return $rs;
    }

    function getSomeArticleInfo($num=20)
    {
        $rs = $this->articleInfoModel->selectAll('','WHERE is_del=1 ORDER BY id DESC LIMIT 0,:num',array('num'=>$num),'id,title,pub_date');
        unset($this->articleInfoModel);
        return $rs;
    }

    function getBySearch($title)
    {
        $rs = $this->articleInfoModel->selectAll('',"WHERE is_del=1 AND title like :title",array('title'=>"%{$title}%"),'id,title,pub_date');
        unset($this->articleInfoModel);
        return $rs;
    }
}