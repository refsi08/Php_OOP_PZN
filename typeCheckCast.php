<?php
// pengecekan type check & cast

require_once "data/Programmer.php";

sayHelloDeveloper(new Programmer("Thamiya"));
sayHelloDeveloper(new FrontEndProgrammer("Refsi"));
sayHelloDeveloper(new BackendProgrammer("Berry"));
