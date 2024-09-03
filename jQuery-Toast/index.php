<!doctype html>
<html>
  <head>
    <title>jQuery Toastr</title>
    <link href="toastr-vendor/toastr.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <button type="button" name="button" onclick="addToast()">Toast Alert</button>
    <script src="toastr-vendor/jquery-3.6.0.min.js"></script>
    <script src="toastr-vendor/toastr.min.js"></script>
    <script type="text/javascript">
    function addToast(){
      var toastType = 'error';
      var title = '';
      var msg = 'Submitted Successfully';
      toastr[toastType](msg,title);
    }
    </script>
  </body>
</html>
