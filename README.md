# boomcast-sms-laravel

[![Generic badge](https://img.shields.io/badge/Verson-v1.0-<COLOR>.svg)](https://github.com/IANirab/boomcast-sms-laravel/releases)
[![Build Status](https://travis-ci.org/boennemann/badges.svg?branch=master)](https://github.com/IANirab/boomcast-sms-laravel/releases)
[![contributions welcome](https://img.shields.io/badge/contributions-welcome-brightgreen.svg?style=flat)](https://github.com/IANirab/boomcast-sms-laravel/issues)

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
