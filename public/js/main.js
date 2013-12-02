require.config({
    paths: {
        "jquery": "libs/jquery/jquery",
        "bootstrap": "libs/sass-bootstrap/dist/js/bootstrap",
        "underscore": "libs/underscore/underscore-min",
        "backbone": "libs/backbone/backbone-min",
        "text": "libs/requirejs-text/text",
        "magpop": "libs/magnific-popup/dist/jquery.magnific-popup.min"
    },
    shim: {
        "backbone": {
                        
            deps: ["jquery", "underscore"],
                       
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
        },
        "magpop": {
            exports: "MagPop"
        }
    },
    waitSeconds: 10
});

require([
  'jquery', 
  'underscore', 
  'backbone', 
  'bootstrap',
  'magpop',
  'app'
], function($, _, Backbone, BootJS, MagPop, App){
  new App;
});


