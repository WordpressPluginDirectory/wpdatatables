<?php defined('ABSPATH') or die("Cannot access pages directly."); ?>

<?php
/** @var string $tableContent */
/** @var WPDataTable $this */
?>
    <div class="wpdt-c <?php if ($this->isTableWCAG()) { ?> wpTableWCAG<?php } ?>">
    <?php echo $tableContent; ?>
        <?php if ( get_option( 'wdtSiteLink' ) ) { ?><span class="powered_by_link d-block m-l-10 m-t-10 m-b-10">Generated by <a href="https://wpdatatables.com" target="_blank">wpDataTables</a></span><?php } ?>

</div>