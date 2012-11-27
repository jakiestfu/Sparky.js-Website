App = {
    /*
     * Add any additional functions/objects you want here, 
     * usually functions that will execute on every page or
     * beefy worker functions
     */
    logic: {},
    init: function() {

        // Collect our settings and info
        Utils.settings.init();
        
        // Bind events to the DOM
        Events.init();
        
        // Execute page-specific code
        Utils.route();

    }
};

/*
 * Return function you want to have accessible globally
 * Sparky.init() => App.init()
 */
Public = {
    init: App.init  
};