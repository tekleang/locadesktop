$(document).ready(function(){
		function styleScrollMenu(scrollTop){//shrink scroll
			var navTop;
			if ($('#header').find('div').hasClass('nav-top')) {
				navTop = $('#header .nav-top').outerHeight()-30;
			}else {
				navTop = 0;
			}
			if (scrollTop > navTop) {
				$('#header .container-fluid-menu').addClass('shrink-container-fluid-menu');
				$('#header .nav-bottom .box-logo').addClass('shrink-box-logo');
				$('#header .nav-bottom .logo').addClass('shrink-logo');
				$('#header .nav-bottom .menu').addClass('shrink-menu');
				$('#header .nav-bottom .media').addClass('shrink-media');
				$('#content .sub-banner .img').addClass('shrink-img');
			}else {
				$('#header .container-fluid-menu').removeClass('shrink-container-fluid-menu');
				$('#header .nav-bottom .box-logo').removeClass('shrink-box-logo');
				$('#header .nav-bottom .logo').removeClass('shrink-logo');
				$('#header .nav-bottom .menu').removeClass('shrink-menu');
				$('#header .nav-bottom .media').removeClass('shrink-media');
				$('#content .sub-banner .img').removeClass('shrink-img');
			}
		}
		if ($(window).scrollTop()) {
			var scrollTop = $(window).scrollTop();
			styleScrollMenu(scrollTop);
		}
		$(window).scroll(function(){
			var scrollTop = $(this).scrollTop();
			styleScrollMenu(scrollTop);
		});

        var x = 1;
        $('#hamburger-menu').on('click',function(){
            if (x==1) {
                $(this).addClass('change-hamburger-menu');
                $('#header .slidbar .container').prepend($(this));
                $('#header .slidbar').stop().slideDown();
                x = 2;
            }else{
                $(this).removeClass('change-hamburger-menu');
                $('#header .slidbar').stop().slideUp();
                $('.nav-bottom .box-tool-top').prepend($(this));
                x = 1;
            }
            
        });

        
        function fullHeightScreen() {
	        var amountHeaderH = '';
	        var windowHight = $(window).height();
	        var windowWidth = $(window).width();
	        var dataHeaderH = $("[data-headerh]").outerHeight();
	        if (typeof dataHeaderH !== 'undefined') {
	            amountHeaderH = dataHeaderH;
	        } else {
	            amountHeaderH = '';
	        }
	        $("[data-fullscreen]").each(function() {
	            var imgWidth = $(this).find('img').width();
	            $("[data-fullscreen]").css({ 'height': windowHight - amountHeaderH + 'px', 'width': '100%', 'overflow': 'hidden' });
	        });
	    }
	    $(window).resize(function() {
	        fullHeightScreen();
	    });
	    fullHeightScreen();

	    // partner slick
	    $('.partner-slick').slick({
	        dots: true,
	        dotsClass: 'dots-cus',
	        arrows: false,
	        autoplay: true,
	        autoplaySpeed: 5000
	    });
	    $('.dots-cus li button').text('');

	    // partner slick
	    $('.click-slide').slick({
	        dots: true,
	        dotsClass: 'dots-cus',
	        arrows: false,
	        autoplay: true,
	        autoplaySpeed: 5000
	    });
	    $('.dots-cus li button').text('');

	    function clickShow(){
	    $('[data-parent]').each(function(){
	      var styleBox = $(this).data('parent');
	      var dataSign = $(this).find('[data-sign]');
	      var arrSign,arrSign2;
	      $(this).prepend('<input class="txt-num-sign2" type="hidden" value="1">');
	      $(this).find('[data-clickshow]').wrap('<div style="cursor:pointer;position:relative;"></div>');
	      if (dataSign.data('sign')) {
	        arrSign = dataSign.data('sign');
	        arrSign2 = arrSign.split(',');
	        var paddingLeft = $(this).find('[data-clickshow]').css('paddingLeft');
	        var paddingTop = $(this).find('[data-clickshow]').css('paddingTop');
	        $(this).find('[data-clickshow]').append('<span class="sSign-show font-main-color" style="font-size:25px;position:absolute;right:'+paddingLeft+';top:'+paddingTop+';">'+arrSign2[0]+'</span>');
	      }
	      if ($("[data-boxcontent]")) {
	        $("[data-boxcontent]").hide();
	      }
	      $(this).find("[data-clickshow]").on('click',function(){
	        var dataParent = $(this).parents('[data-parent]');
	        var dataClick = $(this).data('clickshow');
	        var elementShow = dataParent.find('[data-boxcontent]');
	        var dataShow = elementShow.data('boxcontent');
	        var numSign = dataParent.find('.txt-num-sign2').val();
	        if (arrSign2) {
	          $('.sSign-show').text(arrSign2[0]);
	          if (numSign == 1) {
	            $('.txt-num-sign2').val(1);
	            dataParent.find('.sSign-show').text(arrSign2[1]);
	            dataParent.find('.txt-num-sign2').val(2);
	          }else {
	            dataParent.find('.sSign-show').text(arrSign2[0]);
	            dataParent.find('.txt-num-sign2').val(1);
	          }
	        }
	        if (dataParent) {//if dataParent was input in element
	          if (dataShow == 'slideToggle') {//if you want to show as slide Toggle
	            $('[data-boxcontent]').stop().slideUp();
	            dataParent.find('[data-boxcontent]').stop().slideToggle();
	          }
	        }
	      });
	    });
	  }

	  clickShow();


	});