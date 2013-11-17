<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>CONTACTi</title>
</head>
<body>
  <!-- <header>
    <h1>Contacts</h1>
  </header> -->
  <form id="addContact">
    <div>
      <label for="first_name">First Name:</label>
      <input type="text" id="first_name" name="first_name">
    </div>
    <div>
      <label for="last_name">Last Name:</label>
      <input type="text" id="last_name" name="last_name">
    </div>
    <div>
      <label for="email_address">Email Addres:</label>
      <input type="text" id="email_address" name="email_address">
    </div>
    <div>
      <label for="description">Description:</label>
      <textarea id="description" name="description"></textarea>
    </div>
    <div>
      <input type="submit" value="Add Contact"></div>
  </form>

  <script id="allContactsTemplate" type="text/template">
    <td><%= first_name    %></td>
    <td><%= last_name     %></td>
    <td><%= email_address %></td>
    <td><%= description   %></td>
  </script>
   
  <script src="http://code.jquery.com/jquery.js"></script>
  <script src="http://underscorejs.org/underscore.js"></script>
  <script src="http://backbonejs.org/backbone.js"></script>
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
</body>
</html> 
