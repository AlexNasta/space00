<?php
session_start();
class Space
{

    public function PianetiJson($id){
        $json = file_get_contents('../data.json');
        $jsonArray = json_decode($json, true);
        $pianeti = $jsonArray['destinations'];
        return $pianeti[$id];
    }#fine pianetiJson

    public function crewJson($id){
        $json = file_get_contents('../data.json');
        $jsonArray = json_decode($json, true);
        $membro = $jsonArray['crew'];
        return $membro[$id];
    }#fine $CrewJson

    public function techJson($id){
        $json = file_get_contents('../data.json');
        $jsonArray = json_decode($json, true);
        $tech = $jsonArray['technology'];
        return $tech[$id];
    }#fine $CrewJson
}
