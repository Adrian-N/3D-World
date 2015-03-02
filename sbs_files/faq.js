/*  JavaScript Document                       */
/*  Written by Chris Converse for Lynda.com   */

$(document).ready(function() {

	// $('.faq').each(function(){
	// 	$(this).append('<div class="letter_q"></div><div class="letter_a"></div>');
	// });
	
	$('.articleTitle').click(function(){
		if ($(this).parent().is('.open')) { //check if div is open
			$(this).closest('.tutorialArticle').find('.articleContent').animate({'height':'0'},500);
			$(this).closest('.tutorialArticle').find('.letter_a').fadeOut(500);
			$(this).closest('.tutorialArticle').find('.letter_q').animate({'left':'25px'});
			$(this).closest('.tutorialArticle').removeClass('open');
		}else{
			var newHeight = $(this).closest('.tutorialArticle').find('.articleContentInside').height() + 'px';
			$(this).closest('.tutorialArticle').find('.articleContent').animate({'height':newHeight},500);
			$(this).closest('.tutorialArticle').find('.letter_a').fadeIn(500);
			$(this).closest('.tutorialArticle').find('.letter_q').animate({'left':'10px'});
			$(this).closest('.tutorialArticle').addClass('open');
		}
	});
	findAnchorLink();
    			
});

// function findAnchorLink(){
// 	if (location.href.indexOf('#') != -1) {
// 		var namedAnchor = window.location.hash;
// 		var faqToFind = namedAnchor + ' .faq_question';
// 		$(faqToFind).trigger('click');
// 	}
// }

