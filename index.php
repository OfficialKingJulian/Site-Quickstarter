<?php

    // set initial variables to doc root
        $meta = $scriptabv = $styleabv = $nav = $foot = $styleblw = $scriptblw = $_SERVER['DOCUMENT_ROOT'];

    // add the relevant file
        $meta .= "/elms/meta.php";
        $scriptabv .= "/elms/script-abvfld.php";
        $styleabv .= "/elms/style-abvfld.php";
        $nav .= "/elms/nav.php";
        $foot .= "/elms/foot.php";
        $styleblw .= "/elms/style-blwfld.php";
        $scriptblw .= "/elms/script-blwfld.php";

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
        <?php include_once($scriptabv); ?>

<!-- style; above the fold -->
        <?php include_once($styleabv); ?>

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
    <?php include_once($styleblw); ?>

<!-- script; below the fold -->
    <?php include_once($scriptblw); ?>


</html>
