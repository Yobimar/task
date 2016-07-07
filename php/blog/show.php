<?php require 'utils.php'; ?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ブログ詳細</title>
  <link rel="stylesheet" href="./css/style.css">
</head>
<style>
    #contents{
    width: 300px;
    background-color: yellow;
    text-align: center;
    margin: auto;
  }
</style>
  <body>
    <header>
      <h1>ブログ詳細</h1>
    </header>
    <div id="contents">
      <article>
      <?php
      if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $stmt = $db->query("select * from posts where id = ${id}");
        if ($stmt->rowCount() == 0) {
          echo "指定された記事がありません";
          } else {
            foreach ($stmt as $row) {
              $post = $row;
            }
          }
          } else {
            echo "idが指定されていません";
          }
      ?>
      <?php if (isset($post)) { ?>
      <h2><?php echo $post['title']; ?></h2>
      <p><?php echo $post['contents']; ?></p>
      <p><?php echo $post['created']; ?></p>
      <p><?php echo $post['updated']; ?></p>
      <img src="image.php?id=<?php echo $id; ?>" alt="" width="300">
      <?php } ?>
      </article>
      <p><a href="/blog">トップへ戻る</a></p>
    </div>
    <footer>
      <?php include 'parts/footer.php' ?>
    </footer>
  </body>
</html>