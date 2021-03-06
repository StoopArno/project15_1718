<?php

/**
 * @class Locatie_model
 * @brief Bevat alle CRUD-methoden voor de tabel 'Locatie'.
 *
 * Alle methoden waarmee data uit de tabel 'Locatie' wordt gehaald, bewerkt of weggeschreven, is hier terug te vinden.
 */
class Locatie_model extends CI_Model
{
    /**
     * Locatie_model constructor.
     */
    function __construct()
    {
        parent::__construct();
    }

    /**
     * Ophalen bepaalde locatie
     */
    function get($locatieid){
        $this->db->where("id", $locatieid);
        $query = $this->db->get("locatie");

        return $query->row();
    }

    /**
     * Ophalen alle locaties
     * @return mixed
     */
    function getAll(){
        $query = $this->db->get("locatie");

        return $query->result();
    }
}