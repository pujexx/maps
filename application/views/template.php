<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Dolan yoo...</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="<?php echo base_url("template"); ?>/js/jquery.mobile-1.0b3.min.css" />

        <script type="text/javascript" src="<?php echo base_url("template"); ?>/js/jquery-1.4.4.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url("template"); ?>/js/jquery.mobile-1.0b3.min.js"></script>
        <script type="text/javascript">
            $(document).bind("mobileinit", function()
            {
                $.extend(  $.mobile , {
                    ajaxFormsEnabled: false
                });
            });
        </script>
    </head>
    <body>

        <?php
        if (!empty($content)) {
            $this->load->view($content);
        }
        ?>
    </body>
</html>