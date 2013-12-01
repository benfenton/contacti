define([
  'backbone',
  'collections/contacts',
  'add_contact_view',
  'contacts_view',
  'contact_view',
  'models/contact'
], function(Backbone, ContactsCollection, AddContactView, 
            ContactsView,ContactView, Contact){
  var AppRouter = Backbone.Router.extend({
      routes: {
        '': 'index'
      },
      initialize: function() {
        var contactsCollection = new ContactsCollection();
        var addContactView = new AddContactView({ collection: contactsCollection });
        allContactsView = new ContactsView({ collection:  contactsCollection }).render();
      },
      index: function () {
        
      }
  });
  var initialize = function() {
    console.log('we are here');
  
    var app_router = new AppRouter;
   
    Backbone.history.start();
  };
  return {
    initialize: initialize
  };
});
