<!-- File: /app/View/Contact/add.ctp -->

<h1>Add Contact</h1>
<?php
echo $this->Form->create('Contact');
echo $this->Form->input('category_id');
echo $this->Form->input('name');
echo $this->Form->input('title');
echo $this->Form->input('organization');
echo $this->Form->input('street_address_1');
echo $this->Form->input('street_address_2');
echo $this->Form->input('city');
echo $this->Form->input('state');
echo $this->Form->input('zip');
echo $this->Form->input('email');
echo $this->Form->input('home_phone');
echo $this->Form->input('work_phone');
echo $this->Form->input('fax');
echo $this->Form->input('phone_other');
echo $this->Form->input('website');
echo $this->Form->end('Save Contact');
?>