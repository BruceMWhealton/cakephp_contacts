<h2>Log In</h2>
<p>You will need to log in to edit any of the content.</p>
<?php
echo $this->Form->create('User');
echo $this->Form->input('username');
echo $this->Form->input('password');
echo $this->Form->end(__('Login'));

?>