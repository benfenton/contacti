define([ 
  'backbone',
  'router',
  'models/contact',
  'edit_contact_view',
  'add_contact_view',
  'temp'
], function(Backbone, Router, Contact, EditContactView, AddContactView, Template){
  var App = Backbone.View.extend({
    initialize: function(){
      window.vent = _.extend({}, Backbone.Events);

      vent.on('contact:edit', this.editContact, this);

      Router.initialize();

      $('button.new, .addContact').click(function() {
        $( '#addContact' ).slideToggle( 'fast' );
      });
    },
  
    events: {
      'click button.new': 'newContact'
    },

    editContact: function(Contact) {
      var editContactView = new EditContactView({ model: Contact });
      
      $('#editContact').append(editContactView); 
    },

    newContact: function() {
      console.log('you are here');
      var addContactView = new AddContactView();

      $('#addContact').append(editContactView);
    }
  });
  return App;
});
