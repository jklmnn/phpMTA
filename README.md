# phpMTA
PHP Message Token Authentication

## What is phpMTA?
phpMTA is a PHP library that creates an authentication method based solely on email (or other message types).

## How does it work?
The authentication is based on the acces to a mail address. By entering the mail address, a token is send to this address. This token works as one time password and has to be entered (alternatively a login link to click on can be sent) to login. Once logged in it works just as a normal authentication method would work.

## Why?
This library addresses the password problem. With this authentication no password is stored on the server and the user does not need to remember a password. All you need is an email address.

## How can I use it?
All pages that need authentication need to include `auth.php`. The `is_authenticated()` method returns `True` if the user is logged in and `False` if not.
On the login page use `send_token()` which takes a mail address as POST argument and sends a random token to this email.The token is also sent via PHP to the `authenticate()` method which logs the user in and sets cookies.  
To logout just call `deauthenticate()` which destroys the session and deletes the cookies.

To configure the parameters see the values in `conf.php`.
