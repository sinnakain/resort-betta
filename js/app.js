"use strict";

function _extends() {
  _extends = Object.assign || function (target) {
    for (var i = 1; i < arguments.length; i++) {
      var source = arguments[i];
      for (var key in source) {
        if (Object.prototype.hasOwnProperty.call(source, key)) {
          target[key] = source[key];
        }
      }
    }
    return target;
  };
  return _extends.apply(this, arguments);
}

/* ^^^
 * Глобальные-вспомогательные функции
 * ========================================================================== */

/**
 * Возвращает HTML-код иконки из SVG-спрайта
 *
 * @param {String} name Название иконки из спрайта
 * @param {Object} opts Объект настроек для SVG-иконки
 *
 * @example SVG-иконка
 * getSVGSpriteIcon('some-icon', {
 *   tag: 'div',
 *   type: 'icons', // colored для подключения иконки из цветного спрайта
 *   class: '', // дополнительные классы для иконки
 *   mode: 'inline', // external для подключаемых спрайтов
 *   url: '', // путь до файла спрайта, необходим только для подключаемых спрайтов
 * });
 */
function getSVGSpriteIcon(name, opts) {
  opts = _extends({
    tag: 'div',
    type: 'icons',
    "class": '',
    mode: 'inline',
    url: ''
  }, opts);
  var external = '';
  var typeClass = '';

  if (opts.mode === 'external') {
    external = "".concat(opts.url, "/sprite.").concat(opts.type, ".svg");
  }

  if (opts.type !== 'icons') {
    typeClass = " svg-icon--".concat(opts.type);
  }

  opts["class"] = opts["class"] ? " ".concat(opts["class"]) : '';
  return "\n    <".concat(opts.tag, " class=\"svg-icon svg-icon--").concat(name).concat(typeClass).concat(opts["class"], "\" aria-hidden=\"true\" focusable=\"false\">\n      <svg class=\"svg-icon__link\">\n        <use xlink:href=\"").concat(external, "#").concat(name, "\"></use>\n      </svg>\n    </").concat(opts.tag, ">\n  ");
}

/* ^^^
 * JQUERY Actions
 * ========================================================================== */


