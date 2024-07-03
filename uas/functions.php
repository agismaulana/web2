<?php

    session_start();
    include "config.php";

    function login($data) {
        $conn = $GLOBALS["conn"];
        if($data['username'] == "211011401732" && $data['password'] == "211011401732") {
            $_SESSION['login'] = true;

            header("Location: /uas/pages/home.php");
        }
    }

    function getKlasemens() {
        $conn = $GLOBALS["conn"];

        $sql = "SELECT countries.*, klasemens.winner, klasemens.draw, klasemens.lose, klasemens.poin, grup.name as grup_name FROM countries LEFT JOIN klasemens ON countries.id = klasemens.countries_id LEFT JOIN grup ON klasemens.group_id = grup.id ";
        $result = mysqli_query($conn, $sql);

        $result = $result->fetch_all(MYSQLI_ASSOC);

        return $result;
    }

    function detailKlasemens($id = null) {
        $conn = $GLOBALS["conn"];
        if($id != null) {
            $sql = "SELECT * FROM klasemens WHERE countries_id = '$id'";
            $result = mysqli_query($conn, $sql);

            $result = $result->fetch_assoc();

            return $result;
        }   
    }

    function createKlasemens() {
        $conn = $GLOBALS["conn"];

        $data = $_POST;

        $sql = "INSERT INTO klasemens (countries_id, group_id, winner, draw, lose, poin) VALUES 
        ('$data[countries_id]', '$data[group_id]', '$data[winner]', '$data[draw]', '$data[lose]', '$data[poin]')";

        mysqli_query($conn, $sql);

        header("Location: /uas/pages/klasemens/index.php");
    }

    function updateKlasemens($id = null) {
        $conn = $GLOBALS["conn"];
        if($id != null) {
            $countries_id = $_POST['countries_id'];
            $group_id = $_POST['group_id'];
            $winner = $_POST['winner'];
            $draw = $_POST['draw'];
            $lose = $_POST['lose'];
            $poin = $_POST['poin'];

            $sql = "UPDATE klasemens SET countries_id = '$countries_id', group_id = '$group_id', winner = '$winner', draw = '$draw', lose = '$lose', poin = '$poin' WHERE id = '$id'";
            mysqli_query($conn, $sql);

            header("Location: /uas/pages/klasemens/index.php");
        }
    }

    function deleteKlasemens($id = null) {
        $conn = $GLOBALS["conn"];
        if($id != null) {
            $sql = "DELETE FROM klasemens WHERE id = '$id'";
            mysqli_query($conn, $sql);

            header("Location: /uas/pages/klasemens/index.php");
        }
    }

    function cetakKlasemens() {
        $klasemens = getKlasemens();

        $data = new DomPDf();

    }

    // Countries
    function getCountries() {
        $conn = $GLOBALS["conn"];

        $sql = "SELECT * FROM countries";
        $query = mysqli_query($conn, $sql);

        $result = $query->fetch_all(MYSQLI_ASSOC);

        return $result;
    }

    // Groups
    function getGroups() {
        $conn = $GLOBALS["conn"];

        $sql = "SELECT * FROM grup";

        $result = mysqli_query($conn, $sql);
        return $result;
    }

    function createGroup() {
        $conn = $GLOBALS["conn"];

        $name = $_POST['name'];

        $sql = "INSERT INTO grup (name) VALUES ('$name')";
        mysqli_query($conn, $sql);

        header("Location: /uas/pages/groups/index.php");
    }

    function updateGroup($id = null) {
        $conn = $GLOBALS["conn"];
        if($id != null) {
            $name = $_POST['name'];

            $sql = "UPDATE grup SET name = '$name' WHERE id = '$id'";
            mysqli_query($conn, $sql);

            header("Location: /uas/pages/groups/index.php");
        }
    }

    // groups
    function deleteGroup($id = null) {
        $conn = $GLOBALS["conn"];
        if($id != null) {
            $sql = "DELETE FROM grup WHERE id = '$id'";
            mysqli_query($conn, $sql);

            header("Location: /uas/pages/groups/index.php");
        }
    }
