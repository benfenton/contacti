 define([
  'backbone',

  'text!templates/contact.html'
], function(Backbone, contactView){ 
  var Contact = Backbone.View.extend({
    tagName: 'tr',
  
    template: _.template(contactView),
  
    initialize: function() {
      this.model.on('destroy', this.unrender, this);
      this.model.on('change', this.render, this);
    },
  
    events: {
      'click a.delete': 'deleteContact',
      'click a.edit'  : 'editContact'
    },

    deleteContact: function(e) {
      e.preventDefault();
      appRouter.navigate('/#', {trigger: true});
      this.model.destroy();
    },
  
    editContact: function() {
     vent.trigger('contact:edit', this.model);
    },
  
    render: function() {
      this.$el.html( this.template( this.model.toJSON() ) );
      return this;
    },
  
    unrender: function() {
      this.remove();
    }

  });
  return Contact;
});
