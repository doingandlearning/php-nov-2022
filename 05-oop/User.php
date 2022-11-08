<?php

class Mailer
{
}

class User
{
	function __construct(public string $name, private Mailer $mailer, private Database $db)
	{

	}
}

class Database
{
}


$newUser = new User("Kevin", new Mailer(), new Database());