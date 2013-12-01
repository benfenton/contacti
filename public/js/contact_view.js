 define([
  'backbone', 
], function(Backbone){ 
  var Contact = Backbone.View.extend({
    tagName: 'tr',
  
    template: template('allContactsTemplate'),
  
    initialize: function() {
      //window.vent = _.extend({}, Backbone.Events);
      this.model.on('destroy', this.unrender, this);
      this.model.on('change', this.render, this);
    },
  
    events: {
      'click a.delete': 'deleteContact',
      'click a.edit'  : 'editContact'
    },
  
    deleteContact: function() {
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
