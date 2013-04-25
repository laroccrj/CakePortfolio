<!-- File: /app/View/Arts/admin.ctp -->

<h1>Admin Login</h1>
<?php
echo $this->Session->flash();
echo $this->Form->create('login');
echo $this->Form->input('password');
echo $this->Form->end('Login');
?>