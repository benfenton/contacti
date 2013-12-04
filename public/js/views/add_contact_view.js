define([
  'backbone',
  'collections/contacts',
  'text!templates/new.html'
], function(Backbone, ContactsCollection, addContactTemplate){
  var AddContact = Backbone.View.extend({
    el: '#addContact',

    template: _.template(addContactTemplate),
    
    initialize: function() {
      this.render();
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
      
      this.collection.create({
        first_name:    this.first_name.val(),
        last_name:     this.last_name.val(),
        email_address: this.email_address.val(),
        description:   this.description.val(), 
      }, { wait: true });
      
      this.clearForm();
    },

    render: function() {
      var html = this.template();

      this.$el.html(html);

      return this;
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
