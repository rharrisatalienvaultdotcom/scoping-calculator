<html>
	<head>
		<link rel="stylesheet" type="text/css" href="assets/css/buttons.css">
		<link rel="stylesheet" type="text/css" href="assets/css/slider_field.css">
		<link rel="stylesheet" type="text/css" href="assets/css/slide_ui.css">
		<link rel="stylesheet" type="text/css" href="assets/css/dbl_dropdown.css">
		<link rel="stylesheet" type="text/css" href="assets/css/report_print.css">
		<link rel="stylesheet" type="text/css" href="assets/css/dev_helper.css">
		<style>
			/*@font-face {
				font-family:ProximaNova;
				src: url("assets/fonts/ProximaNova-Sbold.otf");
			}*/
			body {
				padding:0px;
				margin:0px;
				height:100%;
				width:100%;
				position:fixed;
                font-size: calc(10px + (16 - 10) * ((100vw - 300px) / (1600 - 300)));
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
span {
	display:inline-block;
}
.flex_container {
	display:flex;
	align-items:stretch;
	justify-content:space-between;
}
#report_wrapper {
	position:absolute;
	width:56vw;
	margin: 0 22vw;
	z-index:-1;
	box-shadow: 0px 0px 15px;
	overflow-y: auto;
	height:100%;
	top:0px;
	background-color:#f4f7fa;
	padding-top:100px;
}
#report_wrapper_inner {
	flex-direction:column;
	position:relative;
	width:100%;
	margin:0 auto;
	/*-webkit-filter: blur(15px);
	filter: blur(10px);*/
	transition: filter 600ms;
}
.report_slide {
	padding-right:40px;
	padding-left:40px;
}
.report_slide li ul {
	display:flex;
	align-items:stretch;
	justify-content:space-between;
}
.report_slide li ul li {
	float:left;
	flex-basis:20%;
	text-align:right;
	padding-right:50px;
}
.label {
	flex-grow:3;
	text-align:left !important;
}
.header {
	border-bottom: 1px solid black;
}
.header li {
	font-size:1.2em;
	/*text-align:center !important;
	padding:0 !important*/
}
.header li.label {
	font-size:1.5em !important;
	text-align:left !important;
}
.total li {
	border-top:1px solid black;
}
.total li.label {
	font-size:1.3em;
	text-align:right !important;
	border-top:0px !important;
}
.grand_total {
	margin-bottom: 30px;
	border-top: 1px solid black;
	padding-top: 15px;
	border-bottom: 1px solid black;
	padding-bottom: 15px;
	break-after: always;
	font-size:1.2em;
}
.eps_table {
	break-before:always;
	box-sizing:border-box;
	padding:15px;
	width:80%;
	margin: 0 auto;
	border:15px solid grey;
	background-color:rgba(50, 50, 50, .05);
}
.eps_table li {
	box-sizing:border-box;
}
.eps_table li:nth-child(odd) {
	background-color:rgba(50, 50, 50, .1);
}
.eps_table li ul {
	display:flex;
	align-items:stretch;
	justify-content:space-between;
	padding:0px;
}
.eps_table li ul li {
	float:left;
	text-align:right;
	flex-basis:25%;
	padding:5px 15px 5px 5px;
}
.eps_table li ul li:nth-child(odd) {
	background-color:rgba(50, 50, 50, .1);
}
.eps_table li ul.header {
	border-bottom:0;
	text-align:center;
}
.eps_table li ul.header li:nth-last-child(1) {
	flex-basis:50%;
	text-align:center;
	border-bottom:1px solid black;
	margin-right: 0px !important;
}
.eps_table li ul.header li {

}
.eps_table li ul li.label {
	font-size:1em;
	padding-left:15px;
}
.subheader {
	border-bottom:1px solid black;
}
.subheader li {
	font-size:1.2em;
}
#misc li ul li {
	flex-basis:25%;
}
#reco_box {
	position:relative;
	display:block;
	border-top:1px solid black;
	width:50%;
	margin: 50px auto;
	min-height:100px;
}
		</style>
	</head>
	<body>
		<div id="wrapper">
			<div id="report_wrapper">
				<div id="report_wrapper_inner" class="flex_container">
