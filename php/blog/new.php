<?php require 'utils.php';?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>新規記事作成</title>
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
    <h1>記事新規作成</h1>
  </header>
  <div id="contents">
    <article>
      <form action="post.php" method="post" name="form" enctype="multipart/form-data">
        <div>
          <label for="title">
          タイトル
          <input type="text" name="title">
          </label>
        </div>
        <div>
        <label for="contents">
          内容
          <textarea name="contents" id="" cols="30" rows="10">
          </textarea>
        </label>
        </div>
        <div>
          <label for="image">
            画像
            <input type="file" name="image">
          </label>
        </div>
        <div>
        <input type="submit" value="送信">
        </div>
    </article>
    </div>
  </form>
  <footer>
    <?php include 'parts/footer.php' ?>
  </footer>
</body>
</html>