<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Read the existing language pack
    $json = file_get_contents('lang.json');
    $data = json_decode($json, true);

    // Update the language pack with the form data
    $data['heading'] = $_POST['heading'];
    $data['firstPlace'] = $_POST['firstPlace'];
    $data['firstPrize'] = $_POST['firstPrize'];
    $data['firstPrizeText'] = $_POST['firstPrizeText'];
    $data['secondPlace'] = $_POST['secondPlace'];
    $data['secondPrize'] = $_POST['secondPrize'];
    $data['secondPrizeText'] = $_POST['secondPrizeText'];
    $data['thirdPlace'] = $_POST['thirdPlace'];
    $data['thirdPrize'] = $_POST['thirdPrize'];
    $data['thirdPrizeText'] = $_POST['thirdPrizeText'];
    $data['viewPrize'] = $_POST['viewPrize'];

    // Save the updated language pack
    file_put_contents('lang.json', json_encode($data, JSON_PRETTY_PRINT));

    // Redirect back to the form or show a success message
    header('Location: cms_pricing_form.php?success=1');
    exit;
}
