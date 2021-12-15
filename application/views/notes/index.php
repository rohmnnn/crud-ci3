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
            <?php if (validation_errors()) { ?>
                <div class="aler alert-danger p-2 rounded">
                    <?= validation_errors(); ?>
                </div>
            <?php } ?>
            <form action="<?= base_url('index.php/notes/add') ?>" method="post">
                <div class="form-group mb-2"><label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>
                <div class="form-group mb-2"><label for="description">Description</label>
                    <input type="text" name="description" id="description" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>

    <div class="table-responsive py-5">
        <h3 class="my-4">List Note</h3>

        <table class="table table-bordered table-hover">
            <thead class="bg-dark text-white">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">title</th>
                    <th scope="col">description</th>
                    <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($notes as $k => $note) { ?>
                    <tr>
                        <th scope="row"><?= $k + 1 ?></th>
                        <td><?= $note->title ?></td>
                        <td><?= $note->description ?></td>
                        <td>
                            <a href="<?= base_url('index.php/notes/single/' . $note->id) ?>"><button type="button" class="btn btn-primary">Edit</button></a>
                            <a href="<?= base_url('index.php/notes/delete/' . $note->id) ?>"><button type="button" class="btn btn-danger">Hapus</button></a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>


</body>

</html>