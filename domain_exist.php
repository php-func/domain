<?php

function domain_exist($url)
{
    $domain = get_domain_by_url($url);

//    if (checkdnsrr($domain , 'ANY')) {
//    if (gethostbyname($domain) != $domain ) {
    return gethostbynamel($domain);
    if (gethostbynamel($domain) != $domain ) {
        return "DNS Record found";
    } else {
        return "NO DNS Record found";
    }
}
