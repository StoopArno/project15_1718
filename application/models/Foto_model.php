<?php

/**
 * @class Foto_model
 * @brief Bevat alle CRUD-methoden voor de tabel 'Foto'.
 *
 * Alle methoden waarmee data uit de tabel 'Foto' wordt gehaald, bewerkt of weggeschreven, is hier terug te vinden.
 */
class Foto_model extends CI_Model
{
    /**
     * Foto_model constructor.
     */
    function __construct()
    {
        parent::__construct();
    }

    /**
     * Ophalen bepaalde foto.
     * @param $id
     * @return mixed
     */
    function get($id){
        $this->db->where('id', $id);
        $query = $this->db->get('foto');
        return $query->row();
    }

    /**
     * Toevoegen van een nieuwe foto.
     * @param $foto
     */
    function insert($foto){
        $this->db->insert('foto', $foto);
    }

    /**
     * Verwijderen van een bepaalde foto.
     * @param $id
     */
    function delete($id){
        $this->db->where('id', $id);
        $this->db->delete('foto');
    }

    /**
     * Ophalen alle foto's met hun bihhorende personeelsfeest
     * @return mixed
     * @see Personeelsfeest_model::get()
     */
    function getAllWithPersoneelsfeest(){
        $query = $this->db->get("foto");
        $fotos = $query->result();

        $this->model->load("personeelsfeest_model");
        foreach($fotos as $foto){
            $foto->personeelsfeest = $this->personeelsfeest_model->get($foto->personeelsfeestId);
        }

        return $fotos;
    }

    /**
     * Ophalen alle foto's van een bepaald personeelsfeest.
     * @param $personeelsfeestId
     * @return mixed
     */
    function getAllWherePfId($personeelsfeestId){
        $this->db->where("personeelsfeestId", $personeelsfeestId);
        $query = $this->db->get("foto");

        return $query->result();
    }
}