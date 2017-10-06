<?php
$files = scandir("../posts", 1);
$f = $files[0];
$array = array_pad(explode("\n", file_get_contents("../posts/" . $f)), 3, null);
$date = filter_var($array[0], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$loc = filter_var($array[1], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$desc = filter_var($array[2], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

$metadata->intentId = uniqId();
$metadata->webhookUsed = "false";
$metadata->webhookForSlotFillingUsed = "false";
$metadata->intentName = "aounfinder";

$fmessages->type = 0;
$fmessages->speech = "Aoun is at centennial.";

$fulfillment->speech="Aoun is at centennial right now.";
$fulfillment->messages = $fmessages;

$result->source = "agent";
$result->resolvedQuery = "Where's Aoun?";
$result->action = "Say where Aoun is";
$result->actionIncomplete = false;
$result->parameters = new stdClass();
$result->contexts = [];
$result->metadata = $metadata;
$result->fulfillment = $fulfillment;
$result->score = "1";

$status->code = 200;
$status->errorType = "success";

$response->id = uniqid();
$response->timestamp = time();
$response->lang="en-us";
$response->result = $result;
$response->status = $status;
$response->sessionId = $_GET['sessionId'];

echo json_encode($response);
?>
