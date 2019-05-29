<?php

    // set initial variables to doc root
        $meta = $scriptabv = $styleabv = $nav = $foot = $styleblw = $scriptblw = $_SERVER['DOCUMENT_ROOT'];

    // add the relevant file
        $meta .= "/elms/meta.php";
        $scriptabv .= "/elms/script-abvfld.js";
        $styleabv .= "/elms/style-abvfld.css";
        $nav .= "/elms/nav.html";
        $foot .= "/elms/foot.html";
        $styleblw .= "/elms/style-blwfld.css";
        $scriptblw .= "/elms/script-blwfld.js";

?>
<!DOCTYPE html>
<!--

    ***********************************

      Inline everything, with php's.

      Made by Julian (not that anyone
           else will use this).

    ***********************************

-->
<html>


    <head>

<!-- meta -->
        <?php include_once($meta); ?>

<!-- script; above the fold -->
        <script type="text/javascript">
            <?php include_once($scriptabv); ?>
        </script>

<!-- style; above the fold -->
        <style>
            <?php include_once($styleabv); ?>
        </style>

    </head>


    <body>

<!-- navigational -->
        <?php include_once($nav); ?>




<!-- content blocks -->
        <section class="a hero for example">

        </section>

        <section class="maybe like triple thing">
            <div>

            </div><!--
         --><div>

            </div><!--
         --><div>

            </div>
        </section>

        <section class="how about a call to action">

        </section>




<!-- footer -->
        <?php include_once($foot); ?>

    </body>

<!-- style; below the fold -->
    <style>
        <?php include_once($styleblw); ?>
    </style>

<!-- script; below the fold -->
    <script type="text/javascript">
        <?php include_once($scriptblw); ?>
    </script>


</html>
