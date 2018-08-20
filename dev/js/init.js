jQuery(document).ready(function() {
  jQuery('.mas_list h3').each(function() {
    var tis = jQuery(this), state = false, answer = tis.next('div').hide().css('height','auto').slideUp();
    tis.click(function() {
      state = !state;
      answer.slideToggle(state);
      tis.toggleClass('active',state);
    });
  });
});
