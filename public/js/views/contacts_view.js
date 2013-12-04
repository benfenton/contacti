define([
  'backbone',
  'models/contact', 
  'collections/contacts',
  'views/contact_view',
  'views/edit_contact_view'
], function(Backbone, Contact, ContactsCollection, ContactView, EditContactView){  
  var Contacts = Backbone.View.extend({
    el:'#allContacts',

    tagName: 'tbody',
  
    initialize: function() {
      this.collection.fetch();
      this.collection.on('add', this.addOne, this);
    },
  
    render: function() {
      this.collection.each(this.addOne, this);
      return this;
    },
  
    addOne: function(Contact) {
      var contactView = new ContactView({ model: Contact});
      this.$el.append(contactView.render().el);
    }
  });
  return Contacts;
});