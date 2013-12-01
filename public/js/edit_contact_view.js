define([
  'backbone',
  'collections/contacts'
], function(Backbone, ContactsCollection){
  var EditContact = Backbone.View.extend({
    el: '#editContact',

    template: template('editContactTemplate'),
  
    initialize: function() {
      console.log('edit initialize');
      this.render();
  
      this.form = this.$('form');
      this.first_name = this.form.find('#edit_first_name');
      this.last_name = this.form.find('#edit_last_name');
      this.email_address = this.form.find('#edit_email_address');
      this.description = this.form.find('#edit_description');
    },
  
    events: {
      'submit form': 'submit',
      'click button.cancel': 'cancel'
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