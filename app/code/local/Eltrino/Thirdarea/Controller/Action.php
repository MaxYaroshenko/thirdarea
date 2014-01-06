<?php

class Eltrino_Thirdarea_Controller_Action extends Mage_Core_Controller_Varien_Action
{
    /**
     * Session namespace to refer in other places
     */
    const SESSION_NAMESPACE = 'thirdarea';

    /**
     * Currently used area
     *
     * @var string
     */
    protected $_currentArea = 'thirdarea';

    /**
     * Namespace for session.
     *
     * @var string
     */
    protected $_sessionNamespace = self::SESSION_NAMESPACE;

    /**
     * Predispatch: should set layout area
     *
     * @return Eltrino_Thirdarea_Controller_Action
     */
    public function preDispatch()
    {
        $this->getLayout()->setArea($this->_currentArea);

        parent::preDispatch();
        return $this;
    }

    protected function _construct()
    {
        parent::_construct();

        Mage::getDesign()->setArea('thirdarea')
            ->setPackageName('default')
            ->setTheme('default');

        $this->getLayout()->setArea('thirdarea');

        $this->setFlag('', self::FLAG_NO_CHECK_INSTALLATION, true);
    }
}