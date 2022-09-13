<?php
require('app/functions.php');
includeWithVariables('includes/header.php', ['pageTitle' => 'index', 'headCSS' => ['page/top.css']]) ?>
<section class="introduction">
    <div>Hello World Test</div>
</section>
<?php
includeWithVariables('includes/footer.php', ['footerJS' => ['all.js']]) ?>