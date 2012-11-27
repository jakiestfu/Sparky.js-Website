Events = {
    endpoints: {
    
        doLogin: function(){
            Ajax.call('doLogin', {username:someVal, password: somePass}, function(res){
                if(res.success){
                    window.location.href = Utils.home_url('dashboard'); // Redirects to http://myapp.com/dashboard/
                } else {
                    alert('Invalid username or password');
                }
            });
        }
        
        numOnly: function(){
            this.value=this.value.replace(/[^\d]/,'');
        }
    
    },
    bindEvents: function(){_FOLD_},
	init: function(){_FOLD_}
}