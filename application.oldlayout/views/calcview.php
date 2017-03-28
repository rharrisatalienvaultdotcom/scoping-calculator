<html>
	<head>
		<style>
			/*ul {
				border: solid black 1px;
			}*/
			body {
				padding:0px;
				margin:0px;
				height:100%;
				width:100%;
				position:fixed;
			}
			#wrapper {
				margin:0px;
				position:fixed;
				width:100%;
				height:100%;
			}
			#shadow_box {
				margin:0px;
				background-color:rgba(0,0,0,.7);
				transition: background-color 600ms;
				position:fixed;
				pointer-events:none;
				width:100%;
				height:100%;
			}
			#slides_wrapper {
				top:145px;
				border-radius:5px;
				box-sizing:border-box;
				pointer-events:auto;
				transition: top 600ms cubic-bezier(0.6, -0.28, 0.735, 0.045);
				height:600px;
				position:relative;
				border: 1px solid black;
				max-width:900px;
				min-width:300px;
				margin: 0 auto;
				overflow:hidden;
				box-shadow: 0px 0px 15px;
			}
			.shown {
				top:145px;
			}
			.hidden {
				top:-580px;
			}
			.selected {
				z-index:5;
				display:block;
			}
			.unselected {
				z-index:-1;
				display:none;
			}
			.slide {
				position:absolute;
				background-color:grey;
				width:100%;
				height:100%;
			}
			h3 {
				width:100%;
				padding-left:40px;
			}
			#fields_wrapper {
				position:relative;
				background-color:grey;
				overflow-y:scroll;
				box-shadow: inset 0px 0px 15px;
				width:80%;
				margin: 0 auto;
				min-height:475px;
				max-height:475px;
				bottom:0px;
			}
			.field_label {
				position:absolute;
				left:30px;
				top:20px;
			}
			h3 {
				margin-left:40px;
				-webkit-user-select: none;
				-moz-user-select: none;
				-ms-user-select: none;
				user-select: none;
			}
			ul {
				/*border: 1px solid blue;*/
				margin:0px;
				padding:0px;
			}
			li {
				list-style-type:none;
			}
			#slides_wrapper  ul  li {
				position:relative;
				margin:0px;
				padding:0px;
				height:90px;
				z-index:2;
			}
			.scale_buttons {
				width:85px;
				display:inline;
				position:absolute;
				right:0px;
				bottom:11px;
			}
			.scale_label {
				position:absolute;
				bottom:10px;
				left:76%;
			}
			span {
				-webkit-user-select: none;
				-moz-user-select: none;
				-ms-user-select: none;
				user-select: none;
			}
			input[type="number"] {
				position:absolute;
				/*float:right;*/
				height:40px;
				width:80px;
				top:10px;
				right:20px;
				/*border-radius:5px;
				margin-top:10px;
				margin-bottom:15px;
				margin-right:55px;*/
			}
			/*input[type="range"] {
				width:800px;
				/*margin-left:10px;
				margin-right:10px;
			}*/
			#previous_button {
				position:absolute;
				z-index:10;
				top:35%;
				left:5px;
			}
			#next_button {
				position:absolute;
				z-index:10;
				top:35%;
				right:5px;
			}
			#show_hide {
				position:absolute;
				cursor:default;
				z-index:10;
				bottom:15px;
				left:49%;
			}
			#report_wrapper {
				position:relative;
				width:860px;
				margin: 0 auto;
				z-index:-1;
				box-shadow: 0px 0px 15px;
				height:100%;
				overflow-y: auto;
			}
			#report_wrapper_inner {
				width:90%;
				padding-top:125px;
				margin: 0 auto;
			}
			.report_slide_label {
				text-transform: capitalize;
				font-size:1.5em;
				border-bottom: 1px solid red;
				margin-bottom:15px;
			}
			.report_slide_total_label {
				width:530px;
				display:inline-block;
				text-align:right;
				padding-right:20px;
				font-size:1.2em;
			}
			.report_slide_total_number {
				width:70px;
				display:inline-block;
			}
			.report_slide_total_eps {

			}
			.report_field_label {
				width:530px;
				display:inline-block;
				padding-left:20px;
			}
			.report_field_number {
				width:70px;
				display:inline-block;
			}
			.report_field_eps {
				
			}
			.report_total_label {
				width:530px;
				display:inline-block;
				text-align:right;
				padding-right:20px;
				font-size:1.5em;
			}
			.report_total_number {
				width:70px;
				display:inline-block;
				font-size:1.1em;
			}
			input[type="range"] {
			  -webkit-appearance: none;
			  -webkit-tap-highlight-color: rgba(255, 255, 255, 0);
			  position:absolute;
			  bottom:15px;
			  width: 70%;
			  height: 10px;
			  margin: 0;
			  margin-left:5%;
			  margin-right:1%;
			  border: none;
			  padding: 1px 2px;
			  border-radius: 14px;
			  background: #232528;
			  box-shadow: inset 0 1px 0 0 #0d0e0f, inset 0 -1px 0 0 #3a3d42;
			  -webkit-box-shadow: inset 0 1px 0 0 #0d0e0f, inset 0 -1px 0 0 #3a3d42;
			  outline: none; /* no focus outline */
			}

			input[type="range"]::-moz-range-track {
			  border: inherit;
			  background: transparent;
			}

			input[type="range"]::-ms-track {
			  border: inherit;
			  color: transparent; /* don't drawn vertical reference line */
			  background: transparent;
			}

			input[type="range"]::-ms-fill-lower,
			input[type="range"]::-ms-fill-upper {
			  background: transparent;
			}

			input[type="range"]::-ms-tooltip {
			  display: none;
			}

			/* thumb */

			input[type="range"]::-webkit-slider-thumb {
			  -webkit-appearance: none;
			  width: 18px;
			  height: 30px;
			  border: none;
			  background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #529de1), color-stop(100%, #245e8f)); /* android <= 2.2 */
			  background-image: -webkit-linear-gradient(top , #529de1 0, #245e8f 100%); /* older mobile safari and android > 2.2 */;
			  background-image: linear-gradient(to bottom, #529de1 0, #245e8f 100%); /* W3C */
			}
			input[type="range"]::-moz-range-thumb {
			  width: 18px;
			  height: 30px;
			  border: none;
			  background-image: linear-gradient(to bottom, #529de1 0, #245e8f 100%); /* W3C */
			}

			input[type="range"]::-ms-thumb {
			  width: 18px;
			  height: 30px;
			  border: 0;
			  background-image: linear-gradient(to bottom, #529de1 0, #245e8f 100%); /* W3C */
			}
		</style>
	</head>
	<body>
		<div id="wrapper">
			<div id="shadow_box">
				<div id="slides_wrapper" class="shown">
					<!--<span id="previous_button" onmouseup="(function () { var elem1 = document.getElementsByClassName('selected'); var elem1Pos = elem1[0].getAttribute('data-slide-position'); if (elem1Pos > 1) { var elem2 = document.querySelectorAll('[data-slide-position=' + String.fromCharCode(34) + (Number(elem1Pos) - 1) + String.fromCharCode(34) + ']' ); elem1[0].className = elem1[0].className.replace('selected', 'unselected'); elem2[0].className = elem2[0].className.replace('unselected', 'selected'); } } )()">Previous</span>-->
					<svg id="previous_button" height="151" width="76">
					  <circle cx="38" cy="75" r="37" stroke="black" stroke-width="1" fill="grey" onmouseup="(function () { var elem1 = document.getElementsByClassName('selected'); var elem1Pos = elem1[0].getAttribute('data-slide-position'); if (elem1Pos > 1) { var elem2 = document.querySelectorAll('[data-slide-position=' + String.fromCharCode(34) + (Number(elem1Pos) - 1) + String.fromCharCode(34) + ']' ); elem1[0].className = elem1[0].className.replace('selected', 'unselected'); elem2[0].className = elem2[0].className.replace('unselected', 'selected'); } } )()"/>
					  <polygon points="54,46 54,104 5,75" style="fill:black;stroke:black;stroke-width:1" onmouseup="(function () { var elem1 = document.getElementsByClassName('selected'); var elem1Pos = elem1[0].getAttribute('data-slide-position'); if (elem1Pos > 1) { var elem2 = document.querySelectorAll('[data-slide-position=' + String.fromCharCode(34) + (Number(elem1Pos) - 1) + String.fromCharCode(34) + ']' ); elem1[0].className = elem1[0].className.replace('selected', 'unselected'); elem2[0].className = elem2[0].className.replace('unselected', 'selected'); } } )()"/>
					  Sorry, your browser does not support inline SVG.
					</svg>
					<?php foreach ($calc_data as $slide): ?>
						<div data-slide-id="<?php echo $slide['id']; ?>" data-slide-position="<?php echo $slide['position']; ?>" id="<?php echo $slide['handle']; ?>" class="slide unselected">
							<h3><?php echo $slide['title']; ?></h3>
								<div id="fields_wrapper">
									<ul>
									<?php foreach ($slide['fields'] as $field): ?>
										<li>
											<span class="field_label" ><?php echo $field['title']; ?></span>
											<input type="number" name="number-<?php echo $field['handle']; ?>" id="number-<?php echo $field['handle']; ?>" data-slide-id="<?php echo $slide['id']; ?>" data-field-id="<?php echo $field['id']; ?>" value="<?php echo $field['required']; ?>" min="<?php echo $field['required']; ?>" max="100" onchange="(function(e) { document.getElementById('range-<?php echo $field['handle']; ?>').value = e.value; update_numbers(); })(this)">
											<input type="range" name="range-<?php echo $field['handle']; ?>" id="range-<?php echo $field['handle']; ?>" data-slide-id="<?php echo $slide['id']; ?>" data-field-id="<?php echo $field['id']; ?>" value="<?php echo $field['required']; ?>" min="<?php echo $field['required']; ?>" max="100" onchange="(function(e) { document.getElementById('number-<?php echo $field['handle']; ?>').value = e.value; update_numbers(); })(this)"><span id="scale-<?php echo $field['handle']; ?>" class="scale_label" style="">100</span>
											<div class="scale_buttons"><form style="display:inline;"><input type="radio" name="scale" id="low_scale" value="low_scale" onchange="(function(e) { if (e.checked) {if (document.getElementById('range-<?php echo $field['handle']; ?>').value > 1000) { document.getElementById('range-<?php echo $field['handle']; ?>').value = Math.round(document.getElementById('range-<?php echo $field['handle']; ?>').value / 10); document.getElementById('number-<?php echo $field['handle']; ?>').value = Math.round(document.getElementById('number-<?php echo $field['handle']; ?>').value / 10); } if (document.getElementById('range-<?php echo $field['handle']; ?>').value > 100) { document.getElementById('range-<?php echo $field['handle']; ?>').value = Math.round(document.getElementById('range-<?php echo $field['handle']; ?>').value / 10); document.getElementById('number-<?php echo $field['handle']; ?>').value = Math.round(document.getElementById('number-<?php echo $field['handle']; ?>').value / 10); } document.getElementById('range-<?php echo $field['handle']; ?>').max = 100; document.getElementById('number-<?php echo $field['handle']; ?>').max = 100; document.getElementById('scale-<?php echo $field['handle']; ?>').innerHTML = '100'; } update_numbers(); })(this)" checked><input type="radio" name="scale" id="med_scale" value="med_scale" onchange="(function(e) { if (e.checked) {if (document.getElementById('range-<?php echo $field['handle']; ?>').value > 1000) { document.getElementById('range-<?php echo $field['handle']; ?>').value = Math.round(document.getElementById('range-<?php echo $field['handle']; ?>').value / 10); document.getElementById('number-<?php echo $field['handle']; ?>').value = Math.round(document.getElementById('number-<?php echo $field['handle']; ?>').value / 10); } document.getElementById('range-<?php echo $field['handle']; ?>').max = 1000; document.getElementById('number-<?php echo $field['handle']; ?>').max = 1000; document.getElementById('scale-<?php echo $field['handle']; ?>').innerHTML = '1000';} })(this)" ><input type="radio" name="scale" id="high_scale" value="high_scale" onchange="(function(e) { if (e.checked) { document.getElementById('range-<?php echo $field['handle']; ?>').max = 10000; document.getElementById('number-<?php echo $field['handle']; ?>').max = 10000; document.getElementById('scale-<?php echo $field['handle']; ?>').innerHTML = '10000';} })(this)" ></form></div>
										</li>
									<?php endforeach; ?>
									</ul>
								</div>
						</div>
					<?php endforeach;?>
					<!--<span id="next_button" onmouseup="(function () { var elem1 = document.getElementsByClassName('selected'); var elem1Pos = elem1[0].getAttribute('data-slide-position'); if (elem1Pos < Number(<?php echo sizeof($calc_data); ?>)) { var data_string = '[data-slide-position=' + String.fromCharCode(34) + (Number(elem1Pos) + 1) + String.fromCharCode(34) + ']';  var elem2 = document.querySelectorAll(data_string); elem1[0].className = elem1[0].className.replace('selected', 'unselected'); elem2[0].className = elem2[0].className.replace('unselected', 'selected'); } } )()">Next</span>-->
					<svg id="next_button" height="151" width="76">
					  <circle cx="38" cy="75" r="37" stroke="black" stroke-width="1" fill="grey" onmouseup="(function () { var elem1 = document.getElementsByClassName('selected'); var elem1Pos = elem1[0].getAttribute('data-slide-position'); if (elem1Pos < Number(<?php echo sizeof($calc_data); ?>)) { var data_string = '[data-slide-position=' + String.fromCharCode(34) + (Number(elem1Pos) + 1) + String.fromCharCode(34) + ']';  var elem2 = document.querySelectorAll(data_string); elem1[0].className = elem1[0].className.replace('selected', 'unselected'); elem2[0].className = elem2[0].className.replace('unselected', 'selected'); } } )()"/>
					  <polygon points="22,46 22,104 71,75" style="fill:black;stroke:black;stroke-width:1" onmouseup="(function () { var elem1 = document.getElementsByClassName('selected'); var elem1Pos = elem1[0].getAttribute('data-slide-position'); if (elem1Pos < Number(<?php echo sizeof($calc_data); ?>)) { var data_string = '[data-slide-position=' + String.fromCharCode(34) + (Number(elem1Pos) + 1) + String.fromCharCode(34) + ']';  var elem2 = document.querySelectorAll(data_string); elem1[0].className = elem1[0].className.replace('selected', 'unselected'); elem2[0].className = elem2[0].className.replace('unselected', 'selected'); } } )()"/>
					  Sorry, your browser does not support inline SVG.
					</svg>
					<span id="show_hide" onclick="(function(el){ var slide_box = document.getElementById('slides_wrapper'); if(slide_box.style.top == '145px') { slide_box.style.top = '-550px'; el.innerHTML = 'Show'; document.getElementById('shadow_box').style.backgroundColor = 'rgba(0,0,0,0)'; } else { slide_box.style.top = '145px'; el.innerHTML = 'Hide'; document.getElementById('shadow_box').style.backgroundColor = 'rgba(0,0,0,0.7)'; } })(this)">Hide</span>
				</div>
			</div>
			<div id="report_wrapper">
				<div id="report_wrapper_inner">
				</div>
			</div>
		</div>
		<script type="text/javascript">
		<!--//<![CDATA[
			var total_users = 0,
				total_users_eps = 0,
				non_dom_users = 0,
				grand_total_devices = 0,
				grand_total_devices_eps = 0,
				total_devices = 0,
				total_devices_eps = 0,
				total_network_devices = 0,
				total_network_devices_eps = 0,
				total_servers = 0,
				total_servers_eps = 0,
				total_network_data = 0,
				external_users = 0,
				weight = 0;


			(function() { document.getElementById('servers').className = document.getElementById('servers').className.replace( 'unselected', 'selected'); })();
			var field_values = {};
			<?php foreach ($calc_data as $slide): ?>
				field_values.<?php echo $slide['handle']; ?> = {};
				field_values.<?php echo $slide['handle']; ?>.handle = '<?php echo $slide['handle']; ?>';
				<?php foreach ($slide['fields'] as $field): ?>
					field_values.<?php echo $slide['handle']; ?>.<?php echo $field['handle']; ?> = {};
					field_values.<?php echo $slide['handle']; ?>.<?php echo $field['handle']; ?>.handle = '<?php echo $field['handle']; ?>';
					field_values.<?php echo $slide['handle']; ?>.<?php echo $field['handle']; ?>.title = '<?php echo $field['title']; ?>';
					field_values.<?php echo $slide['handle']; ?>.<?php echo $field['handle']; ?>.raw = <?php echo $field['required']; ?>;
					if ( '<?php echo $field['function']; ?>' !== 'NA') {
						field_values.<?php echo $slide['handle']; ?>.<?php echo $field['handle']; ?>.function = function() { 
							field_values.<?php echo $slide['handle']; ?>.<?php echo $field['handle']; ?>.weight = '<?php echo $field['weight']; ?>';
							weight = field_values.<?php echo $slide['handle']; ?>.<?php echo $field['handle']; ?>.weight;
							return Math.round(field_values.<?php echo $slide['handle']; ?>.<?php echo $field['handle']; ?>.raw * <?php echo $field['function']; ?>);
						}
						field_values.<?php echo $slide['handle']; ?>.<?php echo $field['handle']; ?>.calc = Number(field_values.<?php echo $slide['handle']; ?>.<?php echo $field['handle']; ?>.function());
					} else {
						field_values.<?php echo $slide['handle']; ?>.<?php echo $field['handle']; ?>.calc = Number(field_values.<?php echo $slide['handle']; ?>.<?php echo $field['handle']; ?>.raw);
					}
				<?php endforeach;?>
			<?php endforeach;?>
			function update_numbers() {
				total_users = 0;
				total_users_eps = 0;
				non_dom_users = 0;
				grand_total_devices = 0;
				grand_total_devices_eps = 0;
				total_devices = 0;
				total_devices_eps = 0;
				total_network_devices = 0;
				total_network_devices_eps = 0;
				total_servers = 0;
				total_servers_eps = 0;
				external_users = 0;
				weight = 0;
				for (var slide in field_values) {
						for (var field in field_values[slide]) {
							if(field != 'handle' && field != 'title') {
								var elem = document.getElementById('number-' + field_values[slide][field]['handle']);
								field_values[slide][field]['raw'] = elem.value;
								switch (slide) {
									case 'users':
										total_users += Number(field_values[slide][field]['raw']);
										break;
									case 'servers':
										total_servers += Number(field_values[slide][field]['raw']);
										break;
									case 'devices':
										total_devices += Number(field_values[slide][field]['raw']);
										break;
									case 'network_devices':
										total_network_devices += Number(field_values[slide][field]['raw']);
										break;
									case 'network_data':
										total_network_data += Number(field_values[slide][field]['raw']);
										break;
								}
								switch (field) {
									case 'non_dom_users':
										non_dom_users = Number(field_values[slide][field]['raw']);
										break;
									case 'external_users':
										external_users = Number(field_values[slide][field]['raw']);
										break;
								}
								if(field_values[slide][field]['function']) {
									field_values[slide][field]['calc'] = Number(field_values[slide][field]['function']());
								} else {
									field_values[slide][field]['calc'] = Number(field_values[slide][field]['raw']);
								}
								switch (slide) {
									case 'users':
										total_users_eps += Number(field_values[slide][field]['calc']);
										break;
									case 'servers':
										total_servers_eps += Number(field_values[slide][field]['calc']);
										break;
									case 'devices':
										total_devices_eps += Number(field_values[slide][field]['calc']);
										break;
									case 'network_devices':
										total_network_devices_eps += Number(field_values[slide][field]['calc']);
										break;
								}
							}
						}
					}
				grand_total_devices = total_servers + total_devices + total_network_devices;
				grand_total_devices_eps = total_servers_eps + total_devices_eps + total_network_devices_eps;
				console.log(field_values);
				console.log(total_users);
				console.log(total_users_eps);
				console.log(total_servers);
				console.log(total_servers_eps);
				console.log(total_devices);
				console.log(total_devices_eps);
				console.log(total_network_devices);
				console.log(total_network_devices_eps);
				console.log(grand_total_devices);
				console.log(grand_total_devices_eps);
				update_report();
				}
				function update_report() {
					var report_section = document.getElementById('report_wrapper_inner');
					report_section.innerHTML = '';
					for (var slide in field_values) {
						var rep_list = document.createElement('ul');
						var slide_name = document.createElement('li');
						slide_name.innerHTML = field_values[slide]['handle'].replace('_',' ');
						slide_name.className = 'report_slide_label'
						rep_list.appendChild(slide_name);
						for (var field in field_values[slide]) {
							if(field != 'handle' && field != 'title' && Number(field_values[slide][field]['raw']) != 0) {
								var line = document.createElement('li');
								var label = document.createElement('span');
								label.innerHTML = field_values[slide][field]['title'];
								label.className = 'report_field_label';
								var raw = document.createElement('span');
								raw.innerHTML = field_values[slide][field]['raw'];
								raw.className = 'report_field_number';
								var calc = document.createElement('span');
								calc.innerHTML = field_values[slide][field]['calc'];
								calc.className = 'report_field_number';
								var eps = document.createElement('span');
								eps.innerHTML = 'Est. EPS';
								line.appendChild(label);
								line.appendChild(raw);
								line.appendChild(calc);
								line.appendChild(eps);
								rep_list.appendChild(line);
							}
						}
						var line = document.createElement('li');
						var label = document.createElement('span');
						var raw = document.createElement('span');
						var calc = document.createElement('span');
						var eps = document.createElement('span');
						line.style.marginBottom = '20px';
						label.innerHTML = 'Total:';
						label.className = 'report_slide_total_label';
						raw.className = 'report_slide_total_number';
						calc.className = 'report_slide_total_number';
						switch (slide) {
							case 'users':
								raw.innerHTML = total_users;
								calc.innerHTML = total_users_eps;
								eps.innerHTML = 'Est. EPS';
								break;
							case 'servers':
								raw.innerHTML = total_servers;
								calc.innerHTML = total_users_eps;
								eps.innerHTML = 'Est. EPS';
								break;
							case 'devices':
								raw.innerHTML = total_devices;
								calc.innerHTML = total_users_eps;
								eps.innerHTML = 'Est. EPS';
								break;
							case 'network_devices':
								raw.innerHTML = total_network_devices;
								calc.innerHTML = total_users_eps;
								eps.innerHTML = 'Est. EPS';
								break;
							case 'network_data':
								raw.innerHTML = total_network_data;
								calc.innerHTML = '&nbsp;';
								eps.innerHTML = '';
						}
						line.appendChild(label);
						line.appendChild(raw);
						line.appendChild(calc);
						line.appendChild(eps);
						rep_list.appendChild(line);
						report_section.appendChild(rep_list);
					}
					var tot_list = document.createElement('ul');
					var tot_li = document.createElement('li');
					tot_li.style.borderTop = '1px solid black';
					tot_li.style.paddingTop = '15px';
					var label = document.createElement('span');
					label.innerHTML = 'Deployment Total:';
					label.className = 'report_total_label';
					var raw = document.createElement('span');
					raw.innerHTML = grand_total_devices;
					raw.className = 'report_total_number';
					var calc = document.createElement('span');
					calc.innerHTML = grand_total_devices_eps;
					calc.className = 'report_total_number';
					var eps = document.createElement('span');
					eps.innerHTML = 'Est. EPS';
					tot_li.appendChild(label);
					tot_li.appendChild(raw);
					tot_li.appendChild(calc);
					tot_li.appendChild(eps);
					tot_list.appendChild(tot_li);
					report_section.appendChild(tot_list);
				}
			update_report();
		//]]>-->
		</script>
	</body>
</html>
