<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<div class="container mt-4">
    <h2 class="mb-4">Criar Tarefa</h2>

    <form action="/create" method="post" class="card p-4 shadow-sm">
        <div class="mb-3">
            <label for="title" class="form-label">Título</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Digite o título da tarefa" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrição</label>
            <textarea name="description" class="form-control" id="description" rows="4" placeholder="Descreva a tarefa" required></textarea>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" class="form-select" id="status">
                <option value="pendente">Pendente</option>
                <option value="em andamento">Em andamento</option>
                <option value="concluída">Concluída</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary w-100">Criar Tarefa</button>
    </form>
</div>
<?= $this->endSection() ?>