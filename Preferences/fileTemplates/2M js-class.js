#parse("stmpfl_variables.txt")
#parse("stmpfl_header_js.js")

/*jshint jquery:true*/
define([
    "jquery",
    "jquery/ui"
], function(${DS}){
    "use strict";

    ${DS}.widget('${widgetName}', {
        options: {
            // optionName: value
        },

        /**
         * Bind a click handler on the widget's element.
         * @private
         */
        _create: function() {
            this.element.on('click', ${DS}.proxy(this._clickAction, this));
        },

        /**
         * Init object
         * @private
         */
        _init: function () {
            // Do something if needed
        },

        /**
         * Click action function
         * @private
         * @param event - {Object} - Click event.
         */
        _clickAction: function(event) {
            // Do something with element clicked $(event.target)
        }
    });
    
    return ${DS}.${widgetName};
});