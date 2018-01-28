(function() {

    // Tips
    $('[data-toggle="popover"]').popover();

    $("#upper").click(function(e) {
        $("html, body").animate({ scrollTop: 0 }, "slow");
        e.preventDefault();
    });

})();