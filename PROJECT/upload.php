




<!DOCTYPE html>
<html>
  <head>
    <title>File Upload Form</title>
  </head>
  <link rel="stylesheet" type="text/css" href="upload.css">
  <body>
    <!-- Define the form for file upload -->
    <div class="form-container">
      <h2>File Upload Form</h2>
      <form action="/upload" method="POST" enctype="multipart/form-data">
        <label for="file">Choose a file:</label>
        <input type="file" id="file" name="file">
        <input type="submit" value="Upload">
      </form>
    </div>
  </body>
</html>