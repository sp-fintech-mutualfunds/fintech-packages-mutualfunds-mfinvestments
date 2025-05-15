<?php

namespace Apps\Fintech\Packages\Mf\Investments;

use Apps\Fintech\Packages\Mf\Investments\Model\AppsFintechMfInvestments;
use System\Base\BasePackage;

class MfInvestments extends BasePackage
{
    protected $modelToUse = AppsFintechMfInvestments::class;

    protected $packageName = 'mftransactions';

    public $mfinvestments;

    public function getMfInvestmentsById($id)
    {
        $mfinvestments = $this->getById($id);

        if ($mfinvestments) {
            //
            $this->addResponse('Success');

            return;
        }

        $this->addResponse('Error', 1);
    }

    public function addMfInvestments($data)
    {
        //
    }

    public function updateMfInvestments($data)
    {
        $mfinvestments = $this->getById($id);

        if ($mfinvestments) {
            //
            $this->addResponse('Success');

            return;
        }

        $this->addResponse('Error', 1);
    }

    public function removeMfInvestments($data)
    {
        $mfinvestments = $this->getById($id);

        if ($mfinvestments) {
            //
            $this->addResponse('Success');

            return;
        }

        $this->addResponse('Error', 1);
    }
}