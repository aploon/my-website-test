jQuery(document).ready(function($){var shuffleContainers=[];activeShuffleContainerIndex=0;if(document.location.href.indexOf('webshopworks')!==-1){activeShuffleContainerIndex=1;}
$('.shuffle-items').each(function(){shuffleContainers.push(this);});$('#templates-sidemenu .shuffle-filters li').on('click',function(){$(this).addClass('active').siblings().removeClass('active');var $this=$(this),$target=$(shuffleContainers[activeShuffleContainerIndex]),$items=$target.find('.col'),cat=$this.data('group');if(!cat){$items.show();}else{$items.hide().filter('[data-groups*="'+cat+'"]').show();}
$('html, body').animate({scrollTop:650},300);});jQuery('#templates-sidemenu .source-filter li').on('click',function(){activeShuffleContainerIndex=jQuery(this).data('index');jQuery('#templates-sidemenu .selector').removeClass('active').eq(activeShuffleContainerIndex).addClass('active');jQuery('.templates-holder .selector').removeClass('active').eq(activeShuffleContainerIndex).addClass('active');if(jQuery(this).data('url')){window.history.replaceState({},'',jQuery(this).data('url'));}});});