$(function () {
    const row1  = $('.timelineRow1').children();
    const row2  = $('.timelineRow2').children();
    const years = $('.timelineArrow').children().not('.timelineStart');

    let t = 300;
    years.each(function (i) {
        const pair = [row1.eq(i), row2.eq(i)];
        const img  = pair.find(el => el.is('img'));    // the icon in this column
        const box  = pair.find(el => !el.is('img'));   // the text box in this column

        [img, years.eq(i), box].forEach(function (el) {
            setTimeout(function () { el.addClass('show'); }, t);
            t += 350;
        });
        t += 500;
    });
});