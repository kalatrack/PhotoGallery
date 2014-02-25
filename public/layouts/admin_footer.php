    </div>
    <div id="footer">&reg;Copyright <?php echo date("Y", time()); ?>, mhkasuri</div>
  </body>
</html>
<?php if(isset($database)) { $database->close_connection(); } ?>