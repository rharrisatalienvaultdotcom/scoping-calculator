<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="/scoping-calc/assets/css/buttons.css">
        <link rel="stylesheet" type="text/css" href="/scoping-calc/assets/css/slider_field.css">
        <link rel="stylesheet" type="text/css" href="/scoping-calc/assets/css/slide_ui.css">
        <link rel="stylesheet" type="text/css" href="/scoping-calc/assets/css/dbl_dropdown.css">
        <link rel="stylesheet" type="text/css" href="/scoping-calc/assets/css/report_print.css">
        <link rel="stylesheet" type="text/css" href="/scoping-calc/assets/css/dev_helper.css">
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
            * {
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select:none;
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
            #report_wrapper {
                width: 100% !important;
                margin:0;
            }
            .report_slide {
            }


        </style>
        <title>Scoping Calculator Report</title>
    </head>
    <body>
        <div id="wrapper">
            <div id="report_wrapper">
                <div id="report_wrapper_inner" class="flex_container">
<?php foreach ( $field_values->slides as $slide ): ?>
    <?php if ( $slide->add_to_total == 1 && $slide->total > 0 ): ?>
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
                                    <?php echo $slide->total; ?>
            <?php else: ?>
                                    <?php echo '&nbsp;'; ?>
            <?php endif; ?>
                                </li>
                                <li>
            <?php if ( $slide->sum_calc == 1 ): ?>
                                    <?php echo $slide->total_eps; ?>
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
                                <li><?php echo $field_values->grand_totals->devices; ?></li>
                                <li><?php echo $field_values->grand_totals->eps; ?></li>
                            </ul>
                        </li>
                    </ul>
<?php foreach ( $field_values->slides as $slide ): ?>
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
            <?php if ( $field->raw > 0 || is_string ( $field->raw ) ): ?>
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
                                    <?php echo $slide->total; ?>
            <?php else: ?>
                                    <?php echo '&nbsp;'; ?>
            <?php endif; ?>
                                </li>
                                <li>
            <?php if ( $slide->sum_calc == 1 ): ?>
                                    <?php echo $slide->total_eps; ?>
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
                                <li class="label">Events/Sec</li>
                                <li><?php echo $field_values->eps_vals->per_second->events; ?></li>
                                <li><?php echo $field_values->eps_vals->per_second->uncompressed; ?></li>
                                <li><?php echo $field_values->eps_vals->per_second->compressed; ?></li>
                            </ul>
                        </li>
                        <li>
                            <ul>
                                <li class="label">Events/Hour</li>
                                <li><?php echo $field_values->eps_vals->per_hour->events; ?></li>
                                <li><?php echo $field_values->eps_vals->per_hour->uncompressed; ?></li>
                                <li><?php echo $field_values->eps_vals->per_hour->compressed; ?></li>
                            </ul>
                        </li>
                        <li>
                            <ul>
                                <li class="label">Events/Day</li>
                                <li><?php echo $field_values->eps_vals->per_day->events; ?></li>
                                <li><?php echo $field_values->eps_vals->per_day->uncompressed; ?></li>
                                <li><?php echo $field_values->eps_vals->per_day->compressed; ?></li>
                            </ul>
                        </li>
                        <li>
                            <ul>
                                <li class="label">Events/Mon</li>
                                <li><?php echo $field_values->eps_vals->per_month->events; ?></li>
                                <li><?php echo $field_values->eps_vals->per_month->uncompressed; ?></li>
                                <li><?php echo $field_values->eps_vals->per_month->compressed; ?></li>
                            </ul>
                        </li>
                        <li>
                            <ul>
                                <li class="label">Events/Year</li>
                                <li><?php echo $field_values->eps_vals->per_year->events; ?></li>
                                <li><?php echo $field_values->eps_vals->per_year->uncompressed; ?></li>
                                <li><?php echo $field_values->eps_vals->per_year->compressed; ?></li>
                            </ul>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <pre>
                                <?php /*print_r($field_values);*/ ?>
                            </pre>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>
