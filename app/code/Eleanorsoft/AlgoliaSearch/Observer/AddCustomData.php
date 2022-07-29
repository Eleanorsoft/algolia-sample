<?php
namespace Eleanorsoft\AlgoliaSearch\Observer;

use Magento\Framework\Event\ObserverInterface;

/**
 * Class AddCustomData
 * @package Eleanorsoft\AlgoliaSearch\Observer
 */
class AddCustomData implements ObserverInterface
{
    /**
     * @param \Magento\Framework\Event\Observer $observer
     * @return $this
     * @throws \Exception
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $transport = $observer->getEvent()->getCustomData();

        $customData = "Hello World!";

        $transport->setData(
            'custom_data',	$customData
        );

        return $this;
    }
}
