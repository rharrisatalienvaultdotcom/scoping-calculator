<html>
	<head>
		<link rel="stylesheet" type="text/css" href="assets/css/buttons.css">
		<link rel="stylesheet" type="text/css" href="assets/css/slider_field.css">
		<link rel="stylesheet" type="text/css" href="assets/css/slide_ui.css">
		<link rel="stylesheet" type="text/css" href="assets/css/dbl_dropdown.css">
		<link rel="stylesheet" type="text/css" href="assets/css/report.css">
		<style>
			@font-face {
				font-family:ProximaNova;
				src: url("assets/fonts/ProximaNova-Sbold.otf");
			}
			body {
				padding:0px;
				margin:0px;
				height:100%;
				width:100%;
				position:fixed;
				font-family:ProximaNova;
			}
			ul {
				/*border: 1px solid blue;*/
				margin:0px;
				padding:0px;
			}
			li {
				list-style-type:none;
			}
			span {
				-webkit-user-select: none;
				-moz-user-select: none;
				-ms-user-select: none;
				user-select: none;
			}
			#wrapper {
				margin:0px;
				position:fixed;
				width:100%;
				height:100%;
				background-color:#d8dfe4;
			}
			#shadow_box {
				margin:0px;
				background-color:rgba(0,0,0,.7);
				transition: background-color 600ms;
				pointer-events:none;
				position:fixed;
				width:100%;
				height:100%;
			}

		</style>
	</head>
	<body>
		<div id="wrapper">
			<div id="shadow_box">
				<div id="slides_wrapper" class="shown">
					<div class="button_wrapper" id="previous_button">
						<div class="button_circle disabled" onmousedown="(function(el) { button_down(el); previous_slide(el);})(this)" onmouseup="button_up(this)" onmouseout="button_up(this)">
							<div class="button_arrow button_arrow_left">
							</div>
						</div>
					</div>
					<?php foreach ($calc_data as $slide): ?>
						<div data-slide-id="<?php echo $slide['id']; ?>" data-slide-position="<?php echo $slide['position']; ?>" id="<?php echo $slide['handle']; ?>" class="slide unselected">
							<h3 class="slide_title"><?php echo $slide['title']; ?></h3>
								<div id="fields_wrapper">
									<ul id="fields_list">
									<?php if ($slide['handle'] !== 'misc'): ?>
										<?php foreach ($slide['fields'] as $field): ?>
											<li>
												<div class="range_outer_wrapper">
													<h3><?php echo $field['title']; ?></h3>
													<div class="range_wrapper">
														<input type="range" name="range-<?php echo $field['handle']; ?>" id="range-<?php echo $field['handle']; ?>" min=<?php echo $field['required']; ?> max=100 value=<?php echo $field['default_val']; ?>  oninput="updateRange(this)">
														<div class="range_line">&nbsp;</div>
													</div>
													<ul class="number_box_list">
														<li class="number_box">
															<input class="number_input" type="number" name="number-<?php echo $field['handle']; ?>" id="number-<?php echo $field['handle']; ?>" min=<?php echo $field['required']; ?> max=100 step=1 value=<?php echo $field['default_val']; ?> onchange="(function(el){ el.parentElement.parentElement.previousElementSibling.firstElementChild.value = el.valueAsNumber; updateRange(el.parentElement.parentElement.previousElementSibling.firstElementChild); })(this)" >
															<!--<input class="number_input" type="number" name="number-<?php echo $field['handle']; ?>" id="number-<?php echo $field['handle']; ?>" min=<?php echo $field['required']; ?> max=100 step=1 value=<?php echo $field['default_val']; ?> onchange="(function(el){ el.parentElement.parentElement.previousElementSibling.firstElementChild.value = el.valueAsNumber; updateRange(el.parentElement.parentElement.previousElementSibling.firstElementChild); })(this)" onfocus="( function(el){ select_this_slide(el); } )(this)" tabindex="<?php echo $field['tab_order']; ?>">-->
														</li>
														<li class="arrow_box_li">
															<ul class="arrow_box">
																<li class="number_up" onmouseup="(function(el) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval(int_cont); clearTimeout(tmt_cont); })(this)" onmousedown="(function(el){ number_up(el); button_repeater(el); })(this)" onmouseout="(function(el) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval(int_cont); clearTimeout(tmt_cont); })(this)">
																	<div class="number_up_inner"></div>
																</li>
																<li class="number_down" onmouseup="(function(el) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval(int_cont); clearTimeout(tmt_cont); })(this)" onmousedown="(function(el) { number_down(el); button_repeater(el); })(this)" onmouseout="(function(el) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval(int_cont); clearTimeout(tmt_cont);})(this)">
																	<div class="number_down_inner"></div>
																</li>
															</ul>
														</li>
													</ul>
													<div class="max_adj_display">100</div>
													<div class="max_adj">
														<ul class="range_list">
															<li class="list_item range1 rselected" onclick="selectThisRange(this)"></li>
															<li class="list_item range2 runselected" onclick="selectThisRange(this)"></li>
															<li class="list_item range3 runselected" onclick="selectThisRange(this)"></li>
														</ul>
													</div>
												</div>
											</li>
										<?php endforeach; ?>
									<?php elseif ($slide['handle'] === 'misc'): ?>
											<li>
												<div class="range_outer_wrapper">
													<h3>Compression Ratio (n:1)</h3>
													<div class="range_wrapper">
														<input type="range" name="range-compression_ratio" id="range-compression_ratio" min=2 max=10 value=5  oninput="updateRange(this)">
														<div class="range_line">&nbsp;</div>
													</div>
													<ul class="number_box_list">
														<li class="number_box">
															<input class="number_input" type="number" name="number-compression_ratio" id="number-compression_ratio" min=2 max=10 step=1 value=5>
														</li>
														<li class="arrow_box_li">
															<ul class="arrow_box">
																<li class="number_up" onmouseup="(function(el) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval(int_cont); clearTimeout(tmt_cont); })(this)" onmousedown="(function(el){ number_up(el); button_repeater(el); })(this)" onmouseout="(function(el) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval(int_cont); clearTimeout(tmt_cont); })(this)">
																	<div class="number_up_inner"></div>
																</li>
																<li class="number_down" onmouseup="(function(el) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval(int_cont); clearTimeout(tmt_cont); })(this)" onmousedown="(function(el) { number_down(el); button_repeater(el); })(this)" onmouseout="(function(el) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval(int_cont); clearTimeout(tmt_cont);})(this)">
																	<div class="number_down_inner"></div>
																</li>
															</ul>
														</li>
													</ul>
													<div class="max_adj_display">10</div>
												</div>
											</li>
											<li>
												<div class="range_outer_wrapper">
													<h3>Average Message Size (in KB)</h3>
													<div class="range_wrapper">
														<input type="range" name="range-avg_msg_size" id="range-avg_msg_size" min=8 max=1024 value=800  step=8 oninput="updateRange(this)">
														<div class="range_line">&nbsp;</div>
													</div>
													<ul class="number_box_list">
														<li class="number_box">
															<input class="number_input" type="number" name="number-avg_msg_size" id="number-avg_msg_size" min=8 max=1024 step=8 value=800>
														</li>
														<li class="arrow_box_li">
															<ul class="arrow_box">
																<li class="number_up" onmouseup="(function(el) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval(int_cont); clearTimeout(tmt_cont); })(this)" onmousedown="(function(el){ number_up(el); button_repeater(el); })(this)" onmouseout="(function(el) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval(int_cont); clearTimeout(tmt_cont); })(this)">
																	<div class="number_up_inner"></div>
																</li>
																<li class="number_down" onmouseup="(function(el) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval(int_cont); clearTimeout(tmt_cont); })(this)" onmousedown="(function(el) { number_down(el); button_repeater(el); })(this)" onmouseout="(function(el) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval(int_cont); clearTimeout(tmt_cont);})(this)">
																	<div class="number_down_inner"></div>
																</li>
															</ul>
														</li>
													</ul>
													<div class="max_adj_display">1024</div>
												</div>
											</li>
											<li>
												<div class="range_outer_wrapper">
													<h3>Standard Loggers</h3>
													<div class="range_wrapper">
														<input type="range" name="range-standard_loggers" id="range-standard_loggers" min=1 max=10 value=1  step=1 oninput="updateRange(this)">
														<div class="range_line">&nbsp;</div>
													</div>
													<ul class="number_box_list">
														<li class="number_box">
															<input class="number_input" type="number" name="number-standard_loggers" id="number-standard_loggers" min=1 max=10 step=1 value=1>
														</li>
														<li class="arrow_box_li">
															<ul class="arrow_box">
																<li class="number_up" onmouseup="(function(el) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval(int_cont); clearTimeout(tmt_cont); })(this)" onmousedown="(function(el){ number_up(el); button_repeater(el); })(this)" onmouseout="(function(el) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval(int_cont); clearTimeout(tmt_cont); })(this)">
																	<div class="number_up_inner"></div>
																</li>
																<li class="number_down" onmouseup="(function(el) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval(int_cont); clearTimeout(tmt_cont); })(this)" onmousedown="(function(el) { number_down(el); button_repeater(el); })(this)" onmouseout="(function(el) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval(int_cont); clearTimeout(tmt_cont);})(this)">
																	<div class="number_down_inner"></div>
																</li>
															</ul>
														</li>
													</ul>
													<div class="max_adj_display">10</div>
												</div>
											</li>
											<li>
												<div class="range_outer_wrapper">
													<h3>Other EPS</h3>
													<div class="range_wrapper">
														<input type="range" name="range-other_eps" id="range-other_eps" min=0 max=100 value=0  oninput="updateRange(this)">
														<div class="range_line">&nbsp;</div>
													</div>
													<ul class="number_box_list">
														<li class="number_box">
															<input class="number_input" type="number" name="number-other_eps" id="number-other_eps" min=0 max=100 step=1 value=0>
														</li>
														<li class="arrow_box_li">
															<ul class="arrow_box">
																<li class="number_up" onmouseup="(function(el) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval(int_cont); clearTimeout(tmt_cont); })(this)" onmousedown="(function(el){ number_up(el); button_repeater(el); })(this)" onmouseout="(function(el) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval(int_cont); clearTimeout(tmt_cont); })(this)">
																	<div class="number_up_inner"></div>
																</li>
																<li class="number_down" onmouseup="(function(el) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval(int_cont); clearTimeout(tmt_cont); })(this)" onmousedown="(function(el) { number_down(el); button_repeater(el); })(this)" onmouseout="(function(el) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval(int_cont); clearTimeout(tmt_cont);})(this)">
																	<div class="number_down_inner"></div>
																</li>
															</ul>
														</li>
													</ul>
													<div class="max_adj_display">100</div>
													<div class="max_adj">
														<ul class="range_list">
															<li class="list_item range1 rselected" onclick="selectThisRange(this)"></li>
															<li class="list_item range2 runselected" onclick="selectThisRange(this)"></li>
															<li class="list_item range3 runselected" onclick="selectThisRange(this)"></li>
														</ul>
													</div>
												</div>
											</li>
											<li>
												<div class="double_dropdown_wrapper">
													<ul class="double_dropdown_list">
														<li class="double_dropdown_li dd_left">
															<h3>Appliance Type</h3>
															<select id="virtual_or_physical" onchange="">
																<option value=1 selected>Virtual</option>
																<option value=2>Physical(Hardware)</option>
															</select>
														</li>
														<li class="double_dropdown_li dd_right">
															<h3>Usage Pattern</h3>
															<select id="usage_pattern">
																<option value=1 selected>24x7 (Always Up)</option>
																<option value=2>5x8 (Business Hours Only)</option>
															</select>
														</li>
													</ul>
												</div>
											</li>
									<?php endif; ?>
									</ul>
								</div>
						</div>
					<?php endforeach;?>
					<div class="button_wrapper" id="next_button">
						<div class="button_circle active" onmousedown="(function(el) { button_down(el); next_slide(el);})(this)" onmouseup="button_up(this)" onmouseout="button_up(this)">
							<div class="button_arrow button_arrow_right">
							</div>
						</div>
					</div>
					<div id="show_hide_wrapper">
						<div class="button_wrapper" id="show_hide">
							<div class="button_circle hide" onmousedown="(function(el) { button_down(el); show_hide(el);})(this)" onmouseup="button_up(this)" onmouseout="button_up(this)">
								<div class="button_arrow button_arrow_up">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="report_wrapper">
				<div id="report_wrapper_inner">
				</div>
			</div>
		</div>
		<script type='text/javascript' src="assets/js/update_numbers.js"></script>
		<script type='text/javascript' src="assets/js/range_field.js"></script>
		<script type='text/javascript' src="assets/js/slide_ui.js"></script>
		<script type='text/javascript' src="assets/js/update_report.js"></script>
		<script type='text/javascript' src="assets/js/recommendation.js"></script>
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
				field_values.<?php echo $slide['handle']; ?>.title = '<?php echo $slide['title']; ?>';
				field_values.<?php echo $slide['handle']; ?>.position = '<?php echo $slide['position']; ?>';
				<?php foreach ($slide['fields'] as $field): ?>
					field_values.<?php echo $slide['handle']; ?>.<?php echo $field['handle']; ?> = {};
					field_values.<?php echo $slide['handle']; ?>.<?php echo $field['handle']; ?>.handle = '<?php echo $field['handle']; ?>';
					field_values.<?php echo $slide['handle']; ?>.<?php echo $field['handle']; ?>.title = '<?php echo $field['title']; ?>';
					field_values.<?php echo $slide['handle']; ?>.<?php echo $field['handle']; ?>.position = '<?php echo $field['position']; ?>';
					field_values.<?php echo $slide['handle']; ?>.<?php echo $field['handle']; ?>.raw = <?php echo $field['default_val']; ?>;
					if ( '<?php echo $field['function']; ?>' !== 'NA') {
						field_values.<?php echo $slide['handle']; ?>.<?php echo $field['handle']; ?>.function = function() { 
							field_values.<?php echo $slide['handle']; ?>.<?php echo $field['handle']; ?>.weight = Number(<?php echo $field['weight']; ?>);
							weight = field_values.<?php echo $slide['handle']; ?>.<?php echo $field['handle']; ?>.weight;
							return Math.round(field_values.<?php echo $slide['handle']; ?>.<?php echo $field['handle']; ?>.raw * (<?php echo $field['function']; ?>));
						}
						field_values.<?php echo $slide['handle']; ?>.<?php echo $field['handle']; ?>.calc = Number(field_values.<?php echo $slide['handle']; ?>.<?php echo $field['handle']; ?>.function());
					} else {
						field_values.<?php echo $slide['handle']; ?>.<?php echo $field['handle']; ?>.calc = Number(field_values.<?php echo $slide['handle']; ?>.<?php echo $field['handle']; ?>.raw);
					}
				<?php endforeach;?>
			<?php endforeach;?>
			console.log(field_values);
			updateRange(document.getElementById('range-compression_ratio'));
			updateRange(document.getElementById('range-avg_msg_size'));
			update_numbers();
		//]]>-->
		</script>
	</body>
</html>