$(function () {
  'use strict';
  /**
   * определение существования элемента на странице
   */

  $.exists = function (selector) {
    return $(selector).length > 0;
  };

  var ajaxLoader = '.js-ajax-loader';
  var limitCounter = 0;
  var ajaxLimit = 2;
  var isLoading = false;

  function initAjaxLoader() {
    var $ajaxLoader = $(ajaxLoader);
    var $target = $ajaxLoader.data('target');
    var url = $ajaxLoader.data('url');

    var loader = function loader() {
      if (limitCounter >= ajaxLimit) {
        $ajaxLoader.addClass('is-hidden');
        return false;
      }

      if (isLoading) {
        return;
      }

      isLoading = true;
      $ajaxLoader.removeClass('is-hidden');
      $.ajax({
        url: url,
        success: function success(res) {
          $(res).appendTo($target);
          $ajaxLoader.addClass('is-hidden');
          limitCounter++;
          isLoading = false;
          initApartmentImages();
        }
      });
    };

    inView(ajaxLoader).on('enter', loader);
  }

  if ($.exists(ajaxLoader)) {
    initAjaxLoader();
  }

  var apartmentImages = '.js-apartment-images';
  var apartmentCounter = 0;

  function initApartmentImages() {
    var $apartmentImages = $(apartmentImages).not('.is-inited');
    $apartmentImages.addClass('is-inited');

    var sliderFn = function sliderFn(index, elem) {
      var $this = $(elem);
      var className = apartmentImages.replace('.', '') + '--i' + apartmentCounter;
      var $current = $this.closest('.js-apartment').find('.js-apartment-current-slide');
      $this.addClass(className);
      var drag = false;

      if ($this.closest('.apartment--reservation').length) {
        drag = true;
      }

      var slider = tns({
        container: '.' + className,
        items: 1,
        nav: false,
        slideBy: 'page',
        autoplay: false,
        mouseDrag: drag,
        touch: drag
      });
      slider.events.on('transitionEnd', function () {
        $current.html(slider.getInfo().displayIndex);
      });
      apartmentCounter++;
    };

    $.each($apartmentImages, sliderFn);
  }

  window.initApartmentImages = initApartmentImages;

  if ($.exists(apartmentImages)) {
    initApartmentImages();
  }

  var $asideNav = $('.js-aside-nav');
  var $asideNavOverlay = $('.js-aside-nav-overlay');
  var $asideNavInner = $('.js-aside-nav-inner');
  var $asideNavScroller = $('.js-aside-nav-scroller');
  var toogleAsideNav = '.js-toggle-aside-nav';
  var navIsOpened = false;
  var $body = $('body');
  var $asideWorksappendnow = $('.js-works-append-now');
  var $navScroller = $asideNavScroller.filter('[data-nav="menu"]');
  $(document).on('click', toogleAsideNav, function (event) {
    event.preventDefault();
    $asideNav.toggleClass('is-opened');
    var dataNav = $(this).data('nav');
    navIsOpened = !navIsOpened;

    if (navIsOpened) {
      if (dataNav === "filter") {
        $navScroller = $asideNavScroller.filter('[data-nav="filter"]');
        $asideNav.removeClass('is-opened-menu');
        $asideNav.addClass('is-opened-filter');
        bodyScrollLock.disableBodyScroll($navScroller[0]);
      } else {
        $navScroller = $asideNavScroller.filter('[data-nav="menu"]');
        $asideNav.addClass('is-opened-menu');
        $asideNav.removeClass('is-opened-filter');
        bodyScrollLock.disableBodyScroll($navScroller[0]);
      }
    } else {
      bodyScrollLock.enableBodyScroll($navScroller[0]);
      $asideNav.removeClass('is-opened-menu');
      $asideNav.removeClass('is-opened-filter');
    }
  });
  $(window).on('resize', function () {
    if (window.matchMedia('(min-width: 1280px').matches) {
      if (navIsOpened) {
        $asideNav.removeClass('is-opened');
        navIsOpened = false;
        bodyScrollLock.enableBodyScroll();
      }
    }
  });
  $asideWorksappendnow.on('click', function (event) {
    navIsOpened = false;
    $asideNav.removeClass('is-opened');
    $asideNav.removeClass('is-opened-menu');
    $asideNav.removeClass('is-opened-filter');
    bodyScrollLock.enableBodyScroll();
  });
  var cardImages = '.js-card-images-gallery';

  function initCardImages() {
    var $cardImages = $(cardImages);

    var sliderFn = function sliderFn(index, elem) {
      var $this = $(elem);
      var className = cardImages.replace('.', '') + '--i' + index;
      var $current = $this.closest('.js-card-images').find('.js-card-current-slide');
      $this.addClass(className);
      var slider = tns({
        container: '.' + className,
        items: 1,
        nav: false,
        slideBy: 'page',
        autoplay: false,
        mouseDrag: true,
        touch: true
      });
      slider.events.on('transitionEnd', function () {
        $current.html(slider.getInfo().displayIndex);
      });
    };

    $.each($cardImages, sliderFn);
  }

  if ($.exists(cardImages)) {
    initCardImages();
  }

  $('.js-form-open').on('click', function (event) {
    event.preventDefault();
    $(this).hide();
    $('.js-form').slideDown();
  });
  var inputSpinner = '.js-ipnut-spinner';

  function initInputSpinner() {
    var spinner = function spinner() {
      var $this = $(this);
      var $minus = $this.find('.js-input-spinner-minus');
      var $plus = $this.find('.js-input-spinner-plus');
      var $counter = $this.find('.js-input-spinner-counter');
      var maxlength = $counter.data('maxlength'); // prevent paste and drop value

      $counter.on('paste drop', function (event) {
        event.preventDefault();
      }); // comply with the maximum number of characters

      $counter.on('input', function (event) {
        var val = $counter.val();
        var re = new RegExp('\\d\\d');

        if (val.length > maxlength) {
          $counter.val(val.match(re)[0]);
        }
      }); // counter down

      $minus.on('click', function () {
        var val = $counter.val();

        if (val == '') {
          val = 1;
        } else {
          val--;
        }

        if (val <= 1) {
          val = 1;
        }

        $counter.val(val);
      }); // counter up

      $plus.on('click', function () {
        var val = $counter.val();

        if (val == '') {
          val = 1;
        } else {
          val++;
        }

        if (('' + val).length > maxlength) {
          var maxVal = '';

          for (var i = 0; i < maxlength; i++) {
            maxVal += '9';
          }

          val = maxVal;
        }

        $counter.val(val);
      });
    };

    $.each($(inputSpinner), spinner); // $('.js-selection-submit').on('click', function(event){
    //     event.stopPropagation();
    //     var $form = $(this).closest('form');
    //     $.each($form.find(inputSpinner), function(){
    //         var $counter = $(this).find('.js-input-spinner-counter');
    //         $counter.attr('placeholder', '');
    //     });
    // });
    // $(document).on('click', function(){
    //     $('.js-input-spinner-counter').attr('placeholder', '.');
    // });

    var changeButton = $('.js-counter-change');

    var change = function change(event) {
      event.preventDefault();
      var $this = $(this);
      var $counter = $(this).closest(inputSpinner);
      $counter.removeClass('counter--reservation');
    };

    changeButton.on('click', change);
  }

  if ($.exists(inputSpinner)) {
    initInputSpinner();
  }

  var counters = '.js-counter';

  function counterUp(counter) {
    var isInitialized = counter.classList.contains('is-inited');

    if (isInitialized) {
      return;
    }

    var demo = new CountUp(counter, 0, counter.dataset.counterUp);

    if (!demo.error) {
      demo.start();
    } else {
      console.error(demo.error);
    }

    counter.classList.add('is-inited');
  }

  if ($.exists(counters)) {
    inView(counters).on('enter', counterUp);
  }

  $('.js-form-submit').on('click', function (event) {
    event.stopPropagation();
    var $form = $(this).closest('.js-form');
    var $inputs = $form.find('input[required]');
    $.each($inputs, function () {
      var $this = $(this);

      if ($this.val() == '') {
        $this.addClass('has-error');
      }

      setTimeout(function () {
        $inputs.removeClass('has-error');
      }, 3000);
    });
  });
  $('.js-form').on('submit', function (event) {
    event.preventDefault();
    $('.js-form').addClass('is-hidden');
    $('.js-form-thanks').fadeIn();
  });
  var dateInput = document.querySelector('.js-date');

  function declOfNum(number, titles) {
    var cases = [2, 0, 1, 1, 1, 2];
    return titles[number % 100 > 4 && number % 100 < 20 ? 2 : cases[number % 10 < 5 ? number % 10 : 5]];
  }

  if ($.exists(dateInput)) {
    pickmeup.defaults.locales['ru'] = {
      days: ['Воскресенье', 'Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота'],
      daysShort: ['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб'],
      daysMin: ['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб'],
      months: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
      monthsShort: ['Янв', 'Фев', 'Мар', 'Апр', 'Май', 'Июн', 'Июл', 'Авг', 'Сен', 'Окт', 'Ноя', 'Дек']
    };
    pickmeup(dateInput, {
      format: 'd.m',
      mode: 'range',
      prev: '<div class="pickmeup-custom-prev"></div>',
      next: '<div class="pickmeup-custom-next"></div>',
      locale: 'ru',
      default_date: false
    });
    var $alert = $('.js-pickmeup-alert');
    var $alertContent = $('.js-pickmeup-alert-content');
    dateInput.addEventListener('pickmeup-fill', function (e) {
      var $month = $('.pmu-month.pmu-button');
      var text = $month.html().replace(',', '');

      if (/[a-zA-zа-яA-z]/.test(text)) {
        text = text.replace(/(\S+)(.+)/, '<strong>$1</strong> $2');
        $month.html(text);
      }

      var $selected = $('.pmu-days .pmu-selected');
      var count = $selected.length;

      if (count > 1) {
        $selected.eq(0).addClass('pmu-selected-custom-first');
        $selected.eq(count - 1).addClass('pmu-selected-custom-last');
        $selected.addClass('pmu-selected-custom');
        $alert.addClass('is-visible');
        $alertContent.html(count + ' ' + declOfNum(count, ['день', 'дня', 'дней']));
        var pos = {
          y: $('.pmu-selected-custom-last').offset().top,
          x: $('.pmu-selected-custom-last').offset().left
        };
        $alert.css({
          top: pos.y,
          left: pos.x
        });
      } else {
        $alert.removeClass('is-visible');
        $selected.addClass('pmu-selected-custom');
      }
    });
    dateInput.addEventListener('pickmeup-hide', function (e) {
      $alert.removeClass('is-visible');
    });
    dateInput.addEventListener('pickmeup-show', function (e) {
      var $selected = $('.pmu-days .pmu-selected');

      if ($selected.length > 2) {
        setTimeout(function () {
          $alert.addClass('is-visible');
          var pos = {
            y: $('.pmu-selected-custom-last').offset().top,
            x: $('.pmu-selected-custom-last').offset().left
          };
          $alert.css({
            top: pos.y,
            left: pos.x
          });
        }, 15);
      }
    });
  }

  var appBg = '.js-app-bg';

  function setAppBg() {
    var $appBg = $(appBg);
    $appBg.each(function () {
      var $this = $(this);
      var imgScr = $this.data('bg');

      if (imgScr) {
        $this.css('background-image', 'url(' + imgScr + ')');
      }
    });
  }

  if ($.exists(appBg)) {
    setAppBg();
  }

  var rating = '.js-rating';

  function initRating() {
    var $rating = $(rating);

    var fill = function fill() {
      var $this = $(this);
      var $fill = $this.find('.js-rating-fill');
      var value = $this.data('value');
      $fill.css('width', value);
    };

    $.each($rating, fill);
  }

  if ($.exists(rating)) {
    initRating();
  }

  var reviewsSlider = '.js-reviews-slider';

  function initReviewsSlider() {
    var $current = $('.js-reviews-slider-current');
    var slider = tns({
      container: reviewsSlider,
      items: 1,
      nav: false,
      slideBy: 'page',
      autoplay: true,
      mouseDrag: true,
      autoHeight: true,
      touch: true
    });
    slider.events.on('transitionEnd', function () {
      $current.html(slider.getInfo().displayIndex);
    });
  }

  if ($.exists(reviewsSlider)) {
    initReviewsSlider();
  }

  $('.js-selection-submit').on('click', function (event) {
    var $input = $('input');

    if ($input.val() == '') {
      console.log($input);
      $input.addClass('has-error');
      setTimeout(function () {
        $input.removeClass('has-error');
      }, 3000);
    } // $input.one('focus', function(event){
    //     $input.removeClass('has-error');
    // });

  });
  var tabs = '.js-tabs';

  function initTabs() {
    var $tabs = $(tabs);
    var $titles = $tabs.find('.js-tabs-title');
    var $bodys = $tabs.find('.js-tabs-body');

    var toggle = function toggle() {
      var $this = $(this);
      var index = $this.data('tab-index');

      if ($this.hasClass('is-active')) {
        return;
      }

      $titles.removeClass('is-active');
      $bodys.removeClass('is-active');
      $this.addClass('is-active');
      $bodys.stop().hide().filter('[data-tab-index="' + index + '"]').fadeIn();
    };

    $titles.on('click', toggle);
  }

  if ($.exists(tabs)) {
    initTabs();
  }
});
