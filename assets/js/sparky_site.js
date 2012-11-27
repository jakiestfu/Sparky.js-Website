var ss = ss || (function(){
	
	function applyPrism(){
		$('[data-src]').each(function(){
			var _this = $(this),
				isJS = (_this[0].dataset.src).indexOf('.js')!=-1 || (_this[0].dataset.src).indexOf('.php')!=-1;
			$.ajax({
				url:_this[0].dataset.src,
				dataType:'text',
				success: function(d){
					if(isJS){
						_this.html('<code class="language-javascript"></code>');
					} else {
						_this.html('<code class="language-markup"></code>');
					}
					
					_this.find('code').text(d);
					Prism.highlightElement(_this.find('code')[0]);
					var r = _this.html();
					r = r.replace(/_FOLD_/g, '<div class="fold"></div>');
					_this.html(r);
					$('body').scrollspy('refresh');
				}
			});
		});
		$('.span4 pre').each(function(){
			Prism.highlightElement($(this).find('code')[0]);
		});
	}
	
	function customize(){
		var data = $('#customize-form').serialize();
		data += '&type='+$('.btn-group .active').attr('data-value');
		var url = 'assets/js/examples/customize.php?'+data;
		$.get(url, function(res){
			$('#customize_pre').html('<code class="language-javascript">'+res+'</code>');
			Prism.highlightElement($('#customize_pre code')[0]);
			var uriContent = "data:application/octet-stream;" + encodeURIComponent(res);
			$('#download').attr('href', url+'&download');
		});
	}
	
	function generate(){
		$(document).on('click', '.btn-group button', function(e){ e.preventDefault(); });
		$(document).on('click', '#generate', function(){
			customize();
		});
	}
	
	function trackListen(){
		$(document).on('click', '.track', function(){
			if(this.id=="download"){
				_gaq.push(['_trackEvent', 'SparkyJS Download', this.pathname, this.innerHTML]);
			} else {
				_gaq.push(['_trackEvent', 'SparkyJS Event', this.pathname, this.innerHTML]);
			}
		});
	}
	
	function initialize(){
		applyPrism();
		generate();
		customize();
		trackListen();
	}
	
	return {
		init: initialize
	};
	
})(window.jQuery);

jQuery(window).load(ss.init);