define(function(){
  window.template = function(id) {
    return _.template( $('#' + id).html() );
  };
  return template;
});