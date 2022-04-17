<?php
require('functions.php');

for ($id = 0; $id < 50; $id++) {
    $data[] = arr($id);
}

echo '<pre>';
print_r($data);
echo '<br>';

file_put_contents('users.json', json_encode($data));
$file = file_get_contents('users.json');
$decode = json_decode($file, true);

$res = 0;
$dec = 0;
foreach($decode as $key) {
    $res += $key['age'];
    $dec = $res / count($decode);
}
echo $dec . ' - средний возраст<br><br>';

$users = [];
foreach ($decode as $key) {
    if (isset($users[$key['name']])) {
        $users[$key['name']]++;
    } else {
        $users[$key['name']] = 1;
    }
}

print_r($users);
