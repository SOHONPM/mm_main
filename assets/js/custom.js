"use strict";

/**
 * Custom JS.
 *
 * Custom JS scripts.
 *
 * @since 1.0.0
 */
(function ($) {
  $(".owl-carousel").owlCarousel({
    loop: true,
    margin: 10,
    autoplay: false,
    autoHeight: true,
    nav: true,
    navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
    responsive: {
      0: {
        items: 1,
        nav: false
      },
      600: {
        items: 1,
        nav: true
      },
      1000: {
        items: 1
      }
    }
  });
  $(".slider1").owlCarousel({
    loop: true,
    margin: 10,
    autoplay: false,
    autoHeight: true,
    nav: true,
    navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
    responsive: {
      0: {
        items: 1,
        nav: false
      },
      600: {
        items: 1,
        nav: true
      },
      1000: {
        items: 1
      }
    }
  });

  $.fn.VideoPopUp = function (options) {
    var defaults = {
      backgroundColor: "#000000",
      opener: "video",
      maxweight: "640",
      pausevideo: false,
      idvideo: ""
    };
    var patter = this.attr("id");
    var settings = $.extend({}, defaults, options);
    var video = document.getElementById(settings.idvideo);

    function stopVideo() {
      var tag = $("#" + patter + "").get(0).tagName;

      if (tag == "video") {
        video.pause();
        video.currentTime = 0;
      }
    }

    $("#" + patter + "").css("display", "none");
    $("#" + patter + "").append('<div id="opct"></div>');
    $("#opct").css("background", settings.backgroundColor);
    $("#" + patter + "").css("z-index", "100001");
    $("#" + patter + "").css("position", "fixed");
    $("#" + patter + "").css("top", "0");
    $("#" + patter + "").css("bottom", "0");
    $("#" + patter + "").css("right", "0");
    $("#" + patter + "").css("left", "0");
    $("#" + patter + "").css("padding", "auto");
    $("#" + patter + "").css("text-align", "center");
    $("#" + patter + "").css("background", "none");
    $("#" + patter + "").css("vertical-align", "vertical-align");
    $("#videCont").css("z-index", "100002");
    $("#" + patter + "").append('<div id="closer_videopopup">&otimes;</div>');
    $("#" + settings.opener + "").on("click", function () {
      $("#" + patter + "").show();
      $("#" + settings.idvideo + "").trigger("play");
    });
    $("#closer_videopopup").on("click", function () {
      if (settings.pausevideo == true) {
        $("#" + settings.idvideo + "").trigger("pause");
      } else {
        stopVideo();
      }

      $("#" + patter + "").hide();
    });
    return this.css({});
  };

  $("#vidBox").VideoPopUp({
    backgroundColor: "#17212a",
    opener: "videoBtn",
    maxweight: "340",
    idvideo: "videoPopper"
  });
  $(document).ready(function () {
    setTimeout(function () {
      $(".preloader").addClass("hide");
      $("body").addClass("scroll-enable");
    }, 1500);
  });
})(jQuery);

(function ($) {
  //Smooth scroll
  jQuery('a[href^="#"]').not('.carousel-arrow').click(function () {
    var href = jQuery.attr(this, 'href');
    $('html, body').animate({
      scrollTop: jQuery(href).offset().top
    }, 500, function () {
      window.location.hash = href;
    });
    return false;
  });
})(jQuery);

(function ($) {
  $(function () {
    if (typeof $().slick !== "undefined") {
      $(".carousel-cols-3").each(function () {
        var $carousel_nav = $(this).find(".carousel-nav");
        var $carousel_items = $(this).find(".carousel-items");
        $carousel_items.slick({
          dots: false,
          infinite: true,
          arrows: true,
          speed: 300,
          slidesToShow: 3,
          slidesToScroll: 3,
          appendArrows: $carousel_nav,
          responsive: [{
            breakpoint: 992,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2
            }
          }, {
            breakpoint: 768,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }]
        });
      });
    }
  });
})(jQuery);

(function ($) {
  $(function () {
    $(".button-dropdown").click(function () {
      if ($(this).next().hasClass("active")) {
        $(this).next().removeClass("active");
      } else {
        $(".content-block").removeClass("active");
        $(this).next().addClass("active");
      }
    });
  });
})(jQuery);

