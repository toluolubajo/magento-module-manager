<?php

class Netzarbeiter_ModuleMgr_Block_Adminhtml_Modulemgr_View_Form
    extends Mage_Adminhtml_Block_Widget_Form
{
    /**
     * @return Netzarbeiter_ModuleMgr_Model_Module
     */
    public function getModule()
    {
        return Mage::registry('current_module');
    }
    
    protected function _prepareForm()
	{
		$module	= $this->getModule();
        $form   = new Varien_Data_Form(array(
			'id' => 'edit_form',
			'action' => $this->getUrl('*/*/save', array('id' => $this->getRequest()->getParam('module'))),
			'method' => 'post',
			'enctype' => 'multipart/form-data'
				)
		);
		$form->setUseContainer(true);
		$prefix			= '_moduleform';
        $helper         = Mage::helper('netzarbeiter_modulemgr');
        $form->setUseContainer(true);
		$form->setHtmlIdPrefix($prefix);
		$form->setDataObject($module);
		$this->setForm($form);
		$fieldset		= $form->addFieldset('module_form', array('legend' => $helper->__('Module Information')));
		$fieldset->addField('version', 'text', array(
		  'label'		=> $helper->__('Version'),
		  'class'		=> 'required-entry',
		  'required'	=> true,
		  'name'		=> 'version',
		));

		$fieldset->addField('code_pool', 'label', array(
		  'label'		=> $helper->__('Code Pool'),
		  'required'	=> false,
		  'name'		=> 'code_pool',
		));
        
        $fieldset->addField('state', 'label', array(
		  'label'		=> $helper->__('State'),
		  'required'	=> false,
		  'name'		=> 'state',
		));

		$form->setValues($module->getData());
		return parent::_prepareForm();
	}

}
