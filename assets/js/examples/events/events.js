Events = {
    endpoints: {_FOLD_},
    bindEvents: function(){
		$('[data-event]').each(function(){
			var $this = $(this),
                method = $this.attr('data-method') || 'click',
                name = $this.attr('data-event'),
                binded = $this.attr('data-binded')=='true';
			
			if(typeof Events.endpoints[name] != 'undefined'){
				if(!binded){
					$this.attr('data-binded', 'true');
					$this.on(method, Events.endpoints[name]);
				}
			}
		});
	},
	init: function(){
        Events.bindEvents();
	}
}