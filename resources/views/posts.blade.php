<!doctype html>

<!doctype html>
<title>My Blog</title>
<link rel="stylesheet" href="/app.css">

<body>
    <?php foreach ($posts as $post): ?>
        <article>
            <h1><a href="posts/<?= $post->slug; ?>"><?= $post->title; ?></a></h1>
            <p><?= $post->body; ?></p>
            <p><?= $post->date; ?></p>
        </article>
    <?php endforeach; ?>
</body>

