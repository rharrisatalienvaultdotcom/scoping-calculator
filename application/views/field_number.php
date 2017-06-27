              <form id="<?php echo $parent . "-" . $handle; ?>_form" class="field_form" action="#">
                <p><label for="<?php echo $parent . "-" . $handle; ?>"><?php echo $title; ?></label></p>
                <div class="input_wrapper">
                  <svg class="minus" width="2em" height="2em">
                    <rect width="100%" height="100%" style="fill:rgba(0, 0, 0, 0);" onmousedown="( function( el ) { el.parentElement.nextElementSibling.stepDown(); update_report(); el.style.fill = 'rgba(0, 0, 0, .1)'; } )(this)" onmouseup="( function( el ) { el.style.fill = 'rgba(0, 0, 0, 0)'; } )(this)" onmouseout="( function( el ) { el.style.fill = 'rgba(0, 0, 0, 0)'; } )(this)" />
                    <rect x="12%" y="48%" width="76%" fill="gray" height="4%" style="fill:gray; pointer-events:none;" />
                  </svg>
                  <input id="<?php echo $parent . "-" . $handle; ?>" class="num_val default_<?php echo $default_vals[ 1 ]; ?>" type="number" min=0 value=<?php echo $default_vals[ 1 ]; ?> onfocus="this.select();">
                  <svg class="plus" width="2em" height="2em">
                    <rect width="100%" height="100%" style="fill:rgba(0, 0, 0, 0);" onmousedown="( function( el ) { el.parentElement.previousElementSibling.stepUp(); update_report(); el.style.fill = 'rgba(0, 0, 0, .1)'; } )(this)" onmouseup="( function( el ) { el.style.fill = 'rgba(0, 0, 0, 0)'; } )(this)" onmouseout="( function( el ) { el.style.fill = 'rgba(0, 0, 0, 0)'; } )(this)" />
                    <rect x="12%" y="48%" width="76%" height="4%" style="fill:gray; pointer-events:none;" />
                    <rect x="48%" y="12%" width="4%" height="76%" style="fill:gray; pointer-events:none;" />
                  </svg>
                </div>
              </form>
