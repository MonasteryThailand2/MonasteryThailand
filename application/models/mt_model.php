<?php

class mt_model extends CI_Model {

  public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

  public function get_region()
  {
    $sql = "SELECT * FROM region";
    $query = $this->db->query($sql);
    return $query;
  }
  public function show_reign($reign)
  {
    $sql = "SELECT * FROM temple t JOIN level l ON l.levelID=t.level
            JOIN region r ON r.regionID=t.region
            JOIN reign re ON re.reignID=t.reign
            WHERE re.reignID='$reign'";
    $query = $this->db->query($sql);
    return $query;
  }
  public function show_as_region($region)
  {
    $sql = "SELECT t.temple_ID,t.temple_name,t.province,t.image,t.sect,re.regionName FROM temple t join region re
    on t.region= re.regionID where re.regionID='$region'";
    $query = $this->db->query($sql);
    return $query;
  }
  public function show_detail($temple)
  {
    $sql = "SELECT * FROM temple t JOIN level l ON l.levelID=t.level
            JOIN region r ON r.regionID=t.region
            JOIN reign re ON re.reignID=t.reign
            WHERE t.temple_ID='$temple'";
    $query = $this->db->query($sql);
    return $query;
  }
  public function inverted()
  {
    $sql = "SELECT * FROM inverted_index";
    $query = $this->db->query($sql);
    var_dump($query);
    return $query;
  }
}
