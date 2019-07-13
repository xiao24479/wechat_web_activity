<?php
/**
 * Author: Henry
 * Date: 2019/5/2
 */

namespace app\library;


class OrderNo
{
    private $path;
    private $fileName;
    private $file;
    private $zimu;
    private $orderNo;

    public function __construct()
    {
        $this->path = CACHE_PATH.DS.'orderno';
        $this->fileName = 'orderno'.TXT_EXT;
        $this->file = $this->path.DS.$this->fileName;
        $this->zimu = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
    }

    public function generateOrderNo()
    {
        //orderno AA0001
        $this->getOrderNoFromCache();

        if (empty($this->orderNo)) {
            file_put_contents($this->file,'AA0001');
            $this->orderNo = file_get_contents($this->file);
            return $this->orderNo;
        }

        $partZimu = substr($this->orderNo,0,2);
        $partNumber = substr($this->orderNo,2,4);
        $partNumber = intval($partNumber) + 1;

        $flipZimu = array_flip($this->zimu);
        if ($partNumber > 9999) {
            $partZimuStr1 = substr($partZimu,0,1);
            $partZimuStr2 = substr($partZimu,-1,1);
            if ($partZimuStr2 == 'Z'){
                $finalZimu = $this->zimu[$flipZimu[$partZimuStr1]+1].'A';
            } else {
                $finalZimu = $partZimuStr1.$this->zimu[$flipZimu[$partZimuStr2]+1];
            }
            $finalNumber = '0001';
        } else {
            $finalZimu = $partZimu;
            $finalNumber = str_pad($partNumber,4,'0',STR_PAD_LEFT);
        }

        file_put_contents($this->file,$finalZimu.$finalNumber);
        return  $finalZimu.$finalNumber;

    }

    private function getOrderNoFromCache()
    {
        //orderno AA0001
        if (!is_dir($this->path)) {
            mkdir($this->path,0777,true);
        }
        $file = $this->path.DS.$this->fileName;
        if (!file_exists($file)) {
            touch($file);
        }
        $this->orderNo = file_get_contents($file);

    }



}