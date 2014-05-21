<!-- File: /app/View/Contacts/view.ctp -->


<h2><?php echo $contact['Contact']['name']; ?> (<?php echo $contact['Contact']['organization']; ?>)</h2>
<h3>Relationship/Contact Category</h3>
<p><?php echo $contact['Category']['category_name']; ?></p>
<?php if($contact['Contact']['title']) : ?>
<p>Title: <?php echo $contact['Contact']['title']; ?></p>
<?php endif; ?>
<h3>Address:</h3>
<?php if($contact['Contact']['street_address_1']) : ?>
<div><?php echo $contact['Contact']['street_address_1']; ?><br>
<?php endif; ?>
<?php if($contact['Contact']['street_address_2']) : ?>
<?php echo $contact['Contact']['street_address_2']; ?></div>
<?php endif; ?>
<?php if($contact['Contact']['city']) : ?>
<div><?php echo $contact['Contact']['city']; ?>,&nbsp;
<?php endif; ?>
<?php if($contact['Contact']['state']) : ?>
    <?php echo $contact['Contact']['state']; ?>&nbsp;
<?php endif; ?>
<?php if($contact['Contact']['zip']) : ?>
<?php echo $contact['Contact']['zip']; ?></div>
<br><br>
<?php endif; ?>

<?php if($contact['Contact']['home_phone']) : ?>
<h3>Home Phone: </h3>
<div><?php echo $contact['Contact']['home_phone']; ?></div>
<br>
<?php endif; ?>

<?php if($contact['Contact']['work_phone']) : ?>
<h3>Work Phone: </h3>
<div><?php echo $contact['Contact']['work_phone']; ?></div>
<br>
<?php endif; ?>

<?php if($contact['Contact']['fax']) : ?>
<h3>Fax Number: </h3>
<div><?php echo $contact['Contact']['fax']; ?></div>
<br>
<?php endif; ?>

<?php if($contact['Contact']['phone_other']) : ?>
<h3>Other Phone Number: </h3>
<div><?php echo $contact['Contact']['phone_other']; ?></div>
<br>
<?php endif; ?>

<?php if($contact['Contact']['email']) : ?>
<h3>Email: </h3>
<div><?php echo $contact['Contact']['email']; ?></div>
<br>
<?php endif; ?>

<?php if($contact['Contact']['website']) : ?>
<h3>Website: </h3>
<div><?php echo $this->Html->link($contact['Contact']['website'], $contact['Contact']['website']); ?></div>
<?php endif; ?>