// aligning footer
$(document).ready(function () {
    setInterval(function () {

        var windowHeight = $(window).height();
        var footer = $('.footer');
        if (!footer)
            return;
        var footerHeight = footer.height();
        var footerTop = footer.position().top;
        var marginTop = 0;

        if (footerTop < windowHeight) {
            marginTop = (windowHeight - footerTop - footerHeight);
            footer.css('margin-top', marginTop + 'px'); // padding of 30 on footer
        }
        else
            footer.css('margin-top', '0px');

        footer.css('display', 'block');
    }, 250);
});