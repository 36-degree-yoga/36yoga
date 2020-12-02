 <?php
    // 設定圖檔上傳路徑
    // define('UPLOAD_PATH', 'img/customize/member_design');

    // 接收 POST 進來的 base64 DtatURI String
    // $img = $_POST['data'];

    // 轉檔 & 存檔
    // $img = str_replace('data:image/png;base64,', '', $img);
    // $img = str_replace(' ', '+', $img);
    // $data = base64_decode($img);
    // $file = UPLOAD_PATH . uniqid() . '.png';
    // $success = file_put_contents($file, $data);

    // output string
    // $output = ($success) ? '<img src="' . $file . '" alt="Canvas Image" />' : '<p>Unable to save the file.</p>';


    if (isset($_FILES["file"])) {
        $file = $_FILES["file"];
        $name = $file["name"];
        $tmp_name = $file['tmp_name'];
        $error = $file['error'];
        move_uploaded_file($tmp_name,  __DIR__ . '/img/customize/design/' . $name);
        echo 'file uploaded';
    } else {
        echo 'no file upload.';
    }
