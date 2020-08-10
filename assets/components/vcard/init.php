<?php
$setTitle;
$setFirstname;
$setLastname;
$setPosition;
$setEmail;
$setTel;
$setTel;
$setFax;
$setStreet;
$setCity;
$setZip;
$setCountry;
$setFotoUrl;
$setCompanyName;
$setCompanyUrl;


require_once __DIR__.'/Manager.php';

  $manager = new Manager();
  $manager->setTitle($setTitle);
  $manager->setFirstname($setFirstname);
  $manager->setLastname($setLastname);
  $manager->setPosition($setPosition);
  $manager->setEmail($setEmail);
  $manager->setTel($setTel);
  $manager->setTel($setTel);
  $manager->setFax($setFax);
  $manager->setStreet($setStreet);
  $manager->setCity($setCity);
  $manager->setZip($setZip);
  $manager->setCountry($setCountry);

  $manager->setFotoUrl($setFotoUrl); //type JPG
  $manager->setCompanyName($setCompanyName);
  $manager->setCompanyUrl($setCompanyUrl);

  $manager->downloadVCard();