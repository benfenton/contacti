<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width">
  <title>CONTACT_i</title>
  <link rel="stylesheet" type="text/css" href="js/libs/sass-bootstrap/dist/css/bootstrap.css">
  <!-- <script data-main="js/main" src="js/libs/requirejs/require.js"></script> -->
  <style>
    #addContact { padding: 0 10px 35px 10px; display: none; }
    #contacts-table { margin-top: -20px;}
    button.new { float: right; margin: 10px 10px 10px 30px; }
  </style>
</head>
<body>
  <nav class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="navbar-header">
      <div class="navbar-brand">CONTACT_I</div>
      <button class="new btn btn-success">New Contact</button>
    </div>
  </nav>
    <form id="addContact" class="module">
      <div>
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" class="form-control" name="first_name">
      </div>
      <div>
        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" class="form-control" name="last_name">
      </div>
      <div>
        <label for="email_address">Email Addres:</label>
        <input type="text" id="email_address" class="form-control" name="email_address">
      </div>
      <div>
        <label for="description">Description:</label>
        <textarea id="description"  class="form-control" name="description" ></textarea>
      </div>
      <br />
      <div>
        <input type="submit" class="addContact btn btn-warning" value="Add Contact"></div>
    </form>
    <div id="contacts-table" class="table-responsive">
    <table id="allContacts" class="table table-condensed">
    </table>
  <div>
  <div id="editContact">
  </div>
  <script id="allContactsTemplate" type="text/template">
    <td><%= first_name    %></td>
    <td><%= last_name     %></td>
    <td><%= email_address %></td>
    <td><%= description   %></td>
    <td><a href="#contacts/<%= id %>/edit" class="edit" data-toggle="modal" data-target="#myModal">Edit</a></td>
    <td><a href="#contacts/<%= id %>" class="delete">X</a></td>
  </script>
  <script id="editContactTemplate" type="text/template">
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> 
      <header>
      <h2 class="modal-title" id="myModalLabel">Editing Contact:  <%= first_name %> <%= last_name %></h2>
      </header>
      </div>
      <div class="modal-body">
      <form id="editContact" class="">
      <div>
        <label for="edit_first_name">First Name:</label>
        <input type="text" id="edit_first_name" class="form-control" name="edit_first_name" value="<%= first_name %>">
      </div>
      <div>
        <label for="edit_last_name">Last Name:</label>
        <input type="text" id="edit_last_name" class="form-control" name="edit_last_name" value="<%= last_name %>">
      </div>
      <div>
        <label for="edit_email_address">Email Addres:</label>
        <input type="text" id="edit_email_address" class="form-control" name="edit_email_address" value="<%= email_address %>">
      </div>
      <div>
        <label for="edit_description">Description:</label>
        <textarea id="edit_description"  class="form-control" name="edit_description"><%= description %></textarea>
      </div>
      <br />
      <div>
        <button class="cancel btn btn-default" type="button" data-dismiss="modal">Cancel</button>
        <input type="submit" class="btn btn-primary"  value="Save Changes"></input>
      </div>
      </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
  </script>
  <script src="http://code.jquery.com/jquery.js"></script>
  <script src="http://underscorejs.org/underscore.js"></script>
  <script src="http://backbonejs.org/backbone.js"></script>
  <script src="js/libs/sass-bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/models.js"></script>
  <script src="js/collections.js"></script>
  <script src="js/views.js"></script>
  <script src="js/router.js"></script>
  <script>
    new App.Router;
    Backbone.history.start();
    App.contacts = new App.Collections.Contacts;
    App.contacts.fetch().then(function() {
    new App.Views.App({ collection: App.contacts });
    });
  </script>
  <script>
    $('button.new, .addContact').click(function() {
      $( '#addContact' ).slideToggle( 'fast' );
    });
  </script>
</body>
</html> 
<!--benjamin-fenton-2013-->