<?php

namespace AppBundle\Service;

use Doctrine\ORM\EntityManagerInterface;

use AppBundle\Model\OrderSearchModel;

use AppBundle\Util\StringUtil;

use AppBundle\Constant\PageConfig;

class OrderService {
    
    protected $em;
    
    public  function  __construct(EntityManagerInterface $em) {
        $this->em = $em;
    }
    
    public function searchByRangeDate(OrderSearchModel $model, $page) {
        
        $conn = $this->em->getConnection();
        $sql = 'SELECT orders.* FROM orders WHERE customer_code = :customer_code';
        $params = [];
        $params['customer_code'] = $model->getCustomerCode();
        
        if (!StringUtil::isNullOrEmptyString($model->getFromDate())) {
            $params['from_date'] = $model->getFromDate();
            $sql .= ' AND date(order_date) >= :from_date';
        }
            
        if (!StringUtil::isNullOrEmptyString($model->getToDate())) {
            $params['to_date'] = $model->getToDate();
            $sql .= ' AND date(order_date) <= :to_date';
        }

        $sql  .= " ORDER BY order_date DESC LIMIT :nCount OFFSET :nOffset";

        $params['nCount'] = PageConfig::RECORD_PER_PAGE ;

        $params['nOffset'] = ($page - 1)*2;

        $stmt = $conn->prepare($sql);

        foreach($params as $key => &$val) {
            if($key === 'nCount' || $key === 'nOffset') {
                $stmt->bindParam($key, $val, \PDO::PARAM_INT);
            }
            else {
                $stmt->bindParam($key, $val, \PDO::PARAM_STR);
            }
        }

        // $stmt->bindParam(':limit', $limit, \PDO::PARAM_INT);
        // $stmt->bindParam(':offset', $offset, \PDO::PARAM_INT);

        //$stmt->execute($params);
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_CLASS, 'AppBundle\DTO\Order');
        
    }

    public function countByRangeDate(OrderSearchModel $model) {
        
        $conn = $this->em->getConnection();
        $sql = 'SELECT count(*) FROM orders WHERE customer_code = :customer_code';
        $params = [];
        $params['customer_code'] = $model->getCustomerCode();
        
        if (!StringUtil::isNullOrEmptyString($model->getFromDate())) {
            $params['from_date'] = $model->getFromDate();
            $sql .= ' AND date(order_date) >= :from_date';
        }
            
        if (!StringUtil::isNullOrEmptyString($model->getToDate())) {
            $params['to_date'] = $model->getToDate();
            $sql .= ' AND date(order_date) <= :to_date';
        }

        $stmt = $conn->prepare($sql);


        $stmt->execute($params);

        return $stmt->fetchColumn();
        
    }
}