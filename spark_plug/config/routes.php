<?php
Router::connect('/users/:action/*', array('plugin' => 'spark_plug', 'controller' => 'users'));
Router::connect('/dashboard', array('plugin' => 'spark_plug', 'controller' => 'users', 'action'=>'dashboard'));
Router::connect('/user_groups/:action', array('plugin' => 'spark_plug', 'controller'=>'user_groups'));
Router::connect('/user_group_permissions/:action/*', array('plugin' => 'spark_plug', 'controller'=>'user_group_permissions'));
Router::connect('/init', array('plugin' => 'spark_plug', 'controller' => 'user_groups','action'=>'build_acl'));
Router::connect('/login', array('plugin' => 'spark_plug', 'controller' => 'users', 'action' => 'login'));
Router::connect('/logout', array('plugin' => 'spark_plug', 'controller' => 'users', 'action' => 'logout'));

?>