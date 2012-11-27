Ajax = {
	ajaxUrl: Utils.home_url('ajax'), // return http://myapp.com/ajax/
	checkAuth: function(returnFunc){
		if(typeof returnFunc == 'function' && Utils.settings.meta.currentUser==-1){
			returnFunc.call();
			return false;
		}
	},
	call: function(method, data, returnFunc, authRequiredFunc){
		
		Ajax.checkAuth(authRequiredFunc);
		
		$.ajax({
			type:'POST',
			url: Ajax.ajaxUrl+method,
			dataType:'json',
			data: data,
			success: returnFunc
		});
	},
	get: function(method, data, returnFunc, authRequiredFunc){
		
		Ajax.checkAuth(authRequiredFunc);
		
		$.ajax({
			type:'GET',
			url: Ajax.ajaxUrl+method,
			dataType:'json',
			data: data,
			success: returnFunc
		});
	}
};