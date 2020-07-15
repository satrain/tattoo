<?php

    class Footer {

        public static $footer;

        public static function getFooter() {
            self::$footer = "
                    <footer>
                        <div class='footer-mid-line'></div>
                        <div class='footer-logo'></div>
                        <div class='footer-mid-line'></div>
                    </footer>
                </body>
                </html>
            ";
            echo self::$footer;
        }

    }

?>