<?php

namespace GumennoyEL\FirstModule\Controller\ShowPerson;

use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultFactory;

class Index extends \Magento\Framework\App\Action\Action {

	/**
	 * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface
	 */

	public function execute() {
		$name = "test Name";
		$lastName = "test LastName";
		$resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
		$resultPage->getLayout()->getBlock('gumennoy.custom.block')->setPersonData(array(
			'name'=>$name,
			'lastName' => $lastName,
		));
		return $resultPage;
	}

}