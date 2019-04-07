# boomcast-sms-laravel
THis is a simple package for laravel , you can send sms using with boomcast sms api

### Install

Require this package with composer using the following command:

```bash
composer require nirab/boomcastsms
```

Then go to ``.env`` file on your project & add this Line :

```
BOOMCAST_MASKING=Your masking name 
BOOMCAST_USERNAME=username of your boomcast account
BOOMCAST_PASSWORD=Your Password Here
```

### Usage

Just add this line top of your controller : 

```bash
use nirab\boomcastsms\Models\SendSms;
```

Then,

```bash
SendSms::send($number,$msg);
```

Note this : 

$number = received number,<br />
$msg = Text Message
