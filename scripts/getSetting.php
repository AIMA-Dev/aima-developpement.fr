<?php
include_once 'connectDB.php';
include_once 'encryption.php';

$settingsToDecrypt = ['phpmailerPassword'];

getSettingInDB($name, $settingsToDecrypt);

/**
 * Retrieves a setting value from the database based on the provided name.
 *
 * @param string $name The name of the setting to retrieve.
 * @return string The value of the setting if found, or "None" if not found.
 */
function getSettingInDB($name, $settingsToDecrypt = [])
{
    $conn = connectToDB();
    $sql = "SELECT * FROM settings WHERE `name` = '$name'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $conn->close();
        if (in_array($name, $settingsToDecrypt)) {
            return decrypt($row['val']);
        }
        return $row['val'];
    } else {
        $conn->close();
        return "None";
    }
}
?>
<!-- Développé avec ❤️ par : www.noasecond.com. -->