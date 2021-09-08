<table class="table">
    <thead>
        <tr>
            <th>なまえ</th>
            <th>HP</th>
            <th>MP</th>
        </tr>
    </thead>
    <?php foreach ($characters as $character) : ?>
        <tr>
            <td><?= $character->name ?></td>
            <td><?= $character->hp ?></td>
            <td><?= $character->mp ?></td>
        </tr>
    <?php endforeach ?>
</table>