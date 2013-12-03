define([
  'backbone',
  'collections/contacts',
  'add_contact_view',
  'edit_contact_view',
  'contacts_view',
  'contact_view',
  'models/contact'
], function(Backbone, ContactsCollection, AddContactView, EditContactView, ContactsView, ContactView, Contact){
  var AppRouter = Backbone.Router.extend({
    routes: {
      '/#': 'index'
    },
    index: function () {
     
    }
  });
  var initialize = function() {
    window.appRouter = new AppRouter().navigate('/#');
    Backbone.history.start( {root: ''} );
    var contactsCollection = new ContactsCollection();
    var addContactView = new AddContactView({ collection: contactsCollection });
    allContactsView = new ContactsView({ collection:  contactsCollection }).render();
  };
  return {
    initialize: initialize
  };
});
