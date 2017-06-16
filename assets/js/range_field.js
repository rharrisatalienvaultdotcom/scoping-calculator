var int_cont;
var tmt_cont;
updateRange = function(e) {
    var pos = (e.valueAsNumber - e.min) / (e.max - e.min);
    pos = pos * 100;
    if(pos > 94) {
        pos = pos - 1;
    }
    if(pos < 20) {
        pos = pos + 1;
    }
    e.style = 'background-image: -webkit-linear-gradient( top left, transparent, transparent 1%, grey 1%, grey ' + pos + '%, transparent ' + pos + '%';
    e.parentElement.nextElementSibling.firstElementChild.firstElementChild.value = e.valueAsNumber;
    update_numbers();
}
function number_up(el, rangeud = true ) {
    el.style.backgroundColor = 'grey';
    el.firstElementChild.style.borderColor = 'lightgrey'
    el.parentElement.parentElement.previousElementSibling.firstElementChild.stepUp(1);
    if ( rangeud == true ) {
    el.parentElement.parentElement.parentElement.previousElementSibling.firstElementChild.value = el.parentElement.parentElement.previousElementSibling.firstElementChild.valueAsNumber;
        updateRange(el.parentElement.parentElement.parentElement.previousElementSibling.firstElementChild);
    } else {
        update_numbers();
    }
}
function number_down(el, rangeud = true ) {
    el.style.backgroundColor = 'grey';
    el.firstElementChild.style.borderColor = 'lightgrey'
    el.parentElement.parentElement.previousElementSibling.firstElementChild.stepDown(1);
    if ( rangeud == true ) {
    el.parentElement.parentElement.parentElement.previousElementSibling.firstElementChild.value = el.parentElement.parentElement.previousElementSibling.firstElementChild.valueAsNumber;
        updateRange(el.parentElement.parentElement.parentElement.previousElementSibling.firstElementChild);
    } else {
        update_numbers();
    }
}
function button_repeater(el, rangeud = true ) {
    tmt_cont = setTimeout(function() { button_repeater_start( el, rangeud ); },400);
}
function button_repeater_start(el, rangeud = true ){
    if(el.className.includes('number_up')) {
        int_cont = setInterval(function() { number_up( el, rangeud ); }, 50);
    }
    if(el.className.includes('number_down')) {
        int_cont = setInterval(function() { number_down( el, rangeud ); }, 50);
    }
}
function selectThisRange(el) {
    var listItems = el.parentElement.children;
    for(var i = 0; i < listItems.length; i++) {
        listItems[i].className = listItems[i].className.replace(' rselected', ' runselected');
    }
    el.className = el.className.replace('runselected','rselected');
    change_range(el);
}
function change_range(e) {
    var range_obj = e.parentElement.parentElement.previousElementSibling.previousElementSibling.previousElementSibling.firstElementChild;
    var number_obj = e.parentElement.parentElement.previousElementSibling.previousElementSibling.firstElementChild.firstElementChild;
    var range_display = e.parentElement.parentElement.previousElementSibling;
    var val = number_obj.valueAsNumber;
    if (e.className.includes('range1') && e.className.includes(' rselected')) {
        if (val > 1000 ) { val = val / 10; }
        if (val > 100 ) { val = val / 10; }
        range_display.innerHTML = '100';
        range_obj.max = 100;
        number_obj.max = 100;
    }
    if (e.className.includes('range2') && e.className.includes(' rselected')) {
        if (val > 1000 ) { val = val / 10; }
        range_display.innerHTML = '1,000';
        range_obj.max = 1000;
        number_obj.max = 1000;
    }
    if (e.className.includes('range3') && e.className.includes(' rselected')) {
        range_display.innerHTML = '10,000';
        range_obj.max = 10000;
        number_obj.max = 10000;
    }
    range_obj.value = val;
    number_obj.value = val;
    updateRange(range_obj);
}
