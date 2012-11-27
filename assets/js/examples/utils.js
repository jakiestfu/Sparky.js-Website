Utils = {
    settings: {
        debug: true,
        meta: {
	        controller: -1,
	        action: -1,
	        currentUser: -1,
	        homeURL: -1
        },
        init: function() {
            Utils.settings.meta.controller = $("meta[name=controller]").attr("content");
            Utils.settings.meta.action = $("meta[name=action]").attr("content");

            Utils.settings.meta.currentUser = $("meta[name=userid]").attr("content");
            Utils.settings.meta.homeURL = $("meta[name=url]").attr("content");
        }
    },
    cache: {
        window: window,
        document: document
    },
    home_url: function(path){
        if(typeof path=="undefined"){
            path = '';
        }
        return Utils.settings.meta.homeURL+path+'/';            
    },
    log: function(what) {
        if (utils.settings.debug) {
            console.log(what);
        }
    },
    route: function(){

        var controller = Utils.settings.meta.controller;
        var action = Utils.settings.meta.action;

        if(typeof Routes[controller] != 'undefined'){
            if(typeof Routes[controller].init != 'undefined'){
                Routes[controller].init.call();                
            }

            if(typeof Routes[controller][action] != 'undefined'){
                Routes[controller][action].call();              
            }
        }            
    }
};
_log = Utils.log;