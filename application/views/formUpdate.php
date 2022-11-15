<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Aricle</title>
</head>
<body>
  <main>
    <h1>Update Article</h1>
    <form method="POST">
      <fieldset>
        <label for="title">title</label>
        <input type="text" name="title" id="title" value="<?= $blog['title'];?>">
        
        <label for="url">url</label>
        <input type="text" name="url" id="url" value="<?= $blog['url'];?>">

        <label for="content">content</label>
        <textarea name="content" id="content" cols="30" rows="10">
          <?= $blog['content'];?>
        </textarea>
      </fieldset>

      <button type="submit">Save Article</button>
    </form>
  </main>
</body>
</html>