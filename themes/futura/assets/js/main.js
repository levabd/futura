(function() {

    var onHead = true;

    $('#fullpage').fullpage({
        //Navigation
        menu: '#menu',
        lockAnchors: false,
        anchors: ['head', 'about', 'work', 'capacity', 'goals'],
        navigation: true,
        navigationPosition: 'left',
        navigationTooltips: [],
        showActiveTooltip: false,
        slidesNavigation: false,
        slidesNavPosition: 'bottom',

        //Scrolling
        css3: true,
        scrollingSpeed: 700,
        autoScrolling: true,
        fitToSection: true,
        fitToSectionDelay: 1000,
        scrollBar: false,
        easing: 'easeInOutCubic',
        easingcss3: 'ease',
        loopBottom: false,
        loopTop: false,
        loopHorizontal: true,
        continuousVertical: false,
        continuousHorizontal: false,
        scrollHorizontally: false,
        interlockedSlides: false,
        dragAndMove: false,
        offsetSections: false,
        resetSliders: false,
        fadingEffect: false,
        normalScrollElements: null,
        scrollOverflow: true,
        scrollOverflowReset: false,
        scrollOverflowOptions: null,
        touchSensitivity: 15,
        normalScrollElementTouchThreshold: 5,
        bigSectionsDestination: null,

        //Accessibility
        keyboardScrolling: true,
        animateAnchor: true,
        recordHistory: true,

        //Design
        controlArrows: true,
        verticalCentered: true,
        sectionsColor: ['transparent', '#F3F6FF', '#FFF', '#F3F6FF', '#FFF'],
        paddingTop: '0',
        paddingBottom: '0',
        fixedElements: '#header, #footer',
        responsiveWidth: 0,
        responsiveHeight: 0,
        responsiveSlides: false,
        parallax: false,
        parallaxOptions: {
            type: 'reveal',
            percentage: 62,
            property: 'translate'
        },

        //Custom selectors
        sectionSelector: '.section',
        slideSelector: '.slide',

        lazyLoading: true,

        //events
        onLeave: function(index, nextIndex, direction) {
            var leavingSection = $(this);

            //after leaving section 1
            if (index == 1 && direction == 'down') {
                onHead = false;
                $("#layout-header").animate({
                    "background-color": '#f66367',
                    "height": "60px"
                });

                $(".navbar-brand").animate({
                    "padding-top": "0",
                    "padding-left": "0"
                });

                $(".nav-link").animate({
                    "padding-top": "0"
                });

                $(".navbar-brand img").attr("src", rootPath + '/themes/futura/assets/images/futura-logo-extra-small.png');

                if ($(window).width() < 992) {
                    $(".navbar-nav").animate({
                        "background-color": "#f66367 !important"
                    });
                }
            } else if (index == 2 && direction == 'up') {
                $("#layout-header").animate({
                    "background-color": 'transparent',
                    "height": "150px"
                });

                $(".navbar-brand").animate({
                    "padding-top": "10px",
                    "padding-left": "50px"
                });

                $(".nav-link").animate({
                    "padding-top": "0.5rem"
                });

                $(".navbar-brand img").attr("src", rootPath + '/themes/futura/assets/images/futura-logo.png');

                if ($(window).width() < 992) {
                    $(".navbar-nav").animate({
                        "background-color": "transparent !important"
                    });
                }
                onHead = true;
            }
        },
        afterLoad: function(anchorLink, index) {},
        afterRender: function() {},
        afterResize: function() {},
        afterResponsive: function(isResponsive) {},
        afterSlideLoad: function(anchorLink, index, slideAnchor, slideIndex) {},
        onSlideLeave: function(anchorLink, index, slideIndex, direction, nextSlideIndex) {}
    });


    $(".navbar .nav-item, .navbar .nav-item a").mouseover(function() {
        if (!onHead) {
            $(this).css("color", "#ff9fa2")
        }
    }).mouseout(function() {
        if (!onHead) {
            $(this).css("color", "#fff")
        }
    });

})();