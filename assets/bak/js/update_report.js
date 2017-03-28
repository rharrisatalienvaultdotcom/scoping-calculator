function update_report() {
    var report_section = document.getElementById('report_wrapper_inner');
    report_section.innerHTML = '';
    for (var slide in field_values) {
        if (slide != 'misc') {
            var rep_list = document.createElement('ul');
            var slide_name = document.createElement('li');
            slide_name.innerHTML = field_values[slide]['title'];
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
                calc.innerHTML = '&nbsp;';
                eps.innerHTML = '';
                break;
            case 'servers':
                raw.innerHTML = total_servers;
                calc.innerHTML = total_servers_eps;
                eps.innerHTML = 'Est. EPS';
                break;
            case 'devices':
                raw.innerHTML = total_devices;
                calc.innerHTML = '&nbsp;';
                eps.innerHTML = '';
                break;
            case 'network_devices':
                raw.innerHTML = total_network_devices;
                calc.innerHTML = total_network_devices_eps;
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
function build_deployment_total_row(label, raw, calc = '&nbsp;', note = '&nbsp;') {
    var li = document.createElement('li');
    var label_span = document.createElement('span');
    var raw_span = document.createElement('span');
    var calc_span = document.createElement('span');
    var note_span = document.createElement('span');
    label_span.className = 'report_total_label';
    raw_span.className = 'report_total_number';
    calc_span.className = 'report_total_number';
    label_span.innerHTML = label;
    raw_span.innerHTML = raw;
    calc_span.innerHTML = calc;
    note_span.innerHTML = note;
    li.appendChild(label);
    li.appendChild(raw);
    li.appendChild(calc);
    li.appendChild(eps);
    return li;
}
function build_field_row(label, raw, calc = '&nbsp;', note = '&nbsp;') {
    var li = document.createElement('li');
    var label_span = document.createElement('span');
    var raw_span = document.createElement('span');
    var calc_span = document.createElement('span');
    var note_span = document.createElement('span');
    label_span.className = 'report_field_label';
    raw_span.className = 'report_field_number';
    calc_span.className = 'report_field_number';
    label_span.innerHTML = label;
    raw_span.innerHTML = raw;
    calc_span.innerHTML = calc;
    note_span.innerHTML = note;
    li.appendChild(label);
    li.appendChild(raw);
    li.appendChild(calc);
    li.appendChild(eps);
    return li;
}
function build_slide_title_row(label, raw, calc = '&nbsp;', note = '&nbsp;') {
    var li = document.createElement('li');
    var label_span = document.createElement('span');
    var raw_span = document.createElement('span');
    var calc_span = document.createElement('span');
    var note_span = document.createElement('span');
    label_span.className = 'report_field_label';
    raw_span.className = 'report_field_number';
    calc_span.className = 'report_field_number';
    label_span.innerHTML = label;
    raw_span.innerHTML = raw;
    calc_span.innerHTML = calc;
    note_span.innerHTML = note;
    li.appendChild(label);
    li.appendChild(raw);
    li.appendChild(calc);
    li.appendChild(eps);
    return li;
}
function build_slide_total_row(label, raw, calc = '&nbsp;', note = '&nbsp;') {
    var li = document.createElement('li');
    var label_span = document.createElement('span');
    var raw_span = document.createElement('span');
    var calc_span = document.createElement('span');
    var note_span = document.createElement('span');
    label_span.className = 'report_slide_total_label';
    raw_span.className = 'report_slide_total_number';
    calc_span.className = 'report_slide_total_number';
    label_span.innerHTML = label;
    raw_span.innerHTML = raw;
    calc_span.innerHTML = calc;
    note_span.innerHTML = note;
    li.appendChild(label);
    li.appendChild(raw);
    li.appendChild(calc);
    li.appendChild(eps);
    return li;
}