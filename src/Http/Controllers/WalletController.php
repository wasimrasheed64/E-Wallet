<?php

namespace Wasimrasheed\EWallet\Http\Controllers;
use Wasimrasheed\EWallet\Contracts\BaseInterface;
use Wasimrasheed\EWallet\Http\Trait\CrudTrait;
use Wasimrasheed\EWallet\Models\Wallet;

readonly class WalletController implements BaseInterface
{
    use CrudTrait;
    public function __construct(private Wallet $model)
    {}
}