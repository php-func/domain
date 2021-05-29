<?php

function response_status($url)
{
    $headers = get_headers($url, 1);

    if (is_array($headers)) {
        return $headers[0];
//        return substr($headers[0], 9);
    }

    return domain_exist($url);
}