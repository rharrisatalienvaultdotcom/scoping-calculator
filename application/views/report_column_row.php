<div id="report_<?php echo $group[ 'handle' ] . '-' . $field[ 'handle' ]; ?>" class="report_row row <?php echo $handle; ?>">
  <span id="report_<?php echo $group[ 'handle' ] . '-' . $field[ 'handle' ]; ?>_label" class="field label"><?php echo $field[ 'title' ]; ?></span>
  <?php for ( $i = 0 ; $i < count( $field[ 'columns' ] ) ; $i++ ) : ?>
    <span id="report_<?php echo $group[ 'handle' ] . '-' . $field[ 'handle' ] . '_' . ( ( $field[ 'columns' ][ $i ] == '' ) ? 'empty' : $field[ 'columns' ][ $i ] ); ?>" class="col value<?php echo ' ' . ( ( $field[ 'columns' ][ $i ] == '' ) ? 'empty' : $field[ 'columns' ][ $i ] ); ?>">
      <?php echo ( ( $field[ 'columns' ][ $i ] == '' ) ? '&nbsp;' : $field[ 'default_vals' ][ $i ] ); ?>
    </span>
  <?php endfor; ?>
</div>
