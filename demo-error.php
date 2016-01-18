<?php
require __DIR__ . '/vendor/autoload.php';

use Adldap\Adldap;
use Adldap\Exceptions\AdldapException;

$configuration = array(
  'account_suffix' => '@gatech.edu',
  'domain_controllers' => array('whitepages.gatech.edu'),
  'port' => 389,
  'base_dn' => 'dc=whitepages,dc=gatech,dc=edu',
  'admin_username' => 'asdf',
  'admin_password' => 'qwerty',
  'follow_referrals' => true,
  'use_ssl' => false,
  'use_tls' => false,
  'use_sso' => false,
);

try {
  $connection = new Adldap($configuration);

  echo 'Connection details:' . "\n";
  var_dump($connection);
} catch (AdldapException $ex) {
  echo sprintf('Connection issue:%s%s', "\n\t", $ex->getMessage());
}
