var Sparky = Sparky || (function($) {

    var Utils   = {}, // Your Toolbox /* EXTRAS_STRIP */ 
        Ajax    = {}, // Your Ajax Wrapper
        Events  = {}, // Event-based Actions /* ROUTE_STRIP */     
        Routes  = {}, // Your Page Specific Logic /* END_ROUTE_STRIP */  /* END_EXTRAS_STRIP */
        App     = {}, // Your Global Logic and Initializer
        Public  = {}; // Your Public Functions

    Utils = {
        settings: {
            debug: true,
            meta: {/* EXTRAS_STRIP *//* ROUTE_STRIP */
                controller: -1,
                action: -1,/* END_ROUTE_STRIP */
                currentUser: -1,
                homeURL: -1
            /* END_EXTRAS_STRIP */},
            init: function() {
                _log('Initializing Settings');/* EXTRAS_STRIP *//* ROUTE_STRIP */
                Utils.settings.meta.controller = $('meta[name="controller"]').attr("content");
                Utils.settings.meta.action = $('meta[name="action"]').attr("content");
		/* END_ROUTE_STRIP */
				Utils.settings.meta.currentUser = $('meta[name="userid"]').attr("content");
				Utils.settings.meta.homeURL = $('meta[name="url"]').attr("content");
                _log('Initialized Settings');
            /* END_EXTRAS_STRIP */}
        },
        cache: {
            window: window,
            document: document
        },/* EXTRAS_STRIP */
        home_url: function(path){
            if(typeof path=="undefined"){
                path = '';
            }
            return Utils.settings.meta.homeURL+path+'/';            
        },/* END_EXTRAS_STRIP */
        log: function(what) {
            if (Utils.settings.debug) {
                console.log(what);
            }
        }/* ROUTE_STRIP */,
        route: function(){
            _log('Initializing Router');
            var controller = Utils.settings.meta.controller;
            var action = Utils.settings.meta.action;
    
            if(typeof Routes[controller] != 'undefined'){
                if(typeof Routes[controller].init != 'undefined'){
                    _log('Routes->'+controller+'.init() Exists, calling');
                    Routes[controller].init.call();         
                }
    
                if(typeof Routes[controller][action] != 'undefined'){
                    _log('Routes->'+controller+'.'+action+'() Exists, calling');
                    Routes[controller][action].call();              
                }
            }
            _log('Routed');
        } /* END_ROUTE_STRIP */
    };
    var _log = Utils.log;
	/* EXTRAS_STRIP */
    Ajax = {
        ajaxUrl: Utils.home_url('ajax'),
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

    Events = {
        endpoints: {},
        bindEvents: function(){
            _log('Binding Events');
            $('[data-event]').each(function(){
                var $this = $(this),
                    method = $this.attr('data-method') || 'click',
                    name = $this.attr('data-event'),
                    bound = $this.attr('data-bound')=='true';

                if(typeof Events.endpoints[name] != 'undefined'){
                    if(!bound){
                        $this.attr('data-bound', 'true');
                        $this.on(method, Events.endpoints[name]);
                    }
                }
            });
            _log('Events Bound');
        },
        init: function(){
            Events.bindEvents();
        }
    };/* END_EXTRAS_STRIP *//* ROUTE_STRIP */
    Routes = {};/* END_ROUTE_STRIP */
    App = {
        logic: {},
        init: function() {
            _log('Initializing App');
            Utils.settings.init();/* EXTRAS_STRIP */
            Events.init(); /* END_EXTRAS_STRIP *//* ROUTE_STRIP */  
            Utils.route();    /* END_ROUTE_STRIP */
            _log('Initialized App');
        }
    };
    
    Public = {
        init: App.init  
    };

    return Public;

})(window.jQuery);

jQuery(document).ready(Sparky.init);