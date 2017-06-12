
      <?php foreach ( $calc_data['slides'] as $slide ): ?>
        field_values.slides.<?php echo $slide['handle']; ?> = {};
        field_values.slides.<?php echo $slide['handle']; ?>.handle = '<?php echo $slide['handle']; ?>';
        field_values.slides.<?php echo $slide['handle']; ?>.title = '<?php echo $slide['title']; ?>';
        field_values.slides.<?php echo $slide['handle']; ?>.position = Number( '<?php echo $slide['position']; ?>' );
        field_values.slides.<?php echo $slide['handle']; ?>.sum_raw = Number( '<?php echo $slide['sum_raw']; ?>' );
        field_values.slides.<?php echo $slide['handle']; ?>.sum_calc = Number( '<?php echo $slide['sum_calc']; ?>' );
        field_values.slides.<?php echo $slide['handle']; ?>.add_to_total = Number( '<?php echo $slide['add_to_total']; ?>' );
        field_values.slides.<?php echo $slide['handle']; ?>.add_to_eps_total = Number( '<?php echo $slide['add_to_eps_total']; ?>' );
        field_values.slides.<?php echo $slide['handle']; ?>.fields = {};
        <?php foreach ( $slide['fields'] as $field ): ?>
          field_values.slides.<?php echo $slide['handle']; ?>.fields.<?php echo $field['handle']; ?> = {};
          field_values.slides.<?php echo $slide['handle']; ?>.fields.<?php echo $field['handle']; ?>.handle = '<?php echo $field['handle']; ?>';
          field_values.slides.<?php echo $slide['handle']; ?>.fields.<?php echo $field['handle']; ?>.title = '<?php echo $field['title']; ?>';
          field_values.slides.<?php echo $slide['handle']; ?>.fields.<?php echo $field['handle']; ?>.global = Number( '<?php echo $field['global']; ?>' );
          field_values.slides.<?php echo $slide['handle']; ?>.fields.<?php echo $field['handle']; ?>.position = Number( '<?php echo $field['position']; ?>' );
          field_values.slides.<?php echo $slide['handle']; ?>.fields.<?php echo $field['handle']; ?>.raw = <?php echo $field['default_val']; ?>;
          field_values.slides.<?php echo $slide['handle']; ?>.fields.<?php echo $field['handle']; ?>.weight = Number( <?php echo $field['weight']; ?> );
          if ( ("<?php echo $field['function']; ?>") !== 'NA' ) {
            /*

             field_values.slides.<?php echo $slide['handle']; ?>.fields.<?php echo $field['handle']; ?>.function = function() {

              console.log( 'total_users: ' + total_users + '; non_dom_users: ' + non_dom_users);
              var tmp = field_values.slides.<?php echo $slide['handle']; ?>.fields.<?php echo $field['handle']; ?>.raw * ( <?php echo $field['function']; ?> );
              return Math.round( tmp );
            }
            field_values.slides.<?php echo $slide['handle']; ?>.fields.<?php echo $field['handle']; ?>.calc = Number( field_values.slides.<?php echo $slide['handle']; ?>.fields.<?php echo $field['handle']; ?>.function() );
            */
          } else {
            field_values.slides.<?php echo $slide['handle']; ?>.fields.<?php echo $field['handle']; ?>.calc = Number( field_values.slides.<?php echo $slide['handle']; ?>.fields.<?php echo $field['handle']; ?>.raw );
          }
        <?php endforeach; ?>
      <?php endforeach; ?>
