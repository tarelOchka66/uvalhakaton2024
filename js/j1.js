$(function() {
    let header = $('.menu');
    let mobileTel = $('.headertel').first(); // сохранем в переменную первый элемент с классом headertel
    let hederHeight = header.height(); // вычисляем высоту шапки

    $(window).scroll(function() {
        if ($(this).scrollTop() > 1) {
            header.addClass('header_fixed');
            $('body').css({
                'paddingTop': hederHeight + 'px' // делаем отступ у body, равный высоте шапки
            });
        } else {
            header.removeClass('header_fixed');
            $('body').css({
                'paddingTop': 0 // удаляю отступ у body, равный высоте шапки
            })
        }
     //    if ($(this).scrollTop() > 500) {
     //       mobileTel.fadeOut();
     //   } else {
      //      mobileTel.fadeIn();
     //   }
   //});
})});



