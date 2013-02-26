$(function() {

	//===== Left navigation styling =====//

	$('.subNav li a.this').parent('li').addClass('activeli');

	//===== iButtons =====//

	$('.on_off :checkbox, .on_off :radio').iButton({
		labelOn: "",
		labelOff: "",
		enableDrag: false
	});

	$('.yes_no :checkbox, .yes_no :radio').iButton({
		labelOn: "On",
		labelOff: "Off",
		enableDrag: false
	});

	$('.enabled_disabled :checkbox, .enabled_disabled :radio').iButton({
		labelOn: "Enabled",
		labelOff: "Disabled",
		enableDrag: false
	});

	//===== Masked input =====//

	$.mask.definitions['~'] = "[+-]";
	$(".maskDate").mask("99/99/9999",{completed:function(){alert("Callback when completed");}});
	$(".maskPhone").mask("(999) 999-9999");
	$(".maskPhoneExt").mask("(999) 999-9999? x99999");
	$(".maskIntPhone").mask("+33 999 999 999");
	$(".maskTin").mask("99-9999999");
	$(".maskSsn").mask("999-99-9999");
	$(".maskProd").mask("a*-999-a999", { placeholder: " " });
	$(".maskEye").mask("~9.99 ~9.99 999");
	$(".maskPo").mask("PO: aaa-999-***");
	$(".maskPct").mask("99%");

	//===== Easy tabs =====//

	$('#tab-container').easytabs({
		animationSpeed: 300,
		collapsible: false,
		tabActiveClass: "clicked"
	});

	//===== Form elements styling =====//

	$(".styled, input:radio, input:checkbox, .dataTables_length select").uniform();

	//===== User nav dropdown =====//

	$('a.leftUserDrop').click(function () {
		$('.leftUser').slideToggle(200);
	});
	$(document).bind('click', function(e) {
		var $clicked = $(e.target);
		if (! $clicked.parents().hasClass("leftUserDrop"))
		$(".leftUser").slideUp(200);
	});

	//===== Sparklines =====//

	$('.balBars').sparkline(
	'html', {type: 'bar', barColor: '#db6464', height: '18px'}
	 );

});