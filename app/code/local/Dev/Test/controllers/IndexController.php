<?php

class Dev_Test_IndexController extends Mage_Core_Controller_Front_Action
{
    /**
     * Index action
     */
    public function indexAction()
    {
        $indexEvCollect = Mage::getModel("index/event")->getCollection();
        foreach ($indexEvCollect as $indexEv) {
            echo "--------------------------------------------------------------------";
            echo "<pre>";
            print_r($indexEv->debug());
            print_r(unserialize($indexEv->getData("new_data")));
            echo "</pre>";
        }
    }

}
