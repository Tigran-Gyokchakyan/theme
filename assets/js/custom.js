$(function() {
    $('.items___1.kiteli .items1__item-img').attr('data-image-2', $('.items___1.kiteli .items1__item-img').attr('data-image'));
	if ($(document).find('.item_basic').length) {
			$('.item_basic .popup__slider-right').click(function() {
			var lemma = $('.item_basic .popup').find('.popup__slide').length;
			var lemma_now = $(this).parent('.popup__slider').find('.popup__slide.active').attr('data-in');
			if (lemma_now < (lemma - 2)) {
				$('.item_basic .popup').find('[data-in="' + parseInt(lemma_now) + '"]').removeClass('active');
				$('.item_basic .popup').find('[data-in="' + (parseInt(lemma_now) + parseInt(1)) + '"]').addClass('active');
				lemma_now++;
			}
			return false;
		});
		$('.item_basic .popup__slider-left').click(function() {
			var lemma = $('.item_basic .popup').find('.popup__slide').length;
			var lemma_now = $(this).parent('.popup__slider').find('.popup__slide.active').attr('data-in');
			if (lemma_now > 0) {
				$('.item_basic .popup').find('[data-in="' + parseInt(lemma_now) + '"]').removeClass('active');
				$('.item_basic .popup').find('[data-in="' + (parseInt(lemma_now) - parseInt(1)) + '"]').addClass('active');
				lemma_now - 1;
			}
			return false;
		});
		$('.item_basic .popup__slide-prev').click(function() {
			$('.item_basic .popup').find('[data-in]').removeClass('active');
			$('.item_basic .popup').find('[data-in="' + parseInt($(this).attr('data-in')) + '"]').addClass('active');
		});
	}
});