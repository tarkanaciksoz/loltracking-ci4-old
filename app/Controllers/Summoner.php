<?php

namespace App\Controllers;

use App\Libraries\Curly;
use App\Helpers\Constants;
use App\Models\DbModel;

class Summoner extends BaseController
{
    const className = "Summoner";

    /**
     * @var Curly $curly
     */
    private $curly;

    /**
     * @var string
     */
    public $server;

    /**
     * @var string
     */
    private $token;

    /**
     * @var DbModel
     */
    private $dbModel;

    public function __construct() {
        try {
            $this->curly = new Curly();
            $this->dbModel = new DbModel();
            $this->setToken();
        }catch (\Exception $e) {
            echo $e->getMessage();
            exit;
        }
    }


    /**
     * @return string
     */
    public function index()
    {
        $this->view->setVar('allowedServers', $this->dbModel->getServerList());
        return parent::render(self::className,__FUNCTION__);
    }

    /**
     * @param $server
     * @param $userName
     * @return string
     * @throws \Exception
     */
    public function profile($server, $userName) {
        $this->setServer($server);
        $url = sprintf("%s/%s", API_URL, Constants::SUMMONER_INFO_ENDPOINT);
        $bodyArray = array(
            "server" => $this->server,
            "userName" => $userName
        );

        $response = $this->curly->methodHandler("get", $url, json_encode($bodyArray), $this->getExtraHeaders());
        $this->setToken();

        $response->responseData = json_decode($response->responseData);
        if($response->responseCode == Constants::SUCCESS_CODE && $response->responseData->Success) {
            $data = $response->responseData->Data;
            //$matchIdList = $this->getMatchHistoryIdList($data->puuid);
            //$this->data["matchHistory"] = $matchHistory = $this->getMatchHistory($matchIdList);
        }

        return parent::render(self::className,__FUNCTION__);
    }

    private function getMatchHistoryIdList($puuId, $queue = "", $queueType = "", $offset = "0", $limit = "10") {
        if(!empty($puuId)) {
            $bodyArray = array(
                "puuId" => $puuId,
                "queue" => $queue,
                "queueType" => $queueType,
                "offset" => $offset,
                "limit" => $limit
            );
            $url = sprintf("%s/%s", API_URL, Constants::MATCH_HISTORY_ID_LIST_ENDPOINT);

            try{
                $response = $this->curly->methodHandler("get", $url, json_encode($bodyArray), $this->getExtraHeaders());
                $this->setToken();
                $response->responseData = json_decode($response->responseData);
                if($response->status && $response->responseData->Success) {
                    return $response->responseData->Data;
                }
                return array();
            }catch(\Exception $e) {
                echo $e->getMessage();
                exit;
            }
        }
        return false;
    }

    private function getMatchHistory($matchIdList) {
        $url = sprintf("%s/%s", API_URL, Constants::MATCH_HISTORY_LIST_ENDPOINT);
        $bodyArr = array(
            "idList" => $matchIdList
        );
        try {
            $response = $this->curly->methodHandler("get", $url, json_encode($bodyArr), $this->getExtraHeaders());
            $this->setToken();
            $response->responseData = json_decode($response->responseData);
            if($response->status && $response->responseData->Success) {
                return $response->responseData->Data;
            }
        }catch(\Exception $e) {
            echo $e->getMessage();
            exit;
        }
        return array();
    }

    private function setServer($server) {
        $this->server = $server."1";
    }

    private function getExtraHeaders() {
        return array(
          "token:".$this->token
        );
    }

    public function setToken() {
        $this->token = $this->dbModel->getToken();
    }
}