<?php foreach ( $field_values as $slide ): ?>
	<?php $total_handle = 'total_' . $slide->handle; ?>
	<?php if ( $slide->add_to_total == 1 && $calc_totals->$total_handle > 0 ): ?>
					<ul class="report_slide">
						<li>
							<ul class="header">
								<li class="label"><?php echo $slide->title; ?></li>
								<li>Devices</li>
								<li>EPS</li>
							</ul>
						</li>
		<?php foreach ( $slide->fields as $field ): ?>
			<?php if ( $field->raw > 0 ): ?>
						<li>
							<ul>
								<li class="label"><?php echo $field->title; ?></li>
								<li><?php echo $field->raw; ?></li>
				<?php if ( $slide->add_to_eps_total == 1 ): ?>
								<li><?php echo $field->calc; ?></li>
				<?php else: ?>
								<li>&nbsp;</li>
				<?php endif; ?>
							</ul>
						</li>
			<?php endif; ?>
		<?php endforeach; ?>
		<?php if ( $slide->sum_raw == 1 || $slide->sum_calc == 1 ): ?>
						<li>
							<ul class="total">
								<li class="label">Total:</li>
								<li>
			<?php if ( $slide->sum_raw == 1 ): ?>
									<?php echo $calc_totals->$total_handle; ?>
			<?php else: ?>
									<?php echo '&nbsp;'; ?>
			<?php endif; ?>
								</li>
								<li>
			<?php if ( $slide->sum_calc == 1 ): ?>
			<?php $total_handle_eps = $total_handle . '_eps'; ?>
									<?php echo $calc_totals->$total_handle_eps; ?>
			<?php else: ?>
									<?php echo '&nbsp;'; ?>
			<?php endif; ?>
								</li>
							</ul>
						</li>
		<?php endif; ?>
					</ul>
	<?php endif; ?>
<?php endforeach; ?>
					<ul class="report_slide">
						<li>
							<ul class="grand_total">
								<li class="label">Deployment Total:</li>
								<li><?php echo $calc_totals->grand_total_devices; ?></li>
								<li><?php echo $calc_totals->grand_total_devices_eps; ?></li>
							</ul>
						</li>
					</ul>
<?php foreach ( $field_values as $slide ): ?>
	<?php $total_handle = 'total_' . $slide->handle; ?>
	<?php if ( $slide->add_to_total == 0 ): ?>
					<ul class="report_slide">
						<li>
							<ul class="header">
								<li class="label"><?php echo $slide->title; ?></li>
								<li>&nbsp;</li>
								<li>&nbsp;</li>
							</ul>
						</li>
		<?php foreach ( $slide->fields as $field ): ?>
			<?php if ( $field->raw > 0 ): ?>
						<li>
							<ul>
								<li class="label"><?php echo $field->title; ?></li>
								<li><?php echo $field->raw; ?></li>
				<?php if ( $slide->add_to_eps_total == 1 ): ?>
								<li><?php echo $field->calc; ?></li>
				<?php else: ?>
								<li>&nbsp;</li>
				<?php endif; ?>
							</ul>
						</li>
			<?php endif; ?>
		<?php endforeach; ?>
		<?php if ( $slide->sum_raw == 1 || $slide->sum_calc == 1 ): ?>
						<li>
							<ul class="total">
								<li class="label">Total:</li>
								<li>
			<?php if ( $slide->sum_raw == 1 ): ?>
									<?php echo $calc_totals->$total_handle; ?>
			<?php else: ?>
									<?php echo '&nbsp;'; ?>
			<?php endif; ?>
								</li>
								<li>
			<?php if ( $slide->sum_calc == 1 ): ?>
			<?php $total_handle_eps = $total_handle . '_eps'; ?>
									<?php echo $calc_totals->$total_handle_eps; ?>
			<?php else: ?>
									<?php echo '&nbsp;'; ?>
			<?php endif; ?>
								</li>
							</ul>
						</li>
		<?php endif; ?>
					</ul>
	<?php endif; ?>
