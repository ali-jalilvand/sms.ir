<?php
namespace Ajdev\Sms;
use Illuminate\Support\Facades\Facade;

class SmsirlaravelFacade extends Facade
{
	protected static function getFacadeAccessor() {
		return 'Smsirlaravel';
	}
}
