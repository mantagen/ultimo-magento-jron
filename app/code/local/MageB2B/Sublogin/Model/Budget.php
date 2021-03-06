<?php

class
MageB2B_Sublogin_Model_Budget
extends
Mage_Core_Model_Abstract
{
const
TYPE_YEAR
=
'year';
const
TYPE_MONTH
=
'month';
const
TYPE_DAY
=
'day';
public
function
_construct()
{
parent::_construct();
$this->_init('sublogin/budget');
}
public
function
getBudgetType()
{
if
(!$this->getData('budget_type'))
{
$_42e513359269508d70ccffd9f5921839fc7fa309
=
null;
if
($this->getYear()
&&
$this->getMonth()
&&
$this->getDay())
$_42e513359269508d70ccffd9f5921839fc7fa309
=
self::TYPE_DAY;
elseif
($this->getYear()
&&
$this->getMonth())
$_42e513359269508d70ccffd9f5921839fc7fa309
=
self::TYPE_MONTH;
elseif
($this->getYear())
$_42e513359269508d70ccffd9f5921839fc7fa309
=
self::TYPE_YEAR;
$this->setData('budget_type',
$_42e513359269508d70ccffd9f5921839fc7fa309);
}
return
$this->getData('budget_type');
}
public
function
checkIsUnique()
{
$_205d95c001c842f933e3b55fa4e902d5d2fdd0af
=
$this->getCollection();
if
($this->getBudgetType()
==
self::TYPE_YEAR)
{
$_205d95c001c842f933e3b55fa4e902d5d2fdd0af->addFieldToFilter('year',
$this->getYear());
}
elseif
($this->getBudgetType()
==
self::TYPE_MONTH)
{
$_205d95c001c842f933e3b55fa4e902d5d2fdd0af->addFieldToFilter('year',
$this->getYear());
$_205d95c001c842f933e3b55fa4e902d5d2fdd0af->addFieldToFilter('month',
$this->getMonth());
}
elseif
($this->getBudgetType()
==
self::TYPE_DAY)
{
$_205d95c001c842f933e3b55fa4e902d5d2fdd0af->addFieldToFilter('year',
$this->getYear());
$_205d95c001c842f933e3b55fa4e902d5d2fdd0af->addFieldToFilter('month',
$this->getMonth());
$_205d95c001c842f933e3b55fa4e902d5d2fdd0af->addFieldToFilter('DAY',
$this->getDay());
}
$_155f1b9f6203c1ddedca7295a981c920d6ca0722
=
$_205d95c001c842f933e3b55fa4e902d5d2fdd0af->getFirstItem();

if
(!$_155f1b9f6203c1ddedca7295a981c920d6ca0722->getId())
{
return
true;
}
else
{
if
($this->getId()
&&
$_155f1b9f6203c1ddedca7295a981c920d6ca0722->getId()
==
$this->getId())

{
return
true;
}
}
return
false;
}
}
