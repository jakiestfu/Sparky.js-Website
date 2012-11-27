Routes = {
	auth: function(){
		init: function(){
			if(Utils.settings.currentUser){
				window.location.href = Utils.home_url('dashboard');
			}
		},
		register: function(){
			$('#register_form').formValidate(); // Pseudo Code
		}
	},
	dashboard: {
        init: function(){
            _log('Auto Loading Dashboard Code');
            $('#stats').barChart(); // Pseudo Code
        },
        following: function() {
            _log('Doing code for the Following Page');
            $('.follow-buttons').followButton(); // Pseudo Code
        }
    }
};