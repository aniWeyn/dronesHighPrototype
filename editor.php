<?php
require('./header.php');
?>

    <div class="grid-container">
      <div class="grid-x grid-padding-x">
        <div class="large-24 cell">

        <h4 class="content tag ">Informations</h4>
        <div class="spacer"></div>
        <form class="editor">
          <input name="s" type="text" id="w_title" placeholder="Title">
        </form>
        <form class="editor small">
          <input name="s" type="text" id="w_drones" placeholder="Drones models">
        </form>

        <form class="editor small no_job">
          <input name="s" type="text" id="w_tags" placeholder="Tags">
        </form>

        <form class="editor small no_article no_tutorial ">
          <input name="s" type="text" id="w_location" placeholder="Location">
        </form>

        <form class=" no_article no_job ">
                 
                   <INPUT TYPE="radio" NAME="q1" VALUE="y"><span class="content diff"> <i class="fas fa-wrench"></i><i class="fas fa-wrench invert"></i><i class="fas fa-wrench invert"></i></span> <br>
                   <INPUT TYPE="radio" NAME="q1" VALUE="y"><span class="content diff"> <i class="fas fa-wrench"></i><i class="fas fa-wrench"></i><i class="fas fa-wrench invert"></i></span><br>
                   <INPUT TYPE="radio" NAME="q1" VALUE="y"><span class="content diff"> <i class="fas fa-wrench"></i><i class="fas fa-wrench"></i><i class="fas fa-wrench "></i></span> <br>
        </form>

        <form class="editor small no_article  no_tutorial">
          <input name="s" type="text" id="w_deadline" placeholder="Deadline">
        </form>


           


          <h4 class="content tag usr">Body</h4>
          
          <div class="spacer"></div>
          
          <textarea class="text_body"></textarea>

          <div class="spacer"></div>

         
          <button type="button" data-open="delete" class="alert button">Delete</button>
          <button type="button" onclick="window.location.href='./account.php?Writings'" class="success button right ">Publish</button>
          <button type="button" onclick="window.location.href='./account.php?Writings'" class="button right">Save</button>
          
        </div>
      </div>
        </form>






    </div>
 
    <script src="js/tinymce/tinymce.min.js"></script>




<div class="reveal" id="delete" data-reveal>

  <h2 id="modalTitle">This will delete permanetly this post!</h2>
  <p>I'ts also possible to hide it and save it for later.</p>
  <button type="button" onclick="window.location.href='./account.php?Writings'" class="button">Cancel</button>
  <button type="button" onclick="window.location.href='./account.php?Writings'" class="alert button right ">Confirm</button>
  <button type="button" onclick="window.location.href='./account.php?Writings'" class="warning button right ">Hide</button>
</div>


<?php
require('./footer.php');
?>

        <script type="text/javascript">
          $('.text_body').html(mce_content);

          
          tinymce.init({

            selector: '.text_body',
            height: 500,
            theme: 'modern',
            menubar: false,
            mobile: {
              plugins: 'autosave autolink lists'
            },
            plugins: [

              'advlist autolink lists link image charmap print anchor',
              'searchreplace visualblocks code fullscreen',
              'insertdatetime media table contextmenu paste code wordcount'
            ],
            toolbar: 'insert | undo redo |  formatselect | bold italic backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat ',
            content_css: [
              '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
              '//www.tinymce.com/css/codepen.min.css']
          });
        </script>

<script type="text/javascript">

</script>