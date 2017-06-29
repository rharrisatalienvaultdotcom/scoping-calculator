<div id="report_total_headers" class="report_total_headers row">
  <span class="label empty" >&nbsp;</span>
  <span class="col total_header gtotal_<?php echo ( $headers[ 0 ] == '' ) ? 'empty' : strtolower( $headers[ 0 ] ); ?>_header"><?php echo $headers[ 0 ]; ?></span>
  <span class="col total_header gtotal_<?php echo ( $headers[ 1 ] == '' ) ? 'empty' : strtolower( $headers[ 1 ] ); ?>_header"><?php echo $headers[ 1 ]; ?></span>
  <span class="col total_header gtotal_<?php echo ( $headers[ 2 ] == '' ) ? 'empty' : strtolower( $headers[ 2 ] ); ?>_header"><?php echo $headers[ 2 ]; ?></span>
</div>
<div id="report_total" class="report_total row">
  <span id="report_total_label" class="report_total_label label">Total:</span>
  <span class="col total_<?php echo ( $headers[ 0 ] == '' ) ? 'empty' : str_replace( '.','', str_replace( ' ','_', strtolower( $headers[ 0 ] ) ) ) . ' ' . $fcolumns[ 0 ]; ?>"><?php echo ( $headers[ 0 ] == '' ) ? '&nbsp;' : 0 ; ?></span>
  <span class="col total_<?php echo ( $headers[ 1 ] == '' ) ? 'empty' : str_replace( '.','', str_replace( ' ','_', strtolower( $headers[ 1 ] ) ) ) . ' ' . $fcolumns[ 1 ]; ?>"><?php echo ( $headers[ 1 ] == '' ) ? '&nbsp;' : 0 ; ?></span>
  <span class="col total_<?php echo ( $headers[ 2 ] == '' ) ? 'empty' : str_replace( '.','', str_replace( ' ','_', strtolower( $headers[ 2 ] ) ) ) . ' ' . $fcolumns[ 2]; ?>"><?php echo ( $headers[ 2 ] == '' ) ? '&nbsp;' : 0 ; ?></span>
</div>
