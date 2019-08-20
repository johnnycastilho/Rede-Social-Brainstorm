/*
 * DivBox - jQuery Plugin
 * Example and Documentation: http://tedk.com.br/blog/
 *
 * Version: 1.1 (13/07/2012)
 * Requires: jQuery v1.4+
 *
 * Copyright (c) 2012 Ted k'
 * http://tedk.com.br/
 *
 * Dual licensed under the MIT or GPL Version 2 licenses:
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.gnu.org/licenses/gpl.html
 */
(function($){
    $.fn.divbox = function(options){
        var $this = $(this);
		var class_padrao = 'divbox-meio-padrao';
		var div_box_mask = 'divbox-mask';
        var defaults = {
            color: "#000",
            opacity: 0.8,
            clickBackground: true,
            close: false,
            inClass: class_padrao,
			scrollAnimate: true
        };
		
		var classe_atual;
		var novo_id_conteudo;
		var id_conteudo = '';
		var tempo_fade = 400;

        options = $.extend(defaults, options);
		if (options.inClass != class_padrao){
			id_conteudo = 'divbox_' + options.inClass;
		}
		
		
        $(this).each(function(){
			$("body").prepend('<div id="' + div_box_mask + '"></div><div class="' + options.inClass + '" id="' + id_conteudo + '">' + $this.html() + '</div>');
			animacaoDivBoxMask();
        });
		
		// Animação/CSS da divbox-mask
		function animacaoDivBoxMask(){
			classe_atual = $('.' + options.inClass);
			classe_atual.css('display', 'none');
			
			novo_id_conteudo = $('#' + id_conteudo);
			div_box_mask = $('#' + div_box_mask);
			
			// Colocar cursor no fundo caso o clickBackground seja verdadeiro
			if (options.clickBackground){
				div_box_mask.css('cursor', 'pointer');
			}
			
			div_box_mask.css({
				position: "absolute",
				width: '100%',
				height: $(document).height(),
				'background-color': options.color,
				top: 0,
				left: 0,
				'z-index': '99999',
				opacity: options.opacity,
				'display': 'none'
			}).fadeIn(tempo_fade, function(){

				if (options.inClass == class_padrao){
					classe_atual.fadeIn(tempo_fade).css({
						position: "absolute",
						left: "50%",
						top: "50%",
						marginTop: "-150px",
						marginLeft: "-250px",
						width: "500px",
						height: "300px",
						"z-index": "99999",
						"background-color": "#FFF"
					});
				}
				else {
					classe_atual.css('display', 'none');
					novo_id_conteudo.fadeIn(tempo_fade).css({
						position: "absolute",
						left: "50%",
						top: "50%",
						marginTop: '-' + (parseInt(classe_atual.css('height').replace('-', '').replace('px', '')) / 2) + 'px',
						marginLeft: '-' + (parseInt(classe_atual.css('width').replace('-', '').replace('px', '')) / 2) + 'px',
						width: classe_atual.css('width'),
						height: classe_atual.css('height'),
						"z-index": "99999"
					});
				}

				// Função fechar DIV's
				var fecharDivs = function(){
					// Caso click no fundo
					if (options.clickBackground){
						div_box_mask.click(function(){
							div_box_mask.fadeOut(tempo_fade);
							classe_atual.fadeOut(tempo_fade);
							if (id_conteudo == ''){
								classe_atual.fadeOut(tempo_fade, function(){
									div_box_mask.remove();
									classe_atual.remove();
								});	
							}
							else {
								novo_id_conteudo.fadeOut(tempo_fade, function(){
									div_box_mask.remove();
									novo_id_conteudo.remove();
								});
							}
						});
					}

					//  Caso passe um valor no close para fechar
					if (options.close){
						$(options.close).click(function(){
							div_box_mask.fadeOut(tempo_fade);
							classe_atual.fadeOut(tempo_fade);
							if (id_conteudo == ''){
								classe_atual.fadeOut(tempo_fade, function(){
									div_box_mask.remove();
									classe_atual.remove();
								});	
							}
							else {
								novo_id_conteudo.fadeOut(tempo_fade, function(){
									div_box_mask.remove();
									novo_id_conteudo.remove();
								});
							}
						});
					}
				}
				fecharDivs();

				// Animações do box
				if (options.scrollAnimate){
					var margem_top_atual = parseInt(classe_atual.css('margin-top').replace('-', '').replace('px', ''));
					$(window).scroll(function(){
						classe_atual.animate({marginTop: ($(document).scrollTop() - margem_top_atual) + "px"}, {duration: 900, queue: false});
					});
				}

				return true;
			});
		}

        return $this;
    }
})(jQuery);