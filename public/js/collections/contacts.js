define([
  'backbone',
  'models/contact'
], function(Backbone, Contact){
  var ContactCollection = Backbone.Collection.extend({
    model: Contact,
    url: '/contacts'
  });
  return ContactCollection;
});
