<?php 
$I = new FunctionalTester($scenario);
$I->am('a guest');
$I->wantTo('Sign up for a larabook account');

$I->amOnPage('/');
$I->click('Sign up');
$I->seeCurrentUrlEquals('/register');

$I->fillField('Username: ', 'John Doe');
$I->fillField('Email: ', 'john@example.com');
$I->fillField('Password: ', 'demo');
$I->fillField('Password Cnfirmation: ', 'demo');
$I->click('Sign up');

$I->seeCurrentUrlEquals('');
$I->see('Welcome to Larabook');