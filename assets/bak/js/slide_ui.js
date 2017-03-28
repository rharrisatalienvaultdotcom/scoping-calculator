function previous_slide(el) {
    var elem1 = document.getElementsByClassName('selected');
    var elem1Pos = elem1[0].getAttribute('data-slide-position');
    if (elem1Pos > 1) {
        var elem2 = document.querySelectorAll('[data-slide-position=' + String.fromCharCode(34) + (Number(elem1Pos) - 1) + String.fromCharCode(34) + ']' );
        elem1[0].className = elem1[0].className.replace('selected', 'unselected');
        elem2[0].className = elem2[0].className.replace('unselected', 'selected');
    }
}

function next_slide(el) {
    var elem1 = document.getElementsByClassName('selected');
    var max_val = Object.keys(field_values).length;
    var elem1Pos = elem1[0].getAttribute('data-slide-position');
    if (elem1Pos < max_val )
        {
        var data_string = '[data-slide-position=' + String.fromCharCode(34) + (Number(elem1Pos) + 1) + String.fromCharCode(34) + ']'; 
        var elem2 = document.querySelectorAll(data_string);
        elem1[0].className = elem1[0].className.replace('selected', 'unselected');
        elem2[0].className = elem2[0].className.replace('unselected', 'selected');
    }
}
function button_down(el) {
    el.style.boxShadow = '0px 0px 0px';
    el.firstElementChild.firstElementChild.style.boxShadow = '0px 0px 0px';
    el.firstElementChild.firstElementChild.nextElementSibling.style.boxShadow = '0px 0px 0px';
}
function button_up(el) {
    el.style.boxShadow = '0px 0px 12px';
    el.firstElementChild.firstElementChild.style.boxShadow = '0px 0px 15px';
    el.firstElementChild.firstElementChild.nextElementSibling.style.boxShadow = 'inset 0px 0px 15px';
}

function show_hide(el){
    var slide_box = el.parentElement.parentElement.parentElement;
    if(el.className.includes('hide')) {
        slide_box.style.top = '-' + ((window.innerHeight * .75) - 78) + 'px';
        el.className = 'button_circle show';
        el.firstElementChild.className = 'button_arrow_wrapper button_arrow_down';
        el.parentElement.parentElement.style.backgroundColor = 'rgba(0, 0, 0, 1)';
        slide_box.parentElement.style.backgroundColor = 'rgba(0,0,0,0)';
        setTimeout(function(){
            document.getElementById('report_wrapper_inner').style.filter = 'blur(0px)';
        },600);
    } else {
        slide_box.style.top = '100px';
        el.className = 'button_circle hide';
        el.firstElementChild.className = 'button_arrow_wrapper button_arrow_up';
        el.parentElement.parentElement.style.backgroundColor = 'rgba(0, 0, 0, .85)';
        slide_box.parentElement.style.backgroundColor = 'rgba(0,0,0,0.7)';
        document.getElementById('report_wrapper_inner').style.filter = 'blur(5px)';
    }
}