(function ($) {
  $(function () {
    $('.insideCircle').click(function (event) {
      var className = '.' + $(this).closest('table').prop('className').split(' ')[0] + ' .insideCircle'; // alert(className)

      if (!$(this).hasClass('clicked')) {
        $(className).addClass('hide');
        $(this).removeClass('hide').addClass('clicked'); // console.log(className);
      } else {
        $(className).removeClass('hide');
        $(this).removeClass('clicked');
        $(className).removeClass('hide');
      }

      var x = event.clientX;
      var y = event.clientY;
      var max = 10;
      var coords = "X coords: " + x + ", Y coords: " + y;
      var offset = $(this).offset(); // alert(coords)

      var present = '#' + $(this).attr('class').split(' ')[1];
      prev = [$(this).attr('class').split(' ')[1] - 1];

      if (prev < 1) {
        prev = max;
      }

      var prev = '#' + prev;
      $(present).attr({
        "x1": offset.left + 5,
        "y1": offset.top + 5
      });
      $(prev).attr({
        "x2": offset.left + 5,
        "y2": offset.top + 5
      });

      for (var index = 1; index <= max; index++) {
        var variable = "#" + index;
        console.log();

        if ($(variable).attr('x1') > 0 && $(variable).attr('x2') > 0 && $(variable).attr('y1') > 0 && $(variable).attr('y2') > 0) {
          $(variable).removeClass('hide');
        }
      }
    });
  });
})(jQuery);

window.cfields = [];

window._show_thank_you = function (id, message, trackcmp_url) {
  var form = document.getElementById('_form_' + id + '_'),
      thank_you = form.querySelector('._form-thank-you');
  form.querySelector('._form-content').style.display = 'none';
  thank_you.innerHTML = message;
  thank_you.style.display = 'block';

  if (typeof trackcmp_url != 'undefined' && trackcmp_url) {
    // Site tracking URL to use after inline form submission.
    _load_script(trackcmp_url);
  }

  if (typeof window._form_callback !== 'undefined') window._form_callback(id);
};

window._show_error = function (id, message, html) {
  var form = document.getElementById('_form_' + id + '_'),
      err = document.createElement('div'),
      button = form.querySelector('button'),
      old_error = form.querySelector('._form_error');
  if (old_error) old_error.parentNode.removeChild(old_error);
  err.innerHTML = message;
  err.className = '_error-inner _form_error _no_arrow';
  var wrapper = document.createElement('div');
  wrapper.className = '_form-inner';
  wrapper.appendChild(err);
  button.parentNode.insertBefore(wrapper, button);
  document.querySelector('[id^="_form"][id$="_submit"]').disabled = false;

  if (html) {
    var div = document.createElement('div');
    div.className = '_error-html';
    div.innerHTML = html;
    err.appendChild(div);
  }
};

window._load_script = function (url, callback) {
  var head = document.querySelector('head'),
      script = document.createElement('script'),
      r = false;
  script.type = 'text/javascript';
  script.charset = 'utf-8';
  script.src = url;

  if (callback) {
    script.onload = script.onreadystatechange = function () {
      if (!r && (!this.readyState || this.readyState == 'complete')) {
        r = true;
        callback();
      }
    };
  }

  head.appendChild(script);
};

