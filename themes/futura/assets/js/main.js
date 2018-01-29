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
        scrollOverflow: false,
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
        fixedElements: '#header, .footer',
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
                    "background-color": '#FD7D70'
                });
            } else if (index == 2 && direction == 'up') {
                $("#layout-header").animate({
                    "background-color": 'transparent'
                });
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
            $(this).css("color", "#ffd8d4")
        }
    }).mouseout(function() {
        if (!onHead) {
            $(this).css("color", "#fff")
        }
    });

})();