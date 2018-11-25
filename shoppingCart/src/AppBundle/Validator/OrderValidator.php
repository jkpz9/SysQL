<?php

namespace AppBundle\Validator;

use AppBundle\Util\StringUtil;
use Symfony\Component\Form\FormInterface;
use AppBundle\Model\OrderSearchModel;

use  Symfony\Component\Form\FormError;


class OrderValidator {

    public function validateSearchModel(OrderSearchModel $model, FormInterface $form) {
        if(StringUtil::isNullOrEmptyString($model->getCustomerCode())) {
            $form['customer_code']->addError(new FormError('Customer code is required'));
        }

        if (!StringUtil::isNullOrEmptyString($model->getFromDate()) 
            &&
            !StringUtil::canMakeDateFromString('Y/m/d', $model->getFromDate())) {
                $form['from_date']->addError(new FormError('FROM DATE must follow Y/M/D STYLE'));
        }

        if (!StringUtil::isNullOrEmptyString($model->getToDate()) 
            &&
            !StringUtil::canMakeDateFromString('Y/m/d', $model->getToDate())) {
                $form['to_date']->addError(new FormError('TO DATE must follow Y/M/D STYLE'));
        }
    }

}