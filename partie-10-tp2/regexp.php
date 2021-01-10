<?php

$regexpName = "/^[A-Za-z-éèêëàâäôöûüç'. ]*$/";
$regexpFirstName = "/^[A-Za-z-éèêëàâäôöûüç'. ]*$/";
$regexpDateOfBirth = "/^([0-2][0-9]|(3)[0-1])(\/)(((0)[0-9])|((1)[0-2]))(\/)\d{4}$/";
$regexpState = "/^([A-Z][a-zéèêëàâäôöûüç-])*$/";
$regexpNationality = "/^([A-Za-z éèêëàâäôöûüç .-])+$/";
$regexpAddress = "/^[0-9]{1,6}[A-Za-z0-9-éèêëàâäôöûüç .,-]+$/";
$regexpZIP = "/^(([0-8][0-9])|(9[0-5]))[0-9]{3}$/";
$regexpCity = "/^([A-Za-z éèêëàâäôöûüç .-])+$/";
$regexpEmail = "/^[A-Za-z0-9._!#$%&’`*?^+{|}~-]+@[a-z0-9]+\.[a-z]{2,6}$/";
$regexpPhone = "/^(\+[0-9]{1,3}[0-9]{9})|[0-9]{7,15}$/";
$regexpIDPoleEmploi = "/^[0-9]{7}[A-Z]{1}$/";
$regexpDiplome = "/^([A-Z][a-zéèêëàâäôöûüç-])*$/";
$regexpBadge = "/^[0-9]{0,2}|[1]?[0-9]{2}$/";

?>
