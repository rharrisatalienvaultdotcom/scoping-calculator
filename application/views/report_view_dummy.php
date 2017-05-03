<html>
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Scoping calculator">
        <meta name="keywords" content="">
        <meta name="author" content="Ryan Harris">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../assets/css/report_print.css">
        <title>Scoping Calculator - USM</title>
        <style>
            @font-face {
                font-family:ProximaNova;
                src: url("../assets/fonts/ProximaNova-Sbold.otf");
            }
            /** {
                outline:black solid 1px;
            }*/
            body {
                padding:0px;
                margin:0px;
                height:100%;
                width:100%;
                position:absolute;
                font-size: calc(10px + (16 - 10) * ((100vw - 300px) / (1600 - 300)));
                font-family:ProximaNova;
            }
            li {
                list-style-type:none;
            }
            #report_wrapper {
                margin:0px;
                position:relative;
                width:100%;
                margin:0 auto;
                /*background-color:#d8dfe4;*/
            }
            /*#shadow_box {
                margin:0px;
                background-color:rgba(0,0,0,.7);
                transition: background-color 600ms;
                pointer-events:none;
                position:fixed;
                width:100%;
                height:100%;
            }*/

        </style>
    </head>
    <body>
        <div id="report_wrapper">
            <div id="report_wrapper_inner" class="flex_container">
                <ul class="report_slide">
                    <li>
                        <ul class="header">
                            <li class="label">Servers</li>
                            <li>Devices</li>
                            <li>EPS</li>
                        </ul>
                    </li>
                    <li>
                        <ul>
                            <li class="label">Domain Controller / LDAP - AD</li>
                            <li>73</li>
                            <li>146</li>
                        </ul>
                    </li>
                    <li>
                        <ul>
                            <li class="label">Email Server / Exchange Server</li>
                            <li>55</li>
                            <li>110</li>
                        </ul>
                    </li>
                    <li>
                        <ul>
                            <li class="label">File Server</li>
                            <li>87</li>
                            <li>174</li>
                        </ul>
                    </li>
                    <li>
                        <ul>
                            <li class="label">Application Server</li>
                            <li>72</li>
                            <li>144</li>
                        </ul>
                    </li>
                    <li>
                        <ul>
                            <li class="label">Database Server / MSSQL - MySQL - Oracle</li>
                            <li>77</li>
                            <li>154</li>
                        </ul>
                    </li>
                    <li>
                        <ul>
                            <li class="label">Web Server / IIS - Apache</li>
                            <li>65</li>
                            <li>130</li>
                        </ul>
                    </li>
                    <li>
                        <ul>
                            <li class="label">Endpoint Protection Server</li>
                            <li>76</li>
                            <li>76</li>
                        </ul>
                    </li>
                    <li>
                        <ul class="total">
                            <li class="label">Total:</li>
                            <li>505</li>
                            <li>934</li>
                        </ul>
                    </li>
                </ul>
                <ul class="report_slide">
                    <li>
                        <ul class="header">
                            <li class="label">Network Devices</li>
                            <li>Devices</li>
                            <li>EPS</li>
                        </ul>
                    </li>
                    <li>
                        <ul>
                            <li class="label">Network Firewalls</li>
                            <li>1</li>
                            <li>131</li>
                        </ul>
                    </li>
                    <li>
                        <ul class="total">
                            <li class="label">Total:</li>
                            <li>1</li>
                            <li>131</li>
                        </ul>
                    </li>
                </ul>
                <ul class="report_slide">
                    <li>
                        <ul class="header">
                            <li class="label">Networked Machines</li>
                            <li>Devices</li>
                            <li>&nbsp;</li>
                        </ul>
                    </li>
                    <li>
                        <ul>
                            <li class="label">Workstations / Laptop - Desktops</li>
                            <li>1</li>
                            <li>&nbsp;</li>
                        </ul>
                    </li>
                    <li>
                        <ul class="total">
                            <li class="label">Total:</li>
                            <li>1</li>
                            <li>&nbsp;</li>
                        </ul>
                    </li>
                </ul>
                <ul class="report_slide">
                    <li>
                        <ul class="grand_total">
                            <li class="label">Deployment Total:</li>
                            <li>507</li>
                            <li>1065</li>
                        </ul>
                    </li>
                </ul>
                <ul class="report_slide">
                    <li>
                        <ul class="header">
                            <li class="label">User Information</li>
                            <li>Users</li>
                            <li>&nbsp;</li>
                        </ul>
                    </li>
                    <li>
                        <ul>
                            <li class="label">Domain Users</li>
                            <li>1</li>
                            <li>&nbsp;</li>
                        </ul>
                    </li>
                    <li>
                        <ul class="total">
                            <li class="label">Total:</li>
                            <li>1</li>
                            <li>&nbsp;</li>
                        </ul>
                    </li>
                </ul>
                <ul class="report_slide">
                    <li>
                        <ul class="header">
                            <li class="label">Network Information</li>
                            <li>Devices</li>
                            <li>&nbsp;</li>
                        </ul>
                    </li>
                    <li>
                        <ul>
                            <li class="label">Total Locations with Direct Internet Access</li>
                            <li>1</li>
                            <li>&nbsp;</li>
                        </ul>
                    </li>
                </ul>
                <ul id="misc" class="report_slide">
                    <li>
                        <ul class="header">
                           <li class="label">Miscellaneous</li>       
                        </ul>
                    </li>
                    <li>
                        <ul>
                            <li class="label">Compression Ratio (n:1)</li>
                            <li>5:1</li>
                        </ul>
                    </li>
                    <li>
                        <ul>
                            <li class="label">Average Msg Size (in KB)</li>
                            <li>800 KB</li>
                        </ul>
                    </li>
                    <li>
                        <ul>
                            <li class="label">Standard Loggers</li>
                            <li>1</li>
                        </ul>
                    </li>
                    <li>
                        <ul>
                            <li class="label">Appliance Type</li>
                            <li>Virtual</li>
                        </ul>
                    </li>
                    <li>
                        <ul>
                            <li class="label">Usage Pattern</li>
                            <li>24X7</li>
                        </ul>
                    </li>
                </ul>
                <ul class="eps_table">
                    <li>
                        <ul class="header">
                            <li class="eps_col1 label">&nbsp;</li>
                            <li class="eps_col2">Est. Events</li>
                            <li class="eps_col3">Est. Storage</li>
                        </ul>
                    </li>
                    <li>
                        <ul class="subheader">
                            <li class="eps_col1 label">&nbsp;</li>
                            <li class="eps_col2">&nbsp;</li>
                            <li class="eps_col3">Raw</li>
                            <li class="eps_col4">Compressed</li>
                        </ul>
                    </li>
                    <li>
                        <ul>
                            <li class="eps_col1 label">Events/Second</li>
                            <li class="eps_col2">1065</li>
                            <li class="eps_col3">832.03 MB</li>
                            <li class="eps_col4">166.41 MB</li>
                        </ul>
                    </li>
                    <li>
                        <ul>
                            <li class="eps_col1 label">Events/Hour</li>
                            <li class="eps_col2">3834000</li>
                            <li class="eps_col3">2995312.5 MB</li>
                            <li class="eps_col4">599062.5 MB</li>
                        </ul>
                    </li>
                    <li>
                        <ul>
                            <li class="eps_col1 label">Events/Day</li>
                            <li class="eps_col2">92016000</li>
                            <li class="eps_col3">70202.64 GB</li>
                            <li class="eps_col4">14040.53 GB</li>
                        </ul>
                    </li>
                    <li>
                        <ul>
                            <li class="eps_col1 label">Events/Month</li>
                            <li class="eps_col2">2760480000</li>
                            <li class="eps_col3">2056.72 TB</li>
                            <li class="eps_col4">411.34 TB</li>
                        </ul>
                    </li>
                    <li>
                        <ul>
                            <li class="eps_col1 label">Events/Year</li>
                            <li class="eps_col2">33585840000</li>
                            <li class="eps_col3">25023.4 TB</li>
                            <li class="eps_col4">5004.68 TB</li>
                        </ul>
                    </li>
                </ul>
                <ul id="reco_box">
                    <li id="reco_header">RECOMMENDED SETUP</li>
                    <li id="reco_a"> - USM AIO UA LICENSE</li>
                    <li id="reco_b"> - CONTACT YOUR SE FOR SENSOR RECOMMENDATION</li>
                </ul>
            </div>
        </div>
        <script type='text/javascript' src="../assets/js/ajax_tools.js"></script>
        <button type="button" onclick="getPdf()">Get PDF</button>
    </body>
</html>