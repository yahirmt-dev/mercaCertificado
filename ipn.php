<?php
require_once "controlador/ipn_controlador.php";
require_once "modelo/ipn.modelo.php";

$body = @file_get_contents('php://input');
$data = json_decode($body); // para trabajar como objeto
// $data->data->id
/*
switch($data->type) {
    case "payment":
    $payment = MercadoPago\Payment::find_by_id($data->data->id);
    http_response_code(201);
    break;
    case "test":
    echo "ok";
    break;
    case "plan":
    $plan = MercadoPago\Plan::find_by_id($_POST["id"]);
    break;
    case "subscription":
    $plan = MercadoPago\Subscription::find_by_id($_POST["id"]);
    break;
    case "invoice":
    $plan = MercadoPago\Invoice::find_by_id($_POST["id"]);
    break;
    }
*/
$banner = IPN::ctrSaveIPN(json_encode($_POST), $body, json_encode($_POST));

http_response_code(201);