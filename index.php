<?php

/**
 * Created by PhpStorm.
 * User: AmrAngry
 * Date: 02/09/21
 * Time: 9:23 PM
 * //https://www.w3docs.com/snippets/javascript/how-to-redirect-a-web-page-with-javascript.html
 */

$default_adkatech_website = "adkatech.com";
$default_adkatech_facebook = "facebook.com/ADKATech/";
$default_adkatech_youtube = "youtube.com/channel/UC05OUocfjaVQnR4NZyd6L6g";
$default_adkatech_linkedin = "linkedin.com/company/adka-tech";

$url = $_REQUEST["url"];
$tagURL = $default_adkatech_website;
if (isset($url)) {
    $tagURL = $url;
} else {
    $project = $_REQUEST["project"];
    $tag = $_REQUEST["tag"];
    if (isset($project)) {
        if (strcasecmp($project, 'Aseeralkotb') == 0 ||
            strcasecmp($project, 'bookjuice') == 0) {
            if (isset($tag)) {
                switch ($tag) {
                    case "google":
                        $tagURL = $default_adkatech_website;
                        break;
                    case "facebook":
                        $tagURL = $default_adkatech_facebook;
                        break;
                    case "youtube":
                        $tagURL = $default_adkatech_youtube;
                        break;
                    case "website":
                        $tagURL = "Aseeralkotb.com";
                        break;
                    case "linkedin":
                        $tagURL = $default_adkatech_linkedin;
                        break;
                    default:
                        $tagURL = $default_adkatech_website;
                }
            }
        } else if (strcasecmp($project, 'Expo_2020_Dubai_Opening_Ceremony') == 0){
            $tagURL = "youtube.com/watch?v=Rb5m8nT7meo";
        } else {
            $tagURL = $default_adkatech_website;
        }

    }

}
header('Location: //' . $tagURL);

// header('Location: //www.adkatech.com');
// or die();
exit();
