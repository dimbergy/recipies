
  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
  <script src='/js/holder.js'></script>
  <script>
      $(function () {
        Holder.addTheme("thumb", { background: "#55595c", foreground: "#eceeef", text: "Thumbnail" });
      });
    </script>
  <script src='/js/app.js'></script>
<script src='/js/viewport.js'></script>
<script>

$(function () {
                $('.mat-input-outer label').click(function () {
                    $(this).prev('input').focus();
                });
                $('.mat-input-outer input').focusin(function () {
                    $(this).next('label').addClass('active');
                });
                $('.mat-input-outer input').focusout(function () {
                    if (!$(this).val()) {
                        $(this).next('label').removeClass('active');
                    } else {
                        $(this).next('label').addClass('active');
                    }
                });
            });
</script>
