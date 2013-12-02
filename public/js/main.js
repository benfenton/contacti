////the require library is configuring paths
require.config({
    paths: {
        "jquery": "libs/jquery/jquery",
        "bootstrap": "libs/sass-bootstrap/dist/js/bootstrap",
        "underscore": "libs/underscore/underscore-min",
        "backbone": "libs/backbone/backbone-min",
        "text": "libs/requirejs-text/text"
    },
    shim: {
        "backbone": {
                        //loads dependencies first
            deps: ["jquery", "underscore"],
                        //custom export name, this would be lowercase otherwise
            exports: "Backbone"
        },
        "underscore": {
            exports: "_"
        },
        "jquery": {
            exports: "$"
        },
        "bootstrap": {
            deps: ["jquery"],

            exports: "BootJS"
        }
    },
        //how long the it tries to load a script before giving up, the default is 7
    waitSeconds: 10
});
////requiring the scripts in the first argument and then passing the library namespaces into a callback
////you should be able to console log all of the callback arguments
require([
  'jquery', 
  'underscore', 
  'backbone', 
  'bootstrap',
  'app'
], function($, _, Backbone, BootJS, App){
  new App;
});


