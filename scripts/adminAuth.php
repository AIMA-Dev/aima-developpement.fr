<?php goto wJIpW; cue_z: authAdmin(); goto KLoic; wJIpW: include_once "\x65\x6e\143\162\x79\x70\164\x69\x6f\156\x2e\160\x68\160"; goto cue_z; KLoic: function authAdmin() { if ($_SERVER["\x52\105\121\x55\105\x53\124\137\115\x45\124\110\x4f\104"] == "\120\117\123\124") { if (isset($_POST["\x75\x73\145\162\156\141\155\145"]) && isset($_POST["\x70\141\163\163\167\157\162\x64"]) && !empty($_POST["\x75\163\145\162\x6e\141\155\x65"]) && !empty($_POST["\x70\x61\163\x73\167\x6f\x72\x64"])) { $username = $_POST["\165\x73\x65\162\156\141\155\145"]; $password = $_POST["\x70\x61\163\163\x77\x6f\x72\144"]; session_start(); $_SESSION["\x61\144\x6d\151\156"] = false; include_once "\x63\x6f\156\156\145\x63\164\104\102\x2e\x70\x68\160"; $conn = connectToDB(); $query = "\x53\105\x4c\x45\x43\x54\x20\52\x20\x46\122\x4f\x4d\x20\x61\x63\x63\x6f\x75\x6e\164\x73"; $result = mysqli_query($conn, $query); if (mysqli_num_rows($result) > 0) { while ($row = mysqli_fetch_assoc($result)) { $targetUsername = decrypt($row["\x75\163\145\x72\x6e\x61\x6d\145"]); if ($targetUsername == $username) { $targetPassword = decrypt($row["\x70\x61\x73\163\167\157\x72\x64"]); if ($targetPassword == $password) { $_SESSION["\141\x64\155\151\x6e"] = true; $_SESSION["\145\x78\160\151\162\x65\137\164\151\x6d\145"] = time() + 5 * 60; mysqli_close($conn); header("\114\x6f\143\x61\164\x69\157\x6e\72\40\x2e\x2e\x2f\x61\x64\155\x69\156\x2e\x70\150\160"); die; } else { echo "\x4d\x6f\x74\40\144\145\40\160\141\163\x73\x65\x20\151\x6e\x63\x6f\162\x72\145\143\164\x2e"; $_SESSION["\141\144\155\151\x6e"] = false; mysqli_close($conn); header("\x4c\157\143\x61\164\151\x6f\x6e\72\x20\56\x2e\57\x61\144\x6d\151\x6e\x2e\x70\150\x70"); die; } } else { echo "\125\x73\145\x72\156\x61\x6d\x65\x20\151\156\x63\x6f\x6e\x6e\165\x2e"; $_SESSION["\141\144\155\x69\x6e"] = false; mysqli_close($conn); header("\x4c\x6f\143\141\164\151\157\156\72\x20\56\56\x2f\141\144\155\151\x6e\56\160\x68\160"); die; } } } } } } goto eNREQ; eNREQ: ?>
<!-- © AIMA DEVELOPPEMENT 2024 -->