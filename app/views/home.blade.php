<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width">
  <title>CONTACT_i</title>
  <script data-main="js/main" src="js/libs/requirejs/require.js"></script> 
  <link rel="stylesheet" type="text/css" href="js/libs/sass-bootstrap/dist/css/bootstrap.css">
  <style>
    button.new { float: right; margin: 10px 10px 10px 30px; }
    #addContact { padding: 0 10px 35px 10px; display: none; }
    #contacts-table { margin-top: -20px; }
  </style>
</head>
<body>
  <nav class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="navbar-header">
      <div class="navbar-brand">CONTACT_i</div>
      <button class="new btn btn-default">New Contact</button>
    </div>
  </nav>
  <div id="addContact">
  </div>
  <div id="contactsTable" class="table-responsive">
    <table id="allContacts" class="table table-condensed">
    </table>
  </div>
  <div id="editContact">
  </div>
</body>
</html> 
<!--benjamin-fenton-2013-->