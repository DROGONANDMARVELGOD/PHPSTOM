<?php
$Record = dns_get_record( '_minecraft._tcp.' . "pixelmon.wolfycraft.eu", DNS_SRV );
$list = array($Record);
echo implode( $list );
// outputs: foobarbaz