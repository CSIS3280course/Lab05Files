<?php



function html_header($header="None Set") { ?>
<!-- Begin HTML header -->
<HTML>
    <HEAD><?php echo $header ?><HEAD>
    <BODY>
<!-- End HTML header -->
<?php
}

function html_footer() {
?>
<!-- Begin HTML Footer -->

</BODY>
</HTML>
<!-- End HTML Footer -->
<?php }
function html_debug($var){ ?>
<DIV CLASS="debug"><PRE><?php var_dump($var); ?></PRE></DIV>
<?php

}

function html_todolist($todoarr)	{ 
    ?>
    <h1>Lab 05 Part A-</h1>
    <p>To do List</p>

<?php

    append_todolist($todoarr);


    ?>
    <FORM action="Lab05GOn_69539a.php" method="post">
    <input type="text" name="newTodo" />
    <input type="submit" value="Add Item" />

    </FORM>
    <?php

}

function html_accounts($accounts) { ?>

<?php
}
?>
