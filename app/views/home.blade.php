<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>CONTACT_i</title>
  <link rel="stylesheet" type="text/css" href="js/libs/sass-bootstrap/dist/css/bootstrap.min.css">
  <!-- <script data-main="js/main" src="js/libs/requirejs/require.js"></script> -->
  <style>
    #addContact { padding: 10px; margin: 125px 0 -50px 0; display: none; }
    .navbar { margin-bottom: 100px; }
    #contacts-table { margin-top: 100px; }
  </style>
</head>
<body>
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">CONTACT_I</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a class="new">New Contact</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
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
      <div>
        <input type="submit" class="addContact btn btn-default" value="Add Contact"></div>
    </form>
  <div id="contacts-table" class="table-responsive">
    <table id="allContacts" class="table table-condensed">
      <thead>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </thead>
    </table>
  <div>
  <div id="editContact">
  </div>
  <script id="allContactsTemplate" type="text/template">
    <td><%= first_name    %></td>
    <td><%= last_name     %></td>
    <td><%= email_address %></td>
    <td><%= description   %></td>
    <td><a href="#contacts/<%= id %>/edit" class="edit">Edit</a></td>
    <td><a href="#contacts/<%= id %>" class="delete">X</a></td>
  </script>
  <script id="editContactTemplate" type="text/template">
    <header>
      <h1>Edit Contact: <%= first_name %> <%= last_name %></h1>
    </header>
    <form id="editContact" class="">
      <div>
        <label for="edit_first_name">First Name:</label>
        <input type="text" id="edit_first_name" name="edit_first_name" value="<%= first_name %>">
      </div>
      <div>
        <label for="edit_last_name">Last Name:</label>
        <input type="text" id="edit_last_name" name="edit_last_name" value="<%= last_name %>">
      </div>
      <div>
        <label for="edit_email_address">Email Addres:</label>
        <input type="text" id="edit_email_address" name="edit_email_address" value="<%= email_address %>">
      </div>
      <div>
        <label for="edit_description">Description:</label>
        <textarea id="edit_description" name="edit_description"><%= description %></textarea>
      </div>
      <div>
        <input type="submit" value="Save Changes"></div>
        <button class="cancel" type="button">Cancel</button>
      </form>
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
    $('a.new, .addContact').click(function() {
      $( '#addContact' ).slideToggle( 'fast' );
    });
  </script>
</body>
</html> 
<!--benjamin-fenton-2013-->