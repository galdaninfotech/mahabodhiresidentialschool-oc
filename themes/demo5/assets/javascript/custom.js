

$(function () {

  // Menu
  $('#main_navbar').bootnavbar({
    //option
      //animation: false
  });



  // Article Example 1
  var $animation_elements = $('.animation-element');
var $window = $(window);

function check_if_in_view() {
  var window_height = $window.height();
  var window_top_position = $window.scrollTop();
  var window_bottom_position = (window_top_position + window_height);
 
  $.each($animation_elements, function() {
    var $element = $(this);
    var element_height = $element.outerHeight();
    var element_top_position = $element.offset().top;
    var element_bottom_position = (element_top_position + element_height);
 
    //check to see if this current container is within viewport
    if ((element_bottom_position >= window_top_position) &&
        (element_top_position <= window_bottom_position)) {
      $element.addClass('in-view');
    } else {
      $element.removeClass('in-view');
    }
  });
}

$window.on('scroll resize', check_if_in_view);
$window.trigger('scroll');

 
// Country wise accordion sponsorship
let toggles = document.getElementsByClassName("toggle");
let contentDiv = document.getElementsByClassName("content");
let icons = document.getElementsByClassName("icon");

for (let i = 0; i < toggles.length; i++) {
	toggles[i].addEventListener("click", () => {
		if (parseInt(contentDiv[i].style.height) != contentDiv[i].scrollHeight) {
			contentDiv[i].style.height = contentDiv[i].scrollHeight + "px";

			toggles[i].style.color = "#000";
			icons[i].classList.remove("fa-plus");
			icons[i].classList.add("fa-minus");
		} else {
			contentDiv[i].style.height = "0px";
			toggles[i].style.color = "#000";
			icons[i].classList.remove("fa-minus");
			icons[i].classList.add("fa-plus");

			contentDiv[i].classList.remove("heightActive");
			contentDiv[i].classList.add("heightActive");
		}

		for (let j = 0; j < contentDiv.length; j++) {
			if (j !== i) {
				contentDiv[j].style.height = 0;
				toggles[j].style.color = "#000";
				icons[j].classList.remove("fa-minus");
				icons[j].classList.add("fa-plus");
			}
		}
	});
}

 
});
