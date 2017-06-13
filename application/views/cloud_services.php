          <div data-slide-position="6" id="cloud_services_aws" class="slide unselected">
            <h3 class="slide_title">Cloud Services: AWS</h3>
              <div id="fields_wrapper">
                <ul id="fields_list">
                  <li>
                      <div class="range_outer_wrapper">
                        <h3>CloudTrail event total</h3>
                        <div class="range_wrapper">
                          <input type="range" name="range-cloud_services_aws-cloudtrail" id="range-cloud_services_aws-cloudtrail" min=2 max=10 value=5  oninput="updateRange( this )">
                          <div class="range_line">&nbsp;</div>
                        </div>
                        <ul class="number_box_list">
                          <li class="number_box">
                            <input class="number_input" type="number" name="number-cloud_services_aws-cloudtrail" id="number-cloud_services_aws-cloudtrail" min=2 max=10 step=1 value=5>
                          </li>
                          <li class="arrow_box_li">
                            <ul class="arrow_box">
                              <li class="number_up" onmouseup="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )" onmousedown="( function( el ) { number_up( el ); button_repeater( el ); } )( this )" onmouseout="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )">
                                <div class="number_up_inner"></div>
                              </li>
                              <li class="number_down" onmouseup="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )" onmousedown="( function( el ) { number_down( el ); button_repeater( el ); } )( this )" onmouseout="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )">
                                <div class="number_down_inner"></div>
                              </li>
                            </ul>
                          </li>
                        </ul>
                        <div class="max_adj_display">10</div>
                        <div class="max_adj">
                          <ul class="range_list">
                            <li class="list_item range1 rselected" onclick="selectThisRange( this )"></li>
                            <li class="list_item range2 runselected" onclick="selectThisRange( this )"></li>
                            <li class="list_item range3 runselected" onclick="selectThisRange( this )"></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                  <li>
                      <div class="range_outer_wrapper">
                        <h3>CloudWatch event total</h3>
                        <div class="range_wrapper">
                          <input type="range" name="range-cloud_services_aws-cloudwatch" id="range-cloud_services_aws-cloudwatch" min=2 max=10 value=5  oninput="updateRange( this )">
                          <div class="range_line">&nbsp;</div>
                        </div>
                        <ul class="number_box_list">
                          <li class="number_box">
                            <input class="number_input" type="number" name="number-cloud_services_aws-cloudwatch" id="number-cloud_services_aws-cloudwatch" min=2 max=10 step=1 value=5>
                          </li>
                          <li class="arrow_box_li">
                            <ul class="arrow_box">
                              <li class="number_up" onmouseup="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )" onmousedown="( function( el ) { number_up( el ); button_repeater( el ); } )( this )" onmouseout="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )">
                                <div class="number_up_inner"></div>
                              </li>
                              <li class="number_down" onmouseup="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )" onmousedown="( function( el ) { number_down( el ); button_repeater( el ); } )( this )" onmouseout="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )">
                                <div class="number_down_inner"></div>
                              </li>
                            </ul>
                          </li>
                        </ul>
                        <div class="max_adj_display">10</div>
                        <div class="max_adj">
                          <ul class="range_list">
                            <li class="list_item range1 rselected" onclick="selectThisRange( this )"></li>
                            <li class="list_item range2 runselected" onclick="selectThisRange( this )"></li>
                            <li class="list_item range3 runselected" onclick="selectThisRange( this )"></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="range_outer_wrapper">
                        <h3>Data Transfered (in GB)</h3>
                        <div class="range_wrapper">
                          <input type="range" name="range-cloud_services_aws-data_transfered" id="range-cloud_services_aws-data_transfered" min=8 max=1024 value=800  step=8 oninput="updateRange( this )">
                          <div class="range_line">&nbsp;</div>
                        </div>
                        <ul class="number_box_list">
                          <li class="number_box">
                            <input class="number_input" type="number" name="number-cloud_services_aws-data_transfered" id="number-cloud_services_aws-data_transfered" min=8 max=1024 step=8 value=800>
                          </li>
                          <li class="arrow_box_li">
                            <ul class="arrow_box">
                              <li class="number_up" onmouseup="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )" onmousedown="( function( el ){ number_up( el ); button_repeater( el ); } )( this )" onmouseout="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )">
                                <div class="number_up_inner"></div>
                              </li>
                              <li class="number_down" onmouseup="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )" onmousedown="( function( el ) { number_down( el ); button_repeater( el ); } )( this )" onmouseout="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )">
                                <div class="number_down_inner"></div>
                              </li>
                            </ul>
                          </li>
                        </ul>
                        <div class="max_adj_display">1024</div>
                        <div class="max_adj">
                          <ul class="range_list">
                            <li class="list_item range1 rselected" onclick="selectThisRange( this )"></li>
                            <li class="list_item range2 runselected" onclick="selectThisRange( this )"></li>
                            <li class="list_item range3 runselected" onclick="selectThisRange( this )"></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="range_outer_wrapper">
                        <h3>Elastic Cloud Compute Request Total</h3>
                        <div class="range_wrapper">
                          <input type="range" name="range-cloud_services_aws-elastic_cloud" id="range-cloud_services_aws-elastic_cloud" min=1 max=10 value=1  step=1 oninput="updateRange( this )">
                          <div class="range_line">&nbsp;</div>
                        </div>
                        <ul class="number_box_list">
                          <li class="number_box">
                            <input class="number_input" type="number" name="number-cloud_services_aws-elastic_cloud" id="number-cloud_services_aws-elastic_cloud" min=1 max=10 step=1 value=1>
                          </li>
                          <li class="arrow_box_li">
                            <ul class="arrow_box">
                              <li class="number_up" onmouseup="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )" onmousedown="( function( el ){ number_up( el ); button_repeater( el ); } )( this )" onmouseout="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )">
                                <div class="number_up_inner"></div>
                              </li>
                              <li class="number_down" onmouseup="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )" onmousedown="( function( el ) { number_down( el ); button_repeater( el ); } )( this )" onmouseout="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )">
                                <div class="number_down_inner"></div>
                              </li>
                            </ul>
                          </li>
                        </ul>
                        <div class="max_adj_display">10</div>
                        <div class="max_adj">
                          <ul class="range_list">
                            <li class="list_item range1 rselected" onclick="selectThisRange( this )"></li>
                            <li class="list_item range2 runselected" onclick="selectThisRange( this )"></li>
                            <li class="list_item range3 runselected" onclick="selectThisRange( this )"></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="range_outer_wrapper">
                        <h3>Simple Storage Service Request Total</h3>
                        <div class="range_wrapper">
                          <input type="range" name="range-cloud_services_aws-simple_storage" id="range-cloud_services_aws-simple_storage" min=0 max=100 value=0  oninput="updateRange( this )">
                          <div class="range_line">&nbsp;</div>
                        </div>
                        <ul class="number_box_list">
                          <li class="number_box">
                            <input class="number_input" type="number" name="number-cloud_services_aws-simple_storage" id="number-cloud_services_aws-simple_storage" min=0 max=100 step=1 value=0>
                          </li>
                          <li class="arrow_box_li">
                            <ul class="arrow_box">
                              <li class="number_up" onmouseup="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )" onmousedown="( function( el ){ number_up( el ); button_repeater( el ); } )( this )" onmouseout="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )">
                                <div class="number_up_inner"></div>
                              </li>
                              <li class="number_down" onmouseup="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )" onmousedown="( function( el ) { number_down( el ); button_repeater( el ); } )( this )" onmouseout="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey' ; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )">
                                <div class="number_down_inner"></div>
                              </li>
                            </ul>
                          </li>
                        </ul>
                        <div class="max_adj_display">100</div>
                        <div class="max_adj">
                          <ul class="range_list">
                            <li class="list_item range1 rselected" onclick="selectThisRange( this )"></li>
                            <li class="list_item range2 runselected" onclick="selectThisRange( this )"></li>
                            <li class="list_item range3 runselected" onclick="selectThisRange( this )"></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="range_outer_wrapper">
                        <h3>Elastic Load Balancer Request Total</h3>
                        <div class="range_wrapper">
                          <input type="range" name="range-cloud_services_aws-elastic_load" id="range-cloud_services_aws-elastic_load" min=1 max=10 value=1  step=1 oninput="updateRange( this )">
                          <div class="range_line">&nbsp;</div>
                        </div>
                        <ul class="number_box_list">
                          <li class="number_box">
                            <input class="number_input" type="number" name="number-cloud_services_aws-elastic_load" id="number-cloud_services_aws-elastic_load" min=1 max=10 step=1 value=1>
                          </li>
                          <li class="arrow_box_li">
                            <ul class="arrow_box">
                              <li class="number_up" onmouseup="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )" onmousedown="( function( el ){ number_up( el ); button_repeater( el ); } )( this )" onmouseout="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )">
                                <div class="number_up_inner"></div>
                              </li>
                              <li class="number_down" onmouseup="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )" onmousedown="( function( el ) { number_down( el ); button_repeater( el ); } )( this )" onmouseout="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )">
                                <div class="number_down_inner"></div>
                              </li>
                            </ul>
                          </li>
                        </ul>
                        <div class="max_adj_display">10</div>
                        <div class="max_adj">
                          <ul class="range_list">
                            <li class="list_item range1 rselected" onclick="selectThisRange( this )"></li>
                            <li class="list_item range2 runselected" onclick="selectThisRange( this )"></li>
                            <li class="list_item range3 runselected" onclick="selectThisRange( this )"></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            <div data-slide-position="7" id="cloud_services_azure" class="slide unselected">
            <h3 class="slide_title">Cloud Services: Azure</h3>
              <div id="fields_wrapper">
                <ul id="fields_list">
                  <li>
                      <div class="range_outer_wrapper">
                        <h3>Total Subscription IDs</h3>
                        <div class="range_wrapper">
                          <input type="range" name="range-cloud_services_azure-subscription_ids" id="range-cloud_services_azure-subscription_ids" min=2 max=10 value=5  oninput="updateRange( this )">
                          <div class="range_line">&nbsp;</div>
                        </div>
                        <ul class="number_box_list">
                          <li class="number_box">
                            <input class="number_input" type="number" name="number-cloud_services_azure-subscription_ids" id="number-cloud_services_azure-subscription_ids" min=2 max=10 step=1 value=5>
                          </li>
                          <li class="arrow_box_li">
                            <ul class="arrow_box">
                              <li class="number_up" onmouseup="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )" onmousedown="( function( el ) { number_up( el ); button_repeater( el ); } )( this )" onmouseout="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )">
                                <div class="number_up_inner"></div>
                              </li>
                              <li class="number_down" onmouseup="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )" onmousedown="( function( el ) { number_down( el ); button_repeater( el ); } )( this )" onmouseout="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )">
                                <div class="number_down_inner"></div>
                              </li>
                            </ul>
                          </li>
                        </ul>
                        <div class="max_adj_display">10</div>
                        <div class="max_adj">
                          <ul class="range_list">
                            <li class="list_item range1 rselected" onclick="selectThisRange( this )"></li>
                            <li class="list_item range2 runselected" onclick="selectThisRange( this )"></li>
                            <li class="list_item range3 runselected" onclick="selectThisRange( this )"></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                  <li>
                      <div class="range_outer_wrapper">
                        <h3>Azure Log Analytics Request Total</h3>
                        <div class="range_wrapper">
                          <input type="range" name="range-cloud_services_azure-analytics" id="range-cloud_services_azure-analytics" min=2 max=10 value=5  oninput="updateRange( this )">
                          <div class="range_line">&nbsp;</div>
                        </div>
                        <ul class="number_box_list">
                          <li class="number_box">
                            <input class="number_input" type="number" name="number-cloud_services_azure-analytics" id="number-cloud_services_azure-analytics" min=2 max=10 step=1 value=5>
                          </li>
                          <li class="arrow_box_li">
                            <ul class="arrow_box">
                              <li class="number_up" onmouseup="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )" onmousedown="( function( el ) { number_up( el ); button_repeater( el ); } )( this )" onmouseout="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )">
                                <div class="number_up_inner"></div>
                              </li>
                              <li class="number_down" onmouseup="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )" onmousedown="( function( el ) { number_down( el ); button_repeater( el ); } )( this )" onmouseout="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )">
                                <div class="number_down_inner"></div>
                              </li>
                            </ul>
                          </li>
                        </ul>
                        <div class="max_adj_display">10</div>
                        <div class="max_adj">
                          <ul class="range_list">
                            <li class="list_item range1 rselected" onclick="selectThisRange( this )"></li>
                            <li class="list_item range2 runselected" onclick="selectThisRange( this )"></li>
                            <li class="list_item range3 runselected" onclick="selectThisRange( this )"></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="range_outer_wrapper">
                        <h3>Azure Application Insights Request Total</h3>
                        <div class="range_wrapper">
                          <input type="range" name="range-cloud_services_azure-app_insights" id="range-cloud_services_azure-app_insights" min=8 max=1024 value=800  step=8 oninput="updateRange( this )">
                          <div class="range_line">&nbsp;</div>
                        </div>
                        <ul class="number_box_list">
                          <li class="number_box">
                            <input class="number_input" type="number" name="number-cloud_services_azure-app_insights" id="number-cloud_services_azure-app_insights" min=8 max=1024 step=8 value=800>
                          </li>
                          <li class="arrow_box_li">
                            <ul class="arrow_box">
                              <li class="number_up" onmouseup="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )" onmousedown="( function( el ){ number_up( el ); button_repeater( el ); } )( this )" onmouseout="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )">
                                <div class="number_up_inner"></div>
                              </li>
                              <li class="number_down" onmouseup="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )" onmousedown="( function( el ) { number_down( el ); button_repeater( el ); } )( this )" onmouseout="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )">
                                <div class="number_down_inner"></div>
                              </li>
                            </ul>
                          </li>
                        </ul>
                        <div class="max_adj_display">1024</div>
                        <div class="max_adj">
                          <ul class="range_list">
                            <li class="list_item range1 rselected" onclick="selectThisRange( this )"></li>
                            <li class="list_item range2 runselected" onclick="selectThisRange( this )"></li>
                            <li class="list_item range3 runselected" onclick="selectThisRange( this )"></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="range_outer_wrapper">
                        <h3>Total Virtual Machines</h3>
                        <div class="range_wrapper">
                          <input type="range" name="range-cloud_services_azure-vmachines" id="range-cloud_services_azure-vmachines" min=1 max=10 value=1  step=1 oninput="updateRange( this )">
                          <div class="range_line">&nbsp;</div>
                        </div>
                        <ul class="number_box_list">
                          <li class="number_box">
                            <input class="number_input" type="number" name="number-cloud_services_azure-vmachines" id="number-cloud_services_azure-vmachines" min=1 max=10 step=1 value=1>
                          </li>
                          <li class="arrow_box_li">
                            <ul class="arrow_box">
                              <li class="number_up" onmouseup="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )" onmousedown="( function( el ){ number_up( el ); button_repeater( el ); } )( this )" onmouseout="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )">
                                <div class="number_up_inner"></div>
                              </li>
                              <li class="number_down" onmouseup="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )" onmousedown="( function( el ) { number_down( el ); button_repeater( el ); } )( this )" onmouseout="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )">
                                <div class="number_down_inner"></div>
                              </li>
                            </ul>
                          </li>
                        </ul>
                        <div class="max_adj_display">10</div>
                        <div class="max_adj">
                          <ul class="range_list">
                            <li class="list_item range1 rselected" onclick="selectThisRange( this )"></li>
                            <li class="list_item range2 runselected" onclick="selectThisRange( this )"></li>
                            <li class="list_item range3 runselected" onclick="selectThisRange( this )"></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="range_outer_wrapper">
                        <h3>Azure Storage (Blobs, Tables, Queues, Files) Events</h3>
                        <div class="range_wrapper">
                          <input type="range" name="range-cloud_services_azure-azure_storage" id="range-cloud_services_azure-azure_storage" min=0 max=100 value=0  oninput="updateRange( this )">
                          <div class="range_line">&nbsp;</div>
                        </div>
                        <ul class="number_box_list">
                          <li class="number_box">
                            <input class="number_input" type="number" name="number-cloud_services_azure-azure_storage" id="number-cloud_services_azure-azure_storage" min=0 max=100 step=1 value=0>
                          </li>
                          <li class="arrow_box_li">
                            <ul class="arrow_box">
                              <li class="number_up" onmouseup="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )" onmousedown="( function( el ){ number_up( el ); button_repeater( el ); } )( this )" onmouseout="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )">
                                <div class="number_up_inner"></div>
                              </li>
                              <li class="number_down" onmouseup="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )" onmousedown="( function( el ) { number_down( el ); button_repeater( el ); } )( this )" onmouseout="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey' ; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )">
                                <div class="number_down_inner"></div>
                              </li>
                            </ul>
                          </li>
                        </ul>
                        <div class="max_adj_display">100</div>
                        <div class="max_adj">
                          <ul class="range_list">
                            <li class="list_item range1 rselected" onclick="selectThisRange( this )"></li>
                            <li class="list_item range2 runselected" onclick="selectThisRange( this )"></li>
                            <li class="list_item range3 runselected" onclick="selectThisRange( this )"></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="range_outer_wrapper">
                        <h3>Azure Load Balancing Events</h3>
                        <div class="range_wrapper">
                          <input type="range" name="range-cloud_services_azure-load_balancing" id="range-cloud_services_azure-load_balancing" min=1 max=10 value=1  step=1 oninput="updateRange( this )">
                          <div class="range_line">&nbsp;</div>
                        </div>
                        <ul class="number_box_list">
                          <li class="number_box">
                            <input class="number_input" type="number" name="number-cloud_services_azure-load_balancing" id="number-cloud_services_azure-load_balancing" min=1 max=10 step=1 value=1>
                          </li>
                          <li class="arrow_box_li">
                            <ul class="arrow_box">
                              <li class="number_up" onmouseup="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )" onmousedown="( function( el ){ number_up( el ); button_repeater( el ); } )( this )" onmouseout="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )">
                                <div class="number_up_inner"></div>
                              </li>
                              <li class="number_down" onmouseup="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )" onmousedown="( function( el ) { number_down( el ); button_repeater( el ); } )( this )" onmouseout="( function( el ) { el.style.backgroundColor = 'transparent'; el.firstElementChild.style.borderColor = 'grey'; clearInterval( int_cont ); clearTimeout( tmt_cont ); } )( this )">
                                <div class="number_down_inner"></div>
                              </li>
                            </ul>
                          </li>
                        </ul>
                        <div class="max_adj_display">10</div>
                        <div class="max_adj">
                          <ul class="range_list">
                            <li class="list_item range1 rselected" onclick="selectThisRange( this )"></li>
                            <li class="list_item range2 runselected" onclick="selectThisRange( this )"></li>
                            <li class="list_item range3 runselected" onclick="selectThisRange( this )"></li>
                          </ul>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
