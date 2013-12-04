define([
  'backbone',
  'models/contact'
], function(Backbone, Contact){
  var ContactCollection = Backbone.Collection.extend({
    model: Contact,
    url: '/contacts',
    comparator: function(item) {
      return item.get('first_name');
    }
  });
  return ContactCollection;
});
