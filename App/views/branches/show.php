<div class="container">
    <h1><?= $branch['name']?></h1>
    <div class="container mt-40">
        <div class="info">
            <p><?= $branch['info'] ?></p>
        </div>
    </div>

    <table class='table table-bordered table-hover mt-20'>
        <thead class="thead-dark">
            <tr>
                <th scope="col" class="">#</th>
                <th scope="col" class="">Имя сотрудника</th>
                <th scope="col" class="">Должность</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($workers as $worker) : ?>
            <tr>
                <td><?= $worker['id']?></td>
                <td><?= $worker['name']?></td>
                <td><?= $worker['position']?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <a href="/branches" class="mt-20">
        <button type="button" class="btn btn-dark">Список филиалов</button>
    </a>
</div>
