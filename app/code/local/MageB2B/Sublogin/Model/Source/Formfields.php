<?php

class
MageB2B_Sublogin_Model_Source_Formfields
{
protected
$_formFields;
protected
$_adminAllowedFields;
protected
$_frontendAllowedFields;

public
function
getAllOptions()
{
if
(!$this->_formFields)
{
$_f3c781b9525bfa0dff046b0ba2f5ac834f921221
=
array();
$_f3c781b9525bfa0dff046b0ba2f5ac834f921221[]
=
array(
'label'
=>
Mage::helper('sublogin')->__('None'),
'value'
=>
'',
);
$_f3c781b9525bfa0dff046b0ba2f5ac834f921221[]
=
array(
'label'
=>
Mage::helper('sublogin')->__('Send Mail'),
'value'
=>
'send_backendmails',
);
$_f3c781b9525bfa0dff046b0ba2f5ac834f921221[]
=
array(
'label'
=>
Mage::helper('sublogin')->__('Can create sublogins'),
'value'
=>
'create_sublogins',
);

$_f3c781b9525bfa0dff046b0ba2f5ac834f921221[]
=
array(
'label'
=>
Mage::helper('sublogin')->__('Prefix'),
'value'
=>
'prefix',
);




$_f3c781b9525bfa0dff046b0ba2f5ac834f921221[]
=
array(
'label'
=>
Mage::helper('sublogin')->__('Days to Expire + Date to Expire'),
'value'
=>
'expire_date',
);
$_f3c781b9525bfa0dff046b0ba2f5ac834f921221[]
=
array(
'label'
=>
Mage::helper('sublogin')->__('ACL'),
'value'
=>
'acl',
);
$_f3c781b9525bfa0dff046b0ba2f5ac834f921221[]
=
array(
'label'
=>
Mage::helper('sublogin')->__('Is subscribed'),
'value'
=>
'is_subscribed',
);
$_f3c781b9525bfa0dff046b0ba2f5ac834f921221[]
=
array(
'label'
=>
Mage::helper('sublogin')->__('Order needs approval'),
'value'
=>
'order_needs_approval',
);
$_f3c781b9525bfa0dff046b0ba2f5ac834f921221[]
=
array(
'label'
=>
Mage::helper('sublogin')->__('Active'),
'value'
=>
'active',
);
$this->_formFields
=
$_f3c781b9525bfa0dff046b0ba2f5ac834f921221;
}
return
$this->_formFields;
}
public
function
getDefaultValues()
{
$_3c464bebc1012e6fd8265f7c6ee6ea7e5be9a6b1
=
array(
'send_backendmails'
=>
0,
'create_sublogins'
=>
0,
'prefix'
=>
'',
'days_to_expire'
=>
'',
'expire_date'
=>
'0',
'acl'
=>
'',
'is_subscribed'
=>
0,
'order_needs_approval'
=>
0,
'active'
=>
0,
);
$_15c9711f110a61c9f004db7ed2883f24c111d404
=
'sublogin/form_fields_default_values/';
foreach
($_3c464bebc1012e6fd8265f7c6ee6ea7e5be9a6b1
as
$_dc7f46f519b41520210eda842ff23db60112e8e7
=>
$_ece7873e79ae520373bf2e8185e60698a2e7a5f6)
{
if
(Mage::getStoreConfig($_15c9711f110a61c9f004db7ed2883f24c111d404.$_dc7f46f519b41520210eda842ff23db60112e8e7)
!==
false)
{
$_3c464bebc1012e6fd8265f7c6ee6ea7e5be9a6b1[$_dc7f46f519b41520210eda842ff23db60112e8e7]
=
Mage::getStoreConfig($_15c9711f110a61c9f004db7ed2883f24c111d404.$_dc7f46f519b41520210eda842ff23db60112e8e7);
}
}
return
$_3c464bebc1012e6fd8265f7c6ee6ea7e5be9a6b1;
}
public
function
toOptionArray()
{
return
$this->getAllOptions();
}
public
function
isFieldAllowed($_54323be853e934686a9fca46e2f91c8ead26624e,
$_65d77092134088b74b931f5dee7775701c22522d
=
'admin')
{
if
($_65d77092134088b74b931f5dee7775701c22522d
==
'admin')
{
return
$this->isFieldAllowedForAdmin($_54323be853e934686a9fca46e2f91c8ead26624e);
}
else
{

return
$this->isFieldAllowedForFront($_54323be853e934686a9fca46e2f91c8ead26624e);
}
}
public
function
isFieldAllowedForAdmin($_54323be853e934686a9fca46e2f91c8ead26624e)
{
if
(in_array($_54323be853e934686a9fca46e2f91c8ead26624e,
$this->getAdminAllowedFields()))
return
true;
return
false;
}
protected
function
getAdminAllowedFields()
{
if
(!$this->_adminAllowedFields)
{
$_2aac1163da75b6b3dd216d8b862ac2a06b41850a
=
Mage::getStoreConfig('sublogin/form_fields/admin');
if
(strpos($_2aac1163da75b6b3dd216d8b862ac2a06b41850a,
','))
$_2aac1163da75b6b3dd216d8b862ac2a06b41850a
=
explode(',',
$_2aac1163da75b6b3dd216d8b862ac2a06b41850a);
else
$_2aac1163da75b6b3dd216d8b862ac2a06b41850a
=
array($_2aac1163da75b6b3dd216d8b862ac2a06b41850a);
$this->_adminAllowedFields
=
$_2aac1163da75b6b3dd216d8b862ac2a06b41850a;
}
return
$this->_adminAllowedFields;
}
public
function
isFieldAllowedForFront($_54323be853e934686a9fca46e2f91c8ead26624e)
{
if
(in_array($_54323be853e934686a9fca46e2f91c8ead26624e,
$this->getFrontendAllowedFields()))
return
true;
return
false;
}
protected
function
getFrontendAllowedFields()
{
if
(!$this->_frontendAllowedFields)
{
$_a063d4ccc0020d5d6c86125c39062bc2a6b0d7cd
=
Mage::getStoreConfig('sublogin/form_fields/frontend');
if
(strpos($_a063d4ccc0020d5d6c86125c39062bc2a6b0d7cd,
','))
$_a063d4ccc0020d5d6c86125c39062bc2a6b0d7cd
=
explode(',',
$_a063d4ccc0020d5d6c86125c39062bc2a6b0d7cd);
else
$_a063d4ccc0020d5d6c86125c39062bc2a6b0d7cd
=
array($_a063d4ccc0020d5d6c86125c39062bc2a6b0d7cd);
$this->_frontendAllowedFields
=
$_a063d4ccc0020d5d6c86125c39062bc2a6b0d7cd;
}
return
$this->_frontendAllowedFields;
}
}