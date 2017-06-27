<div id="report_<?php echo $group[ 'handle' ]; ?>_headers" class="report_column_headers row <?php echo $handle; ?>">
  <span class="label empty" >&nbsp;</span>
  <?php foreach ( $group[ 'columns' ] as $col ): ?>
    <span class="col header<?php echo ' ' . ( ( $col == '' ) ? 'empty' : strtolower( $col ) ); ?>">
      <?php echo ( ( $col == '' ) ? '&nbsp;' : $col ); ?>
    </span>
  <?php endforeach; ?>
</div>
