    </div>
    <div id="footer"><?php display_name();?></div>
  </body>
</html>
<?php if(isset($database)) { $database->close_connection(); } ?>