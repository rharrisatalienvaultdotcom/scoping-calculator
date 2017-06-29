<div id="report_sub_<?php echo $group[ 'handle' ]; ?>" class="report_subtotal row <?php echo $group[ 'handle' ]; ?>">
  <span id="report_sub_<?php echo $group[ 'handle' ]; ?>_label" class="report_subtotal_label label">Group Total:</span>
  <?php foreach ( $group[ 'columns' ] as $col ): ?>
  <span class="col<?php echo ' ' . ( ( $col == '' ) ? 'empty' : str_replace( '. ', '_', strtolower( $col ) ) ); ?>">
    <?php echo ( ( $col == '' ) ? '&nbsp;' : 0 ); ?>
  </span>
  <?php endforeach; ?>
</div>
