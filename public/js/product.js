$('.money').simpleMoneyFormat();
$(document).ready(function() {
    function readURL(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function(e) {
          $('#anh').attr('src', e.target.result);
        }
        
        reader.readAsDataURL(input.files[0]); // convert to base64 string
      }
    }

    $("#anhsanpham").change(function() {
      readURL(this);
    });
});