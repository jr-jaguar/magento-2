<?php

namespace GumennoyEL\FirstModule\Controller\JsonResponse;

use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultFactory;

class Index extends \Magento\Framework\App\Action\Action
{

	/**
	 * @return \Magento\Framework\App\ResponseInterface| \Magento\Framework\Controller\ResultInterface/
	 */

	public function execute()
	{
		$controllerResult = $this->resultFactory->create( ResultFactory::TYPE_JSON );
		$data             = [ 'Default Router Is' => 'It’s located in lib/internal/Magento/Framework/App/Router/DefaultRouter.php and it’s last in the routers loop. It’s used when every other router doesn’t match. In Magento 2 we can create custom handle for “Not found” page to display custom content. Here is the loop in DefaultRouter for no route handler list:' ];

		return $controllerResult->setData( $data );
	}
}