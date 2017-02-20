<?php

/* 
 * ========== * EVE ONLINE TEAMSPEAK V2 BY Lowjack Tzetsu * ==========
 * ========== * EVE ONLINE TEAMSPEAK V2 BASED ON MJ MAVERICK * ============ 
 */

function PrintHTMLIndexHeader() {
    printf("<!DOCTYPE html>");
    printf("<html lang=\"en\">");
    printf("<head>
                <!--metas-->
                <meta content=\"text/html\" charset=\"utf-8\" http-equiv=\"Content-Type\">
                <meta content=\"EVEOTS V2 Admin Panel\" name=\"description\">
                <meta content=\"index,follow\" name=\"robots\">
                <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\">
                <title>EVEOTS V2 Admin Panel</title>
                <link href=\"/../css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\">
                <link rel=\"shortcut icon\" href=\"/../images/banner.jpg\" type=\"image/x-icon\">
                <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
                <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
            </head>");
    printf("<body>");
    printf("<div class=\"container\">");
    printf("<div class=\"header clearfix\">");
    printf("<h3 class=\"text-muted\">EVEOTS V2 SSO Login</h3>");
    printf("</div>");
}