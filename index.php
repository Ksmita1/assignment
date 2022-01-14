<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="container">
    <form id="assignment" method="post">
        <input type="text" name="crawl" placeholder="Website name..." required>
        <button name="submit" type="submit" id="contact-submit">Submit</button>
    </form>
    </div>

    <?php
        if(isset($_POST['submit'])) {
            $crawl = trim($_POST['crawl']);
        }
        include 'db.php';
    ?>

    <?php
        $main_url="https://www.amazon.com";
        $str = file_get_contents($main_url);

//Gets Webpage Title:
        if(strlen($str)>0) {
            $str = trim(preg_replace('/\s+/', ' ', $str));
            preg_match("/\<title>(.*)\<\/title\>/i", $str, $title);
            $title = $title[1];
        }

//Gets Webpage Description:
        $b = $main_url;
        @$url = parse_url($b);
        @$tags = get_meta_tags($url['scheme']. '://'. $url['host']);
        $description = $tags['description'];
    ?>

    <?php
        include 'db.php';
    ?>

</body>
</html>