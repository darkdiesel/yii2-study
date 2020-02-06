<?php
    // set title for page
    $this->title = "My Test Action"
?>


<div>
	<h1>Hello</h1>
</div>

<!-- This is test block, work with theme in layout -->
<?php $this->beginBlock('alert'); ?>
    <div class="alert alert-warning">
        <h4><strong>Warning!</strong></h4>
        <p>This is very beautiful site :)</p>
    </div>
<?php $this->endBlock();?>
