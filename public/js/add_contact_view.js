define([
  'backbone',
  'collections/contacts'
], function(Backbone, ContactsCollection){
  var AddContact = Backbone.View.extend({
    el: '#addContact',
    
    initialize: function() {
      this.first_name = $('#first_name');
      this.last_name = $('#last_name');
      this.email_address = $('#email_address');
      this.description = $('#description');
    },
  
    events: {
      'submit': 'addContact'
    },
  
    addContact: function(e) {
      e.preventDefault();
      this.collection = new ContactsCollection();
      this.collection.create({
        first_name:    this.first_name.val(),
        last_name:     this.last_name.val(),
        email_address: this.email_address.val(),
        description:   this.description.val(), 
      }, { wait: true });
      
      this.clearForm();
    },
  
    clearForm: function() {
      this.first_name.val(''),
      this.last_name.val(''),
      this.email_address.val(''),
      this.description.val('') 
    }
  });
  return AddContact;
});