(function () {
  if (window.location.search.search("excludeform") !== -1) return false;

  var getCookie = function getCookie(name) {
    var match = document.cookie.match(new RegExp('(^|; )' + name + '=([^;]+)'));
    return match ? match[2] : null;
  };

  var setCookie = function setCookie(name, value) {
    var now = new Date();
    var time = now.getTime();
    var expireTime = time + 1000 * 60 * 60 * 24 * 365;
    now.setTime(expireTime);
    document.cookie = name + '=' + value + '; expires=' + now + ';path=/';
  };

  var addEvent = function addEvent(element, event, func) {
    if (element.addEventListener) {
      element.addEventListener(event, func);
    } else {
      var oldFunc = element['on' + event];

      element['on' + event] = function () {
        oldFunc.apply(this, arguments);
        func.apply(this, arguments);
      };
    }
  };

  var _removed = false;
  var form_to_submit = document.getElementById('_form_34_');
  var allInputs = form_to_submit.querySelectorAll('input, select, textarea'),
      tooltips = [],
      submitted = false;

  var getUrlParam = function getUrlParam(name) {
    var regexStr = '[\?&]' + name + '=([^&#]*)';
    var results = new RegExp(regexStr, 'i').exec(window.location.href);
    return results != undefined ? decodeURIComponent(results[1]) : false;
  };

  for (var i = 0; i < allInputs.length; i++) {
    var regexStr = "field\\[(\\d+)\\]";
    var results = new RegExp(regexStr).exec(allInputs[i].name);

    if (results != undefined) {
      allInputs[i].dataset.name = window.cfields[results[1]];
    } else {
      allInputs[i].dataset.name = allInputs[i].name;
    }

    var fieldVal = getUrlParam(allInputs[i].dataset.name);

    if (fieldVal) {
      if (allInputs[i].type == "radio" || allInputs[i].type == "checkbox") {
        if (allInputs[i].value == fieldVal) {
          allInputs[i].checked = true;
        }
      } else {
        allInputs[i].value = fieldVal;
      }
    }
  }

  var remove_tooltips = function remove_tooltips() {
    for (var i = 0; i < tooltips.length; i++) {
      tooltips[i].tip.parentNode.removeChild(tooltips[i].tip);
    }

    tooltips = [];
  };

  var remove_tooltip = function remove_tooltip(elem) {
    for (var i = 0; i < tooltips.length; i++) {
      if (tooltips[i].elem === elem) {
        tooltips[i].tip.parentNode.removeChild(tooltips[i].tip);
        tooltips.splice(i, 1);
        return;
      }
    }
  };

  var create_tooltip = function create_tooltip(elem, text) {
    var tooltip = document.createElement('div'),
        arrow = document.createElement('div'),
        inner = document.createElement('div'),
        new_tooltip = {};

    if (elem.type != 'radio' && elem.type != 'checkbox') {
      tooltip.className = '_error';
      arrow.className = '_error-arrow';
      inner.className = '_error-inner';
      inner.innerHTML = text;
      tooltip.appendChild(arrow);
      tooltip.appendChild(inner);
      elem.parentNode.appendChild(tooltip);
    } else {
      tooltip.className = '_error-inner _no_arrow';
      tooltip.innerHTML = text;
      elem.parentNode.insertBefore(tooltip, elem);
      new_tooltip.no_arrow = true;
    }

    new_tooltip.tip = tooltip;
    new_tooltip.elem = elem;
    tooltips.push(new_tooltip);
    return new_tooltip;
  };

  var resize_tooltip = function resize_tooltip(tooltip) {
    var rect = tooltip.elem.getBoundingClientRect();
    var doc = document.documentElement,
        scrollPosition = rect.top - ((window.pageYOffset || doc.scrollTop) - (doc.clientTop || 0));

    if (scrollPosition < 40) {
      tooltip.tip.className = tooltip.tip.className.replace(/ ?(_above|_below) ?/g, '') + ' _below';
    } else {
      tooltip.tip.className = tooltip.tip.className.replace(/ ?(_above|_below) ?/g, '') + ' _above';
    }
  };

  var resize_tooltips = function resize_tooltips() {
    if (_removed) return;

    for (var i = 0; i < tooltips.length; i++) {
      if (!tooltips[i].no_arrow) resize_tooltip(tooltips[i]);
    }
  };

  var validate_field = function validate_field(elem, remove) {
    var tooltip = null,
        value = elem.value,
        no_error = true;
    remove ? remove_tooltip(elem) : false;
    if (elem.type != 'checkbox') elem.className = elem.className.replace(/ ?_has_error ?/g, '');

    if (elem.getAttribute('required') !== null) {
      if (elem.type == 'radio' || elem.type == 'checkbox' && /any/.test(elem.className)) {
        var elems = form_to_submit.elements[elem.name];

        if (!(elems instanceof NodeList || elems instanceof HTMLCollection) || elems.length <= 1) {
          no_error = elem.checked;
        } else {
          no_error = false;

          for (var i = 0; i < elems.length; i++) {
            if (elems[i].checked) no_error = true;
          }
        }

        if (!no_error) {
          tooltip = create_tooltip(elem, "Please select an option.");
        }
      } else if (elem.type == 'checkbox') {
        var elems = form_to_submit.elements[elem.name],
            found = false,
            err = [];
        no_error = true;

        for (var i = 0; i < elems.length; i++) {
          if (elems[i].getAttribute('required') === null) continue;
          if (!found && elems[i] !== elem) return true;
          found = true;
          elems[i].className = elems[i].className.replace(/ ?_has_error ?/g, '');

          if (!elems[i].checked) {
            no_error = false;
            elems[i].className = elems[i].className + ' _has_error';
            err.push("Checking %s is required".replace("%s", elems[i].value));
          }
        }

        if (!no_error) {
          tooltip = create_tooltip(elem, err.join('<br/>'));
        }
      } else if (elem.tagName == 'SELECT') {
        var selected = true;

        if (elem.multiple) {
          selected = false;

          for (var i = 0; i < elem.options.length; i++) {
            if (elem.options[i].selected) {
              selected = true;
              break;
            }
          }
        } else {
          for (var i = 0; i < elem.options.length; i++) {
            if (elem.options[i].selected && !elem.options[i].value) {
              selected = false;
            }
          }
        }

        if (!selected) {
          elem.className = elem.className + ' _has_error';
          no_error = false;
          tooltip = create_tooltip(elem, "Please select an option.");
        }
      } else if (value === undefined || value === null || value === '') {
        elem.className = elem.className + ' _has_error';
        no_error = false;
        tooltip = create_tooltip(elem, "This field is required.");
      }
    }

    if (no_error && elem.name == 'email') {
      if (!value.match(/^[\+_a-z0-9-'&=]+(\.[\+_a-z0-9-']+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i)) {
        elem.className = elem.className + ' _has_error';
        no_error = false;
        tooltip = create_tooltip(elem, "Enter a valid email address.");
      }
    }

    if (no_error && /date_field/.test(elem.className)) {
      if (!value.match(/^\d\d\d\d-\d\d-\d\d$/)) {
        elem.className = elem.className + ' _has_error';
        no_error = false;
        tooltip = create_tooltip(elem, "Enter a valid date.");
      }
    }

    tooltip ? resize_tooltip(tooltip) : false;
    return no_error;
  };

  var needs_validate = function needs_validate(el) {
    return el.name == 'email' || el.getAttribute('required') !== null;
  };

  var validate_form = function validate_form(e) {
    var err = form_to_submit.querySelector('._form_error'),
        no_error = true;

    if (!submitted) {
      submitted = true;

      for (var i = 0, len = allInputs.length; i < len; i++) {
        var input = allInputs[i];

        if (needs_validate(input)) {
          if (input.type == 'text') {
            addEvent(input, 'blur', function () {
              this.value = this.value.trim();
              validate_field(this, true);
            });
            addEvent(input, 'input', function () {
              validate_field(this, true);
            });
          } else if (input.type == 'radio' || input.type == 'checkbox') {
            (function (el) {
              var radios = form_to_submit.elements[el.name];

              for (var i = 0; i < radios.length; i++) {
                addEvent(radios[i], 'click', function () {
                  validate_field(el, true);
                });
              }
            })(input);
          } else if (input.tagName == 'SELECT') {
            addEvent(input, 'change', function () {
              validate_field(this, true);
            });
          } else if (input.type == 'textarea') {
            addEvent(input, 'input', function () {
              validate_field(this, true);
            });
          }
        }
      }
    }

    remove_tooltips();

    for (var i = 0, len = allInputs.length; i < len; i++) {
      var elem = allInputs[i];

      if (needs_validate(elem)) {
        if (elem.tagName.toLowerCase() !== "select") {
          elem.value = elem.value.trim();
        }

        validate_field(elem) ? true : no_error = false;
      }
    }

    if (!no_error && e) {
      e.preventDefault();
    }

    resize_tooltips();
    return no_error;
  };

  addEvent(window, 'resize', resize_tooltips);
  addEvent(window, 'scroll', resize_tooltips);
  window._old_serialize = null;
  if (typeof serialize !== 'undefined') window._old_serialize = window.serialize;

  _load_script("//d3rxaij56vjege.cloudfront.net/form-serialize/0.3/serialize.min.js", function () {
    window._form_serialize = window.serialize;
    if (window._old_serialize) window.serialize = window._old_serialize;
  });

  var form_submit = function form_submit(e) {
    e.preventDefault();

    if (validate_form()) {
      // use this trick to get the submit button & disable it using plain javascript
      document.querySelector('#_form_34_submit').disabled = true;

      var serialized = _form_serialize(document.getElementById('_form_34_'));

      var err = form_to_submit.querySelector('._form_error');
      err ? err.parentNode.removeChild(err) : false;

      _load_script('https://mindmattersinstitute.activehosted.com/proc.php?' + serialized + '&jsonp=true');
    }

    return false;
  };

  addEvent(form_to_submit, 'submit', form_submit);
})();