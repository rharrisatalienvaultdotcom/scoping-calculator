              <form id="<?php echo $parent . "-" . $handle; ?>_form" class="field_form" action="#">
                <p><label for="<?php echo $parent . "-" . $handle; ?>"><?php echo $title; ?></label></p>
                <div class="input_wrapper">
                  <select id="<?php echo $parent . "-" . $handle; ?>" class="select_val"  onchange="( function( el ) { update_report(); } )( this )">
                    <?php for( $i = 0 ; $i < count( $options ) ; $i++ ): ?>
                      <option value="<?php echo $options[ $i ][ 0 ]; ?>"<?php if( $default_vals[ 0 ] == $i - 1 ) { echo ' selected="selected"'; } ?>><?php echo $options[ $i ][ 1 ]; ?></option>
                    <?php endfor; ?>
                  </select>
                  </svg>
                </div>
              </form>
