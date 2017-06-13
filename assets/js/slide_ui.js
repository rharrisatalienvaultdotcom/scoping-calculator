function previous_slide(el) {
  var elem1 = document.getElementsByClassName('selected');
  var elem1Pos = elem1[0].getAttribute('data-slide-position');

  if (elem1Pos > 0) {
    var elem2 = document.querySelectorAll('[data-slide-position=' + String.fromCharCode(34) + (Number(elem1Pos) - 1) + String.fromCharCode(34) + ']' );
    elem1[0].className = elem1[0].className.replace('selected', 'unselected');
    elem2[0].className = elem2[0].className.replace('unselected', 'selected');
  }
  elem1Pos -= 1;
  if (elem1Pos <= 0){
    el.className = el.className.replace('active','disabled');
  }
}

function next_slide(el) {
  var elem1 = document.getElementsByClassName('selected');
  var max_val = Object.keys(field_values.slides).length;
  max_val -= 1;
  var elem1Pos = Number(elem1[0].getAttribute('data-slide-position'));
  if (elem1Pos < max_val ) {
    var data_string = '[data-slide-position=' + String.fromCharCode(34) + (Number(elem1Pos) + 1) + String.fromCharCode(34) + ']';
    elem1Pos += 1;
    if (elem1Pos > 0) {
      var inner_button = document.getElementById('previous_button').firstElementChild;
      inner_button.className = inner_button.className.replace('disabled','active');
    }
    var elem2 = document.querySelectorAll(data_string);
    elem1[0].className = elem1[0].className.replace('selected', 'unselected');
    elem2[0].className = elem2[0].className.replace('unselected', 'selected');
    if ( elem1Pos === max_val ) {
      reveal_show_hide_button();
    }
  } else {
    //button_down(document.getElementById('show_hide').firstElementChild);
    show_hide(document.getElementById('show_hide').firstElementChild);
    //setTimeout(button_up(document.getElementById('show_hide').firstElementChild), 1000);
  }
}
function reveal_show_hide_button() {
  var sh_button = document.getElementById('show_hide_wrapper'),
      inner_nbutton = document.getElementById('next_button').firstElementChild;
  sh_button.style.visibility = 'visibile';
  sh_button.style.pointerEvents = 'auto';
  sh_button.style.opacity = 1;
  inner_nbutton.className = inner_nbutton.className.replace('active','disabled');
  setTimeout (function () {
  inner_nbutton.className = inner_nbutton.className.replace('disabled','active'); }, 2000);
}
function select_this_slide(el) {
  var slides = document.getElementsByClassName('slide');
  for(var i = 0; i < slides.length; i++) {
    slides[i].className = slides[i].className.replace(' selected', ' unselected');
  }
  var this_slide = el.parentElement.parentElement.parentElement.parentElement.parentElement.parentElement.parentElement;
  this_slide.className = this_slide.className.replace(' unselected', ' selected');
}
function button_down(el) {
  if(!el.className.includes('disabled')) {
    el.style.transition = 'background-color 60ms';
    el.style.backgroundColor = 'white';
    el.firstElementChild.style.borderColor = 'grey';
  }
}
function button_up(el) {
  el.style.transition = 'background-color 800ms';
  el.style.backgroundColor = 'transparent';
  el.firstElementChild.style.borderColor = 'white';
}

function show_hide(el){
  var slide_box = el.parentElement.parentElement.parentElement;
  if(el.className.includes('hide')) {
    slide_box.style.top = '-80vh';
    el.className = 'button_circle show';
    el.firstElementChild.className = 'button_arrow button_arrow_down';
    el.parentElement.parentElement.style.backgroundColor = 'rgba(0, 0, 0, 1)';
    save_log();
    document.getElementById('shadow_box').style.backgroundColor = 'rgba(0,0,0,0)';
    setTimeout(function(){
      document.getElementById('report_wrapper_inner').style.filter = 'blur(0px)';
    },600);
  } else {
    slide_box.style.top = '5vh';
    el.className = 'button_circle hide';
    el.firstElementChild.className = 'button_arrow button_arrow_up';
    el.parentElement.parentElement.style.backgroundColor = 'rgba(0, 0, 0, .85)';
    document.getElementById('shadow_box').style.backgroundColor = 'rgba(0,0,0,0.7)';
    document.getElementById('report_wrapper_inner').style.filter = 'blur(5px)';
  }
}
