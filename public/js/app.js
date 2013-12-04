define([ 
  'backbone',
  'router',
  'models/contact',
  'views/edit_contact_view',
  'views/add_contact_view',
  'temp',
], function(Backbone, Router, Contact, EditContactView, AddContactView, Template){
  var App = Backbone.View.extend({
    initialize: function(){
      Router.initialize();
      console.log('Router:' + typeof Router);
      window.vent = _.extend({}, Backbone.Events);
      vent.on('contact:edit', this.editContact, this);
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
      $.magnificPopup.open({
        items: {
          src: '#editContact',
          type: 'inline',
          showCloseBtn: 'false'
        }
      });

      
    },

    newContact: function() {
      var addContactView = new AddContactView();

      $('#addContact').append(addContactView);
    }
  });
  return App;
});
