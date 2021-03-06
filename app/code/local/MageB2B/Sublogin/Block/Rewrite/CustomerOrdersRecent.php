<?php

class
MageB2B_Sublogin_Block_Rewrite_CustomerOrdersRecent
extends
Mage_Sales_Block_Order_Recent
{
public
function
__construct()
{
parent::__construct();
$_3a6c2ec34d8458e049eec354fda76a3e8b1384c1
=
Mage::getResourceModel('sales/order_collection')
->addAttributeToSelect('*')
->joinAttribute('shipping_firstname',
'order_address/firstname',
'shipping_address_id',
null,
'left')
->joinAttribute('shipping_lastname',
'order_address/lastname',
'shipping_address_id',
null,
'left')
->addAttributeToFilter('customer_id',
Mage::getSingleton('customer/session')->getCustomer()->getId());
if
(Mage::getStoreConfig('sublogin/general/restrict_order_view')
&&
Mage::helper('sublogin')->getCurrentSublogin())
{
$_3a6c2ec34d8458e049eec354fda76a3e8b1384c1->addAttributeToFilter('customer_email',
Mage::getSingleton('customer/session')->getSubloginEmail());
}
$_3a6c2ec34d8458e049eec354fda76a3e8b1384c1->addAttributeToFilter('state',
array('in'
=>
Mage::getSingleton('sales/order_config')->getVisibleOnFrontStates()))
->addAttributeToSort('created_at',
'desc')
->setPageSize('5')
->load();
$this->setOrders($_3a6c2ec34d8458e049eec354fda76a3e8b1384c1);
}
}
