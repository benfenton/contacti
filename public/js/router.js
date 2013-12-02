define([
  'backbone',
  'collections/contacts',
  'add_contact_view',
  'contacts_view',
  'contact_view',
  'models/contact'
], function(Backbone, ContactsCollection, AddContactView, ContactsView, ContactView, Contact){
  var AppRouter = Backbone.Router.extend({
    routes: {
      '': 'index',
    },
    index: function () {
      var contactsCollection = new ContactsCollection();
      var addContactView = new AddContactView({ collection: contactsCollection });
      allContactsView = new ContactsView({ collection:  contactsCollection }).render();
    }
  });
  var initialize = function() {
  
    new AppRouter;
   
    Backbone.history.start();
  };
  return {
    initialize: initialize
  };
});
