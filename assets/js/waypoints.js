jQuery(function($) {
    /**
     * Initialises a animation delay when an element is scrolled-to.
     * @param object items Jquery items that we're targeting.
     * @param trigger
     * @return null
     */
    function onScrollInit(items, trigger) {
        items.each(function(element) {
        var element = $(this),
            animationClass = element.attr('data-c-animation'),
            animationDelay = element.attr('data-c-animation-delay');

            element.css({
              '-webkit-animation-delay' : animationDelay,
              '-moz-animation-delay'    : animationDelay,
              'animation-delay'         : animationDelay
            });

            var osTrigger = (trigger) ? trigger : element;

            osTrigger.waypoint(function() {
              element.addClass(animationClass);
              },{
                  triggerOnce: true,
                  offset: '95%'
            });
        });
    }

    onScrollInit($('.lazyload'));
});