<?php endforeach; ?>
					<ul class="eps_table">
						<li>
							<ul class="header">
								<li class="label">&nbsp;</li>
								<li>Est. Events</li>
								<li>Est. Storage</li>
							</ul>
						</li>
						<li>
							<ul class="subheader">
								<li class="label">&nbsp;</li>
								<li>&nbsp;</li>
								<li>Raw</li>
								<li>Compressed</li>
							</ul>
						</li>
						<li>
							<ul>
								<li class="label">Events/Second</li>
								<li>&nbsp;</li>
								<li>&nbsp;</li>
								<li>&nbsp;</li>
							</ul>
						</li>
						<li>
							<ul>
								<li class="label">Events/Hour</li>
								<li>&nbsp;</li>
								<li>&nbsp;</li>
								<li>&nbsp;</li>
							</ul>
						</li>
						<li>
							<ul>
								<li class="label">Events/Day</li>
								<li>&nbsp;</li>
								<li>&nbsp;</li>
								<li>&nbsp;</li>
							</ul>
						</li>
						<li>
							<ul>
								<li class="label">Events/Month</li>
								<li>&nbsp;</li>
								<li>&nbsp;</li>
								<li>&nbsp;</li>
							</ul>
						</li>
						<li>
							<ul>
								<li class="label">Events/Year</li>
								<li>&nbsp;</li>
								<li>&nbsp;</li>
								<li>&nbsp;</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<script type="text/javascript">
			<!--//<[CDATA[
			field_values={"servers":{"handle":"servers","title":"Servers","position":0,"sum_raw":1,"sum_calc":1,"add_to_total":1,"add_to_eps_total":1,"fields":{"domain_controller":{"handle":"domain_controller","title":"Domain Controller / LDAP - AD","global":0,"position":0,"raw":1,"weight":6,"calc":2},"mx_servers":{"handle":"mx_servers","title":"Email Server / Exchange Server","global":0,"position":1,"raw":0,"weight":8,"calc":0},"file_servers":{"handle":"file_servers","title":"File Server","global":0,"position":2,"raw":0,"weight":8,"calc":0},"application_servers":{"handle":"application_servers","title":"Application Server","global":0,"position":3,"raw":0,"weight":8,"calc":0},"db_servers":{"handle":"db_servers","title":"Database Server / MSSQL - MySQL - Oracle","global":0,"position":4,"raw":0,"weight":6,"calc":0},"web_servers":{"handle":"web_servers","title":"Web Server / IIS - Apache","global":0,"position":5,"raw":0,"weight":8,"calc":0},"endpoint_protection":{"handle":"endpoint_protection","title":"Endpoint Protection Server","global":0,"position":6,"raw":0,"weight":25,"calc":0},"mail_archiver":{"handle":"mail_archiver","title":"Mail Archiver","global":0,"position":7,"raw":0,"weight":8,"calc":0}}},"network_devices":{"handle":"network_devices","title":"Network Devices","position":1,"sum_raw":1,"sum_calc":1,"add_to_total":1,"add_to_eps_total":1,"fields":{"firewalls":{"handle":"firewalls","title":"Network Firewalls","global":0,"position":0,"raw":1,"weight":8,"calc":4},"nips_nids":{"handle":"nips_nids","title":"Network IPS / IDS","global":0,"position":1,"raw":0,"weight":4,"calc":0},"vpns":{"handle":"vpns","title":"Network VPN","global":0,"position":2,"raw":0,"weight":4,"calc":0},"antispam":{"handle":"antispam","title":"Network AntiSpam / Proxy","global":0,"position":3,"raw":0,"weight":8,"calc":0},"access_control":{"handle":"access_control","title":"Network Access Control","global":0,"position":4,"raw":0,"weight":8,"calc":0},"switches":{"handle":"switches","title":"Network Switches","global":0,"position":5,"raw":0,"weight":25,"calc":0},"routers":{"handle":"routers","title":"Network Routers","global":0,"position":6,"raw":0,"weight":25,"calc":0},"load_balancers":{"handle":"load_balancers","title":"Network Load Balancers","global":0,"position":7,"raw":0,"weight":25,"calc":0},"web_filters":{"handle":"web_filters","title":"Network Web Filters","global":0,"position":8,"raw":0,"weight":8,"calc":0},"nas":{"handle":"nas","title":"NAS - Storage","global":0,"position":9,"raw":0,"weight":25,"calc":0}}},"devices":{"handle":"devices","title":"Networked Machines","position":2,"sum_raw":1,"sum_calc":0,"add_to_total":1,"add_to_eps_total":0,"fields":{"workstations":{"handle":"workstations","title":"Workstations / Laptop - Desktops","global":0,"position":0,"raw":1,"calc":1},"other_networked_machines":{"handle":"other_networked_machines","title":"Other Network Devices","global":0,"position":1,"raw":0,"calc":0}}},"users":{"handle":"users","title":"User Information","position":3,"sum_raw":1,"sum_calc":0,"add_to_total":0,"add_to_eps_total":0,"fields":{"domain_users":{"handle":"domain_users","title":"Domain Users","global":0,"position":0,"raw":1,"calc":1},"external_users":{"handle":"external_users","title":"External Users / VPN","global":1,"position":1,"raw":0,"calc":0},"non_dom_users":{"handle":"non_dom_users","title":"Non-Domain Users / Guests","global":1,"position":2,"raw":0,"calc":0}}},"network_data":{"handle":"network_data","title":"Network Information","position":4,"sum_raw":0,"sum_calc":0,"add_to_total":0,"add_to_eps_total":0,"fields":{"locations":{"handle":"locations","title":"Total Locations with Direct Internet Access","global":0,"position":0,"raw":1,"calc":1},"bandwidth":{"handle":"bandwidth","title":"Bandwidth in MBPS","global":0,"position":1,"raw":0,"calc":0},"small_branches":{"handle":"small_branches","title":"Subset of above that are small branch offices","global":0,"position":2,"raw":0,"calc":0}}},"misc":{"handle":"misc","title":"Miscellaneous","position":5,"sum_raw":0,"sum_calc":0,"add_to_total":0,"add_to_eps_total":0,"fields":{"compression_ratio":{"handle":"compression_ratio","title":"Compression Ratio (n:1)","global":0,"position":0,"raw":5,"calc":5},"avg_msg_size":{"handle":"avg_msg_size","title":"Average Message Size (in KB)","global":0,"position":1,"raw":800,"calc":800},"standard_loggers":{"handle":"standard_loggers","title":"Standard Loggers","global":0,"position":2,"raw":1,"calc":1},"other_eps":{"handle":"other_eps","title":"Other EPS","global":0,"position":3,"raw":0,"calc":0},"virtual_or_physical":{"handle":"virtual_or_physical","title":"Virtual or Physical Appliance(s)","global":0,"position":4,"raw":1,"calc":1},"usage_pattern":{"handle":"usage_pattern","title":"Usage Pattern","global":0,"position":5,"raw":1,"calc":1}}}};
				calc_totals={"total_servers":1,"total_servers_eps":2,"total_network_devices":1,"total_network_devices_eps":4,"total_devices":1,"total_users":1,"grand_total_devices":3,"grand_total_devices_eps":6};
			//]]>-->
		</script>
	</body>
</html>
