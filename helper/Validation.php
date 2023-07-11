<?php

function validateLoginRequest(LoginRequest $request)
{
    if (!isset($request->username)) {
        throw new ValidationException("Username is null");
    } else if (!isset($request->password)) {
        throw new ValidationException("Password is null");
    } else if (!isset($request->username)) {
        throw new Exception("Password is empty");
    } else if (!isset($request->password)) {
        throw new Exception("Password is empty");
    }
}
