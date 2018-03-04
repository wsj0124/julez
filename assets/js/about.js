jQuery(function($){

    /**
     * Original source:  https://codepen.io/quasimondo/pen/lDdrF
     */

    var colors = [
        [100,43,115],   // Purple
        [195,55,100],   // Pink
        [29,38,113],    // Navy
        [198,66,110],   // Salmon Pink
        [189,63,50],    // Peach/Orange
    ];

     // Color Indices: Current left, next left, current right, next right.
    var indices = [0,1,2,3];
    var step    = 0;
    var speed   = 0.0005;

    function updateGradient() {
        if ($ === undefined) return;

        var c0_0 = colors[indices[0]];
        var c0_1 = colors[indices[1]];
        var c1_0 = colors[indices[2]];
        var c1_1 = colors[indices[3]];

        var istep = 1 - step;
        var r1 = Math.round(istep * c0_0[0] + step * c0_1[0]);
        var g1 = Math.round(istep * c0_0[1] + step * c0_1[1]);
        var b1 = Math.round(istep * c0_0[2] + step * c0_1[2]);
        var color1 = "rgb(" + r1 + "," + g1 + "," + b1 + ")";

        var r2 = Math.round(istep * c1_0[0] + step * c1_1[0]);
        var g2 = Math.round(istep * c1_0[1] + step * c1_1[1]);
        var b2 = Math.round(istep * c1_0[2] + step * c1_1[2]);
        var color2 = "rgb(" + r2 + "," + g2 + "," + b2 + ")";

        $('body').css({
            background: "-webkit-gradient(linear, left top, right top, from("+color1+"), to("+color2+"))"}).css({
                background: "-moz-linear-gradient(left, "+color1+" 0%, "+color2+" 100%)"});

        step += speed;

        if (step >= 1) {
            step %= 1;
            indices[0] = indices[1];
            indices[2] = indices[3];

            // Pick two new target color indices but do not pick the same as the current one.
            indices[1] = ( indices[1] + Math.floor( 1 + Math.random() * (colors.length - 1))) % colors.length;
            indices[3] = ( indices[3] + Math.floor( 1 + Math.random() * (colors.length - 1))) % colors.length;
        }
    }

    setInterval(updateGradient, 10);

});
