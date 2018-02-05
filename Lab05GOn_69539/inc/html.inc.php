<?php

/*
 * Name: Gregori Gualdron
 * Student Number: 300269539
 * Description: Construct the HTML elements for the Lab.
 */


//The html Header function starts
function html_header($header="None Set") { ?>
    <!-- Begin HTML header -->
    <HTML>
        <HEAD>
        <title><?php echo $header ?> </title>
        </HEAD>
        <BODY>
        <h1><?php echo $header ?></h1>
    <!-- End HTML header -->
    <?php
}

//The html Footer function starts
function html_footer() {
    ?>
    <!-- Begin HTML Footer -->

        </BODY>
    </HTML>
    <!-- End HTML Footer -->
    <?php 
}

//Not used. Want to leave it to see what was its purpouse
function html_debug($var){ ?>
    <DIV CLASS="debug"><PRE><?php var_dump($var); ?></PRE></DIV>
    <?php

}

//Creates the form for submiting new todos
function html_todolist($todoarr)	{ 
    ?>
    
    <p>To do Lists</p>

    <?php

    append_todolist($todoarr);


    ?>
    <FORM action="Lab05GOn_69539a.php" method="post">
    <input type="text" name="newTodo" />
    <input type="submit" value="Add Item" />

    </FORM>
    <?php

}

//Not used. Did a different way.
function html_accounts($accounts) { ?>

<?php
}
?>
