<div class="container">
    <h1>Список филиалов</h1>
    <div class='container mt-40'>
        <table  id='branches' class='table table-bordered table-hover'>
            <thead class="thead-dark">
            <tr>
                <th scope="col" class="">#</th>
                <th scope="col" class="">Название филиала</th>
                <th scope="col" class=""></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($branches as $branch) : ?>
                <tr>
                    <td><?= $branch['id']?></td>
                    <td><?= $branch['name']?></td>
                    <td>
                        <a href="/branches/<?= $branch['id']?>">
                            <button type="button" class="btn btn-primary">Подробнее</button>
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

