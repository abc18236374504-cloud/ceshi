<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>小红书爆款文案生成器</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
        }
        textarea {
            width: 100%;
            height: 100px;
        }
        .result {
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>小红书爆款文案生成器</h1>
        <form action="index.php" method="get">
            <label for="msg">输入你的主题：</label><br>
            <textarea id="msg" name="msg" required></textarea><br><br>
            <input type="submit" value="生成文案">
        </form>

        <?php
        if (isset($_GET['msg'])) {
            $msg = urlencode($_GET['msg']);
            $url = "https://api.52vmy.cn/api/chat/spark?msg=" . $msg;
            $response = file_get_contents($url);
            $data = json_decode($response, true);
            if ($data && $data['code'] == 200) {
                echo '<div class="result">';
                echo '<h2>生成的文案：</h2>';
                echo '<p>' . nl2br(htmlspecialchars($data['content'])) . '</p>';
                echo '</div>';
            } else {
                echo '<div class="result">';
                echo '<h2>错误：</h2>';
                echo '<p>无法生成文案，请稍后再试。</p>';
                echo '</div>';
            }
        }
        ?>
    </div>
</body>
</html>
