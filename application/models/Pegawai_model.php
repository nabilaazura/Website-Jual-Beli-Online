<?php
defined('BASEPATH') or exit('No direct script access allowed');

use GuzzleHttp\Client;

class Pegawai_model extends CI_Model
{
    public $table = 'pegawai';
    public $id = 'pegawai.id';
    public $_client;

    public function __construct()
    {
        parent::__construct();
        $this->_client = new Client([
            'base_uri' => 'http://localhost/rest-api-uas/',
            'auth' => ['admin', '1234']
        ]);
    }
    public function get()
    {
        $response = $this->_client->request('GET', 'pegawai', [
            'query' => [
                'BPF-TI' => 'bpftiabcde'
            ]
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'];
    }
    public function getById($id)
    {
        $response = $this->_client->request('GET', 'pegawai', [
            'query' => [
                'id' => $id,
                'BPF-TI' => 'bpftiabcde'
            ]
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'][0];
    }
    public function update($data)
    {
        $response = $this->_client->request('PUT', 'pegawai', [
            'form_params' => $data
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }
    public function insert($data)
    {
        $response = $this->_client->request('POST', 'pegawai', [
            'form_params' => $data
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }
    public function delete($id)
    {
        $response = $this->_client->request('DELETE', 'pegawai', [
            'form_params' => [
                'id' => $id,
                'BPF-TI' => 'bpftiabcde'
            ]
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }
}