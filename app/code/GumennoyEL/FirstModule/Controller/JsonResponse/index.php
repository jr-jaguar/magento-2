<?php

namespace GumennoyEL\FirstModule\Controller\JsonResponse;

use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultFactory;

class Index extends \Magento\Framework\App\Action\Action {

	/**
	 * @return \Magento\Framework\App\ResponseInterface| \Magento\Framework\Controller\ResultInterface/
	 */

	public function execute() {
		$controllerResult = $this->resultFactory->create(ResultFactory::TYPE_JSON);
		$data = ['content' => "Test JSON"];
		return $controllerResult->setData($data);
	}



}