define([
  'backbone',
  'models/contact', 
  'collections/contacts',
  'contact_view',
  'edit_contact_view'
], function(Backbone, Contact, ContactsCollection, ContactView, EditContactView){  
  var Contacts = Backbone.View.extend({
    el:'#allContacts',

    tagName: 'tbody',
  
    initialize: function() {
      this.collection = new ContactsCollection();
      this.collection.fetch();
      this.collection.on('add', this.addOne, this);
      console.log('one');
    },
  
    render: function() {
      console.log('two');
      this.collection.each(this.addOne, this);
      return this;
    },
  
    addOne: function(Contact) {
      console.log('three');
      var contactView = new ContactView({ model: Contact});
      this.$el.append(contactView.render().el);
    }
  });
  return Contacts;
});