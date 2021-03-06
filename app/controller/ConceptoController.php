<?php

date_default_timezone_set('America/Lima');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
header('Content-Type: application/json; charset=UTF-8');
require '../model/ConceptoAdo.php';

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if ($_GET["type"] === "alldata") {
        $nombres = $_GET['nombres'];
        $posicionPagina = $_GET['posicionPagina'];
        $filasPorPagina = $_GET['filasPorPagina'];
        $conceptos = ConceptoAdo::getAll($nombres, intval($posicionPagina), intval($filasPorPagina));
        if (is_array($conceptos)) {
            echo json_encode(array(
                "estado" => 1,
                "conceptos" => $conceptos[0],
                "total" => $conceptos[1]
            ));
        } else {
            echo json_encode(array(
                "estado" => 2,
                "message" => $conceptos
            ));
        }
    } else if ($_GET["type"] === "data") {
        $concepto = ConceptoAdo::getId($_GET["idConcepto"]);
        if (is_object($concepto)) {
            echo json_encode(array(
                "estado" => 1,
                "object" => $concepto
            ));
        } else {
            echo json_encode(array(
                "estado" => 2,
                "message" => $concepto
            ));
        }
    } else if ($_GET["type"] === "typecolegiatura") {
        if (intval($_GET["categoria"]) === 1) {
            $result = ConceptoAdo::getCuotas($_GET["dni"], intval($_GET["categoria"]), intval($_GET["mes"]));
            if (is_array($result)) {
                echo json_encode(array(
                    "estado" => 1,
                    "data" => $result
                ));
            } else {
                echo json_encode(array(
                    "estado" => 0,
                    "message" => $result
                ));
            }
        } else if (intval($_GET["categoria"]) === 2) {
            $result = ConceptoAdo::getCuotas($_GET["dni"], intval($_GET["categoria"]), intval($_GET["mes"]));
            if (is_array($result)) {
                echo json_encode(array(
                    "estado" => 1,
                    "data" => $result
                ));
            } else {
                echo json_encode(array(
                    "estado" => 0,
                    "message" => $result
                ));
            }
        } else if (intval($_GET["categoria"]) === 3) {
            $result = ConceptoAdo::getCuotas($_GET["dni"], intval($_GET["categoria"]), intval($_GET["mes"]));
            if (is_array($result)) {
                echo json_encode(array(
                    "estado" => 1,
                    "data" => $result
                ));
            } else {
                echo json_encode(array(
                    "estado" => 0,
                    "message" => $result
                ));
            }
        } else if (intval($_GET["categoria"]) === 4) {
            $result = ConceptoAdo::getColegiatura();
            if (is_array($result)) {
                echo json_encode(array(
                    "estado" => 1,
                    "data" => $result
                ));
            } else {
                echo json_encode(array(
                    "estado" => 0,
                    "message" => $result
                ));
            }
        } else if (intval($_GET["categoria"]) === 5) {
            $result = ConceptoAdo::getCertificadoHabilidad();
            if (is_array($result)) {
                echo json_encode(array(
                    "estado" => 1,
                    "data" => $result
                ));
            } else {
                echo json_encode(array(
                    "estado" => 0,
                    "message" => $result
                ));
            }
        } else if (intval($_GET["categoria"]) === 8) {
            $result = ConceptoAdo::getPeritaje();
            if (is_object($result)) {
                echo json_encode(array(
                    "estado" => 1,
                    "data" => $result
                ));
            } else {
                echo json_encode(array(
                    "estado" => 0,
                    "message" => $result
                ));
            }
        } else if (intval($_GET["categoria"]) === 100) {
            $result = ConceptoAdo::getOtrosConceptos();
            if (is_array($result)) {
                echo json_encode(array(
                    "estado" => 1,
                    "data" => $result
                ));
            } else {
                echo json_encode(array(
                    "estado" => 0,
                    "message" => $result
                ));
            }
        }
    }
} else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST["type"] === "create") {
        $data["Categoria"] = $_POST["Categoria"];
        $data["Concepto"] = $_POST["Concepto"];
        $data["Precio"] = $_POST["Precio"];
        $data["Propiedad"] = $_POST["Propiedad"];
        $data["Inicio"] = $_POST["Inicio"];
        $data["Fin"] = $_POST["Fin"];
        $data["Observacion"] = $_POST["Observacion"];
        $data["Codigo"] = $_POST["Codigo"];
        $result = ConceptoAdo::insert($data);
        if ($result == "inserted") {
            echo json_encode(array(
                "estado" => 1,
                "message" => "Se registró correctamente el concepto."
            ));
        } else {
            echo json_encode(array(
                "estado" => 0,
                "message" => $result
            ));
        }
    } else if ($_POST["type"] === "update") {
        $data["IdConcepto"] = $_POST["IdConcepto"];
        $data["Categoria"] = $_POST["Categoria"];
        $data["Concepto"] = $_POST["Concepto"];
        $data["Precio"] = $_POST["Precio"];
        $data["Propiedad"] = $_POST["Propiedad"];
        $data["Inicio"] = $_POST["Inicio"];
        $data["Fin"] = $_POST["Fin"];
        $data["Observacion"] = $_POST["Observacion"];
        $data["Codigo"] = $_POST["Codigo"];
        $data["Estado"] = $_POST["Estado"];
        $result = ConceptoAdo::update($data);
        if ($result == "updated") {
            echo json_encode(array(
                "estado" => 1,
                "message" => "Se actualizó correctamente el concepto."
            ));
        } else {
            echo json_encode(array(
                "estado" => 0,
                "message" => $result,
                "result" => $data
            ));
        }
    }
}
