define([
  'backbone',
  'collections/contacts',
  'text!templates/edit.html'
], function(Backbone, ContactsCollection, editContactTemplate){
  var EditContact = Backbone.View.extend({
    el: '#editContact',

    template: _.template(editContactTemplate),
  
    initialize: function() {
      this.render();
  
      this.form = this.$('form');
      this.first_name = this.form.find('#edit_first_name');
      this.last_name = this.form.find('#edit_last_name');
      this.email_address = this.form.find('#edit_email_address');
      this.description = this.form.find('#edit_description');
    },
  
    events: {
      'submit': 'submit',
      'click cancel': 'cancel'
    },
  
    submit: function(e) {
     e.preventDefault();
      
      this.model.save({ 
        first_name: this.first_name.val(),
        last_name: this.last_name.val(),
        email_address: this.email_address.val(),
        description: this.description.val()
      });

      this.remove();

      $('.modal-backdrop').remove();
    },
  
    cancel: function() {
      this.remove();
    },
  
    render: function() {
      var html = this.template( this.model.toJSON() );

      this.$el.html(html);

      return this;
    }
  });
  return EditContact;  
 }); 