
$(function () {
	BASE = $("link[rel='base']").attr("href");

	$('[data-toggle="tooltip"]').tooltip();

	if ($('.mask').length) {
		$.getScript(BASE + '/shared/common/js/jquery.mask.js', function () {
			$(".mask-date").mask('00/00/0000');
			$(".mask-datetime").mask('00/00/0000 00:00');
			$(".mask-month").mask('00/0000', { reverse: true });
			$(".mask-doc").mask('000.000.000-00', { reverse: true });
			$(".mask-card").mask('0000  0000  0000  0000', { reverse: true });
			$(".mask-money").mask('000.000.000.000.000,00', { reverse: true, placeholder: "0,00" });
			$('.mask-Phone').focusout(function () {
				var phone, element;
				element = $(this);
				element.unmask();
				phone = element.val().replace(/\D/g, '');
				if (phone.length > 10) {
					element.mask("(99) 99999-999?9");
				} else {
					element.mask("(99) 9999-9999?9");
				}
			}).trigger('focusout');
		});
	}

	function readImage() {
        if (this.files && this.files[0]) {
            var file = new FileReader();
            file.onload = function(e) {
                document.getElementById("preview").src = e.target.result;
            };
            file.readAsDataURL(this.files[0]);
        }
    }
    document.getElementById("img-input").addEventListener("change", readImage, false);

	// TINYMCE INIT
	// tinyMCE.init({
	// 	selector: "textarea.mce",
	// 	language: 'pt_BR',
	// 	menubar: false,
	// 	theme: "modern",
	// 	height: 132,
	// 	skin: 'light',
	// 	entity_encoding: "raw",
	// 	theme_advanced_resizing: true,
	// 	plugins: [
	// 		"advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
	// 		"searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
	// 		"save table contextmenu directionality emoticons template paste textcolor media"
	// 	],
	// 	toolbar: "styleselect | pastetext | removeformat |  bold | italic | underline | strikethrough | bullist | numlist | alignleft | aligncenter | alignright |  link | unlink | fsphpimage | code | fullscreen",
	// 	style_formats: [
	// 		{ title: 'Normal', block: 'p' },
	// 		{ title: 'Titulo 3', block: 'h3' },
	// 		{ title: 'Titulo 4', block: 'h4' },
	// 		{ title: 'Titulo 5', block: 'h5' },
	// 		{ title: 'Código', block: 'pre', classes: 'brush: php;' }
	// 	],
	// 	link_class_list: [
	// 		{ title: 'None', value: '' },
	// 		{ title: 'Blue CTA', value: 'btn btn_cta_blue' },
	// 		{ title: 'Green CTA', value: 'btn btn_cta_green' },
	// 		{ title: 'Yellow CTA', value: 'btn btn_cta_yellow' },
	// 		{ title: 'Red CTA', value: 'btn btn_cta_red' }
	// 	],
	// 	setup: function (editor) {
	// 		editor.addButton('fsphpimage', {
	// 			title: 'Enviar Imagem',
	// 			icon: 'image',
	// 			onclick: function () {
	// 				$('.mce_upload').fadeIn(200, function (e) {
	// 					$("body").click(function (e) {
	// 						if ($(e.target).attr("class") === "mce_upload") {
	// 							$('.mce_upload').fadeOut(200);
	// 						}
	// 					});
	// 				}).css("display", "flex");
	// 			}
	// 		});
	// 	},
	// 	link_title: false,
	// 	target_list: false,
	// 	theme_advanced_blockformats: "h1,h2,h3,h4,h5,p,pre",
	// 	media_dimensions: true,
	// 	media_poster: false,
	// 	media_alt_source: false,
	// 	media_embed: false,
	// 	extended_valid_elements: "a[href|target=_blank|rel|class]",
	// 	imagemanager_insert_template: '<img src="{$url}" title="{$title}" alt="{$title}" />',
	// 	image_dimensions: false,
	// 	relative_urls: false,
	// 	remove_script_host: false,
	// 	paste_as_text: true
	// });


})