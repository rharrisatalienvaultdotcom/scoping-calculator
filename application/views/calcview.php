        <?php foreach ($calc_data['slides'] as $slide): ?>
          <?php if($slide['handle'] !== 'cloud_services_aws' && $slide['handle'] !== 'cloud_services_azure' && $slide['handle'] !== 'on_prem_summary'): ?>
          <div data-slide-position="<?php echo $slide['position']; ?>" id="<?php echo $slide['handle']; ?>" class="slide unselected">
            <h3 class="slide_title"><?php echo $slide['title']; ?></h3>
              <div id="fields_wrapper">
                <ul id="fields_list">
                <?php if ($slide['handle'] !== 'misc' && $slide['handle'] !== 'cloud_services_aws' && $slide['handle'] !== 'cloud_services_azure'): ?>
                  <?php foreach ($slide['fields'] as $field): ?>
                    <li>
                      <div class="range_outer_wrapper">
                        <h3><?php echo $field['title']; ?></h3>
                        <div class="range_wrapper">
                          <input type="range" name="range-<?php echo $slide['handle'] . '-' . $field['handle']; ?>" id="range-<?php echo $slide['handle'] . '-' . $field['handle']; ?>" min=0 max=100 value=<?php echo $field['default_val']; ?>  oninput="updateRange( this )">
                          <div class="range_line">&nbsp;</div>
                        </div>
                        <ul class="number_box_list">
                          <li class="number_box">
                            <input class="number_input" type="number" name="number-<?php echo $slide['handle'] . '-' . $field['handle']; ?>" id="number-<?php echo $slide['handle'] . '-' . $field['handle']; ?>" min=0 max=100 step=1 value=<?php echo $field['default_val']; ?> onchange="( function( el ){ el.parentElement.parentElement.previousElementSibling.firstElementChild.value = el.valueAsNumber; updateRange( el.parentElement.parentElement.previousElementSibling.firstElementChild ); } )( this )" >
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
                  <?php endforeach; ?>
                <?php elseif ($slide['handle'] === 'misc'): ?>
                    <li>
                      <div class="range_outer_wrapper">
                        <h3>Compression Ratio (n:1)</h3>
                        <div class="range_wrapper">
                          <input type="range" name="range-misc-compression_ratio" id="range-misc-compression_ratio" min=2 max=10 value=5  oninput="updateRange( this )">
                          <div class="range_line">&nbsp;</div>
                        </div>
                        <ul class="number_box_list">
                          <li class="number_box">
                            <input class="number_input" type="number" name="number-misc-compression_ratio" id="number-misc-compression_ratio" min=2 max=10 step=1 value=5>
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
                      </div>
                    </li>
                    <li>
                      <div class="range_outer_wrapper">
                        <h3>Average Message Size (in B)</h3>
                        <div class="range_wrapper">
                          <input type="range" name="range-misc-avg_msg_size" id="range-misc-avg_msg_size" min=8 max=1024 value=800  step=8 oninput="updateRange( this )">
                          <div class="range_line">&nbsp;</div>
                        </div>
                        <ul class="number_box_list">
                          <li class="number_box">
                            <input class="number_input" type="number" name="number-misc-avg_msg_size" id="number-misc-avg_msg_size" min=8 max=1024 step=8 value=800>
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
                      </div>
                    </li>
                    <li>
                      <div class="range_outer_wrapper">
                        <h3>Standard Loggers</h3>
                        <div class="range_wrapper">
                          <input type="range" name="range-misc-standard_loggers" id="range-misc-standard_loggers" min=1 max=10 value=1  step=1 oninput="updateRange( this )">
                          <div class="range_line">&nbsp;</div>
                        </div>
                        <ul class="number_box_list">
                          <li class="number_box">
                            <input class="number_input" type="number" name="number-misc-standard_loggers" id="number-misc-standard_loggers" min=1 max=10 step=1 value=1>
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
                      </div>
                    </li>
                    <li>
                      <div class="range_outer_wrapper">
                        <h3>Other EPS</h3>
                        <div class="range_wrapper">
                          <input type="range" name="range-misc-other_eps" id="range-misc-other_eps" min=0 max=100 value=0  oninput="updateRange( this )">
                          <div class="range_line">&nbsp;</div>
                        </div>
                        <ul class="number_box_list">
                          <li class="number_box">
                            <input class="number_input" type="number" name="number-misc-other_eps" id="number-misc-other_eps" min=0 max=100 step=1 value=0>
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
                      <div class="double_dropdown_wrapper">
                        <ul class="double_dropdown_list">
                          <li class="double_dropdown_li dd_left">
                            <h3>Appliance Type</h3>
                            <select id="misc-virtual_or_physical" onchange="update_numbers()">
                              <option value=1 selected>Virtual</option>
                              <option value=2>Physical(Hardware)</option>
                            </select>
                          </li>
                          <li class="double_dropdown_li dd_right">
                            <h3>Usage Pattern</h3>
                            <select id="misc-usage_pattern" onchange="update_numbers()">
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
        <?php endif; ?>
        <?php endforeach;?>




