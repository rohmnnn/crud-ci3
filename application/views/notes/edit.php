<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css') ?>">
</head>

<body class="bg-body container mt-5">
    <div class="row">
        <h3>Add new Note</h3>
        <div class="col-6">
            <form action="<?= base_url('index.php/notes/update/'.$note->id) ?>" method="post">
                <div class="form-group mb-2"><label for="title">Title</label>
                    <input type="text" name="title" id="title" value="<?= $note->title ?>" class="form-control">
                </div>
                <div class="form-group mb-2"><label for="description">Description</label>
                    <input type="text" name="description" id="description" value="<?= $note->description ?>" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>

</body>

</html>