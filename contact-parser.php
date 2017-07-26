<?php

function parseContacts($filename)
{
    $contacts = array();

    // todo - read file and parse contacts
    $handle = fopen($filename, 'r');
    $contents = fread($handle, filesize($filename));
    $contents = trim($contents);

    $contentsArray = explode(PHP_EOL, $contents);
    foreach($contentsArray as $contact){
        $contact = explode("|", $contact);
        $contactArray = [];
        $contactArray["name"] = $contact[0];

        $areaCode = substr($contact[1], 0, 3);
        $prefix = substr($contact[1], 3, 3);
        $number = substr($contact[1], 6, 4);

        $contactArray["number"] = $areaCode . "-" . $prefix . "-" .  $number;

        array_push($contacts, $contactArray);
    }

    return $contacts;
}

var_dump(parseContacts('contacts.txt'));
