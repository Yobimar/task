<?php require 'utils.php'; ?>
<?php
  $page_title = "よとうさんどっとこまない";
  $offset = get_offset();
  $limit = 5;
  $count = get_posts_count();
  $stmt = get_db()->query("select * from posts
    order by updated DESC limit ${limit} offset ${offset}");
 ?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>よとうさんどっとこまない</title>
  <link rel="stylesheet" href="./css/style.css">
</head>
<style>

  #wrapper{
    width: 1000px;
    margin-left: 400px;
  }

  #contents{
    width: 200px;
    float: left;
    background-color: yellow;
    text-align: center;
    padding-top: 10px;
  }


</style>

  <body>
    <header>
      <?php include 'parts/header.php' ?>
    </header>
  <div id="wrapper">
      <div id="contents">
        <div class="pager">
          <?php if ($offset > 0) : ?>
          <a href="?offset=<?php echo get_prev_offset($limit); ?>">前へ</a>
        <?php endif; ?>
        <?php if ($offset + $limit < $count) : ?>
          <a href="?offset=<?php echo get_next_offset($limit); ?>">次へ</a>
        <?php endif; ?>
        <p>総件数: <?php echo $count; ?></p>
      </div>
        <a href="new.php">新規記事作成</a>
        <?php foreach($stmt as $row) : ?>
          <?php $id = $row['id']; ?>
          <article>
            <a href="show.php?id=<?php echo $row['id']; ?>" title="">
              <?php echo ($row['title']); ?>
            </a>
            <a href="delete.php?id=<?php echo $id; ?>" class="delete">削除</a>
            <a href="edit.php?id=<?php echo $id; ?>" class="edit">編集</a>
          </article>
        <?php endforeach; ?>
      </div>
      <div id="sidebar">
      <img src="http://yotousan.com/wp-content/uploads/2016/06/DSC_1415.jpg" alt="profile" width="360" height="408">
      </div>
    </div>
  <div id="clear">
  </div>
    <footer>
      <?php include 'parts/footer.php' ?>
    </footer>
    <script>
      var dels = document.getElementsByClassName('delete');
      for (var i=0; i<dels.length; i++){
        dels[i].addEventListener('click', function(e){
          if (confirm('削除してよろしいですか?')) {
            return true;
          } else {
            e.preventDefault();
            return false;
          }
        });
      }
    </script>
  </body>
</html>