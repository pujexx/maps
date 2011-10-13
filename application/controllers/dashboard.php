<?php

class Dashboard extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {

        $this->load->library('GMap'); //-> memanggil library gmap

        $this->gmap->GoogleMapAPI();

        $this->gmap->setMapType('satellite'); //-> hybrid, satellite, terrain, map
        $this->gmap->center_lat = "";
        $this->gmap->center_lon = "";
        $this->gmap->setZoomLevel(18); //zoom level
//alamat yang kita cari
        //  $this->gmap->addMarkerByAddress("universitas ahmad dahlan kampus 3 ", "Kampus ku", "Kampus 3 ");

        $data['headerjs'] = $this->gmap->getHeaderJS();

        $data['headerpeta'] = $this->gmap->getMapJS();

        $data['onload'] = $this->gmap->printOnLoad();

        $data['peta'] = $this->gmap->printMap();

        $data['judul'] = $this->gmap->printSidebar();

        $this->load->view('template', $data);
    }

}
?>
