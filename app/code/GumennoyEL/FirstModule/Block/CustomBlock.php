<?php

namespace GumennoyEL\FirstModule\Block;

class CustomBlock extends \Magento\Framework\View\Element\Template
{

	public function getCurrentJsonUrl()
	{
		return $this->getUrl('home_work/jsonresponse/index');
	}
}