<?php

namespace Apps\Fintech\Packages\Mf\Investments\Model;

use System\Base\BaseModel;

class AppsFintechMfInvestments extends BaseModel
{
    public $id;

    public $account_id;

    public $user_id;

    public $portfolio_id;

    public $amfi_code;

    public $amc_id;

    public $scheme_id;

    public $amount;

    public $sold_amount;

    public $units;

    public $latest_nav;

    public $latest_value;

    public $latest_value_date;

    public $diff;

    public $xirr;

    public $status;

    public $start_date;
}