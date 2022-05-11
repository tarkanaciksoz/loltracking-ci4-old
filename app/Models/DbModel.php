<?php

namespace App\Models;

use App\Helpers\Constants;
use CodeIgniter\Model;
use OAuthProvider;

class DbModel extends Model
{
    protected $db;

    public function __construct()
    {
        parent::__construct();
        $this->db = db_connect();
        //$this->apiDb = db_connect('apiDb');
    }

    /**
     * @param string $token
     * @return string
     */
    public function getToken($token = "") {
        $query = $this->db->query(sprintf("SELECT token FROM %s WHERE is_active = %d", Constants::TABLENAME_SETTINGS, Constants::STATUS_ACTIVE));

        return ($query->getRow()) ? $query->getRow()->token : "";
    }

    public function createToken() {
        $token = bin2hex(openssl_random_pseudo_bytes(16));
        $builder = $this->db->table('settings');
        $builder->insert(
            [
                'token' => $token,
                'is_active' => Constants::STATUS_ACTIVE
            ]
        );
        return $token;
    }

    /**
     * @return array
     */
    public function getServerList(): array {
        $query = $this->db->query(sprintf("SELECT name FROM %s WHERE status = %d", Constants::TABLENAME_SERVERS, Constants::STATUS_ACTIVE));

        $servers = [];
        foreach($query->getResult() as $server) {
            $servers[] = $server->name;
        }

        return $servers;
    }

}