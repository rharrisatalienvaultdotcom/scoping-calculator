      var total_servers = 0,
        total_servers_eps = 0,
        total_network_devices = 0,
        total_network_devices_eps = 0,
        total_devices = 0,
        total_devices_eps = 0,
        grand_total_devices = 0,
        grand_total_devices_eps = 0,
        total_users = 0,
        total_users_eps = 0,
        non_dom_users = 0,
        total_network_data = 0,
        external_users = 0,
        weight = 0,
        calc_totals = {},
        other_globals = {};

      ( function() {
        if ( document.getElementById( 'servers' ) ) {
          document.getElementById( 'servers' ).className = document.getElementById( 'servers' ).className.replace( 'unselected', 'selected' );
        } else if ( document.getElementById( 'cloud_services_aws' ) ) {
          document.getElementById( 'cloud_services_aws' ).className = document.getElementById( 'cloud_services_aws' ).className.replace( 'unselected', 'selected' );
        }
      } )();
      var field_values = {};
      field_values.slides = {};
      field_values.slides = <?php echo $def_field_values; ?>;
      if ( document.getElementById( 'range-misc-compression_ratio' ) ) {
        updateRange( document.getElementById( 'range-misc-compression_ratio' ) );
      }
      if ( document.getElementById( 'range-misc-avg_msg_size' ) ) {
        updateRange( document.getElementById( 'range-misc-avg_msg_size' ) );
      }
      update_numbers();
