<?php

namespace  SimplifiedMagento\FirstModule\Controller\Page;

use Magento\Framework\App\Action\Action;

class HelloWorld extends  Action
{
    public function execute()
    {
    	$objectManager = \Magento\Framework\App\ObjectManager::getInstance();

        $pencil = $objectManager->create('SimplifiedMagento\FirstModule\Model\Book');
        //echo"sdfsdfsdf"; die;
        var_dump($pencil);
      
    }
}
