<!--
	Source Example From:
	http://book.cakephp.org/2.0/en/tutorials-and-examples/simple-acl-controlled-application/simple-acl-controlled-application.html
-->

<h2>Login</h2>
<?php
	echo $this->Session->flash('auth');
	echo $this->Form->create('User', array('url' => array('controller' => 'users', 'action' => 'login')));
	echo $this->Form->input('User.username');
	echo $this->Form->input('User.password');
	echo $this->Form->end('Login');

?>