<?php

// Arquivo para diminutir a url páginas do OCS sem usar .htaccess


header("HTTP/1.1 303 See Other");
header("Location: http://www.next.icict.fiocruz.br/conferencias/index.php/CRSC/isccs/schedConf/registration/" . $pagina );


?>
