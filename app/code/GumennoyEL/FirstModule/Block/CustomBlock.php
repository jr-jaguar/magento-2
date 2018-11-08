<?php

namespace GumennoyEL\FirstModule\Block;

class CustomBlock extends \Magento\Framework\View\Element\Template
{
	public function getWelcomeText()
	{
		return 'Hello World';
	}
}