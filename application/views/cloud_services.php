          <div data-slide-position="0" id="cloud_services_aws" class="slide unselected">
            <h3 class="slide_title">Cloud Services: AWS</h3>
            <div id="fields_wrapper">
              <ul id="fields_list">
                <li>
                  <div class="range_outer_wrapper" style="border-bottom:1px solid grey;">
                    <h3 style="padding-top:35px">CloudTrail event total (monthly)</h3>
                    <ul class="number_box_list" style="width:210px;">
                      <li class="number_box" style="width:180px;">
                        <input class="number_input" type="number" name="number-cloud_services_aws-cloudtrail" id="number-cloud_services_aws-cloudtrail" onchange="( function( el ) { update_numbers(); } )( this )" min=0 step=1 value=0>
                      </li>
                      <li class="arrow_box_li">
                        <ul class="arrow_box">
                          <li class="number_up" onmouseup="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )" onmousedown="( function( el ) { number_up( el, false ); button_repeater( el, false ); } )( this )" onmouseout="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )">
                            <div class="number_up_inner"></div>
                          </li>
                          <li class="number_down" onmouseup="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )" onmousedown="( function( el ) { number_down( el, false ); button_repeater( el, false ); } )( this )" onmouseout="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )">
                            <div class="number_down_inner"></div>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </li>
                  <li>
                      <div class="range_outer_wrapper" style="border-bottom:1px solid grey">
                        <h3 style="padding-top:35px">CloudWatch event total (monthly)</h3>
                        <ul class="number_box_list" style="width:210px;">
                          <li class="number_box" style="width:180px;">
                            <input class="number_input" type="number" name="number-cloud_services_aws-cloudwatch" id="number-cloud_services_aws-cloudwatch" onchange="( function( el ) { update_numbers(); } )( this )" min=0 step=1 value=0>
                          </li>
                          <li class="arrow_box_li">
                            <ul class="arrow_box">
                              <li class="number_up" onmouseup="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )" onmousedown="( function( el ) { number_up( el, false ); button_repeater( el, false ); } )( this )" onmouseout="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )">
                                <div class="number_up_inner"></div>
                              </li>
                              <li class="number_down" onmouseup="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )" onmousedown="( function( el ) { number_down( el, false ); button_repeater( el, false ); } )( this )" onmouseout="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )">
                                <div class="number_down_inner"></div>
                              </li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li>
                      <div class="range_outer_wrapper" style="border-bottom:1px solid grey">
                        <h3 style="padding-top:35px">Data Transfered (in GB) (monthly)</h3>

                        <ul class="number_box_list" style="width:210px;">
                          <li class="number_box" style="width:180px;">
                            <input class="number_input" type="number" name="number-cloud_services_aws-data_transfered" id="number-cloud_services_aws-data_transfered" onchange="( function( el ) { update_numbers(); } )( this )" min=0 step=1 value=0>
                          </li>
                          <li class="arrow_box_li">
                            <ul class="arrow_box">
                              <li class="number_up" onmouseup="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )" onmousedown="( function( el ){ number_up( el, false ); button_repeater( el, false ); } )( this )" onmouseout="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )">
                                <div class="number_up_inner"></div>
                              </li>
                              <li class="number_down" onmouseup="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )" onmousedown="( function( el ) { number_down( el, false ); button_repeater( el, false ); } )( this )" onmouseout="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )">
                                <div class="number_down_inner"></div>
                              </li>
                            </ul>
                          </li>
                        </ul>

                      </div>
                    </li>
                    <li>
                      <div class="range_outer_wrapper" style="border-bottom:1px solid grey">
                        <h3 style="padding-top:35px">Elastic Cloud Compute Request Total (monthly)</h3>

                        <ul class="number_box_list" style="width:210px;">
                          <li class="number_box" style="width:180px;">
                            <input class="number_input" type="number" name="number-cloud_services_aws-elastic_cloud" id="number-cloud_services_aws-elastic_cloud" onchange="( function( el ) { update_numbers(); } )( this )" min=0 step=1 value=0>
                          </li>
                          <li class="arrow_box_li">
                            <ul class="arrow_box">
                              <li class="number_up" onmouseup="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )" onmousedown="( function( el ){ number_up( el, false ); button_repeater( el, false ); } )( this )" onmouseout="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )">
                                <div class="number_up_inner"></div>
                              </li>
                              <li class="number_down" onmouseup="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )" onmousedown="( function( el ) { number_down( el, false ); button_repeater( el, false ); } )( this )" onmouseout="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )">
                                <div class="number_down_inner"></div>
                              </li>
                            </ul>
                          </li>
                        </ul>

                      </div>
                    </li>
                    <li>
                      <div class="range_outer_wrapper" style="border-bottom:1px solid grey">
                        <h3 style="padding-top:35px">Simple Storage Service Request Total (monthly)</h3>

                        <ul class="number_box_list" style="width:210px;">
                          <li class="number_box" style="width:180px;">
                            <input class="number_input" type="number" name="number-cloud_services_aws-simple_storage" id="number-cloud_services_aws-simple_storage" onchange="( function( el ) { update_numbers(); } )( this )" min=0 step=1 value=0>
                          </li>
                          <li class="arrow_box_li">
                            <ul class="arrow_box">
                              <li class="number_up" onmouseup="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )" onmousedown="( function( el ){ number_up( el, false ); button_repeater( el, false ); } )( this )" onmouseout="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )">
                                <div class="number_up_inner"></div>
                              </li>
                              <li class="number_down" onmouseup="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )" onmousedown="( function( el ) { number_down( el, false ); button_repeater( el, false ); } )( this )" onmouseout="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey' ; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )">
                                <div class="number_down_inner"></div>
                              </li>
                            </ul>
                          </li>
                        </ul>

                      </div>
                    </li>
                    <li>
                      <div class="range_outer_wrapper">
                        <h3 style="padding-top:35px">Elastic Load Balancer Request Total (monthly)</h3>

                        <ul class="number_box_list" style="width:210px;">
                          <li class="number_box" style="width:180px;">
                            <input class="number_input" type="number" name="number-cloud_services_aws-elastic_load" id="number-cloud_services_aws-elastic_load" onchange="( function( el ) { update_numbers(); } )( this )" min=0 step=1 value=0>
                          </li>
                          <li class="arrow_box_li">
                            <ul class="arrow_box">
                              <li class="number_up" onmouseup="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )" onmousedown="( function( el ){ number_up( el, false ); button_repeater( el, false ); } )( this )" onmouseout="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )">
                                <div class="number_up_inner"></div>
                              </li>
                              <li class="number_down" onmouseup="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )" onmousedown="( function( el ) { number_down( el, false ); button_repeater( el, false ); } )( this )" onmouseout="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )">
                                <div class="number_down_inner"></div>
                              </li>
                            </ul>
                          </li>
                        </ul>

                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            <div data-slide-position="1" id="cloud_services_azure" class="slide unselected">
            <h3 class="slide_title">Cloud Services: Azure</h3>
              <div id="fields_wrapper">
                <ul id="fields_list">
                  <li>
                      <div class="range_outer_wrapper" style="border-bottom:1px solid grey">
                        <h3 style="padding-top:35px">Total Subscription IDs</h3>

                        <ul class="number_box_list" style="width:210px;">
                          <li class="number_box" style="width:180px;">
                            <input class="number_input" type="number" name="number-cloud_services_azure-subscription_ids" id="number-cloud_services_azure-subscription_ids" onchange="( function( el ) { update_numbers(); } )( this )" min=0 step=1 value=0>
                          </li>
                          <li class="arrow_box_li">
                            <ul class="arrow_box">
                              <li class="number_up" onmouseup="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )" onmousedown="( function( el ) { number_up( el, false ); button_repeater( el, false ); } )( this )" onmouseout="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )">
                                <div class="number_up_inner"></div>
                              </li>
                              <li class="number_down" onmouseup="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )" onmousedown="( function( el ) { number_down( el, false ); button_repeater( el, false ); } )( this )" onmouseout="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )">
                                <div class="number_down_inner"></div>
                              </li>
                            </ul>
                          </li>
                        </ul>

                      </div>
                    </li>
                  <li>
                      <div class="range_outer_wrapper" style="border-bottom:1px solid grey">
                        <h3 style="padding-top:35px">Azure Log Analytics Request Total (monthly)</h3>

                        <ul class="number_box_list" style="width:210px;">
                          <li class="number_box" style="width:180px;">
                            <input class="number_input" type="number" name="number-cloud_services_azure-analytics" id="number-cloud_services_azure-analytics" onchange="( function( el ) { update_numbers(); } )( this )" min=0 step=1 value=0>
                          </li>
                          <li class="arrow_box_li">
                            <ul class="arrow_box">
                              <li class="number_up" onmouseup="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )" onmousedown="( function( el ) { number_up( el, false ); button_repeater( el, false ); } )( this )" onmouseout="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )">
                                <div class="number_up_inner"></div>
                              </li>
                              <li class="number_down" onmouseup="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )" onmousedown="( function( el ) { number_down( el, false ); button_repeater( el, false ); } )( this )" onmouseout="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )">
                                <div class="number_down_inner"></div>
                              </li>
                            </ul>
                          </li>
                        </ul>

                      </div>
                    </li>
                    <li>
                      <div class="range_outer_wrapper" style="border-bottom:1px solid grey">
                        <h3 style="padding-top:35px">Azure Application Insights Request Total (monthly)</h3>

                        <ul class="number_box_list" style="width:210px;">
                          <li class="number_box" style="width:180px;">
                            <input class="number_input" type="number" name="number-cloud_services_azure-app_insights" id="number-cloud_services_azure-app_insights" onchange="( function( el ) { update_numbers(); } )( this )" min=0 step=1 value=0>
                          </li>
                          <li class="arrow_box_li">
                            <ul class="arrow_box">
                              <li class="number_up" onmouseup="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )" onmousedown="( function( el ){ number_up( el, false ); button_repeater( el, false ); } )( this )" onmouseout="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )">
                                <div class="number_up_inner"></div>
                              </li>
                              <li class="number_down" onmouseup="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )" onmousedown="( function( el ) { number_down( el, false ); button_repeater( el, false ); } )( this )" onmouseout="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )">
                                <div class="number_down_inner"></div>
                              </li>
                            </ul>
                          </li>
                        </ul>

                      </div>
                    </li>
                    <li>
                      <div class="range_outer_wrapper" style="border-bottom:1px solid grey">
                        <h3 style="padding-top:35px">Total Virtual Machines</h3>

                        <ul class="number_box_list" style="width:210px;">
                          <li class="number_box" style="width:180px;">
                            <input class="number_input" type="number" name="number-cloud_services_azure-vmachines" id="number-cloud_services_azure-vmachines" onchange="( function( el ) { update_numbers(); } )( this )" min=0 step=1 value=0>
                          </li>
                          <li class="arrow_box_li">
                            <ul class="arrow_box">
                              <li class="number_up" onmouseup="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )" onmousedown="( function( el ){ number_up( el, false ); button_repeater( el, false ); } )( this )" onmouseout="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )">
                                <div class="number_up_inner"></div>
                              </li>
                              <li class="number_down" onmouseup="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )" onmousedown="( function( el ) { number_down( el, false ); button_repeater( el, false ); } )( this )" onmouseout="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )">
                                <div class="number_down_inner"></div>
                              </li>
                            </ul>
                          </li>
                        </ul>

                      </div>
                    </li>
                    <li>
                      <div class="range_outer_wrapper" style="border-bottom:1px solid grey">
                        <h3 style="padding-top:35px">Azure Storage (Blobs, Tables, Queues, Files) Events (monthly)</h3>

                        <ul class="number_box_list" style="width:210px;">
                          <li class="number_box" style="width:180px;">
                            <input class="number_input" type="number" name="number-cloud_services_azure-azure_storage" id="number-cloud_services_azure-azure_storage" onchange="( function( el ) { update_numbers(); } )( this )" min=0 step=1 value=0>
                          </li>
                          <li class="arrow_box_li">
                            <ul class="arrow_box">
                              <li class="number_up" onmouseup="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )" onmousedown="( function( el ){ number_up( el, false ); button_repeater( el, false ); } )( this )" onmouseout="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )">
                                <div class="number_up_inner"></div>
                              </li>
                              <li class="number_down" onmouseup="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )" onmousedown="( function( el ) { number_down( el, false ); button_repeater( el, false ); } )( this )" onmouseout="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey' ; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )">
                                <div class="number_down_inner"></div>
                              </li>
                            </ul>
                          </li>
                        </ul>

                      </div>
                    </li>
                    <li>
                      <div class="range_outer_wrapper">
                        <h3 style="padding-top:35px">Azure Load Balancing Events (monthly)</h3>

                        <ul class="number_box_list" style="width:210px;">
                          <li class="number_box" style="width:180px;">
                            <input class="number_input" type="number" name="number-cloud_services_azure-load_balancing" id="number-cloud_services_azure-load_balancing" onchange="( function( el ) { update_numbers(); } )( this )" min=0 step=1 value=0>
                          </li>
                          <li class="arrow_box_li">
                            <ul class="arrow_box">
                              <li class="number_up" onmouseup="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )" onmousedown="( function( el ){ number_up( el, false ); button_repeater( el, false ); } )( this )" onmouseout="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )">
                                <div class="number_up_inner"></div>
                              </li>
                              <li class="number_down" onmouseup="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )" onmousedown="( function( el ) { number_down( el, false ); button_repeater( el, false ); } )( this )" onmouseout="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )">
                                <div class="number_down_inner"></div>
                              </li>
                            </ul>
                          </li>
                        </ul>

                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            <div data-slide-position="2" id="on_prem_summary" class="slide unselected">
            <h3 class="slide_title">On Prem Summary</h3>
            <div id="fields_wrapper">
              <ul id="fields_list">
                <li>
                  <div class="range_outer_wrapper" style="border-bottom:1px solid grey">
                    <h3 style="padding-top:35px">Total Domain Controllers</h3>

                    <ul class="number_box_list" style="width:210px;">
                      <li class="number_box" style="width:180px;">
                        <input class="number_input" type="number" name="number-on_prem_summary-usma_domain_controllers" id="number-on_prem_summary-usma_domain_controllers" onchange="( function( el ) { update_numbers(); } )( this )" min=0 step=1 value=0>
                      </li>
                      <li class="arrow_box_li">
                        <ul class="arrow_box">
                          <li class="number_up" onmouseup="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )" onmousedown="( function( el ) { number_up( el, false ); button_repeater( el, false ); } )( this )" onmouseout="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )">
                            <div class="number_up_inner"></div>
                          </li>
                          <li class="number_down" onmouseup="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )" onmousedown="( function( el ) { number_down( el, false ); button_repeater( el, false ); } )( this )" onmouseout="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )">
                            <div class="number_down_inner"></div>
                          </li>
                        </ul>
                      </li>
                    </ul>

                  </div>
                </li>
                <li>
                  <div class="range_outer_wrapper" style="border-bottom:1px solid grey">
                    <h3 style="padding-top:35px">Total Windows Systems</h3>

                    <ul class="number_box_list" style="width:210px;">
                      <li class="number_box" style="width:180px;">
                        <input class="number_input" type="number" name="number-on_prem_summary-usma_windows_systems" id="number-on_prem_summary-usma_windows_systems" onchange="( function( el ) { update_numbers(); } )( this )" min=0 step=1 value=0>
                      </li>
                      <li class="arrow_box_li">
                        <ul class="arrow_box">
                          <li class="number_up" onmouseup="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )" onmousedown="( function( el ) { number_up( el, false ); button_repeater( el, false ); } )( this )" onmouseout="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )">
                            <div class="number_up_inner"></div>
                          </li>
                          <li class="number_down" onmouseup="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )" onmousedown="( function( el ) { number_down( el, false ); button_repeater( el, false ); } )( this )" onmouseout="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )">
                            <div class="number_down_inner"></div>
                          </li>
                        </ul>
                      </li>
                    </ul>

                  </div>
                </li>
                <li>
                  <div class="range_outer_wrapper" style="border-bottom:1px solid grey">
                    <h3 style="padding-top:35px">Total Linux Systems</h3>

                    <ul class="number_box_list" style="width:210px;">
                      <li class="number_box" style="width:180px;">
                        <input class="number_input" type="number" name="number-on_prem_summary-usma_linux_systems" id="number-on_prem_summary-usma_linux_systems" onchange="( function( el ) { update_numbers(); } )( this )" min=0 step=1 value=0>
                      </li>
                      <li class="arrow_box_li">
                        <ul class="arrow_box">
                          <li class="number_up" onmouseup="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )" onmousedown="( function( el ) { number_up( el, false ); button_repeater( el, false ); } )( this )" onmouseout="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )">
                            <div class="number_up_inner"></div>
                          </li>
                          <li class="number_down" onmouseup="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )" onmousedown="( function( el ) { number_down( el, false ); button_repeater( el, false ); } )( this )" onmouseout="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )">
                            <div class="number_down_inner"></div>
                          </li>
                        </ul>
                      </li>
                    </ul>

                  </div>
                </li>
                <li>
                  <div class="range_outer_wrapper" style="border-bottom:1px solid grey">
                    <h3 style="padding-top:35px">Total Firewalls</h3>

                    <ul class="number_box_list" style="width:210px;">
                      <li class="number_box" style="width:180px;">
                        <input class="number_input" type="number" name="number-on_prem_summary-usma_firewalls" id="number-on_prem_summary-usma_firewalls" onchange="( function( el ) { update_numbers(); } )( this )" min=0 step=1 value=0>
                      </li>
                      <li class="arrow_box_li">
                        <ul class="arrow_box">
                          <li class="number_up" onmouseup="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )" onmousedown="( function( el ) { number_up( el, false ); button_repeater( el, false ); } )( this )" onmouseout="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )">
                            <div class="number_up_inner"></div>
                          </li>
                          <li class="number_down" onmouseup="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )" onmousedown="( function( el ) { number_down( el, false ); button_repeater( el, false ); } )( this )" onmouseout="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )">
                            <div class="number_down_inner"></div>
                          </li>
                        </ul>
                      </li>
                    </ul>

                  </div>
                </li>
                <li>
                  <div class="range_outer_wrapper" style="border-bottom:1px solid grey">
                    <h3 style="padding-top:35px">Total Users</h3>

                    <ul class="number_box_list" style="width:210px;">
                      <li class="number_box" style="width:180px;">
                        <input class="number_input" type="number" name="number-on_prem_summary-usma_users" id="number-on_prem_summary-usma_users" onchange="( function( el ) { update_numbers(); } )( this )" min=0 step=1 value=0>
                      </li>
                      <li class="arrow_box_li">
                        <ul class="arrow_box">
                          <li class="number_up" onmouseup="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )" onmousedown="( function( el ) { number_up( el, false ); button_repeater( el, false ); } )( this )" onmouseout="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )">
                            <div class="number_up_inner"></div>
                          </li>
                          <li class="number_down" onmouseup="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )" onmousedown="( function( el ) { number_down( el, false ); button_repeater( el, false ); } )( this )" onmouseout="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )">
                            <div class="number_down_inner"></div>
                          </li>
                        </ul>
                      </li>
                    </ul>

                  </div>
                </li>
                <li>
                  <div class="range_outer_wrapper">
                    <h3 style="padding-top:35px">Total Non-Domain Users</h3>

                    <ul class="number_box_list" style="width:210px;">
                      <li class="number_box" style="width:180px;">
                        <input class="number_input" type="number" name="number-on_prem_summary-usma_non_dom_users" id="number-on_prem_summary-usma_non_dom_users" onchange="( function( el ) { update_numbers(); } )( this )" min=0 step=1 value=0>
                      </li>
                      <li class="arrow_box_li">
                        <ul class="arrow_box">
                          <li class="number_up" onmouseup="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )" onmousedown="( function( el ) { number_up( el, false ); button_repeater( el, false ); } )( this )" onmouseout="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )">
                            <div class="number_up_inner"></div>
                          </li>
                          <li class="number_down" onmouseup="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )" onmousedown="( function( el ) { number_down( el, false ); button_repeater( el, false ); } )( this )" onmouseout="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )">
                            <div class="number_down_inner"></div>
                          </li>
                        </ul>
                      </li>
                    </ul>

                  </div>
                </li>
              </ul>
            </div>
          </div>
